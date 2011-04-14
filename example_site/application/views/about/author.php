<?php
  $this->view->partial('common/_sub_nav', array(
    'sub_nav' => array(
      array('title' => 'Intro', 'href' => site_url('about/index'), 'nav_selected' => 'Author'),
      array('title' => 'Site', 'href' => site_url('about/site'), 'nav_selected' => 'Author'),
      array('title' => 'Author', 'href' => site_url('about/author'), 'nav_selected' => 'Author')
  )));
?>
<h2>Something about the author</h2>
<div class="spliter"></div>
<div id="main" class="clearfix">
  <div id="main-content" class="float-r">
    <p>Whether you like it or not, I believe filler text is here to stay. To support its survival and remedy some annoyances that I mentioned above, I have created a random content generator using jQuery and, for the sake of entertainment, featuring Chuck Norris (well, actually just facts about him).</p>

    <p>This jQuery plugin looks for a designated class name and inserts a random chuck of text from a XML file. You can view the demo page and download the plugin here. If Chuck Norris facts don’t fit your need (I can’t imagine why not), then you can take a minute to customize the XML file. You can even create different categories such as Long Text and Short Text, or Scary Text and Happy Text in the XML and assign the different kinds of content to different classes.</p>
  </div>
  
  <div id="sidebar" class="float-l">
    <ul>
      <li><a href="#">AT&T exec: We need T-Mobile</a></li>
      <li><a href="#">'Earthship' homes rise in Haiti</a></li>
      <li><a href="#">'Sari squad' protects sanctuary</a></li>
      <li><a href="#">Hamburg: Europe's eco capital </a></li>
      <li><a href="#">Set sail from Barcelona </a></li>
      <li><a href="#">10 most beautiful waterfalls</a></li>
      <li><a href="#">The internet vs. the NYT paywall</a></li>
      <li><a href="#">F1: Home comforts for Webber</a></li>
      <li><a href="#">Cycling: Contador case referred</a></li>
      <li><a href="#">Egypt's banned graphic novel</a></li>
      <li><a href="#">31,035 images of Iceland's capital</a></li>
    </ul>
  </div>
</div>

<div class="spliter"></div>
