<?php echo doctype('xhtml1-trans'); ?>
  <head>
    <?php $this->view->metas(); ?>
    <?php $this->view->title(); ?>
    <?php $this->view->asset('css'); ?>
    <?php echo link_tag( base_url().'favicon.ico', 'shortcut icon', 'image/ico'); ?>
  </head>
  <body>
    <div id="wrap">
      <div id="header" class="clearfix">
        <h1 class="hidden"><?php echo $title; ?></h1>
        <div id="logo"><a href="<?php echo base_url(); ?>">Demo</a></div>
        <?php $this->view->partial('common/_nav'); ?>
      </div>
      <div id="content">
        <?php echo $yield; ?>
      </div>
      <div id="footer">
        Demo provides by <a href="http://dreamerslab.com/">DreamersLab</a>
      </div>
    </div>
    <?php $this->view->asset('js'); ?>
  </body>
</html>
