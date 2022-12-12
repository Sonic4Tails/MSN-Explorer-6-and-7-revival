<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/page_builder.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__page_b = new page_builder("templates/m"); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php ob_start(); ?>
<?php
	$__server->page_embeds->page_title = "YouTube";
	$__server->page_embeds->page_description = "Share your videos with friends, family, and the world";
	$__server->page_embeds->page_image = "/yt/imgbin/full-size-logo.png";
	$__server->page_embeds->page_url = "https://www.youtube.com/";
?>
<?php
	if(isset($_SESSION['siteusername'])) {
        $stmt = $__db->prepare("UPDATE users SET ip = :ip WHERE username = :username");
        $stmt->bindParam(":username", $_SESSION['siteusername']);
		$stmt->bindParam(":ip",       $_SERVER["HTTP_CF_CONNECTING_IP"]);
        $stmt->execute();

		$stmt = $__db->prepare("UPDATE users SET lastlogin = now() WHERE username = :username");
        $stmt->bindParam(":username", $_SESSION['siteusername']);
        $stmt->execute();
	}

	if(isset($_SESSION['siteusername']) && !$__user_h->user_exists(@$_SESSION['siteusername'])) {
		die("<a href='/logout'>Your user has been deleted. Logout</a>");
	}
?>
<!-- begin masthead -->
<div id="masthead" class="" dir="ltr">
	<a id="logo-container" href="/" title="SubRocks home">
	<img id="logo" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="SubRocks home">
	</a>
	<?php if(!isset($_SESSION['siteusername'])) { ?>

<div id="m_headerControl_FrameCheck">
	<script language="JavaScript">
		if (top.length != 0)
		top.location.href="/signin.aspx"
	</script>
</div>
<HTML>

<HEAD>
    <title>MSN Member Center</title>
    <meta name="MemberCenterVersion" content="9.10.373.9" >
    <meta name="MemberCenterServerName" content="XXXXMMC02" >
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Expires" CONTENT="-1">
	<LINK href='Loc/en-us/MemberCenter.css' type='text/css' rel='stylesheet'>
</HEAD>

<body topmargin="0" leftmargin="0" bgcolor="#004E82">

<div class=dMSNME_1>
<table bgcolor="#1A60A8" cellpadding=0 cellspacing=0 border=0 width=779 height=25>
	<tr>
		<td valign=middle class=big7>&nbsp;&nbsp;
			
	    	<a href=http://g.msn.com/0nwenus0/AH/00 target=_top>MSN Home</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/01 target=_top>My MSN</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/02 target=_top>Hotmail</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/04 target=_top>Shopping</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/05 target=_top>Money</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/06 target=_top>People &amp; Chat</a>
	        
		</td>
		<td valign=bottom>
			<A HREF="/sign_in"><IMG SRC="/img/signin.gif" CLASS="PassportSignIn" BORDER="0" ALT="Sign in with your .NET Passport"/></A>
		</td>
		<td width=85 valign=middle align=right>
        	<font class=search>
        		Web Search
        	</font>
        </td>

		<form id=form1 name=form1 method=get action='http://g.msn.com/0nwenus0/XX/16'>
		<td width=180 valign=middle align=left>
			<font class=search>&nbsp;&nbsp;</font><input class=sfinput type=text name=q size=14 maxlength=150 style='width:100px;'/>
            <font class=search>&nbsp;</font>
            <input type=submit id=submit1 name=submit1 size=4 value='Go'/>
            <input type=hidden name=cp value='1252'/>
            <input type=hidden name=FORM value=A8 />
		</td>
		</form>

	</tr>
</table>
</div>

<script>
	function ShowHelp(sKey)
	{
		alert('Help here');
	}
</script>

<table width=779 cellpadding=0 cellspacing=0>
<tr>
<td>

	<table bgcolor="#1A60A8" width=779 cellpadding=0 cellspacing=0 class=sf>
		<tr>
			<td rowspan=2 width=118 class=sfl>
				<script type='text/javascript' src='http://sc.msn.com/global/scr/lg/hdr35.js' />&nbsp;</script><a href=http://g.msn.com/0nwenus0/XX/14><noscript><img width=118 height=35 border=0 src=http://sc.msn.com/global/c/lg/msft_118x35.gif /></noscript><script type=text/javascript>logoImg('http://sc.msn.com');</script></a>
			</td>

			<td rowspan=2 width=* class=sfl valign=bottom><a href=default.aspx>
				Member Center
			</a></td>
			<td rowspan=4 valign=bottom width=113 class=sfm><img src=img/MCHeader.gif width=113 height=44 border=0></td>
			<td width=458 class=sfr style="font-size: 13px;">&nbsp;</td><td height=10></td>
		</tr>
		<tr>
			<td rowspan=2 class=sfi valign=bottom align=right><a href='language.aspx?lm=en-us'>Language</a>&nbsp;&nbsp;</td>
			<td height=26></td>
		</tr>
		<tr>
			<td colspan=2 class=sflb>&nbsp;</td>
			<td height=9></td>
		</tr>
	</table>

</td>
</tr>
<tr>
<td>

</td>
</tr>
</table>


<img id="m_ctag" height="1" width="1" src="http://c.msn.com/c.gif?DI=2340&PI=74163&TP=http://membercenter.msn.com/signin.aspx&RF=" />
<table cellSpacing=0 cellPadding=0 width=779 height=400 border=0 bgcolor=white>
<font class=mcsb_text>
<tr>
	<td valign=top>
		<font class=mcp_text>
		<table height='100%' cellspacing='0' cellpadding='0' border='0' width='779'>
		<tr>
			<td height='75' width='17' background='img/gradient.png'><img src='img/clear.gif' width='17' height='1' /></td>
			<td height='75' width='116'><img src='img/msnlogo.png' width='116' height='75' /></td>
			<td height='75' align='bottom' width='1510' background='img/gradient.png'><img src='img/clear.gif' width='10' height='1' /><font class='STARTHEADING' color='#969698'>Welcome to Member Center</font></td>
		</tr>
		<tr>
			<td colspan='3' bgcolor='#dfe5f3' valign='top'>
				<div align='center'>
				<br>
				<table width='75%' border='1' bordercolor='#88a4d4' cellpadding='0' cellspacing='0'>
				<tr>
					<td>
						<table width='100%' border='0' cellpadding='7' cellspacing='0'>
						<tr>
							<td bgcolor='#aabede'><b>Please sign in</b></td>
						</tr>
						<tr>
							<td height='91' bgcolor='#ccdaf4'>
							<img src='img/mclogo.gif' hspace='10' align='left'>
							<b>
							Welcome to Member Center
							</b><br>
							To get started, click Sign In.
							<br><br>
							<div align=center>
								<A HREF="/sign_in"><IMG SRC="/img/signin.gif" CLASS="PassportSignIn" BORDER="0" ALT="Sign in with your .NET Passport"/></A>
							</div></td>
						</tr>
						<tr>
							<td bgcolor='#edf2f8'>
								<font class=mcqt_text><br>
								Get the most from your membership. Find useful articles, tutorials, customization tips, online support, upgrades, and more at Member Center.
									<p><b>Need the latest MSN software? <a href='download.aspx?lm=en-us'>Download Now.</a></b>
								
								</font>
								<br><br>
							</td>
						</tr>
					</td>
				</tr>
				</table>
				</table>
				<br>
				<table border='0' cellpadding='5'>
					<tr>
						<td>
							Not a member?
						</td>
						<td>
							<a href='http://join.msn.com/?pgmarket=en-us'><img border='0' src='Loc/en-us/joinnow.gif'></a>
						</td>
					</tr>
				</table>
				</div>
			</td>
		</tr>
		</table>
	</td>
</tr>
</font>
</table>

<!-- bottom of signin -->



<!-- Footer for MemberCenter -->

<!-- WriteTagLine(); -->

<table width=779 height=20 cellpadding=0 cellspacing=0 border=0>
<tr>
<td class=big1 valign=middle align=left>&nbsp;&nbsp;
  MSN - More Useful Everyday
</td>
</tr>
</table>

<!-- WriteFooterLinks();  -->

<div class=dMSNME_1>
<table width=779 height=20 cellpadding=0 cellspacing=0 border=0>
<tr>
<td valign=middle align=left class=big7>
&nbsp;&nbsp;
  
			<a href=http://g.msn.com/0nwenus0/AH/06 target=_top>MSN Home</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/08 target=_top>My MSN</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/09 target=_top>Hotmail</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/11 target=_top>Shopping</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/12 target=_top>Money</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/13 target=_top>People &amp; Chat</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/10 target=_top>Search</a>
			
</td>
</tr>
</table>
</div>


<!-- WriteTerms -->

<table width=779 height=16 cellpadding=0 cellspacing=0 border=0 class=terms>
<tr>
<td height=15 style='border-top-style:solid;border-top-width:1px;border-top-color:#87B3D0'>
&nbsp;&nbsp;
  
			&copy; 2004 Microsoft Corporation. All rights reserved.
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/18">Terms of Use</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/19">Advertise</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/20">TRUSTe Approved Privacy Statement</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/21">GetNetWise</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/24">Anti-Spam Policy</a>
			
</td>
</tr>
</table>



</body>
</HTML>

<!-- End footer for MemberCenter -->
	<?php } elseif ($__user_h->fetch_sub($_SESSION['siteusername']) == "1") { ?>
<div id="m_headerControl_FrameCheck">
	<script language="JavaScript">
		if (top.length != 0)
		top.location.href="/join.aspx"
	</script>
</div>
<HTML>

<HEAD>
    <title>MSN Member Center</title>
    <meta name="MemberCenterVersion" content="9.10.373.9" >
    <meta name="MemberCenterServerName" content="XXXXMMC01" >
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Expires" CONTENT="-1">
	<LINK href='Loc/en-us/MemberCenter.css' type='text/css' rel='stylesheet'>
</HEAD>

<body topmargin="0" leftmargin="0" bgcolor="#004E82">

<div class=dMSNME_1>
<table bgcolor="#1A60A8" cellpadding=0 cellspacing=0 border=0 width=779 height=25>
	<tr>
		<td valign=middle class=big7>&nbsp;&nbsp;
			
	    	<a href=http://g.msn.com/0nwenus0/AH/00 target=_top>MSN Home</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/01 target=_top>My MSN</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/02 target=_top>Hotmail</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/04 target=_top>Shopping</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/05 target=_top>Money</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/06 target=_top>People &amp; Chat</a>
	        
		</td>
		<td valign=bottom>
			<A HREF="http://login.passport.com/login.srf?lc=1033&id=42579&ru=http%3a%2f%2fmembercenter.msn.com%2fjoin.aspx&tw=1800&kv=5&ct=1092008120&cb=&ver=2.5.1016.0&tpf=494ff11b580cef1bccace2efbd357f92"><IMG SRC="/img/signin.gif" CLASS="PassportSignIn" BORDER="0" ALT="Sign in with your .NET Passport"/></A>
		</td>
		<td width=85 valign=middle align=right>
        	<font class=search>
        		Web Search
        	</font>
        </td>

		<form id=form1 name=form1 method=get action='http://g.msn.com/0nwenus0/XX/16'>
		<td width=180 valign=middle align=left>
			<font class=search>&nbsp;&nbsp;</font><input class=sfinput type=text name=q size=14 maxlength=150 style='width:100px;'/>
            <font class=search>&nbsp;</font>
            <input type=submit id=submit1 name=submit1 size=4 value='Go'/>
            <input type=hidden name=cp value='1252'/>
            <input type=hidden name=FORM value=A8 />
		</td>
		</form>

	</tr>
</table>
</div>

<script>
	function ShowHelp(sKey)
	{
		alert('Help here');
	}
</script>

<table width=779 cellpadding=0 cellspacing=0>
<tr>
<td>

	<table bgcolor="#1A60A8" width=779 cellpadding=0 cellspacing=0 class=sf>
		<tr>
			<td rowspan=2 width=118 class=sfl>
				<script type='text/javascript' src='http://sc.msn.com/global/scr/lg/hdr35.js' />&nbsp;</script><a href=http://g.msn.com/0nwenus0/XX/14><noscript><img width=118 height=35 border=0 src=http://sc.msn.com/global/c/lg/msft_118x35.gif /></noscript><script type=text/javascript>logoImg('http://sc.msn.com');</script></a>
			</td>

			<td rowspan=2 width=* class=sfl valign=bottom><a href=default.aspx>
				Member Center
			</a></td>
			<td rowspan=4 valign=bottom width=113 class=sfm><img src=img/MCHeader.gif width=113 height=44 border=0></td>
			<td width=458 class=sfr style="font-size: 13px;">&nbsp;</td><td height=10></td>
		</tr>
		<tr>
			<td rowspan=2 class=sfi valign=bottom align=right><a href='language.aspx?lm=en-us'>Language</a>&nbsp;&nbsp;</td>
			<td height=26></td>
		</tr>
		<tr>
			<td colspan=2 class=sflb>&nbsp;</td>
			<td height=9></td>
		</tr>
	</table>

</td>
</tr>
<tr>
<td>

</td>
</tr>
</table>


<img id="m_ctag" height="1" width="1" src="http://c.msn.com/c.gif?DI=2340&PI=74163&TP=http://membercenter.msn.com/join.aspx&RF=" />
<table cellSpacing=0 cellPadding=0 width=779 height=400 border=0 bgcolor=white>
<font class=mcsb_text>
<tr>
<td valign=top><font class=mcp_text>
<br><br>
<table height='100%' cellspacing='0' cellpadding='0' border='0' width='779'>
    <tr>
        <td colspan='3' valign='top'>
        <div align='center'>
        <table width='75%' border='1' bordercolor='#88a4d4' cellpadding='0' cellspacing='0'>
        <tr>
            <td>
            <table width='100%' border='0' cellpadding='7' cellspacing='0'>
            <tr>
                <td bgcolor='#aabede'><b>Welcome to the MSN Member Center</b></b></td>
            </tr>
            <tr>
                <td height='91' bgcolor='#ccdaf4'>
                <img src='img/mclogo.gif' hspace='10' align='left'>
                <b>Current Subscription</b><br>
                MSN Premium
                </td>
            </tr>
            <tr>
                <td bgcolor='#edf2f8'><font class=mcqt_text><br>
                To get started with MSN premium download the latest version of MSN Explorer and sign in with your MSN premium account
                <p>
                By being an MSN Premium customer you can get 24/7 customer support, access to MSN Explorer and more!
                <p>
                If you do not have MSN explorer 7 you can download it via the links below
                <ul>
                    <li><a href='download.aspx?lm=en-us'>Download the latest MSN software</a>
                    <li><a href='https://cdorder.msn.com'>Order an MSN CD</a>
                </ul>
                </td>
            </tr>
            </table>
            </td>
        </tr>
        </table>
        </div>
        </td>
    </tr>
</table>
<p>
</td>
</tr>
</font>
</table>



<!-- Footer for MemberCenter -->

<!-- WriteTagLine(); -->

<table width=779 height=20 cellpadding=0 cellspacing=0 border=0>
<tr>
<td class=big1 valign=middle align=left>&nbsp;&nbsp;
  MSN - More Useful Everyday
</td>
</tr>
</table>

<!-- WriteFooterLinks();  -->

<div class=dMSNME_1>
<table width=779 height=20 cellpadding=0 cellspacing=0 border=0>
<tr>
<td valign=middle align=left class=big7>
&nbsp;&nbsp;
  
			<a href=http://g.msn.com/0nwenus0/AH/06 target=_top>MSN Home</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/08 target=_top>My MSN</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/09 target=_top>Hotmail</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/11 target=_top>Shopping</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/12 target=_top>Money</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/13 target=_top>People &amp; Chat</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/10 target=_top>Search</a>
			
</td>
</tr>
</table>
</div>


<!-- WriteTerms -->

<table width=779 height=16 cellpadding=0 cellspacing=0 border=0 class=terms>
<tr>
<td height=15 style='border-top-style:solid;border-top-width:1px;border-top-color:#87B3D0'>
&nbsp;&nbsp;
  
			&copy; 2004 Microsoft Corporation. All rights reserved.
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/18">Terms of Use</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/19">Advertise</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/20">TRUSTe Approved Privacy Statement</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/21">GetNetWise</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/24">Anti-Spam Policy</a>
			
</td>
</tr>
</table>



</body>
</HTML>

<!-- End footer for MemberCenter -->

	<?php } else { ?>
<div id="m_headerControl_FrameCheck">
	<script language="JavaScript">
		if (top.length != 0)
		top.location.href="/join.aspx"
	</script>
</div>
<HTML>

<HEAD>
    <title>MSN Member Center</title>
    <meta name="MemberCenterVersion" content="9.10.373.9" >
    <meta name="MemberCenterServerName" content="XXXXMMC01" >
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Expires" CONTENT="-1">
	<LINK href='Loc/en-us/MemberCenter.css' type='text/css' rel='stylesheet'>
</HEAD>

<body topmargin="0" leftmargin="0" bgcolor="#004E82">

<div class=dMSNME_1>
<table bgcolor="#1A60A8" cellpadding=0 cellspacing=0 border=0 width=779 height=25>
	<tr>
		<td valign=middle class=big7>&nbsp;&nbsp;
			
	    	<a href=http://g.msn.com/0nwenus0/AH/00 target=_top>MSN Home</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/01 target=_top>My MSN</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/02 target=_top>Hotmail</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/04 target=_top>Shopping</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/05 target=_top>Money</a>&nbsp;|&nbsp;
	        <a href=http://g.msn.com/0nwenus0/AH/06 target=_top>People &amp; Chat</a>
	        
		</td>
		<td valign=bottom>
			<A HREF="http://login.passport.com/login.srf?lc=1033&id=42579&ru=http%3a%2f%2fmembercenter.msn.com%2fjoin.aspx&tw=1800&kv=5&ct=1092008120&cb=&ver=2.5.1016.0&tpf=494ff11b580cef1bccace2efbd357f92"><IMG SRC="/img/signin.gif" CLASS="PassportSignIn" BORDER="0" ALT="Sign in with your .NET Passport"/></A>
		</td>
		<td width=85 valign=middle align=right>
        	<font class=search>
        		Web Search
        	</font>
        </td>

		<form id=form1 name=form1 method=get action='http://g.msn.com/0nwenus0/XX/16'>
		<td width=180 valign=middle align=left>
			<font class=search>&nbsp;&nbsp;</font><input class=sfinput type=text name=q size=14 maxlength=150 style='width:100px;'/>
            <font class=search>&nbsp;</font>
            <input type=submit id=submit1 name=submit1 size=4 value='Go'/>
            <input type=hidden name=cp value='1252'/>
            <input type=hidden name=FORM value=A8 />
		</td>
		</form>

	</tr>
</table>
</div>

<script>
	function ShowHelp(sKey)
	{
		alert('Help here');
	}
</script>

<table width=779 cellpadding=0 cellspacing=0>
<tr>
<td>

	<table bgcolor="#1A60A8" width=779 cellpadding=0 cellspacing=0 class=sf>
		<tr>
			<td rowspan=2 width=118 class=sfl>
				<script type='text/javascript' src='http://sc.msn.com/global/scr/lg/hdr35.js' />&nbsp;</script><a href=http://g.msn.com/0nwenus0/XX/14><noscript><img width=118 height=35 border=0 src=http://sc.msn.com/global/c/lg/msft_118x35.gif /></noscript><script type=text/javascript>logoImg('http://sc.msn.com');</script></a>
			</td>

			<td rowspan=2 width=* class=sfl valign=bottom><a href=default.aspx>
				Member Center
			</a></td>
			<td rowspan=4 valign=bottom width=113 class=sfm><img src=img/MCHeader.gif width=113 height=44 border=0></td>
			<td width=458 class=sfr style="font-size: 13px;">&nbsp;</td><td height=10></td>
		</tr>
		<tr>
			<td rowspan=2 class=sfi valign=bottom align=right><a href='language.aspx?lm=en-us'>Language</a>&nbsp;&nbsp;</td>
			<td height=26></td>
		</tr>
		<tr>
			<td colspan=2 class=sflb>&nbsp;</td>
			<td height=9></td>
		</tr>
	</table>

</td>
</tr>
<tr>
<td>

</td>
</tr>
</table>


<img id="m_ctag" height="1" width="1" src="http://c.msn.com/c.gif?DI=2340&PI=74163&TP=http://membercenter.msn.com/join.aspx&RF=" />
<table cellSpacing=0 cellPadding=0 width=779 height=400 border=0 bgcolor=white>
<font class=mcsb_text>
<tr>
<td valign=top><font class=mcp_text>
<br><br>
<table height='100%' cellspacing='0' cellpadding='0' border='0' width='779'>
    <tr>
        <td colspan='3' valign='top'>
        <div align='center'>
        <table width='75%' border='1' bordercolor='#88a4d4' cellpadding='0' cellspacing='0'>
        <tr>
            <td>
            <table width='100%' border='0' cellpadding='7' cellspacing='0'>
            <tr>
                <td bgcolor='#aabede'><b>Sign In successful, subscription not supported</b></b></td>
            </tr>
            <tr>
                <td height='91' bgcolor='#ccdaf4'>
                <img src='img/mclogo.gif' hspace='10' align='left'>
                <b>We're sorry</b><br>
                Member Center can only be accessed by MSN Premium, MSN Plus, and MSN 9 Dial-up members. Other MSN memberships are currently not supported.
                </td>
            </tr>
            <tr>
                <td bgcolor='#edf2f8'><font class=mcqt_text><br>
                MSN Member Center helps members get the most from MSN with tutorials, feature articles, customization tips, online support, and more.
                <p>
                If you are not yet a MSN member, it is easy to join. Visit <a href='http://join.msn.com'>http://join.msn.com</a> to learn about all you get as a MSN member. MSN combines fast, reliable service with innovative Microsoft software to make the Web more useful for you and your family.
                <p>
                If you are an MSN Premium, MSN Plus, or MSN 9 Dial-up member and are not able to access Member Center, you can do any of the following:
                <ul>
                    <li><a href='http://support.msn.com'>Contact MSN Support</a>
                    <li><a href='download.aspx?lm=en-us'>Download the latest MSN software</a>
                    <li><a href='https://cdorder.msn.com'>Order an MSN CD</a>
                </ul>
                </td>
            </tr>
            </table>
            </td>
        </tr>
        </table>
        </div>
        </td>
    </tr>
</table>
<p>
</td>
</tr>
</font>
</table>



<!-- Footer for MemberCenter -->

<!-- WriteTagLine(); -->

<table width=779 height=20 cellpadding=0 cellspacing=0 border=0>
<tr>
<td class=big1 valign=middle align=left>&nbsp;&nbsp;
  MSN - More Useful Everyday
</td>
</tr>
</table>

<!-- WriteFooterLinks();  -->

<div class=dMSNME_1>
<table width=779 height=20 cellpadding=0 cellspacing=0 border=0>
<tr>
<td valign=middle align=left class=big7>
&nbsp;&nbsp;
  
			<a href=http://g.msn.com/0nwenus0/AH/06 target=_top>MSN Home</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/08 target=_top>My MSN</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/09 target=_top>Hotmail</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/11 target=_top>Shopping</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/12 target=_top>Money</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/13 target=_top>People &amp; Chat</a>&nbsp;|&nbsp;
			<a href=http://g.msn.com/0nwenus0/AH/10 target=_top>Search</a>
			
</td>
</tr>
</table>
</div>


<!-- WriteTerms -->

<table width=779 height=16 cellpadding=0 cellspacing=0 border=0 class=terms>
<tr>
<td height=15 style='border-top-style:solid;border-top-width:1px;border-top-color:#87B3D0'>
&nbsp;&nbsp;
  
			&copy; 2004 Microsoft Corporation. All rights reserved.
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/18">Terms of Use</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/19">Advertise</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/20">TRUSTe Approved Privacy Statement</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/21">GetNetWise</a>
			&nbsp;<a href="http://g.msn.com/0nwenus0/XX/24">Anti-Spam Policy</a>
			
</td>
</tr>
</table>



</body>
</HTML>

<!-- End footer for MemberCenter -->

	<?php } ?>

	<?php if(isset($error['status'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-error  yt-alert-player">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo $error['message']; ?>
			</div>
		</div></div></div>
	<?php } ?>
	<?php if(isset($_GET['error'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-error ">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo htmlspecialchars($_GET['error']); ?>
			</div>
		</div></div></div>
	<?php } ?>
	<?php if(isset($_GET['success'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-success ">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo htmlspecialchars($_GET['success']); ?>
			</div>
		</div></div></div>
	<?php } ?>
	<?php if(isset($_SESSION['error'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-error">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo $_SESSION['error']->message; ?>
			</div>
		</div></div></div>
		<?php unset($_SESSION['error']); ?>
	<?php } ?>
	<!--
	<div id="ticker" class="ytg-base "><div id="ticker-inner"><div class="ytg-wide"><button onclick="yt.net.cookies.set('HideTicker', 1, 604800);" class="yt-uix-close" data-close-parent-id="ticker"><img alt="Close" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif"></button><img class="ticker-icon" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class="ticker-content">
		<b>New minor update: <pre style="display:inline-block;">1fe1fa4</pre></b> <pre style="display:inline-block;font-size:10px;margin-left:35px;">This is a part of the Communications update. The inbox has been updated with a cleaner look.</pre>
	</div></div></div></div><br>
	-->
<?php if(isset($_SESSION['siteusername'])) { ?>
<div id="masthead-expanded" class="hid" style="display: none;height: 165px;">
	<div id="masthead-expanded-container" style="height: 142px;" class="with-sandbar">
	<?php
		$stmt = $__db->prepare("SELECT * FROM videos WHERE author = :username ORDER BY id DESC LIMIT 20");
		$stmt->bindParam(":username", $_SESSION['siteusername']);
		$stmt->execute();
	?>
	<div class="yt-uix-slider yt-rounded" id="watch-channel-discoverbox" data-slider-slide-selected="3" data-slider-slides="<?php echo $stmt->rowCount(); ?>"
		style="
		width: 580px;
		position: absolute;
		top: -9px;
		left: 1px;
		height: 146px;
		"
	>
	<button class="yt-uix-button yt-uix-button-default yt-uix-slider-prev" rel="prev"><img class="yt-uix-slider-prev-arrow" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="previous"></button>
	<button class="yt-uix-button yt-uix-button-default yt-uix-slider-next" rel="next"><img class="yt-uix-slider-next-arrow" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="next"></button>
	<div class="yt-uix-slider-body" style="width: 525px;">
		<div class="yt-uix-slider-slides">
			<?php 
				while($video = $stmt->fetch(PDO::FETCH_ASSOC)) { 
					$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
					$video['duration'] = $__time_h->timestamp($video['duration']);
					$video['views'] = $__video_h->fetch_video_views($video['rid']);
					$video['author'] = htmlspecialchars($video['author']);		
					$video['title'] = htmlspecialchars($video['title']);
					$video['description'] = $__video_h->shorten_description($video['description'], 50);
			?>
			<ul class="yt-uix-slider-slide ">
				<li class="yt-uix-slider-slide-item ">
					<div class="video-list-item  yt-tile-default ">
						<a href="/watch?v=<?php echo $video['rid']; ?>" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=channel&amp;ei=COeB-Y25jrUCFdWNIQodzR51Jg%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img alt="<?php echo $video['title']; ?>" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>"  onerror=";this.src='/dynamic/thumbs/default.jpg';" width="120" ><span class="vertical-align"></span></span></span></span><span class="video-time"><?php echo $video['duration']; ?></span>
						<button type="button" onclick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-video-ids="8C-1MRFr4s0" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
						</span></button>
						</span><span dir="ltr" class="title" title="<?php echo $video['title']; ?>"><?php echo $video['title']; ?></span><span class="stat attribution">by <span class="yt-user-name " dir="ltr"><?php echo $video['author']; ?></span></span><span class="stat view-count"><?php echo $video['views']; ?> views</span></a>
					</div>
				</li>
                
				<li>
					<hr >
				</li>
			</ul>
			<?php } ?>
		</div>
	</div>
</div>


		<div id="masthead-expanded-menus-container">
			<span id="masthead-expanded-menu-shade"></span>
			<div id="masthead-expanded-menu" class="">
				<span class="masthead-expanded-menu-header">SubRocks</span>
				<ul id="masthead-expanded-menu-list">
					<li class="masthead-expanded-menu-item">
						<a href="/user/<?php echo htmlspecialchars($_SESSION['siteusername']); ?>" class="yt-uix-sessionlink" data-sessionlink="ei=nn0KUubpEcL8kwLQ5oGQDA&amp;feature=mhee">My channel</a>
					</li>
					<li class="masthead-expanded-menu-item">
						<a href="/my_videos" class="yt-uix-sessionlink" data-sessionlink="ei=nn0KUubpEcL8kwLQ5oGQDA&amp;feature=mhee">
						Video Manager
						</a>
					</li>
					<li class="masthead-expanded-menu-item">
						<a href="#" class="yt-uix-sessionlink" data-sessionlink="ei=nn0KUubpEcL8kwLQ5oGQDA&amp;feature=mhee">Subscriptions</a>
					</li>
					<li class="masthead-expanded-menu-item">
						<a href="/inbox/" class="yt-uix-sessionlink" data-sessionlink="ei=nn0KUubpEcL8kwLQ5oGQDA&amp;feature=mhee">Inbox</a>
					</li>
				</ul>
			</div>
			<div id="masthead-expanded-google-menu">
				<span class="masthead-expanded-menu-header">
				Account
				</span>
				<div id="masthead-expanded-menu-google-container">
					<div id="masthead-expanded-menu-google-column1">
						<ul>
							<li class="masthead-expanded-menu-item"><a href="/user/<?php echo htmlspecialchars($_SESSION['siteusername']); ?>">Profile</a></li>
							<li class="masthead-expanded-menu-item"><a href="#">SubRocks+</a></li>
							<li class="masthead-expanded-menu-item">
								<a href="/user/<?php echo htmlspecialchars($_SESSION['siteusername']); ?>">
								Settings
								</a>
							</li>
						</ul>
					</div>
					<div id="masthead-expanded-menu-google-column2">
						<div id="masthead-expanded-menu-account-container">
							<img id="masthead-expanded-menu-gaia-photo" alt="" data-src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_SESSION['siteusername']); ?>" src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_SESSION['siteusername']); ?>">
							<div id="masthead-expanded-menu-account-info" class="email-only">
								<p><?php echo htmlspecialchars($_SESSION['siteusername']); ?></p>
								<p id="masthead-expanded-menu-email">This is you.</p>
							</div>
						</div>
						<ul>
							<li class="masthead-expanded-menu-item">
								<a class="end" href="/logout">
								Sign out
								</a>
							</li>
							<li class="masthead-expanded-menu-item">
								<div class="yt-uix-clickcard masthead-expanded-menu-switch" data-card-class="masthead-card-switch-account">
									<button onclick=";return false;" class="yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-button-size-default" type="button" data-position="rightbottom" data-orientation="vertical" role="button">    
									</button>
									<div class="yt-uix-clickcard-content">
										<ul id="yt-masthead-multilogin">
											<li>
												<a class="yt-masthead-multilogin-user yt-valign" href="/sign_in">
												<span class="video-thumb yt-masthead-multilogin-user-icon yt-thumb yt-thumb-46">
												<span class="yt-thumb-square">
												<span class="yt-thumb-clip">
												<span class="yt-thumb-clip-inner">
												<img alt="<?php echo htmlspecialchars($_SESSION['siteusername']); ?>" src="https://lh3.googleusercontent.com/-fkHTNWtyMoM/AAAAAAAAAAI/AAAAAAAAAAA/dZZ7bn_kmxE/s46-c-k/photo.jpg" width="46">
												<span class="vertical-align"></span>
												</span>
												</span>
												</span>
												</span>
												<span class="yt-masthead-multilogin-user-content yt-valign-container">
												<span class="yt-masthead-multilogin-user-link" dir="ltr"><?php echo htmlspecialchars($_SESSION['siteusername']); ?></span><br>
												jamie@vid.io
												</span>
												</a>
											</li>
											<li>
												<a class="yt-masthead-multilogin-user yt-valign" href="/sign_in">
													<span class="video-thumb yt-masthead-multilogin-user-icon yt-thumb yt-thumb-46">
													<span class="yt-thumb-square">
													<span class="yt-thumb-clip">
													<span class="yt-thumb-clip-inner">
													<img alt="<?php echo htmlspecialchars($_SESSION['siteusername']); ?>" src="https://lh4.googleusercontent.com/-jGr7ddTE474/AAAAAAAAAAI/AAAAAAAAAAA/nO6xbnZniy0/s46-c-k/photo.jpg" width="46">
													<span class="vertical-align"></span>
													</span>
													</span>
													</span>
													</span>
													<span class="yt-masthead-multilogin-user-content yt-valign-container">
													<span class="yt-masthead-multilogin-user-link" dir="ltr"><?php echo htmlspecialchars($_SESSION['siteusername']); ?></span><br>
													</span>
													<div class="yt-alert yt-alert-naked yt-alert-success">
														<div class="yt-alert-icon">
															<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
														</div>
													</div>
												</a>
											</li>
										</ul>
										<div id="yt-masthead-multilogin-actions" class="yt-grid-box">
											<button id="yt-masthead-multilogin-sign-out" onclick="document.logoutForm.submit();return false;" class=" yt-uix-button yt-uix-button-link yt-uix-button-size-default" type="button" role="button">    <span class="yt-uix-button-content">
											Sign out 
											</span>
											</button>
											<a href="https://accounts.google.com/AddSession?service=youtube&amp;uilel=0&amp;cont…er%252Bballoon%252Bfight%26nomobiletemp%3D1&amp;hl=en_US&amp;passive=false">Add account</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
<?php } ?>
<div id="alerts">

</div>
<!-- end masthead -->