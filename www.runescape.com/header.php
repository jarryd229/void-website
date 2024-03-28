<?php
if (!defined('RUNESCAPE')) {
    exit;
}

$title = SITE_NAME;
if (defined('PAGE_TITLE')) {
    $title .= ' - ' . PAGE_TITLE;
}

$keywords = SITE_KEYWORDS;
if (defined('PAGE_KEYWORDS')) {
    $keywords = PAGE_KEYWORDS;
}

$description = SITE_DESCRIPTION;
if (defined('PAGE_DESCRIPTION')) {
    $description = PAGE_DESCRIPTION;
}


$q = dbquery("SELECT * FROM users WHERE UID = '" . USER_ID . "' LIMIT 1");
if($q->num_rows > 0) {
    $row = $q->fetch_assoc();
    $username = $row['username'];
    $displayname = $row['displayname'];
}

$tab = "nav";
if (defined("PAGE_TAB")) {
    $tab_id = PAGE_TAB;

    switch ($tab_id) {
        case 0: $tab = "nav";
            break;
        case 1: $tab = "navhome";
            break;
        case 2: $tab = "navplay";
            break;
        case 3: $tab = "navaccount";
            break;
        case 4: $tab = "navguide";
            break;
        case 5: $tab = "navcommunity";
            break;
        case 6: $tab = "navhelp";
            break;
        case 7: $tab = "navlogin";
            break;
    }
}


$skin1 = dbquery("SELECT runescape_theme FROM website_settings;");

if($skin1->num_rows > 0) {
    $row = $skin1->fetch_assoc();
	$skin = $row['runescape_theme'];
  
    switch ($skin) {
		case 0: $skin = "default";
		break;
		case 1: $skin = "cc";
            break;
		case 2: $skin = "m4";
		    break;
		case 3: $skin = "mob";
            break;	
		case 4: $skin = "blue";
            break;		
        case 5: $skin = "halloween";
            break;
		case 6: $skin = "christmas";
            break;
		case 7: $skin = "old";
            break;
		case 8: $skin = "halloween_old";
            break;
	}
}


$online = dbevaluate("SELECT COUNT(UID) FROM users WHERE online = '1';");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1">
<head>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo WWW; ?>/favicon.ico">
    <link rel="SHORTCUT ICON" href="<?php echo WWW; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo WWW; ?>/img/mobile.png">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="Content-Language" content="en,English">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="title" content="<?php echo $title; ?>">
    <title><?php echo $title; ?></title>
    <style type="text/css">/*\*/@import url(<?php echo WWW; ?>/css/skins/<?php echo $skin; ?>/global-30.css);/**/</style>
    <script type="text/javascript" src="<?php echo WWW; ?>/js/jquery/jquery_1_4_2.js"></script><!--jquery_1_3_2.js -->
    <script type="text/javascript">
        function h(o){o.getElementsByTagName('span')[0].className='shimHover';}
        function u(o){o.getElementsByTagName('span')[0].className='shim';}
        document.domain='<?php $_SERVER["HTTP_HOST"] ?>';
    </script>
    <link rel="alternate" type="application/rss+xml" title="RuneScape - Latest news" href="rss.php">
</head>

