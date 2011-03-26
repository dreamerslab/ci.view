<?=doctype('xhtml1-trans')?>
  <head>
    <?$this->view->metas()?>
    <?$this->view->title()?>
    <?$this->view->asset('css')?>
    <?=link_tag( base_url().'favicon.png', 'shortcut icon', 'image/ico')?>
  </head>
  <body>
    <div id="wrap">
      <div id="header">
        <h1><?=$title?></h1>
        <p>A real simple layout example</p>
      </div>
      <div id="content">
        <!-- yield this block for action view -->
        <?=$yield?>
      </div>
      <div id="footer">
        Your footer goes here
      </div>
    </div>
    <!-- js file at the bottom for faster loading page -->
    <?$this->view->asset('js')?>
  </body>
</html>