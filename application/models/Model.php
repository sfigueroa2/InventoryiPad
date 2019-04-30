<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  function login($usr, $pwd){
  $sql = "select * from user where username = '" . $usr . "' and password = '" . $pwd . "' ''";
  $query = $this->db->query($sql);
  return $query->num_rows(); //On returns a number not results
  }
  function login_id($usr, $pwd){
    $sql = "select id from user where username = '" . $usr . "' and password = '" . $pwd . "' ''";
    $query = $this->db->query($sql);
    return $query->result(); //On returns a number not results
  }
  function insert_user(){
    $data = array(
    'username' => $this->input->post('username'),
    'password' => $this->input->post('password'),
    );
  $this->db->insert('user', $data);
}
  function log($data){
    $this->db->insert('log', $data);
  }
  function update_status_out($ipid){
    $sql = "INSERT INTO status (ipid, currstat) VALUES ('" . $ipid . "', 'OUT') ON DUPLICATE KEY UPDATE currstat = 'OUT'";
    $query = $this->db->query($sql);
  }
  function update_status_in($ipid){
    $sql = "INSERT INTO status (ipid, currstat) VALUES ('" . $ipid . "', 'IN') ON DUPLICATE KEY UPDATE currstat = 'IN'";
    $query = $this->db->query($sql);
  }
  function get_inventory(){
    $this->db->select("*");
    $this->db->from('status');
    $query = $this->db->get();
    return $query->result();
  }
  function get_log(){
    $this->db->select("*");
    $this->db->from('log');
    $query = $this->db->get();
    return $query->result();
  }
  function get_user(){
    $this->db->select("*");
    $this->db->from('user');
    $query = $this->db->get();
    return $query->result();
  }
  function get_count_posters_in(){
    $sql = "SELECT COUNT(*) AS totalin FROM status WHERE currstat = 'IN'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }
  function get_count_posters_out(){
    $sql = "SELECT COUNT(*) AS totalout FROM status WHERE currstat ='OUT'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }
  function get_count_posters_total(){
    $sql = "SELECT COUNT(*) FROM status";
    $query = $this->db->query($sql);
    return $query->result_array();
  }
}
