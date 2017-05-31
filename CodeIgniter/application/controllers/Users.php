<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');

    }

    public function account()
    {
        $data = array();
        if($this->session->userdata('isUserLoggedIn'))
        {
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $this->load->view('account',$data);
        }
        else
        {
            redirect('login');
        }
    }

    public function login()
    {
        $data=array();
        if($this->session->userdata('success_msg'))
        {
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('successs_msg');

        }
        if($this->session->userdata('error_msg'))
        {
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit'))
        {
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run() == true)
            {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email' =>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );

                $checkLogin = $this->user->getRows($con);
                if($checkLogin)
                {
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('account');
                }
                else
                {
                    $data['error_msg'] = 'Wrong E-mail or password, please try again.';
                }
            }
        }
    }

    public function registration()
    {
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit'))
        {
            $this->form_validation->set_rules('email','Email','required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password','password','required');
            $this->form_validation->set_rules('conf_password','confirm password','required|matches[password]');

            $userData = array(
                'email' =>strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password'))
            );

            if($this->form_validation->run() == true)
            {
                $insert = $this->user->insert($userData);
                if($insert)
                {
                    $this->session->set_userdata('success_msg','Registration successful! Please, log in');
                    redirect ('login');
                }
                else
                {
                    $data['error_msg'] = 'An error occured. Please, try again later.';
                }
            }
        }

        $data['user'] = $userData;
        $this->load->view('registration',$data);
    }

    public function logout()
    {
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        $this->load->view('login',$data);
    }

    public function email_check($str)
    {
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail>0)
        {
            $this->form_validation->set_message('email_check','The given email already exists.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}