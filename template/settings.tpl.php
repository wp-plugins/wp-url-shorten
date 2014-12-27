<br />
    <a target="_blank" href="http://ref.li" title="Home">Ref.li</a> |     <a target="_blank" href="http://ads.ref.li" title="Home">Advertise with us</a>  | <a target="_blank" href="http://ref.li/page/developer" title="Developer API">Developer API &amp; Extensions</a> | <a target="_blank" href="http://ref.li/contact" title="Report a link">Report a link</a>  
<br />
<br />
<br />
<h2><?php _e('Usage & Shortcodes','refli') ?>:</h2>
<li>
<p>
<?php _e('To display the Short link of current page use the following shortcode on post, page or sidebar widget','refli')?>:
</p>
<p>
<strong>[refli-url]</strong>
</p>
</li>
<li>
<p>
<?php _e('To quickly shorten any External URL within post use the following short code','refli')?>:
</p>
<p>Example: Using <a target="_blank" href="https://www.google.com/webhp?hl=en&tab=ww#hl=en&q=ref.li" ><font color="blue">https://www.google.com/webhp?hl=en&tab=ww#hl=en&q=ref.li</font></a> as extrnal link, then use following code</p>
</li>
<p><strong>[refli-url u="<font color="blue">https://www.google.com/webhp?hl=en&tab=ww#hl=en&q=ref.li</font>"]</p></strong>

<form method="post" action="./options-general.php?page=refli_shorturl-settings" id="refli_shorturl_settings" style="margin-top:2em;margin-left:1em;">

<table class="form-table">



  <tr valign="top">
    <th scope="row">
        <label for="Display" style="font-weight:bold;"><?php echo __('Display Short URL') ?></label>
    </th>
  </tr>
  <tr>
    <td>
        <input type="radio" name="Display" value="Y" <?php echo $opt['Display'] == 'Y' ? 'checked="checked"' : '' ?> /> <?php echo __('Yes') ?>
        <input type="radio" name="Display" value="N" <?php echo $opt['Display'] == 'N' ? 'checked="checked"' : '' ?> /> <?php echo __('No') ?>
    </td>
  <tr>

  <tr valign="top">
    <th scope="row">
        <label for="TwitterLink" style="font-weight:bold;"><?php echo __('Display Social Icons') ?></label>
    </th>
  </tr>
  <tr>
    <td>
        <input type="radio" name="TwitterLink" value="Y" <?php echo $opt['TwitterLink'] == 'Y' ? 'checked="checked"' : '' ?> /> <?php echo __('Yes') ?>
        <input type="radio" name="TwitterLink" value="N" <?php echo $opt['TwitterLink'] == 'N' ? 'checked="checked"' : '' ?> /> <?php echo __('No') ?>
    </td>
  <tr>


  <tr valign="top">
    <th scope="row">
        <input type="submit" class="button-primary" name="save" value="<?php echo __('Save') ?>" />
    </th>
    <td>

    </td>
  <tr>


</table>


</form>
<br />
    <a target="_blank" href="http://ref.li" title="Home">Ref.li</a> |     <a target="_blank" href="http://ref.li/page/advertise" title="Home">Advertise with us</a>  | <a target="_blank" href="http://ref.li/page/developer" title="Developer API">Developer API &amp; Extensions</a> | <a target="_blank" href="http://ref.li/contact" title="Report a link">Report a link</a>  