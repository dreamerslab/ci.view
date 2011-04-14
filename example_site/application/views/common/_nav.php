<div id="nav">
  <ul class="clearfix">
    <li>
      <a id="nav-about" class="<?php selected('about', $nav_selected); ?>" href="<?php echo site_url('about'); ?>" title="Go to about page">
        <h3>About</h3>
      </a>
    </li>
    <li>
      <a id="nav-works" class="not-ready" href="<?php echo site_url('works'); ?>" title="Go to works page">
        <h3>Works</h3>
      </a>
    </li>
    <li>
      <a id="nav-contact" class="<?php selected('contact', $nav_selected); ?>" href="<?php echo site_url('contact'); ?>" title="Go to contact page">
        <h3>Contact</h3>
      </a>
    </li>
  </ul>
</div>