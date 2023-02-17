<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
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
            'authError' => 'Please Login Here',
            // 'loginAction' => [
            //     'controller' => 'Users',
            //     'action' => 'login'
            // ],

            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'dashboard'
            ],

            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Users',               
            ],
        ]);
    }

    public function beforeRender(Event $event)
    {
        $this->loadModel('Categories');
        $this->loadModel('AboutPages');
        $this->loadModel('SiteSettings');
        $this->loadModel('SocialLinks');

        // $view_categories = $this->Categories->find('all', )->contain(['SubCategories' => ['SubSubCategories']])->toArray();

        $view_categories = $this->Categories->find('all',[
            'contain' => ['SubCategories' => ['SubSubCategories' =>['sort' => ['SubSubCategories.name' => 'Asc']]]],
        ])->toArray();

        $get_about_pages = $this->AboutPages->get(1);

        $get_meta_title = $this->SiteSettings->get(1);

        $get_social_links = $this->SocialLinks->get(1);

        $seo = $this->SiteSettings->get(1);
        $meta_title = $seo['meta_title'];
        $meta_keyword = $seo['meta_keyword'];
        $meta_description = $seo['meta_description'];

        $auth = $this->request->getSession()->read('Auth.Users.name');

        $Auth_user = $this->request->getSession()->read('Auth.Users');
       
        // pr($auth); die();

        $this->set(compact('auth', 'Auth_user',  'view_categories', 'get_about_pages', 'get_meta_title', 'meta_title', 'meta_description', 'meta_keyword', 'get_social_links'));
    }
    

    public function isAuthorized($user) { 

        // pr($user); die();
      
       return true;            
    }


}

