<div id="sub-nav">
  <ul class="clearfix">
    <?php foreach($sub_nav as $list): ?>
    <li class="<?php selected($list['title'], $list['nav_selected']); ?>">
      <a href="<?php echo $list['href']; ?>" title="<?php echo $list['title']; ?>">
        <h4><?php echo $list['title']; ?></h4>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
</div>