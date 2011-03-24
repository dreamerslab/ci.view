<?
  $this->view->partial('contact/_base', array(
    'heading' => 'Feel free to contact us if you have any question :)',
    'name' => set_value('name'),
    'email' => set_value('email'),
    'comments' => set_value('comments')
  ));
?>