<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
   
    public function beforeFilter(Event $event)
    {

        $this->Auth->allow(['index', 'searchData', 'allProfession', 'profession', 'aboutUs', 'packageEnquiry', 'bookAppointment', 'query', 'payment', 'paymentSuccess', 'getOnboard', 'getTouch', 'blog', 'privacyPolicy', 'termsUse']);

    }


    public function index()
    {
        $this->viewBuilder()->setLayout('design');
        $this->loadModel('SubSubCategories');
        $this->loadModel('Categories');
        $this->loadModel('Customers');
        $this->loadModel('HomePages');

        $home_pages = $this->HomePages->find('all', ['contain' => ['Customers']])->toArray();


        // $property_buyers = $this->Customers->find('all', [])->toArray();
        // $users = $customers->get($id);
        // pr($users); die();
        $conn = ConnectionManager::get('default');

        $property_buyers = $conn->execute("SELECT * FROM `customers` WHERE sub_sub_category_id = 1;")->fetchAll('assoc');

        // pr($property_buyers); die();

        // $id = $this->request->getData('id');

        // pr($id); die();
    
 
        $all_customers = $this->SubSubCategories->find('all', ['contain' => ['Customers'],'limit' => 10])->toArray();
        

        $consultants = $this->Customers->find('all', ['limit' => 8])->toarray();

        

        $this->set(compact('all_customers', 'home_pages', 'consultants', 'property_buyers'));

    }



    public function searchData()
    {
        $this->viewBuilder()->setLayout('design');
        $this->loadModel('Customers');
        $this->loadModel('SubSubCategories');

        $json_data = $this->Customers->find('all',['contain' => ['SubSubCategories']])->toarray();

        echo json_encode($json_data); die();
    
        $this->set(compact('json_data'));
    }


    public function allProfession()
    {
        $this->viewBuilder()->setLayout('design');
        $this->loadModel('Customers');
        $this->loadModel('SubSubCategories');

        $all_consultants = $this->Customers->find('all',['contain' => ['SubSubCategories'], 'limit' => 11])->toarray();
    
        $this->set(compact('all_consultants'));
    }

    public function profession($id = null)
    {
        $this->viewBuilder()->setLayout('design');

        $this->loadModel('Customers');
        $this->loadModel('Categories');
        $this->loadModel('SubSubCategories');
        $this->loadModel('SubCategories');

        $category = $this->SubSubCategories->find('all')->where(['id' => $id])->first();

        // pr($category); die();

        $category_child = $this->Customers->find('all')->where(['sub_sub_category_id' => $category['id']])->toArray();

        // pr($category_child); die();



        if(empty($category)){
            $category_child = $this->Customers->find('all')->where(['sub_sub_category_id' => $category['id']])->toArray();
        }

        $categoryId = [];
        
        foreach($category_child as $key => $value){

            $categoryId[] = $value['sub_sub_category_id'];

        }

        $this->paginate = ['conditions' => ['Customers.sub_sub_category_id IN' => $categoryId]];

        $customers = $this->paginate($this->Customers);

        // pr($customers); die();

        $sub_cus = $this->Customers->find('all')->where(['sub_sub_category_id' =>$category['id'] ])->toArray();

        // pr($sub_cus); die();


        $this->set(compact('customers', 'category', 'sub_cus'));
    }

    public function aboutUs()
    {
      $this->viewBuilder()->setLayout('design');
        
    }


    public function bookAppointment()
    {
      $this->viewBuilder()->setLayout('design');
      $this->loadModel('BookAppointments');
      $this->loadModel('SubCategories');
      $this->loadModel('Customers');

      $bookAppointment = $this->BookAppointments->newEntity();
        if ($this->request->is('post')) {
            $bookAppointment = $this->BookAppointments->patchEntity($bookAppointment, $this->request->getData());
              // pr($bookAppointment); die();
            if ($this->BookAppointments->save($bookAppointment)) {
                $this->Flash->success(__('The book appointment has been saved.'));

                return $this->redirect(['action' => 'book_appointment']);
            }
            $this->Flash->error(__('The book appointment could not be saved. Please, try again.'));
        }
        // $consultant = $this->SubCategories->find('all' ,[])->toArray();
       // pr($consultant); die();
        $profession = $this->Customers->find('all', [])->toarray();
        // pr($consultant_name); die();
        $this->set(compact('bookAppointment', 'profession'));
        
    }

    public function solutionsView()
    {
      $this->viewBuilder()->setLayout('design');
        
    }

     public function packageEnquiry()
    {
        
      $this->viewBuilder()->setLayout('design');
      $this->loadModel('Enquiries');

      $enquiry = $this->Enquiries->newEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
        }
        $this->set(compact('enquiry'));
        
    }

    public function query($id = null)
    {
      $this->viewBuilder()->setLayout('design');
      $this->loadModel('Customers');
      $this->loadModel('CustomerQueries');

      $get_cutomer = $this->Customers->find('all')->where(['customer_id' => $id])->first();

      // pr($get_cutomer); die();

      $customerQuery = $this->CustomerQueries->newEntity();
        if ($this->request->is('post')) {
            $customerQuery = $this->CustomerQueries->patchEntity($customerQuery, $this->request->getData());
            if ($this->CustomerQueries->save($customerQuery)) {
                $this->Flash->success(__('The customer query has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer query could not be saved. Please, try again.'));
        }
    //     $this->set(compact('customerQuery'));

      $this->set(compact('get_cutomer', 'customerQuery'));
        
    }

    public function payment($id = null)
    {
        $this->viewBuilder()->setLayout('design');
        
        $this->loadModel('SubSubCategories');
        $this->loadModel('Customers');
        $this->loadModel('PaymentPages');


        $get_cutomer = $this->Customers->find('all')->where(['customer_id' => $id])->contain('SubSubCategories')->first();


        $this->set(compact('get_cutomer'));
    }

    public function paymentSuccess($id = null)
    {
        $this->viewBuilder()->setLayout('design');
        $this->loadModel('SubSubCategories');
        // $this->loadModel('CustomerQueries');
        $this->loadModel('Customers');
        

        $payment_customer = $this->Customers->find('all')->where(['customer_id' => $id])->contain('SubSubCategories')->first();
        // pr($payment_customer); die();
       
        $result = rand(1,99999);  
        $booking_id = "BD/".$result;

        // pr($booking_id); die();
         
        $this->set(compact('payment_customer', 'booking_id'));    
   }


    public function getOnboard()
    {
       $this->viewBuilder()->setLayout('design');
        
       $mail = new PHPMailer(true);

       if(isset($_POST['onboard_submit'])){
       $firm = $this->request->getData('Firm');
       $gst = $this->request->getData('gst_number');
       $director = $this->request->getData('director');
       $experience = $this->request->getData('experience');
       $desigination = $this->request->getData('desigination');
       $email_address = $this->request->getData('email_address');
       $mobile_number = $this->request->getData('mobile_number');
       $message = $this->request->getData('Message');  

        try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'absolutegranitestones@gmail.com';              
        $mail->Password   = 'qpiwamptiigcpodl';                            
        $mail->SMTPSecure = 'tls';            
        $mail->Port       = 587;                                   

        $mail->setFrom('madhu@yopmail.com', 'Get Onboard');
        $mail->addAddress('absolutegranitestones@gmail.com', 'Get Onboard');     

        //Content
        $mail->isHTML(true);                                 
        $mail->Subject = 'Here is the subject';
        $mail->Body    = "<b>Name of the Firm:</b>  $firm "."<br> <b>Gst Number:</b>  $gst "."<br> <b>Name of Director:</b>  $director "."<br> <b>Years of Experience:</b>  $experience "."<br> <b>Desigination:</b>  $desigination "."<br> <b>Email Address:</b>  $email_address "."<br> <b>Mobile Number:</b>  $mobile_number "."<br> <b>Message:</b>  $message "."<br>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo "<script>alert('Thankyou for your interest. we will get back you shortly')</script>";
        echo "<script>window.location.href='http://localhost/consultant-project/pages/getOnboard'</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
        
        
    }

    } 


    public function getTouch()
    {
       $this->viewBuilder()->setLayout('design');

       $mail = new PHPMailer(true);

       if(isset($_POST['touch_submit'])){
       $name = $this->request->getData('name');
       $email = $this->request->getData('email_address');
       $mobile = $this->request->getData('mobile_number');
       $msg = $this->request->getData('message'); 

        try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'absolutegranitestones@gmail.com';              
        $mail->Password   = 'qpiwamptiigcpodl';                            
        $mail->SMTPSecure = 'tls';            
        $mail->Port       = 587;                                   

        $mail->setFrom('madhu@yopmail.com', 'Get in Touch');
        $mail->addAddress('absolutegranitestones@gmail.com', 'Get in Touch');     

        //Content
        $mail->isHTML(true);                                 
        $mail->Subject = 'Here is the subject';
        $mail->Body    = "<b>Name:</b>  $name "."<br> <b>Emai Address:</b>  $email "."<br> <b>Mobile:</b>  $mobile "."<br> <b>Message:</b>  $msg "."<br> ";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo "<script>alert('Thankyou for your interest. we will get back you shortly')</script>";
        echo "<script>window.location.href='http://localhost/consultant-project/Pages/getTouch'</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
        
        
    }
       
    }


    public function blog()
    {
        $this->viewBuilder()->setLayout('design');
    }

    public function privacyPolicy()
    {
        $this->viewBuilder()->setLayout('design');
    }

    public function termsUse()
    {
        $this->viewBuilder()->setLayout('design');
    }


}   

