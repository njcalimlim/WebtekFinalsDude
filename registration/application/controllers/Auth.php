<?php


class Auth extends CI_Controller
{
    public function login()
    {
        
        $this->form_validation->set_rules('UsernameC', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required|min_length[5]');
        if ($this->form_validation->run() == TRUE) {
            
            $UsernameC = $_POST['UsernameC'];
            $Password = md5($_POST['PasswordC']);
            
            //check user in database
            $this->db->select('*');
            $this->db->from('customers');
            $this->db->where(array('UsernameC'=>$UsernameC, 'PasswordC' =>$PasswordC));
            $query = $this->db->get();
            
            $user = $query->row();
            // if user exist
            if($user->email){
                //temporary message
                $this->session->set_flashdata("success", "You are logged in");
                
                // set session variables
                
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['UsernameC'] = $user->UsernameC;
                
                // redirect to profile page
                redirect ("user/profile", "refresh");
                
            }else {
                $this->session->set_flashdata("error", "account does not exists, please register.");
                redirect ("user/login", "refresh");
            }
        }
        $this->load->view('login');
    }
    public function register()
    {
        if (isset ($_POST['register'])){
            $this->form_validation->set_rules('UsernameC', 'Username', 'required');
            $this->form_validation->set_rules('FirstnameC', 'Firstname', 'required');
            $this->form_validation->set_rules('LastnameC', 'Lastname', 'required');
            $this->form_validation->set_rules('Birthdate', 'Birthdate', 'required');
            $this->form_validation->set_rules('EmailC', 'E-mail', 'required');
            $this->form_validation->set_rules('ContactC', 'Contact', 'required');
            $this->form_validation->set_rules('AddressC', 'Contact', 'required');
            $this->form_validation->set_rules('Password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('PasswordC', 'Confirm Password', 'required|min_length[5]|matches[Password]');


            
            // if form validation true 
            if ($this->form_validation->run() == TRUE) {
               // echo 'form validated';
                
                //add customer in database
                $data = array (
                 //   $a => $_POST['cuID'],
                    'UsernameC' => $_POST['UsernameC'],
                    'FirstnameC' => $_POST['FirstnameC'],
                    'LastnameC' => $_POST['LastnameC'],
                    'Birthdate' => $_POST['Birthdate'],
                    'EmailC' => $_POST['EmailC'],
                    'ContactC' => $_POST['ContactC'],
                    'AddressC' => $_POST['AddressC'],
                    'PasswordC' => md5($_POST['PasswordC'])
                );                
                $this->db->insert('customers',$data);
                
                $this->session->set_flashdata("success","Your account has been registered. You can login now");
                redirect ("auth/register", "refresh");
                
            }
        }
        //load view
        $this->load->view('register');
    }
}