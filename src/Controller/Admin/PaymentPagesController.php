<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

/**
 * PaymentPages Controller
 *
 *
 * @method \App\Model\Entity\PaymentPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentPagesController extends AppController
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
        $paymentPages = $this->paginate($this->PaymentPages);

        $this->set(compact('paymentPages'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment Page id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentPage = $this->PaymentPages->get($id, [
            'contain' => [],
        ]);

        $this->set('paymentPage', $paymentPage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentPage = $this->PaymentPages->newEntity();
        if ($this->request->is('post')) {
            $paymentPage = $this->PaymentPages->patchEntity($paymentPage, $this->request->getData());
            if ($this->PaymentPages->save($paymentPage)) {
                $this->Flash->success(__('The payment page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment page could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentPage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment Page id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentPage = $this->PaymentPages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentPage = $this->PaymentPages->patchEntity($paymentPage, $this->request->getData());
            if ($this->PaymentPages->save($paymentPage)) {
                $this->Flash->success(__('The payment page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment page could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentPage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment Page id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentPage = $this->PaymentPages->get($id);
        if ($this->PaymentPages->delete($paymentPage)) {
            $this->Flash->success(__('The payment page has been deleted.'));
        } else {
            $this->Flash->error(__('The payment page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
