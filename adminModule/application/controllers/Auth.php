<?php


class Auth extends CI_Controller
{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index()
    {   
        $this->load->view('login');
    }

    public function doLogin()
    {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Auth_model->doLogin($username, $password);
        if(count($user) > 0)
        {
            if($user[0]['type'] == 'customer'){
                redirect('http://192.168.0.151:8084/serviceprovider/AcceptLogin?id='.$user[0]['id'], 'refresh');

            }

            if($user[0]['type'] == 'sp'){
                redirect('http://192.168.0.151:8084/serviceprovider/AcceptLogin?id='.$user[0]['id'], 'refresh');
                
            }
        }
        redirect('/');
    }


    public function login()
    {
        
        $this->form_validation->set_rules('UserName', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required|min_length[5]');
        if ($this->form_validation->run() == TRUE) {
            
            $UserName = $_POST['UserName'];
            $Password = md5($_POST['Password']);
            
            //check user in database
            $this->db->select('*');
            $this->db->from('customer');
            $this->db->where(array('UserName'=>$UserName, 'Password' =>$Password));
            $query = $this->db->get();
            
            $user = $query->row();
            // if user exist
            if($user->cuID){
                //temporary message
                $this->session->set_flashdata("success", "You are logged in");
                
                // set session variables
                
                $this->session->set_userdata('cuID', $user->cuID);
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['UserName'] = $user->UserName;
                
                // redirect to profile page
//                redirect ("user/profile", "refresh");
                
            }else {
                $this->session->set_flashdata("error", "account does not exists, please register.");
//                redirect ("user/login", "refresh");
            }
        }
//        $this->load->view('login');
    }
    public function register()
    {
        if (isset ($_POST['register'])){
            $this->form_validation->set_rules('UserName', 'Username', 'required');
            $this->form_validation->set_rules('FirstName', 'Firstname', 'required');
            $this->form_validation->set_rules('LastName', 'Lastname', 'required');
            $this->form_validation->set_rules('type', 'type');
            $this->form_validation->set_rules('Category', 'Category');
            $this->form_validation->set_rules('Service', 'Service');
            $this->form_validation->set_rules('Birthdate', 'Birthdate', 'required');
            $this->form_validation->set_rules('Email', 'E-mail', 'required');
            $this->form_validation->set_rules('ContactNumber', 'Contact', 'required');
            $this->form_validation->set_rules('Address', 'Contact', 'required');
            $this->form_validation->set_rules('PasswordC', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('Password', 'Confirm Password', 'required|min_length[5]|matches[PasswordC]');


            
            // if form validation true 
            if ($this->form_validation->run() == TRUE) {
               // echo 'form validated';
                
                $type = $this->input->post('type');

                if($type === 'sp')
                {
                    $data = array (
                 //   $a => $_POST['cuID'],
                    'UserName' => $_POST['UserName'],
                    'FirstName' => $_POST['FirstName'],
                    'LastName' => $_POST['LastName'],
                    'Birthdate' => $_POST['Birthdate'],
                    'Email' => $_POST['Email'],
                    'ContactNumber' => $_POST['ContactNumber'],
                    'Address' => $_POST['Address'],
                    'Password' => md5($_POST['Password']),
                    'Category' => $_POST['Category'],
                    'Service' => $_POST['Service']
                    );
                    $this->db->insert('service_provider',$data);
                  


                }


                if($type === 'customer')
                {
                //add customer in database
                $data = array (
                 //   $a => $_POST['cuID'],
                    'UserName' => $_POST['UserName'],
                    'FirstName' => $_POST['FirstName'],
                    'LastName' => $_POST['LastName'],
                    'Birthdate' => $_POST['Birthdate'],
                    'Email' => $_POST['Email'],
                    'ContactNumber' => $_POST['ContactNumber'],
                    'Address' => $_POST['Address'],
                    'Password' => md5($_POST['Password'])
                );                
                $this->db->insert('customer',$data);
            }
                
                $this->session->set_flashdata("success","Your account has been registered. You can login now");
                redirect ("auth/register", "refresh");
                
            }
        }
        //load view
        $this->load->view('register');
    }

    public function customers(){
        $records = $this->Customer->getCustomers();
        $this->load->view('customers', ['records' => $records]);
    }

    public function serviceprovider(){
         $record = $this->ServP->getServP();
        $this->load->view('service_providers', ['record' => $record]);
    }
}