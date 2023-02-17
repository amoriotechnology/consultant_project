<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

/**
 * HomePages Controller
 *
 *
 * @method \App\Model\Entity\HomePage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomePagesController extends AppController
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
        $homePages = $this->paginate($this->HomePages);

        $this->set(compact('homePages'));
    }

    /**
     * View method
     *
     * @param string|null $id Home Page id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homePage = $this->HomePages->get($id, [
            'contain' => [],
        ]);

        $this->set('homePage', $homePage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homePage = $this->HomePages->newEntity();
        if ($this->request->is('post')) {
            $homePage = $this->HomePages->patchEntity($homePage, $this->request->getData());
             if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){

                $uniqueId = uniqid();

             if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/home_banner' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                {

                    $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                
                    $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                    if(!in_array($ext, $arr_ext))
                    {
                        $this->Flash->error(__('Please upload only images'));
                        return $this->redirect($this->referer());  
                    }
                   
                    $homePage->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                }

        }
            if ($this->HomePages->save($homePage)) {
                $this->Flash->success(__('The home page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home page could not be saved. Please, try again.'));
        }
        $this->set(compact('homePage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Page id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homePage = $this->HomePages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homePage = $this->HomePages->patchEntity($homePage, $this->request->getData());
            if(isset($this->request->getData()["image"]) && !empty($this->request->getData()["image"]['tmp_name'])){

                $uniqueId = uniqid();

                if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/home_banner' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                   {

                       $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); 

                       $arr_ext = array('jpg', 'jpeg', 'gif','png'); 
                       if(!in_array($ext, $arr_ext))
                       {
                           $this->Flash->error(__('Please upload only images'));
                           return $this->redirect($this->referer());  
                       }
                      
                       $homePage->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                   }
           }else{
               $homePage->image = $this->request->getData()['hid_image'];
           }
            if ($this->HomePages->save($homePage)) {
                $this->Flash->success(__('The home page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home page could not be saved. Please, try again.'));
        }
        $this->set(compact('homePage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Page id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homePage = $this->HomePages->get($id);
        if ($this->HomePages->delete($homePage)) {
            $this->Flash->success(__('The home page has been deleted.'));
        } else {
            $this->Flash->error(__('The home page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
