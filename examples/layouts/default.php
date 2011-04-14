<?php echo doctype('xhtml1-trans'); ?>
  <head>
    <?php $this->view->metas(); ?>
    <?php $this->view->title(); ?>
    <?php $this->view->asset('css'); ?>
    <?php echo link_tag( base_url().'favicon.png', 'shortcut icon', 'image/ico'); ?>
  </head>
  <body>
    <div id="wrap">
      <div id="header">
        <h1><?php echo $title; ?></h1>
        <p>A real simple layout example</p>
      </div>
      <div id="content">
        <!-- yield this block for action view -->
        <?php echo $yield; ?>
      </div>
      <div id="footer">
        Your footer goes here
      </div>
    </div>
    <!-- js file at the bottom for faster loading page -->
    <?php $this->view->asset('js'); ?>
  </body>
</html>