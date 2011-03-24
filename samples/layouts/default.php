<?=doctype('xhtml1-trans')?>
  <head>
    <?$this->view->metas()?>
    <?$this->view->title()?>
    <?$this->view->asset('css')?>
    <?=link_tag( base_url().'favicon.png', 'shortcut icon', 'image/ico')?>
  </head>
  <body>
    <h1><?=$title?></h1>
    <p>A real simple layout example</p>
    <?=$yield?>
    <?$this->view->asset('js')?>
  </body>
</html>
