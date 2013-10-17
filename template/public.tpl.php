<div style="margin-top:2em;">
  <?php if ($opt['Display'] == 'Y'): ?>
    <?php echo __('Shortlink') ?>
    <a href="<?php echo $shortUrl ?>"><?php echo get_post_meta($post->ID, 'refliShortURL', true); ?></a>
  <?php endif ?>
</div>

<div style="margin-top:1em;">
  <?php if ($opt['TwitterLink'] == 'Y'): ?>
    <?php echo __('Share this link') ?>
    <a href="http://twitter.com/?status=<?php echo $shortUrlEncoded ?>"><img src="http://twitter.com/favicon.ico" title="Tweet this link" alt="" /></a> <a href="https://plus.google.com/share?url=<?php echo $shortUrlEncoded ?>"><img src="https://www.gstatic.com/images/icons/gplus-16.png" title="Share on Google Plus" alt="" /></a> <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shortUrlEncoded ?>"><img src="https://www.facebook.com/favicon.ico" title="Share on Facebook" alt="" /></a>    

  <?php endif ?>
</div>