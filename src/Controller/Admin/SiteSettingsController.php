<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

/**
 * SiteSettings Controller
 *
 *
 * @method \App\Model\Entity\SiteSetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SiteSettingsController extends AppController
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
        $siteSettings = $this->paginate($this->SiteSettings);

        $this->set(compact('siteSettings'));
    }

    /**
     * View method
     *
     * @param string|null $id Site Setting id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $siteSetting = $this->SiteSettings->get($id, [
            'contain' => [],
        ]);

        $this->set('siteSetting', $siteSetting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $siteSetting = $this->SiteSettings->newEntity();
        if ($this->request->is('post')) {
            $siteSetting = $this->SiteSettings->patchEntity($siteSetting, $this->request->getData());
            if ($this->SiteSettings->save($siteSetting)) {
                $this->Flash->success(__('The site setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site setting could not be saved. Please, try again.'));
        }
        $this->set(compact('siteSetting'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Site Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $siteSetting = $this->SiteSettings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $siteSetting = $this->SiteSettings->patchEntity($siteSetting, $this->request->getData());
            if ($this->SiteSettings->save($siteSetting)) {
                $this->Flash->success(__('The site setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site setting could not be saved. Please, try again.'));
        }
        $this->set(compact('siteSetting'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Site Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $siteSetting = $this->SiteSettings->get($id);
        if ($this->SiteSettings->delete($siteSetting)) {
            $this->Flash->success(__('The site setting has been deleted.'));
        } else {
            $this->Flash->error(__('The site setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
