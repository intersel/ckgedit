<?php
$lang['gui'] = "CKEditor GUI ";
$lang['_fbrowser']     = ' Ckgedit Filebrowser ';
$lang['guest_media'] = "Guest Can Link to Media Files";
$lang['open_upload'] = "Guest Can Upload";
$lang['default_fb'] = "Default file-browing access. With none, acl does not apply.";
$lang['acl_del'] =  "Default (box not checked) allows users with upload permission to delete media files; if box is checked, then user needs delete permission to delete from the folder.";
$lang['openfb'] = "Open File Browsing. This gives user access to entire directory structure, whether or not the user has permissions. ACL still applies to uploads.";
$lang['create_folder'] = "Enable folder creation button in file browser (y/n)";
$lang['allow_ckg_filebrowser'] = 'Select which file/media browser(s) users can use';
$lang['default_ckg_filebrowser'] = 'Select which file/media browser is the default. This will be overridden if the selected browser is not allowed';
$lang['nix_style'] = "For Windows Servers (Vista and Later).  This setting makes it possible to access data\\media through ckgedit\\CKEditor\\userfiles, if links to media and file have been successfully created in userfiles";
$lang['winstyle'] = 'Use direct path to media directory instead of fckeditor/userfiles. This function copies <br />fckeditor/userfiles/.htaccess.security to data/media/.htaccess; if not, this should be done manually';
$lang['complex_tables'] ="Use the complex tables algorithm.  As opposed to the standard parsing of tables, this should give better results when mixing complex arrangements of rowspans and colspans. But slightly more processing time.";
$lang['duplicate_notes'] = "Set this to true if users create multiple footnotes with the same footnote texts; required to prevent notes from being corrupted.";
$lang['allow_ckg_filebrowser'] = 'Select which file/media browser(s) users can use';
$lang['default_ckg_filebrowser'] = 'Select which file/media browser is the default. This will be overridden if the selected browser is not allowed';


$lang['_tools'] = " Ckgedit Editor Tools ";
$lang['guest_toolbar'] = "Display Toolbar to Guests";
$lang['dw_edit_display'] = 'Controls which users have access to the "DW Edit" button. Choices: "all" for all users; "admin" for admin and managers only; "none" for no one. Defaults to "all".';
$lang['dw_edit_display_o_all'] = 'all';
$lang['dw_edit_display_o_admin'] = 'admin';
$lang['dw_edit_display_o_none'] = 'none';
$lang['smiley_as_text']  = 'Display smileys as text in CKEditor (will still display as image in browser)';
$lang['editor_bak'] = "Save backup to meta/&lt;namespace&gt;.ckgedit";
$lang['dwedit_ns'] = "Comma separated list of namespaces and/or pages where ckgedit automatically switches " .
                     "over to the native DokuWiki Editor; accepts partial matches."; 
$lang['auth_ci'] = "The user login id is case insensitive, that is you can login as both USER and user";
$lang['smiley_hack'] = "Reset URL for CKEditor's smilies when moving to new server. This is done on a page by page basis when page is loaded for editing and saved.  This option should normally be turned off.";
$lang['other_lang'] = 'Your default language for the CKEditor is the language set for your browser.   You can, however, choose another language here; it is independent of the Dokuwiki interface language.';
$lang['direction'] = 'Set Language direction in CKEditor:  <b>nocheck</b>: ckgedit will make no changes to the default direction setting; ' 
                       . ' <b>dokuwiki</b>:  the current Dokuwiki language direction;  <b>ltr</b>: Left-to-right ; <b>rtl</b>: Right-to-left.';

$lang['_editor'] = " Ckgedit Editor Features";
$lang['scayt_auto'] = 'Set whether or not the Scayt check-as-you-type spell checker is active or present at startup. Defaults to <code>disable</code>.'
                   .  ' In this case the browser\'s own spell checking should be active.' 
                   .  ' When set to <code>off</code> the Scayt toolbutton will be present and Scayt can be activated on a'
                   .  ' per-page basis.'
                   .  ' (See <a href="https://www.dokuwiki.org/plugin:ckgedit:configuration#scayt_auto">ckgedit:configuration#scayt_auto</a>") ';
$lang['scayt_auto_o_on'] = 'on';
$lang['scayt_auto_o_off'] = 'off';
$lang['scayt_auto_o_disable'] = 'disable'; 
$lang['scayt_lang']="Set SCAYT default language.";
$lang['nofont_styling']  = 'Display font styles in editor as plugin markup. See the ckgedit plugin page at Dokuwiki.org for details.';
$lang['font_options']  = 'Remove font options.';
$lang['color_options']  = 'Remove Color options.';
$lang['alt_toolbar'] = 'Functions to remove from CKEditor toolbar.<br /><br /> Any other functions can be removed by including them as a comma separated list in the text box:<br /><br />' . 
         'Bold, Italic, Underline, Strike, Subscript, Superscript, RemoveFormat, Find, Replace, SelectAll, Scayt, '  .     
         'Image, Table, Tags, Link, Unlink, Format, Styles,TextColor, BGColor, NumberedList, BulletedList, ' .
         'Cut, Copy, Paste, PasteText, PasteFromWord, Undo, Redo, Source, Maximize, About.';
$lang['htmlblock_ok'] ='When using <code>HTML_BLOCK</code>s  either this setting or Dokuwiki\'s <code>htmlok</code> option must be enabled. ' .
        ' It doesn\'t pose the same level of security  risk as <code>htmlok</code>.  Nevertheless, it is should be used only in a trusted user environment, and not in an open wiki.';                                    
 
$lang['_xtras'] = " Ckgedit Extras ";
$lang['mfiles'] = 'Enable mfile support';
$lang['extra_plugins']  = "Comma separated list of additional Ckeditor plugins to be added to toolbar.  See ckgedit plugin's <a href='https://www.dokuwiki.org/plugin:ckgedit:configuration#extra_plugins'>config page</a>  for details";
$lang['dblclk']="Set to <code>off</code> to turn off the double click feature which enables section editing using the Dokuwiki editor (see:  <a href='https://www.dokuwiki.org/plugin:ckgedit#direct_access_to_dokuwiki_editor'>direct_access_to_dokuwiki_editor</a>)";
$lang['preserve_enc'] ="Preserve urlencoding in urls when the dokuwiki deaccent option is active.";
$lang['rel_links'] = "Activate support for relative internal and image links";
$lang['style_sheet'] = 'Use an alternate style sheet for the Ckeditor editing window.' .
    ' For more information see the <b>CKEditor editor CSS tool</b>, under <em>Additional Plugins</em> on the <code>Admin</code> page. Or ' .
    ' see the ckgedit plugin page.';	
$lang['imgpaste'] = 'If the imgpaste plugin is installed, use the imgpaste naming system for naming your saved images.';  
