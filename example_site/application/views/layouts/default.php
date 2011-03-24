<?=doctype('xhtml1-trans')?>
  <head>
    <?$this->view->metas()?>
    <?$this->view->title()?>
    <?$this->view->asset('css')?>
    <?=link_tag( base_url().'favicon.ico', 'shortcut icon', 'image/ico')?>
  </head>
  <body>
    <div id="wrap">
      <div id="header" class="clearfix">
        <h1 class="hidden"><?=$title?></h1>
        <div id="logo"><a href="<?=base_url()?>">Demo</a></div>
        <?$this->view->partial('common/_nav')?>
      </div>
      <div id="content">
        <?=$yield?>
      </div>
      <div id="footer">
        Demo provides by <a href="http://dreamerslab.com/">DreamersLab</a>
      </div>
    </div>
    <?$this->view->asset('js')?>
  </body>
</html>
