<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/**
 * Auth Library
 *
 * Custom authentication library to extend CAS
 *
 */

class Auth {

  public function __construct() {
  
    $this->ci =& get_instance();

    $this->ci->load->model( 'auth_model' );
    $this->ci->load->library( 'session');
    $this->ci->load->database();
  
  }

  public function is_logged_in() {
  
    $status = $this->ci->session->userdata( 'is_logged_in' );

    return $status;
  
  }

  public function is_admin() {
  
  
  
  }

  public function is_manager() {
  
  
  
  }

  public function is_faculty_staff() {
  
  
  
  }

  public function is_studio_user() {
  
  
  
  }

  public function is_student() {
  
  
  
  }

}
