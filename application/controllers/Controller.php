<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

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
    if (isset($this->session->userdata['logged_in'])) {
      $this->header();
      $this->load->view('out');
      $this->load->view('in');
    }
  }
  public function header(){
    $data['in'] = $this->Model->get_count_posters_in();
    $data['out'] = $this->Model->get_count_posters_out();
    $data['total'] = $this->Model->get_count_posters_total();
    $this->load->view('header', $data);
  }
  public function in(){
    $this->form_validation->set_rules('jid', 'JID ', 'required');
    $this->form_validation->set_rules('ipid', 'iPID ', 'required');
      if(isset($_POST['checkin'])){
        $timestamp = date("Y-m-d h:i:sa");
        $data = array(
        'jid' => $this->input->post("jid"),
        'ipid' => $this->input->post("ipid"),
        'currstat'=> 'IN',
        'data' => $timestamp,
        );
        $ipid = $this->input->post("ipid");
        $this->Model->log($data);
        $this->Model->update_status_in($ipid);
        redirect('Controller/index');
        }
    }
    public function out(){
      $this->form_validation->set_rules('jid', 'JID ', 'required');
      $this->form_validation->set_rules('ipid', 'iPID ', 'required');
      if(isset($_POST['checkout'])){
        $timestamp = date("Y-m-d h:i:sa");
        $data = array(
        'jid' => $this->input->post("jid"),
        'ipid' => $this->input->post("ipid"),
        'currstat'=>'OUT',
        'data' => $timestamp,
        );
        $ipid = $this->input->post("ipid");
        $this->Model->log($data);
        $this->Model->update_status_out($ipid);
        redirect('Controller/index');
        }
    }
    public function inventory(){
      if (isset($this->session->userdata['logged_in'])) {
        $this->data['ipads'] = $this->Model->get_inventory();
        $this->header();
        $this->load->view('inventory', $this->data);
      }
    }
    public function log(){
      if (isset($this->session->userdata['logged_in'])) {
        $this->data['ipads'] = $this->Model->get_log();
        $this->header();
        $this->load->view('log', $this->data);
      }
    }
    public function user(){
      if (isset($this->session->userdata['logged_in'])) {
        $this->data['users'] = $this->Model->get_user();
        $this->header();
        $this->load->view('user', $this->data);
      }
    }
    public function CreateAdmin(){
    //Validating Fields
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('aname', 'Admin Name', 'required');
    $this->form_validation->set_rules('apass', 'Admin Pass', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['numPosters'] = $this->Judge_Model->numberOfPosters();
      $data['numJudges'] = $this->Judge_Model->numberOfjudges();
      $data['session'] = $this->Judge_Model->session_display();
      $this->load->view('Templates/adminHeader_loggedin',$data);
        $this->load->view('AdminView/ManageAdmin/CreateAdmin');
    } else {
        //Setting values for tabel columns
        $this->Judge_Model->insert_user(); //Transfering data to Model
        $data['message'] = 'Data Inserted Successfully';
        $this->load->view('AdminView/ManageAdmin/CreateAdmin', $data);
    }
}
}
