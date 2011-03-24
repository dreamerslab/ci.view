<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{
  
  private $_data;
  
  public function __construct()
  {
    parent::__construct();
    // add class 'selected' to navigation menu
    $this->_data['nav_selected'] = 'about';
    $this->view->render($this->_data);
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