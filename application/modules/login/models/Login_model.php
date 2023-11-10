<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_data($email)
  {
    $qry = $this->db->select("*")
      ->from("auth_user")
      ->where("auth_user.email", "$email")
      ->join("auth_user_to_group", "auth_user_to_group.id_user = auth_user.id_user")
      ->join("auth_group", "auth_group.id = auth_user_to_group.id_group")
      ->where("auth_user.is_active", "1")
      ->where("auth_user.is_delete", "0")
      ->get();
    return $qry;
  }
}
