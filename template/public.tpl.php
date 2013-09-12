<div style="margin-top:2em;">
  <?php if ($opt['Display'] == 'Y'): ?>
    <?php echo __('Shortlink') ?>
    <a href="<?php echo $shortUrl ?>"><?php echo get_post_meta($post->ID, 'refliShortURL', true); ?></a>
  <?php endif ?>
</div>

<div style="margin-top:1em;">
  <?php if ($opt['TwitterLink'] == 'Y'): ?>
    <?php echo __('Tweet this link') ?>
    <a href="http://twitter.com/?status=<?php echo $shortUrlEncoded ?>"><img src="http://twitter.com/favicon.ico" title="" alt="" /></a>
  <?php endif ?>
</div>