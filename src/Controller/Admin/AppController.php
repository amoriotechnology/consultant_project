<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authenticate' => [
            'Form' => [
                'fields' => ['username' => 'email', 'password' => 'password'],
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authError' => 'Please Login Here',
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Admin',               
            ],
        ]);
    }

    public function beforeRender(Event $event)
    {
        $this->loadModel('SubCategories');
        $this->loadModel('Categories');
        $this->loadModel('SubSubCategories');
        $this->loadModel('Customers');
        $this->loadModel('BookAppointments');
        $this->loadModel('CustomerQueries');

        $total_categories = $this->Categories->find('all', [])->toarray();

        $total_sub_categories = $this->SubCategories->find('all', [])->toarray();

        $total_sub_sub_categories = $this->SubSubCategories->find('all', [])->toarray();

        $total_customers = $this->Customers->find('all', [])->toarray();

        $total_appointments = $this->BookAppointments->find('all', [])->toarray();

        $total_queries = $this->CustomerQueries->find('all', [])->toarray();

        $this->set(compact('total_categories', 'total_sub_categories', 'total_sub_sub_categories', 'total_customers', 'total_appointments', 'total_queries'));
    }

    public function isAuthorized($user)
    {
        if($user['user_role_id'] != 1){

           return false;
        }
        
        return true;
    }
}
