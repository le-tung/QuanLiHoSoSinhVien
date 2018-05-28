<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {

    public function index()
    {
        $this->load->model('userModel');
        if (!$this->userModel->isLogin()) {
            redirect('userController/login');
        } else {
            $this->load->view('userController/home');
        }
        
    }

    

    public function login() 
    {
        $this->load->model('userModel');
        if (isset($_SESSION['username'])) {
            redirect('userController/home');
            return false;
        }
        if (isset($_POST['btn-login'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($this->userModel->isAdmin($username, $password)) {
                redirect('userController/home');
                return false;
            } else {
                if ($this->userModel->isUser($username, $password)) {
                    redirect('userController/home');
                }
            }
        }

        $this->load->view('loginView');
    }

    public function logout()
    {
        unset($_SESSION['username']);
        redirect('userController/login');
    }

    public function home() 
    {
        $this->load->model('userModel');
        if (!$this->userModel->isLogin()) {
            redirect('userController/login');
        }
        $this->load->view('homeView');
    }


}
