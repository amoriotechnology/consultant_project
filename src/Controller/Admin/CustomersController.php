<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

/**
 * Customers Controller
 *
 *
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomersController extends AppController
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
        // $customers = $this->paginate($this->Customers);

         $customers = $this->Customers->find('all',[
            'contain' => ['subSubCategories']
        ])->toArray();

         // pr($customers); die();
        
        $this->set(compact('customers'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);

        $this->set('customer', $customer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Customers');
        $this->loadModel('SubSubCategories');

        $customer = $this->Customers->newEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            // pr($customer); die();
            if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){

                $uniqueId = uniqid();

             if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/customers' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                {

                    $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                
                    $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                    if(!in_array($ext, $arr_ext))
                    {
                        $this->Flash->error(__('Please upload only images'));
                        return $this->redirect($this->referer());  
                    }
                   
                    $customer->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                }

        }

            $result = $this->Customers->save($customer);

            $value = $result['id'];

            $cus_id = str_pad($value, 4, '0', STR_PAD_LEFT);

            $customer = $this->Customers->get($value);

            $customer->customer_id = $cus_id;
           
            $this->Customers->save($customer);

            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'index']);
        }
        $sub_sub_categories = $this->SubSubCategories->find('list')->toArray();
        $this->set(compact('customer', 'sub_sub_categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            if(isset($this->request->getData()["image"]) && !empty($this->request->getData()["image"]['tmp_name'])){

                $uniqueId = uniqid();

                if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/customers' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                   {

                       $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); 

                       $arr_ext = array('jpg', 'jpeg', 'gif','png'); 
                       if(!in_array($ext, $arr_ext))
                       {
                           $this->Flash->error(__('Please upload only images'));
                           return $this->redirect($this->referer());  
                       }
                      
                       $customer->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                   }
           }else{
               $customer->image = $this->request->getData()['hid_image'];
           }
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $this->set(compact('customer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
