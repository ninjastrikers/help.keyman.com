<?php
  require_once('includes/template.php');
  require_once('includes/session.php');
  
  head([
    'title' => 'Installing fonts - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css','app-info.css'],

    'embedded' => $embed_ios
  ]);
?>

<?php
$titlePrefix = $embed_ios ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Installing Fonts</h2>

<p>
   Some keyboards require special fonts that do not come standard with your iPhone or iPad. For keyboards that use these fonts, the Keyman app will provide a download of the font to install onto your device, meaning all apps will be able to correctly display the font. To install the font, touch <span class="command">Install</span>.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/font-dl1.png"); ?>" />
   <br/><br/>
   You will then be taken to your device settings, and asked to install a profile for the font. Touch <span class="command">Install</span>.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/font-dl2.png"); ?>" />
   <br/><br/>
   Then <span class="command">Install</span> again in the Consent page.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/font-dl3.png"); ?>" />
   <br/><br/>
   Once the profile is installed, touch <span class="command">Done</span>.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/font-dl4.png"); ?>" />
   <br/><br/>
   And then <span class="command">Touch now to return to Keyman</span>.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/font-dl5.png"); ?>" />
   <br/><br/>
   The font is now successfully installed, and will display correctly throughout your device!
</p>

<h2>Help Index</h2>

<?php
$indexName = $embed_ios ? "Getting Started" : "Keyman for iPhone and iPad help home";
?>

<ul>
  <li><a href='index.php<?=$session_query_q?>'><?=$indexName?></a></li>
  <li><a href='installing-keyboards.php<?=$session_query_q?>'>Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php<?=$session_query_q?>'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php<?=$session_query_q?>'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php<?=$session_query_q?>'>Installing custom keyboards</a></li>
  <li><a href='installing-system-keyboard.php<?=$session_query_q?>'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php<?=$session_query_q?>'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php<?=$session_query_q?>'>Using the Keyman Browser</a></li>
</ul>

