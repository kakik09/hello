<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }

 public function check ($username, $password){
 	$query=$this->db->get_where('admin_users',array('username'=>$username,'password'=>md5($password)));
 	return $query->num_rows() != 0;
 }

 // //public function register($fname,$lname,$email,$newpass)
 // {
 //    //Make sure each key conforms with the column names
 //    $data = array('email'=>$email,
 //              'first_name'=>$fname,
 //              'last_name'=>$lname,
 //              'password'=>$newpass);
 //    //The CodeIgniter way of inserting data
 //    // 'user' is the name of the table
 //    $this->db->insert('user',$data);
 // }
 // // public function login($email,$newpass) {
 // // 	$this->db->select('first_name','email');
 // // 	$query = $this->db->get_where('user', array('email' => $email, 'password' => $newpass));
 // // 	return $query->num_rows() == 1 ? $query->row_array() : FALSE;
 // // }
 // // public function exists($email) {
 // // 	$query = $this->db->get_where('user', array('email' => $email));
 // // 	return $query->num_rows() == 0;
 // // }
 // // public function get_id_by_email($email) {
 // // 	$query = $this->db->get_where('user', array('email' => $email));
 // // 	$row = $query->row;
 // // 	return $row['uid'];
 // // }
   
}