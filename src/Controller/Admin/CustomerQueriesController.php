<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

/**
 * CustomerQueries Controller
 *
 *
 * @method \App\Model\Entity\CustomerQuery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerQueriesController extends AppController
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
        // $customerQueries = $this->paginate($this->CustomerQueries);

        $customerQueries = $this->CustomerQueries->find('all',[
            'contain' => ['customers']
        ])->toArray();

        // pr($customerQueries); die();


        $this->set(compact('customerQueries'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Query id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerQuery = $this->CustomerQueries->get($id, [
            'contain' => [],
        ]);

        $this->set('customerQuery', $customerQuery);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerQuery = $this->CustomerQueries->newEntity();
        if ($this->request->is('post')) {
            $customerQuery = $this->CustomerQueries->patchEntity($customerQuery, $this->request->getData());
            if ($this->CustomerQueries->save($customerQuery)) {
                $this->Flash->success(__('The customer query has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer query could not be saved. Please, try again.'));
        }
        $this->set(compact('customerQuery'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Query id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerQuery = $this->CustomerQueries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerQuery = $this->CustomerQueries->patchEntity($customerQuery, $this->request->getData());
            if ($this->CustomerQueries->save($customerQuery)) {
                $this->Flash->success(__('The customer query has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer query could not be saved. Please, try again.'));
        }
        $this->set(compact('customerQuery'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Query id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerQuery = $this->CustomerQueries->get($id);
        if ($this->CustomerQueries->delete($customerQuery)) {
            $this->Flash->success(__('The customer query has been deleted.'));
        } else {
            $this->Flash->error(__('The customer query could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