<body id="<?php echo $tab; ?>" class="bodyBackground">
    <a name="top"></a>
        <div id="scroll">
            <div id="head"><div id="headBg">
                    <div id="headOrangeTop"></div>
                    <img src="<?php echo WWW; ?>/img/main/skins/<?php echo $skin; ?>/head_image.jpg" alt="RuneScape" />
                    <div id="headImage"><a href="<?php echo WWW; ?>" id="logo_select"></a>
					<!--
					<div id="lang">
                        <a href="http://www.runescape.com/title.ws"><img alt="English" title="English" src="<?php echo WWW; ?>/img/main/layout/en.gif" /></a>
                        <a href="http://www.runescape.com/l=1/title.ws"><img alt="Deutsch" title="Deutsch" src="<?php echo WWW; ?>/img/main/layout/de.gif" /></a>
                        <a href="http://www.runescape.com/l=2/title.ws"><img alt="Fran&ccedil;ais" title="Fran&ccedil;ais" src="<?php echo WWW; ?>/img/main/layout/fr.gif" /></a>
                        <a href="http://www.runescape.com/l=3/title.ws"><img alt="Portugu&ecirc;s (BR)" title="Portugu&ecirc;s (BR)" src="<?php echo WWW; ?>/img/main/layout/br.gif" /></a>
                    </div>
					 -->
                        <div id="player_no">There are currently <?php echo $online; ?> people playing!</div>
						<?php if (LOGGED_IN) { 
						//if($row['client_rights'] == '2')
						//  echo '<div id="sessionText">You are logged in as <span id="accountName"><img src=" '. WWW .'/img/forum/crown_gold.gif"  title="Administrator">' . ucwords(str_replace('_', ' ', $username)) . '</span></div>';
						//if($row['client_rights'] == '1')
						 // echo '<div id="sessionText">You are logged in as <span id="accountName" style="color:silver"><img src=" '. WWW .'/img/forum/crown_silver.gif "  title="Moderator"> ' . ucwords(str_replace('_', ' ', $username)) . '</span></div>';
						  //if($row['client_rights'] == '0')
                        // echo '<div id="sessionText">You are logged in as <span id="accountName">' . ucwords(str_replace('_', ' ', $username)) . '</span></div>';
						// }              
						?>
						 <div id="sessionText">You are logged in as <span id="accountName"> <?php echo ucwords(str_replace('_', ' ', $displayname)); ?></span></div>
                        <?php } ?>
                    </div>
                    <div id="headOrangeBottom"></div>
                    <div id="headAdvert">
                        <script type="text/javascript"><!--
                            google_ad_client = "pub-9355552874197940";
                            /* 728x90, created 3/2/09 */
                            google_ad_slot = "0844195204";
                            google_ad_width = 728;
                            google_ad_height = 90;
                            //-->
                        </script>
                        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
                    </div>
                    <div id="menubox">
                        <ul id="menus">
                            <li class="top"><a href="<?php echo WWW; ?>" id="home" class="tl"><span class="ts">Home</span></a></li>
                            <li class="top"><a id="play" class="tl" href="<?php echo WWW; ?>" onclick="if(!this.j){this.href+='?j=1';this.j=true;}"><span class="ts">Play Now</span><!--[if gt IE 6]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <ul>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>New Users</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" onclick="if(!this.j){this.href+='?j=1';this.j=true;}" class="fly"><span>Existing Users</span></a></li>
                                </ul>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>

                            <li class="top"><a id="account" class="tl" href="<?php echo WWW; ?>"><span class="ts">Account</span><!--[if gt IE 6]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <ul>
								<li><a href="<?php echo WWW; ?>" class="fly"><span>Upgrade Your Account</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Create New Account</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Account Management</span></a></li>
                                </ul>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>

                            <li class="top"><a id="guide" class="tl" href="<?php echo WWW; ?>/kbase/guid/manual"><span class="ts">Game Guide</span><!--[if gt IE 6]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <!--[if lte IE 6]><iframe src=""></iframe><![endif]-->
                                <ul>
                                    <li><a href="<?php echo WWW; ?>/kbase/guid/manual" class="fly"><span>Manual</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>QuestHelp</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Grand Exchange</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Rules</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Lores</span></a></li>
                                    <li><a href="<?php echo WWW; ?>/what_is_runescape" class="fly"><span>What is RuneScape?</span></a></li>
                                </ul>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>

                            <li class="top"><a id="community" class="tl" href="<?php echo WWW; ?>"><span class="ts">Community</span><!--[if gt IE 6]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <!--[if lte IE 6]><iframe src=""></iframe><![endif]-->
                                <ul>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Forums</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Hiscores</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Player Submissions</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Adventurer's Log</span></a></li>

                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Polls</span></a></li>
                                    <li><a href="<?php echo WWW; ?>/kbase/guid/Downloads_and_Wallpapers" class="fly"><span>Downloads &amp; Wallpapers</span></a></li>
									<li><a href="<?php echo WWW; ?>/kbase/guid/media" class="fly"><span>Media</span></a></li>
                                </ul>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>

                            <li class="top"><a id="help" class="tl" href="<?php echo WWW; ?>"><span class="ts">Help</span><!--[if gt IE 6]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <!--[if lte IE 6]><iframe src=""></iframe><![endif]-->
                                <ul>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Customer Support</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Password Recovery</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Locked Account Recovery</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Appeal Bans &amp; Mutes</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Submit a Bug Report</span></a></li>
                                    <li><a href="<?php echo WWW; ?>" class="fly"><span>Parents' Guide</span></a></li>
                                </ul>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>

<?php if (LOGGED_IN) { ?>
    <li class="top"><a href="<?php echo WWW; ?>/logout" id="logout" class="tl"><span class="ts">Log Out</span></a></li>
<?php } else { ?>
    <li class="top"><a href="<?php echo WWW; ?>/login" id="login" class="tl"><span class="ts">Log In</span></a></li>
<?php } ?>
</ul>
<br class="clear" />
</div>