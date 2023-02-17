<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

/**
 * BookAppointments Controller
 *
 * @property \App\Model\Table\BookAppointmentsTable $BookAppointments
 *
 * @method \App\Model\Entity\BookAppointment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookAppointmentsController extends AppController
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
        $bookAppointments = $this->paginate($this->BookAppointments);

        // pr($bookAppointments); die();
        
        // debug($bookAppointments); exit();

        $this->set(compact('bookAppointments'));
    }

    /**
     * View method
     *
     * @param string|null $id Book Appointment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookAppointment = $this->BookAppointments->get($id, [
            'contain' => [],
        ]);

        $this->set('bookAppointment', $bookAppointment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookAppointment = $this->BookAppointments->newEntity();
        if ($this->request->is('post')) {
            $bookAppointment = $this->BookAppointments->patchEntity($bookAppointment, $this->request->getData());
            if ($this->BookAppointments->save($bookAppointment)) {
                $this->Flash->success(__('The book appointment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book appointment could not be saved. Please, try again.'));
        }
        $this->set(compact('bookAppointment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Book Appointment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookAppointment = $this->BookAppointments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookAppointment = $this->BookAppointments->patchEntity($bookAppointment, $this->request->getData());
            if ($this->BookAppointments->save($bookAppointment)) {
                $this->Flash->success(__('The book appointment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book appointment could not be saved. Please, try again.'));
        }
        $this->set(compact('bookAppointment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Book Appointment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookAppointment = $this->BookAppointments->get($id);
        if ($this->BookAppointments->delete($bookAppointment)) {
            $this->Flash->success(__('The book appointment has been deleted.'));
        } else {
            $this->Flash->error(__('The book appointment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
