<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{
  
  public function __construct()
  {
    parent::__construct();
    
    // add class 'selected' to navigation menu 
    $this->_data['nav_selected'] = 'about';
    
    // do not do $this->view->render(); here
    // otherwise the 404 error may not work
  }
  
  public function index()
  {
    $this->view->render($this->_data);
  }
  
  public function site()
  {
    $this->view->render($this->_data);
  }
  
  public function author()
  {
    $this->view->render($this->_data);
  }
}
// End of About class

/* End of file about.php */
/* Location: ./application/controllers/about.php */