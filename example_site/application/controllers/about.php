<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{
  
  public function __construct()
  {
    parent::__construct();
    
    // add class 'selected' to navigation menu 
    $data['nav_selected'] = 'about';
    
    // render views for all actions in this controller
    $this->view->render($data);
  }
  
  public function index()
  {
    
  }
  
  public function site()
  {
    
  }
  
  public function author()
  {
    
  }
}
// End of About class

/* End of file about.php */
/* Location: ./application/controllers/about.php */