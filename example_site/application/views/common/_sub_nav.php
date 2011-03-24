<div id="sub-nav">
  <ul class="clearfix">
    <?foreach($sub_nav as $list):?>
    <li class="<?selected($list['title'], $list['nav_selected'])?>">
      <a href="<?=$list['href']?>" title="<?=$list['title']?>">
        <h4><?=$list['title']?></h4>
      </a>
    </li>
    <?endforeach?>
  </ul>
</div>