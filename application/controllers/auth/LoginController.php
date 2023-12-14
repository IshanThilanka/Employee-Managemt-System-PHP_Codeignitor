<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



class LoginController extends CI_Controller{


public function index(){
    $this->load->view('template/loginHeader.php'); 
    $this->load->view('auth/login.php');  
    $this->load->view('template/footer.php'); 


}

public function login(){
    $this->form_validation->set_rules('email_id', 'Email Address', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');


    if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {         
    
            $data = array(
                'email' => $this->input->post('email_id'),
                'password' => $this->input->post('password'),
            ); 
                $this->load->model('UserModel');
                $login_user = new UserModel;
                $result = $login_user->loginUser($data);
                if($result !=FALSE)
                {
                   echo 
                   $usertData = [
                    'first_name' => $result->first_name,
                    'last_name' => $result->last_name,
                    'email'=>$result->email,


                   ];

                    $this->session->set_userdata('authenticated','1');
                    $this->session->set_userdata('auth_user',$usertData);
                    $this->session->set_flashdata('status', 'You Logged in successfully');
                    redirect(base_url('employee'));


                }
                else
                {
                    $this->session->set_flashdata('status', 'Something Went Wrong.!');
                    redirect(base_url('login'));
                }

            }
                
    }













}





























?>