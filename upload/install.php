<?php

define ('VERSION' , 1.2); 
// vBulletin 4 conig.php Auto Generation Script by BirdOPrey5
// Edit the 4 defined values below as needed
// OUTFILE should be 'config.php' in real usage 

define ('CONFIG' , 'includes/config.php.new');
define ('OUTFILE' , 'config.php'); // Change this to config.php for real usage
define ('OUTPATH' , 'includes/');
$dodebug = 0; //Set to 0 for real usage 

//Do not edit below this line.  

if (isset($_REQUEST['submit']) AND $_REQUEST['submit'] == 'Create File')
{
   //$_REQUEST[''];
   $admincp         = $_REQUEST['admincp'];
   $modcp           = $_REQUEST['modcp'];
   $cookieprefix    = $_REQUEST['cookieprefix'];
   $dbtype          = $_REQUEST['dbtype'];
   $dbname          = $_REQUEST['dbname'];
   $tableprefix     = $_REQUEST['tableprefix'];
   $technicalemail  = $_REQUEST['technicalemail'];
   $servername      = $_REQUEST['servername'];
   $port            = $_REQUEST['port'];
   $username        = $_REQUEST['username'];
   $password        = $_REQUEST['password'];
   $viewadminlog    = $_REQUEST['viewadminlog'];
   $pruneadminlog   = $_REQUEST['pruneadminlog'];
   $runquery        = $_REQUEST['runquery'];
   $undelete        = $_REQUEST['undelete'];
   $superadmin      = $_REQUEST['superadmin'];
   if (isset($_REQUEST['debugmode']) AND $_REQUEST['debugmode'] == 1)
     $debugmode = 1;
   else
     $debugmode = 0;
   if (isset($_REQUEST['disablehooks']) AND $_REQUEST['disablehooks'] == 1)
     $disablehooks = 1;
   else
     $disablehooks = 0;	 
   if (isset($_REQUEST['disablemail']) AND $_REQUEST['disablemail'] == 1)
     $disablemail = 1;
   else
     $disablemail = 0;	 
	 
   $bopconfig = file_get_contents (CONFIG);
   if ($bopconfig == false)
      die ("Error - Could not open  includes/config.php.new file.");
      
   //Edit config.php file 
   
   $find    = '$config[\'Database\'][\'dbtype\'] = \'mysql\';';
   $replace = '$config[\'Database\'][\'dbtype\'] = \''.$dbtype.'\';';
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'Database\'][\'dbname\'] = \'forum\';';
   $replace = '$config[\'Database\'][\'dbname\'] = \''.$dbname.'\';';
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'Database\'][\'tableprefix\'] = \'\'';
   $replace = '$config[\'Database\'][\'tableprefix\'] = \''.$tableprefix.'\'';
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'Database\'][\'technicalemail\'] = \'dbmaster@example.com\';';
   $replace = '$config[\'Database\'][\'technicalemail\'] = \''.$technicalemail.'\';';
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'MasterServer\'][\'servername\'] = \'localhost\';';
   $replace = '$config[\'MasterServer\'][\'servername\'] = \''.$servername.'\';';
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'MasterServer\'][\'port\'] = 3306;';
   $replace = '$config[\'MasterServer\'][\'port\'] = '.$port.';';
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'MasterServer\'][\'username\'] = \'root\';';
   $replace = '$config[\'MasterServer\'][\'username\'] = \''.$username.'\';';
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'MasterServer\'][\'password\'] = \'\';';
   $replace = '$config[\'MasterServer\'][\'password\'] = \''.$password.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'Misc\'][\'admincpdir\'] = \'admincp\';';
   $replace = '$config[\'Misc\'][\'admincpdir\'] = \''.$admincp.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'Misc\'][\'modcpdir\'] = \'modcp\';';
   $replace = '$config[\'Misc\'][\'modcpdir\'] = \''.$modcp.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);
   
   $find    = '$config[\'Misc\'][\'cookieprefix\'] = \'bb\';';
   $replace = '$config[\'Misc\'][\'cookieprefix\'] = \''.$cookieprefix.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'SpecialUsers\'][\'canviewadminlog\'] = \'1\';';
   $replace = '$config[\'SpecialUsers\'][\'canviewadminlog\'] = \''.$viewadminlog.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'SpecialUsers\'][\'canpruneadminlog\'] = \'1\';';
   $replace = '$config[\'SpecialUsers\'][\'canpruneadminlog\'] = \''.$pruneadminlog.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'SpecialUsers\'][\'canrunqueries\'] = \'\';';
   $replace = '$config[\'SpecialUsers\'][\'canrunqueries\'] = \''.$runquery.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'SpecialUsers\'][\'undeletableusers\'] = \'\';';
   $replace = '$config[\'SpecialUsers\'][\'undeletableusers\'] = \''.$undelete.'\';';   
   $bopconfig = str_replace ($find, $replace, $bopconfig);

   $find    = '$config[\'SpecialUsers\'][\'superadministrators\'] = \'1\';';
   $replace = '$config[\'SpecialUsers\'][\'superadministrators\'] = \''.$superadmin.'\';';
   $bopconfig = str_replace ($find, $replace, $bopconfig);


   if ($disablemail)
   {
	  $find = '<?php';
	  $replace = $find . "\r\n" . 'define(\'DISABLE_MAIL\', true);';  
	  $bopconfig = str_replace ($find, $replace, $bopconfig);
   }
   if ($disablehooks)
   {
	  $find = '<?php';
	  $replace = $find . "\r\n" . 'define(\'DISABLE_HOOKS\', true);';  
	  $bopconfig = str_replace ($find, $replace, $bopconfig);
   }

   if ($debugmode)
   {
	  $find = '<?php';
	  $replace = $find . "\r\n" . '$config[\'Misc\'][\'debug\'] = true;';  
	  $bopconfig = str_replace ($find, $replace, $bopconfig);
   }


   // Write config.php file
   file_put_contents (OUTPATH . OUTFILE, $bopconfig);   
   
   if ($dodebug)
   {
     $debug = '<br /><br /> DEBUG INFO: <a href="'.OUTPATH . OUTFILE.'">'.OUTPATH . OUTFILE.'</a>';
	 $selfdelete = '<br /><br />If this wasn\'t debug mode you\'d see a link to self-delete this file and begin the real WinxPortal&reg;; install script. <br />';
   }
   else
   {
     $debug = '';
	 $selfdelete = '<br /><br />Click the following link <a href="install.php?submit=self_delete">Go to Installation</a> to automatically delete THIS install.php and begin the main install script. <br />If the install scriot doesn\'t exist you will be sent to forum.php. If you close or leave this page you must manually delete this file. <br />';
   }
   
   
	  
  die ("<br />File Creation Compmplete.<br /><br />Delete <strong>install.php</strong> file now." . $debug . $selfdelete); 
}
elseif (isset($_REQUEST['submit']) AND $_REQUEST['submit'] == 'self_delete')
{
  if (unlink('install.php'))
  {   if (file_exists('install/install.php'))
	    header("location: install/install.php");
	  else
	    header("location: forum.php");
  }
  else
  {
    die ("Self-delete failed. Please delete install.php manually.");
  }
}
elseif (isset($_REQUEST['submit']) AND $_REQUEST['submit'] == 'load')
{
   $bopconfig = file_get_contents (OUTPATH . OUTFILE);
   if ($bopconfig == false)
      die ("Error - Could not open  " . OUTPATH . OUTFILE . " file.");
	  
  $caution1 = '';
  $caution2 = '';
  $loadexisting = '';
  $cautionwarning = 'Values loaded from existing file. This form will overwrite existing file.';
	  
  $admincp_ex =      '\$config\[\'Misc\']\[\'admincpdir\'] = \'(.*)\';';
  $modcp_ex =      '\$config\[\'Misc\']\[\'modcpdir\'] = \'(.*)\';';
  $cookie_ex =      '\$config\[\'Misc\']\[\'cookieprefix\'] = \'(.*)\';';

  $dbtype_ex =      '\$config\[\'Database\']\[\'dbtype\'] = \'(.*)\';';
  $dbname_ex =      '\$config\[\'Database\']\[\'dbname\'] = \'(.*)\';';
  $tableprefix_ex = '\$config\[\'Database\']\[\'tableprefix\'] = \'(.*)\';';
  $email_ex =      '\$config\[\'Database\']\[\'technicalemail\'] = \'(.*)\';';
  $servername_ex = '\$config\[\'MasterServer\']\[\'servername\'] = \'(.*)\';';
  $portnum_ex =    '\$config\[\'MasterServer\']\[\'port\'] =\\s*(.*)\\s*;';
  $dbusername_ex = '\$config\[\'MasterServer\']\[\'username\'] = \'(.*)\';';
  $dbpassword_ex = '\$config\[\'MasterServer\']\[\'password\'] = \'(.*)\';';

  $viewadminlog_ex =   '\$config\[\'SpecialUsers\']\[\'canviewadminlog\'] = \'(.*)\';';
  $pruneadminlog_ex =  '\$config\[\'SpecialUsers\']\[\'canpruneadminlog\'] = \'(.*)\';';
  $runquery_ex =       '\$config\[\'SpecialUsers\']\[\'canrunqueries\'] = \'(.*)\';';
  $undelete_ex =       '\$config\[\'SpecialUsers\']\[\'undeletableusers\'] = \'(.*)\';';
  $superadmin_ex =     '\$config\[\'SpecialUsers\']\[\'superadministrators\'] = \'(.*)\';';

  $debug_ex    = '\$config\[\'Misc\']\[\'debug\'] = [1|true]+;';
  $hooks_ex    = 'define\(\'DISABLE_HOOKS\', [1|true]+\);';
  $mail_ex     = 'define\(\'DISABLE_MAIL\', [1|true]+\);';

  preg_match("~".$admincp_ex."~iU",   $bopconfig, $admincp);
  $admincp = trim($admincp[1]);

  preg_match("~".$modcp_ex."~iU",   $bopconfig, $modcp);
  $modcp = trim($modcp[1]);
  
  preg_match("~".$cookie_ex."~iU",   $bopconfig, $cookie);
  $cookie = trim($cookie[1]);
    
  preg_match("~".$dbtype_ex."~iU",   $bopconfig, $dbtype);
  $dbtype = trim($dbtype[1]);
 
  preg_match("~".$dbname_ex."~iU",   $bopconfig, $dbname);
  $dbname = trim($dbname[1]);

  preg_match("~".$tableprefix_ex."~iU",   $bopconfig, $tableprefix);
  $tableprefix = trim($tableprefix[1]);

  preg_match("~".$email_ex."~iU",   $bopconfig, $email);
  $email = trim($email[1]);

  preg_match("~".$servername_ex."~iU",   $bopconfig, $servername);
  $servername = trim($servername[1]);
  
  preg_match("~".$portnum_ex."~iU",   $bopconfig, $portnum);
  $portnum = trim($portnum[1]);

  preg_match("~".$dbusername_ex."~iU",   $bopconfig, $dbusername);
  $dbusername = trim($dbusername[1]);
  
  preg_match("~".$dbpassword_ex."~iU",   $bopconfig, $dbpassword);
  $dbpassword = trim($dbpassword[1]);  
  
  preg_match("~".$debug_ex."~iU",   $bopconfig, $debug_mode);
  if (isset($debug_mode[0]))
    $debug_check = ' checked="checked" ';
  else
    $debug_check = '';
  
  preg_match("~".$hooks_ex."~iU",   $bopconfig, $disable_hooks);
  if (isset($disable_hooks[0]))
    $hooks_check = ' checked="checked" ';  
  else
    $hooks_check = '';
  
   preg_match("~".$mail_ex."~iU",   $bopconfig, $disablemail);
  if (isset($disablemail[0]))
    $mail_check = ' checked="checked" ';  
  else
    $mail_check = '';
   
  
  preg_match("~".$viewadminlog_ex."~iU",   $bopconfig, $viewadminlog);
  $viewadminlog = trim($viewadminlog[1]);

  preg_match("~".$pruneadminlog_ex."~iU",   $bopconfig, $pruneadminlog);
  $pruneadminlog = trim($pruneadminlog[1]);
  
  preg_match("~".$runquery_ex."~iU",   $bopconfig, $runquery);
  $runquery = trim($runquery[1]);

  preg_match("~".$undelete_ex."~iU",   $bopconfig, $undelete);
  $undelete = trim($undelete[1]);
  
  preg_match("~".$superadmin_ex."~iU",   $bopconfig, $superadmin);
  $superadmin = trim($superadmin[1]);  
  
} 
else
{
  if (!file_exists(CONFIG))
  {
	  $caution1 = "Warning config.php.new does not exist in /includes/ directory. This file is required for this utility to work.<br /><br />Copy this file from your original vBulletin download files if need be and then refresh this page.<br /><br />";
	  die ($caution1);
  }
  else
  {
      $caution1 = '';
  }
  
  if (file_exists(OUTPATH . OUTFILE))
  {
    $caution2 = "Warning " . OUTPATH . OUTFILE . " already exists. <br />";
	$loadexisting = '<br /><a href="install.php?submit=load">Click here</a> to load in existing values.';
  }
  else
  {
    $caution2 = '';
	$loadexisting = '';
  }

   if ($caution2)
     $cautionwarning = "Using this utility will overwrite existing file.";	
  else
    $cautionwarning = '';
	
  $admincp       = 'winxpanel';
  $modcp         = 'trixmod';
  $cookie        = 'bb';
  $dbtype        = 'mysql';
  $dbname        = 'forum';
  $tableprefix   = '';
  $email         = '';
  $servername    = 'localhost';
  $portnum       = '3306';
  $dbusername    = 'root';
  $dbpassword    = '';
  $viewadminlog  = '1';
  $pruneadminlog = '1';
  $runquery      = '';
  $undelete      = '';
  $superadmin    = '1';
  $debug_check   = '';
  $hooks_check   = '';
  $mail_check    = '';
  
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WinxPortal&reg;; X - Build Configuration</title>
<style type="text/css">
body,td,th {
	color: #000;
}
body {
	background-color: #DDD;
}
a:link {
	color: #00F;
}
a:visited {
	color: #00F;
}
a:hover {
	color: #F00;
}
a:active {
	color: #F00;
}
.maindiv {
	width:800px;
	border-width:1px;
	border-color: white;
	background-color:white;
	margin-left:auto;
	margin-right:auto;
	padding:4px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10pt;
}
.infobar {
	background-color: #930000;
	color:white;
	font-size:150%;
	margin-right:-2px;
	margin-left:-2px;
	padding:4px;
}
.maincontent {
	padding:4px;
}
.vers {
	font-size: 8pt;
	float:right;
	position:relative;
	top: 10px;
}
.alt2 {
	background-color: #ECE9FE;
}
.maintable {
	border-collapse:collapse;
	border-spacing: 1px;
	width:100%;
	border: 2px rgb(1,55,79) inset;
}
td {
	padding:4px;
}
.settingname {
	font-size: 12px;
	font-weight: bold;
}
.settingdesc {
	font-size: 11px;
}
.filewarning {
	font-weight: bold;
	color: #F00;
}
</style>
<script language="javascript">

function showpass()
{
  document.forms['buildform'].password.type = 'text';	
}

function valForm()
{
  if (document.forms['buildform'].admincp.value != 'winxpanel')
    alert("Reminder: You must manually rename the winxpanel directories to match your custom value.");
  if (document.forms['buildform'].modcp.value != 'trixmod')
    alert("Reminder: You must manually rename the trixmod directory to match your custom value.");  
  if (!document.forms['buildform'].dbname.value)
  {
	  alert ("You must enter a Database Name");
	  return false;
  }
  if (!document.forms['buildform'].technicalemail.value)
  {
	 var echeck = confirm("If you do not enter an email address you will not be notified of database errors. Support will require a copy of any database error if you run into trouble. Press cancel if you want to enter an email address, otherwise press OK to continue.");
	 if (echeck == false)
	    return false; 
  }
  if (!document.forms['buildform'].servername.value)
  {
	  alert ("You must enter a Database Server Name");
	  return false;
  }
  if (!document.forms['buildform'].username.value)
  {
	  alert ("You must enter a Database Username");
	  return false;
  }
  if (document.forms['buildform'].password.value.indexOf("'") != -1)
  {
	  alert ("Passwords cannot contain the single-quote character (')");
	  return false;
  }



}
</script>
</head>
<body>

<div class="maindiv">
  <div class="infobar">
    <img src="images/misc/vbulletin4_logo.png" alt="WinxPortal&reg; X" /><br />
    &nbsp; config.php Builder & Edtior (WinxPortal&reg; X)
    <div class="vers">v <?php echo VERSION ?></div>
    </div>
  
  <br />
  <div class="maincontent">
  <form action="install.php" method="post" name="buildform" onsubmit="return valForm()" >
  <p>This utility will auto-create a config.php file in the /includes/ directory based on the data below. For the security of your site this file (install.php) must be deleted when you are finished.</p>
  <p>Some advanced settings may need to be manually added/edited. This is for basic setups only.<br />
  <br />
  <span class="filewarning"><?php echo $caution1 . $caution2 . $cautionwarning . $loadexisting ?></span> </p>
  <table border="1" class="maintable">
  <tr>
    <td><span class="settingname">Administrator Control Panel Directory:</span><br />
        <span class="settingdesc">Default: "winxpanel"</span></td>
    <td title="Example: admincp"><input type="text" name="admincp" id="admincp" size="50" value="<?php echo $admincp; ?>" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Moderator Control Panel Directory:</span><br />
        <span class="settingdesc">Default: "trixmod"</span></td>
    <td title="Example: modcp"><input type="text" name="modcp" id="modcp" size="50" value="<?php echo $modcp; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Cookie Prefix:</span><br />
        <span class="settingdesc">Default: bb</span></td>
    <td title="Example: bb"><input type="text" name="cookieprefix" id="cookieprefix" size="50" value="<?php echo $cookie; ?>" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Database Type:</span><br />
         <span class="settingdesc">Valid Options: mysql or mysqli</span></td>
    <td title="Example: mysql"><input type="text" name="dbtype" id="dbtype" size="50" value="<?php echo $dbtype; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Database Name:</span><br />
        <span class="settingdesc">Enter your database name</span></td>
    <td title="Example: vbforum"><input type="text" name="dbname" id="dbname" size="50" value="<?php echo $dbname; ?>" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Table Prefix:</span><br />
        <span class="settingdesc">Optional Table Prefix (OK to leaave blank.)</span></td>
    <td title="Example: vb_"><input type="text" name="tableprefix" id="tableprefix" size="50" value="<?php echo $tableprefix; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Technical Email:</span><br />
        <span class="settingdesc">Database errors will be emailed to this address</span></td>
    <td title="Example: user@example.com"><input type="text" name="technicalemail" id="technicalemail" size="50" value="<?php echo $email; ?>" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Database Server Name:</span><br />
        <span class="settingdesc">The server name of your database server</span></td>
    <td title="Example: mysql.server.com"><input type="text" name="servername" id="servername" size="50" value="<?php echo $servername; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Database Port #:</span><br />
        <span class="settingdesc">Port of database server</span></td>
    <td title="Example: 3306"><input type="text" name="port" id="port" size="50" value="<?php echo $portnum; ?>" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Database Username:</span><br />
        <span class="settingdesc">Username to log into database server</span></td>
    <td title="Example: vbuser"><input type="text" name="username" id="username" size="50" value="<?php echo $dbusername; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Database Password:</span><br />
        <span class="settingdesc">Password for database username (no single-quotes allowed)</span></td>
    <td title="Example: mYP@$$wErD!110"><input type="password" name="password" id="port" size="50" value="<?php echo $dbpassword; ?>" onfocus="showpass()" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Users That Can View Admin Log:</span><br />
        <span class="settingdesc">Comma separated list of userids that can view admin log</span></td>
    <td title="Example: 1,2,5,10"><input type="text" name="viewadminlog" id="viewadminlog" size="50" value="<?php echo $viewadminlog; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Users That Can Prune Admin Log:</span><br />
        <span class="settingdesc">Comma separated list of userids that can prune admin log</span></td>
    <td title="Example: 1,2,5"><input type="text" name="pruneadminlog" id="pruneadminlog" size="50" value="<?php echo $pruneadminlog; ?>" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Users That Can Run Queries:</span><br />
        <span class="settingdesc">Comma separated list of userids that can run db queries</span></td>
    <td title="Example: 1,2"><input type="text" name="runquery" id="runquery" size="50" value="<?php echo $runquery; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Undeletable Users:</span><br />
        <span class="settingdesc">Comma separated list of userids that can't be edited via AdminCP</span></td>
    <td title="Example: 1,2,10"><input type="text" name="undelete" id="undelete" size="50" value="<?php echo $undelete; ?>" /></td>
  </tr>
  <tr class="alt2">
    <td><span class="settingname">Super-Administrators:</span><br />
        <span class="settingdesc">Comma separated list of userids that can set Admin permissions</span></td>
    <td title="Example: 1,2,3"><input type="text" name="superadmin" id="superadmin" size="50" value="<?php echo $superadmin; ?>" /></td>
  </tr>
  <tr>
    <td><span class="settingname">Other Options:</span><br />
    <span class="settingdesc">Advanced Options - Usually these should be unchecked</span></td>
    <td>  
       <input type="checkbox" name="debugmode" <?php echo $debug_check ?> id="debugmode" value="1" />
      <label for="debugmode">Debug Mode?</label>
      &nbsp;<input type="checkbox" name="disablehooks" <?php echo $hooks_check ?> id="disablehooks" value="1" />
      <label for="disablehooks">Disable Hooks?</label><br />
      <input type="checkbox" name="disablemail" <?php echo $mail_check ?> id="disablemail" value="1" />
      <label for="disablehooks">Disable All Email?</label>
      
      
      </td>
  </tr>
</table>
<br />
<div align="center">
<input name="submit" type="submit" value="Submit" />
 &nbsp; <input name="reset" type="reset" value="Reset" id="reset" />
</div>
  
  </form>
  </div>
</div>

</body>
</html>
