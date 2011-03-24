<?
  $this->view->partial('common/_sub_nav', array(
    'sub_nav' => array(
      array('title' => 'Intro', 'href' => site_url('about/index'), 'nav_selected' => 'Intro'),
      array('title' => 'Site', 'href' => site_url('about/site'), 'nav_selected' => 'Intro'),
      array('title' => 'Author', 'href' => site_url('about/author'), 'nav_selected' => 'Intro')
  )));
?>
<h2>About this site and author intro</h2>
<div class="spliter"></div>
<div id="main" class="clearfix">
  <p>Whether you like it or not, I believe filler text is here to stay. To support its survival and remedy some annoyances that I mentioned above, I have created a random content generator using jQuery and, for the sake of entertainment, featuring Chuck Norris (well, actually just facts about him).</p>

  <p>This jQuery plugin looks for a designated class name and inserts a random chuck of text from a XML file. You can view the demo page and download the plugin here. If Chuck Norris facts don’t fit your need (I can’t imagine why not), then you can take a minute to customize the XML file. You can even create different categories such as Long Text and Short Text, or Scary Text and Happy Text in the XML and assign the different kinds of content to different classes.</p>
  
  <div id="gallery">
    <ul>
      <li>
        <a href="http://farm6.static.flickr.com/5009/5372607914_6484048127.jpg" rel="about">
          <img src="http://farm6.static.flickr.com/5009/5372607914_6484048127_s.jpg" />
        </a>
      </li>
      <li>
        <a href="http://farm5.static.flickr.com/4057/4570887492_2fd590d427.jpg" rel="about">
          <img src="http://farm5.static.flickr.com/4057/4570887492_2fd590d427_s.jpg" />
        </a>
      </li>
      <li>
        <a href="http://farm4.static.flickr.com/3061/2617655000_b26415962e.jpg" rel="about">
          <img src="http://farm4.static.flickr.com/3061/2617655000_b26415962e_s.jpg" />
        </a>
      </li>
      <li>
        <a href="http://farm4.static.flickr.com/3512/4082045032_fd81f58385.jpg" rel="about">
          <img src="http://farm4.static.flickr.com/3512/4082045032_fd81f58385_s.jpg" />
        </a>
      </li>
      <li>
        <a href="http://farm3.static.flickr.com/2730/4345214519_845cea615a.jpg" rel="about">
          <img src="http://farm3.static.flickr.com/2730/4345214519_845cea615a_s.jpg" />
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="spliter"></div>
