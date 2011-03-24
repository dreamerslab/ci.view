<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller{

  private $_data;

	public function __construct()
	{
		parent::__construct();
    $this->load->helper('form');
    $this->_data['nav_selected'] = 'contact';
	}
  
	public function index()
	{
    $this->view->render($this->_data);
	}

	public function send()
	{
    $this->load->model('Contact_Model');

    if($this->Contact_Model->validate() == FALSE){
      $this->view->set('action', 'index')->render($this->_data);
		}else{
      $ajax = $this->input->post('ajax');

      if($this->Contact_Model->send() == TRUE){
        if($ajax == 1){
          $this->_render_json(array('success'=>TRUE));
        }else{
          $this->view->set('action', 'sent')->render($this->_data);
        }
      }else{
        log_message('error', 'ERROR: /contact/send \n'.$this->email->print_debugger());
        if($ajax == 1){
          $this->_render_json(array('success'=>FALSE));
        }else{
          $this->view->set('action', 'error')->render($this->_data);
        }
      }
		}
	}

// -----------------------------------------------------------------------------
  
  private function _render_json($json){
    header('Content-type: application/json');
    echo json_encode($json);
  }
  
}
// End of Contact class

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */