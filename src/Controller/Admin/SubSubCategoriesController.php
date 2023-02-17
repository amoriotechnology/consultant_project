<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

/**
 * SubSubCategories Controller
 *
 *
 * @method \App\Model\Entity\SubSubCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubSubCategoriesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('backend_dashboard');
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('backend_dashboard');

        // $subSubCategories = $this->paginate($this->SubSubCategories);

        $subSubCategories = $this->SubSubCategories->find('all',[
            'contain' => ['subCategories', 'categories']
        ])->toArray();

        // pr($subSubCategories); die();

        $this->set(compact('subSubCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Sub Sub Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subSubCategory = $this->SubSubCategories->get($id, [
            'contain' => [],
        ]);

        $this->set('subSubCategory', $subSubCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('SubCategories');
        $this->loadModel('Categories');
        $this->viewBuilder()->setLayout('backend_dashboard');
        $subSubCategory = $this->SubSubCategories->newEntity();
        if ($this->request->is('post')) {
            $subSubCategory = $this->SubSubCategories->patchEntity($subSubCategory, $this->request->getData());
            if ($this->SubSubCategories->save($subSubCategory)) {
                $this->Flash->success(__('The sub sub category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub sub category could not be saved. Please, try again.'));
        }
        $subCategories = $this->SubCategories->find('list', ['limit' => 200]);
        $categories = $this->Categories->find('list', ['limit' => 200]);
        // pr($subCategories); die();
        $this->set(compact('subSubCategory', 'subCategories', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sub Sub Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('backend_dashboard');
        $this->loadModel('SubCategories');
        $this->loadModel('Categories');
        
        $subSubCategory = $this->SubSubCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subSubCategory = $this->SubSubCategories->patchEntity($subSubCategory, $this->request->getData());
            if ($this->SubSubCategories->save($subSubCategory)) {
                $this->Flash->success(__('The sub sub category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub sub category could not be saved. Please, try again.'));
        }
        $subCategories = $this->SubCategories->find('list', ['limit' => 200]);
        $categories = $this->Categories->find('list', ['limit' => 200]);
        $this->set(compact('subSubCategory', 'subCategories', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sub Sub Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subSubCategory = $this->SubSubCategories->get($id);
        if ($this->SubSubCategories->delete($subSubCategory)) {
            $this->Flash->success(__('The sub sub category has been deleted.'));
        } else {
            $this->Flash->error(__('The sub sub category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
