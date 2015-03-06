<div style="margin-top:2em;">
  <?php if ($opt['Display'] == 'Y'): ?>
    <?php echo __('Shortlink') ?>
    <a href="<?php echo $shortUrl ?>"><?php echo get_post_meta($post->ID, 'refliShortURL', true); ?></a>
  <?php endif ?>
</div>

<div style="margin-top:1em;">
  <?php if ($opt['TwitterLink'] == 'Y'): ?>
    <?php echo __('') ?>
    <a href="http://twitter.com/?status=<?php echo $shortUrlEncoded ?>"><img src="<?php echo refli_plugin_url.'/icons/twitter_letter-32.png' ?>" title="Tweet this link" alt="" /></a>     <a href="https://plus.google.com/share?url=<?php echo $shortUrlEncoded ?>"><img src="<?php echo refli_plugin_url.'/icons/google-plus-32.png' ?>" title="Share on Google Plus" alt="" /></a>        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shortUrlEncoded ?>"><img src="<?php echo refli_plugin_url.'/icons/facebook-32.png' ?>" title="Share on Facebook" alt="" /></a>        <a href="https://delicious.com/save?v=5&noui&jump=close&url=<?php echo $shortUrlEncoded ?>&title=<?php echo get_the_title()?>"><img src="<?php echo refli_plugin_url.'/icons/delicious-32.png' ?>" title="Share on Delicious" alt="" /></a>    <a href="http://digg.com/submit?url=<?php echo $shortUrlEncoded ?>&title=<?php echo get_the_title() ?>"><img src="<?php echo refli_plugin_url.'/icons/digg-32.png' ?>" title="Stumble Upon" alt="" /></a>    <a href="http://www.linkedin.com/shareArticle?url=<?php echo $shortUrlEncoded ?>&title=<?php echo get_the_title() ?>"><img src="<?php echo refli_plugin_url.'/icons/linkedin-32.png' ?>" title="Stumble Upon" alt="" /></a>
    
   
  <?php endif ?>
</div>