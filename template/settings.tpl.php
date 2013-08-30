<br />
    <a target="_blank" href="http://ref.li" title="Home">Ref.li</a> |     <a target="_blank" href="http://ads.ref.li" title="Home">Advertise with us</a>  | <a target="_blank" href="http://ref.li/api-about.php" title="Developer API">Developer API &amp; Extensions</a> | <a target="_blank" href="http://ref.li/report.php" title="Report a link">Report a link</a>  
<br />
<br />
<br />
<h2>Usage & Shortcodes:</h2>
<li>
<p>
To display the Short link of current page use the following shortcode on post, page or sidebar widget:
</p>
<p>
<strong>[refli-url]</strong>
</p>
</li>
<li>
<p>
To quickly shorten any External URL within post use the following short code:
</p>
<p>Example: Using <a target="_blank" href="https://www.google.com/webhp?hl=en&tab=ww#hl=en&q=ref.li" ><font color="blue">https://www.google.com/webhp?hl=en&tab=ww#hl=en&q=ref.li</font></a> as extrnal link, then use following code</p>
</li>
<p><strong>[refli-url u="<font color="blue">https://www.google.com/webhp?hl=en&tab=ww#hl=en&q=ref.li</font>"]</p></strong>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="alisaleem252@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Refli">
<input type="hidden" name="item_number" value="refli">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<form method="post" action="./options-general.php?page=refli_shorturl-settings" id="refli_shorturl_settings" style="margin-top:2em;margin-left:1em;">

<table class="form-table">

  <tr valign="top">
    <th scope="row">
        <label for="ApiUrl" style="font-weight:bold;"><?php echo __('Refli Short URL Service') ?></label><br />
        <?php echo __('This plugin is free so your Donation is important for us, We are working on more improvements, such as showing all short links with complete visitor statistics including hits, unique hits, referrers, visitors by country in Admin Panel.') ?><br /><br />
    </th>
  </tr>

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
        <label for="TwitterLink" style="font-weight:bold;"><?php echo __('Display Twitter Link') ?></label>
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
        <input type="submit" name="save" value="<?php echo __('Save') ?>" />
    </th>
    <td>

    </td>
  <tr>


</table>


</form>
<br />
<br />
<br />
    <a target="_blank" href="http://ref.li" title="Home">Ref.li</a> |     <a target="_blank" href="http://ads.ref.li" title="Home">Advertise with us</a>  | <a target="_blank" href="http://ref.li/api-about.php" title="Developer API">Developer API &amp; Extensions</a> | <a target="_blank" href="http://ref.li/report.php" title="Report a link">Report a link</a>  