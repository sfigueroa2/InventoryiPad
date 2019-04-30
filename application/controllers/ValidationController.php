<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ValidationController extends CI_Controller{

      public function __construct(){
          parent::__construct();
         $this->load->library('session');
          $this->load->library('form_validation');
          $this->load->helper('url');
          $this->load->database();
          $this->load->helper('html');
          $this->load->model('Model');
      }
      public function index(){

        $this->load->view('welcome_message');
      }
        /*
          $this->form_validation->set_rules('username', 'Username', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');
          $username = $this->input->post("username");
          $password = $this->input->post("password");

              if ($this->form_validation->run() == FALSE) {
                  if(isset($this->session->userdata['logged_in'])){
                      redirect("Controller/index");
                  }
                  else{
                      $this->load->view('login');
                  }
              }  else {

                      //check if username and password is correct
                      $usr_result = $this->Model->login($username, $password);
                      $id = $this->Model->login_id($username, $password);
                  if ($usr_result > 0){
                      //set the session variables
                      $sessiondata = array(
                          'login' => TRUE,
                          'username' => $username,
                          'uid' => $id);
                      $sessiondata = array($this->session->set_userdata('logged_in', $sessiondata));
                      //redirect("PosterController/MainMenu");
                      redirect("Controller/index");


                  }
                  else{
                      redirect('ValidationController/index');
                    }
              }
          }*/
      public function logout() {
        $this->session->unset_userdata(array("login"=>FALSE,"JudgeName"=>"","uid"=>""));
        $this->session->sess_destroy();
        redirect('ValidationController/index');
      }
}
