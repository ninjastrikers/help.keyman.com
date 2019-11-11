<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyman Configuration - Keyboard Layouts Tab"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Keyman Configuration - Keyboard Layouts Tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="basic_config_menu.php">Prev</a> </td><th width="60%" align="center">Chapter 3. Basic Help</th><td width="20%" align="right"> <a accesskey="n" href="basic_options_tab.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="basic_keyboards_tab">Keyman Configuration - Keyboard Layouts Tab</h2></div></div></div><p>The Keyboard Layouts tab of Keyman Configuration lists all the Keyman keyboards which are currently installed on your computer. You can use the Keyboard Layouts tab to install and uninstall keyboards, enable and disable keyboards, set keyboard hotkeys, show keyboard help and view keyboard details.</p><p>
    <span class="inlinemediaobject"><img src="desktop_images/tab-layout.png"></span>
  </p><h3><a name="id562914"></a>Opening the Keyboard Layouts Tab</h3><p>To open the Keyboard Layouts tab of Keyman Configuration:</p><div class="orderedlist"><ol type="1"><li><p>Click on the <span class="guiicon">Keyman Desktop</span> icon <span class="inlinemediaobject"><img src="desktop_images/icon-keyman.png"></span>, on the Windows Taskbar near the clock.</p></li><li><p>From the Keyman Desktop menu, select <span class="guilabel">Configuration…</span>.</p></li><li><p>Select the Keyboard Layouts tab.</p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3>Keyman Configuration opens in the same tab you last closed it in.</div></li></ol></div><h3><a name="id562985"></a>Installing a Keyboard</h3><p>There are two ways to install a Keyman keyboard from the Keyboard Layouts tab of Keyman Configuration:</p><div class="itemizedlist"><ul type="disc"><li><p>To install a keyboard layout from a local folder, see: <a class="link" href="start_download-install_keyboard.php#install_folder">Installing a Keyman keyboard from a Folder on Your Computer</a></p></li><li><p>To install a keyboard layout online, see: <a class="link" href="start_download-install_keyboard.php#install_tav">Downloading &amp; Installing a Keyman Keyboard within Keyman Desktop</a></p></li></ul></div><h3><a name="id563033"></a>Uninstalling a Keyboard</h3><p>To uninstall a Keyman keyboard from the Keyboard Layouts tab of Keyman Configuration, see: <a class="xref" href="basic_uninstall_keyboard.php" title="Keyboard Task - Uninstall a Keyboard">Keyboard Task - Uninstall a Keyboard</a></p><h3><a name="id563024"></a>Enabling and Disabling a Keyboard</h3><p>To enable or disable a Keyman keyboard from the Keyboard Layouts tab of Keyman Configuration, see: <a class="xref" href="basic_disable_keyboard.php" title="Keyboard Task - Enable and Disable a Keyboard">Keyboard Task - Enable and Disable a Keyboard</a></p><h3><a name="id563038"></a>Setting a Hotkey</h3><p>To set a hotkey for a Keyman keyboard from the Keyboard Layouts tab of Keyman Configuration:</p><div class="orderedlist"><ol type="1"><li><p>Find a keyboard in the keyboard list.</p></li><li><p>Click on the (no hotkey) or current hotkey link found beside the keyboard name. The Change Hotkey dialog box will be displayed.</p><p>
			<span class="inlinemediaobject"><img src="desktop_images/hotkeys-change.png"></span>
		  </p></li><li><p>Select a default hotkey or click <span class="guibutton">Custom</span> and type the hotkey you wish to use.</p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>If you press a single letter or <span class="keycap"><strong>Shift</strong></span> plus a single letter, the hotkey will default to <span class="keycap"><strong>Ctrl</strong></span> + <span class="keycap"><strong>Alt</strong></span> plus the letter you pressed, in order to avoid conflicts with standard keyboard input.</p></div><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>To clear a hotkey that has been set previously, click <span class="guibutton">Clear Hotkey</span> or press <span class="keycap"><strong>Backspace</strong></span>.</p></div><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>Be aware that you can set the hotkey to replace common Windows hotkeys (<span class="keycap"><strong>Ctrl</strong></span> + <span class="keycap"><strong>C</strong></span>, <span class="keycap"><strong>Ctrl</strong></span> + <span class="keycap"><strong>V</strong></span>, etc).</p></div></li><li><p>Click <span class="guibutton">OK</span> to save your selection.</p></li><li><p>Click <span class="guibutton">OK</span> again from the Configuration window to apply the changes.</p></li></ol></div><p>The new hotkey will now be available.</p><h3><a name="id563123"></a>Showing Introductory Help</h3><p>To show introductory help for a Keyman keyboard from the Keyboard Layouts tab of Keyman Configuration:</p><div class="orderedlist"><ol type="1"><li><p>Find a keyboard in the keyboard list.</p></li><li><p>Click on the question mark icon (<span class="inlinemediaobject"><img src="desktop_images/icon-introductory-help.png"></span>) beside the keyboard name. The keyboard help documentation will be shown.</p></li></ol></div><h3><a name="id563191"></a>Viewing Keyboard Details</h3><p>To view details for a Keyman keyboard from the Keyboard Layouts tab of Keyman Configuration:</p><div class="orderedlist"><ol type="1"><li><p>Find a keyboard in the keyboard list.</p></li><li><p>Click on the down arrow (<span class="inlinemediaobject"><img src="desktop_images/keyboards-downarrow.png"></span>) beside the keyboard name. The keyboard information window will expand.</p><p>
						<span class="inlinemediaobject"><img src="desktop_images/keyboards-hotkey.png"></span>
					</p></li><li><p>In the information window you can view keyboard details, including:</p><div class="itemizedlist"><ul type="disc"><li><p>Keyboard filename.</p></li><li><p>Keyboard package name.</p></li><li><p>Keyboard version number.</p></li><li><p>Keyboard encodings.</p></li><li><p>Keyboard layout type.</p></li><li><p>On Screen Keyboard status.</p></li><li><p>Documentation status.</p></li><li><p>Copyright details.</p></li><li><p>Installation details.</p></li></ul></div></li></ol></div><h3><a name="id563270"></a>Associating a keyboard with a Windows language</h3><p>All Keyman keyboards are associated with a Windows language by default. To change the association, or add a new association, see the following:</p><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="start_configure_computer.php" title="How To - Set up Your Computer for a Keyman Keyboard">How To - Set up Your Computer for a Keyman Keyboard</a></p></li></ul></div><h3><a name="id563303"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="basic_config_menu.php" title="Keyman Desktop Configuration">Keyman Desktop Configuration</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="basic_config_menu.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="basic.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="basic_options_tab.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyman Desktop Configuration </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Keyman Configuration - Options Tab</td></tr></table></div>
