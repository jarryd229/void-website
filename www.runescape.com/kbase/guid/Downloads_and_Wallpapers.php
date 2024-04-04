<?php 
define('PAGE_TAB', 5);
require_once("../../global.php");
require_once("../../header.php");

require_once("../subcategory_script.php");
?>

<style type="text/css">

.brown_links {
 padding: 0 0 5px;
}

.anchors {
 width: 633px;
 margin: auto;
}
.downloadsAnchor {
 float: left;
 margin: 0 1px;
}
.downloadsAnchor,
.downloadsAnchor img {
 width: 209px;
 height: 33px;
}
.downloadsAnchor:hover img {
 visibility: hidden;
}
#anchorDownloads {
 background-image: url(<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/downloads_hover.png);
}
#anchorDuelCards {
 background-image: url(<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/duel_cards_hover.png);
}
#anchorWallpapers {
 background-image: url(<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpapers_hover.png);
}

.files_image_border_s {
 border:1px solid #785D2C;
 height:86px;
 width:114px;
}

.files_image_border {
 border:1px solid #785D2C;
 height:164px;
 width:218px;
}

.wallpaper_title {
 text-align: center;
 font-size: 12px;
 font-weight: bold;
 margin-top: 6px;
 margin-bottom: 3px;
}

.downloads_title {
 font-size: 12px;
 font-weight: bold;
 color: #ac8b56;
 line-height: 0px;
 margin-top: 5px;
 margin-bottom: 15px;
}

.downloads_content {
 font-size: 10pt;
}

.downloads_content_bottom {
 font-size: 10pt;
 position: absolute;
 bottom: 12px;
 float: left;
}

.downloads_text_wrapper {
 width: 570px;
 height: auto;
 float: left;
}

.downloads_image {
 margin-right: 6px;
 float: left;
}

.wallpaper_desc {
 text-align: center;
 font-size: 11px;
}

.wallpaper_wrapper {
 padding-left: 6px;
 padding-right: 6px;
 margin-bottom: 2px;
}

#brown_box_wallpaper {
 margin-bottom: 5px;
}
#brown_box_downloads {
 margin-bottom: 5px;
}
#brown_box_christmas {
 margin-bottom: 5px;
}

.downloads_info {
 background-color:#261c09;
 border:1px solid #3F3320;
 height:1%;
 padding:4px;
 position:relative;
 text-align:left;
}

.inner_wallpaper {
 background-color:#2c210d;
 border:1px solid #785D2C;
 display:inline;
 float:left;
 height:270px;
 margin:0px 2px 6px;
 padding:5px;
 position:relative;
 text-align:center;
 width:220px;
}



.wallpaper_links {
 bottom: 6px;
 font-size: 10px;
 margin-top: 5px;
 position: absolute;
 right: 7px;
 width: 220px;
 text-align: center;
}

.archive_link {
 text-align: center;
 font-weight: bold;
 margin-bottom: 5px;
}


#duelCards img {
 float: left;
 width: 140px;
 height: 140px;
 margin-right: 8px;
}
#duelTagline {
 margin-top: 4px;
 font-weight: bold;
 color: #AC8B56;
}
#duelLinks {
 font-weight: bold;
 margin-bottom: 0;
}
#duelLinks span {
 margin-right: 6px;
}
#duelLinks a {
 margin: 0 6px;
}



.inner_screenshot {
 background-color:#2c210d;
 border:1px solid #785D2C;
 display:inline;
 float:left;
 height:164px;
 margin:0px 2px 6px;
 padding:5px;
 position:relative;
 text-align:center;
 width:220px;
}
</style>

<div class="navigation">
<div class="location">
<b>Location: </b> <a href="<?php echo WWW; ?>">Home</a> &gt;

Downloads and Wallpapers<br/>
</div>
</div>
</div></div>
<div id="content">
<div id="article">
<div class="sectionHeader">
<div class="left">
<div class="right">
<h1 class="plaque">
Downloads and Wallpapers
</h1>
</div>
</div>
</div>
<div class="section">
<div class="article_theme_2">
<div class="brown_background">
<div class="inner_brown_background">
<div class="brown_links"><div class="anchors">
<a href="#downloads" id="anchorDownloads" class="downloadsAnchor"><img src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/downloads.png" alt="Downloads"/></a>
<a href="#duelcards" id="anchorDuelCards" class="downloadsAnchor"><img src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/duel_cards.png" alt="Duel Cards"/></a>
<a href="#wallpapers" id="anchorWallpapers" class="downloadsAnchor"><img src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpapers.png" alt="Wallpapers"/></a>
<br class="clear"/>
</div></div> <a name="downloads"></a>
<div id="brown_box_downloads" class="brown_box">
<div class="subsectionHeader">Downloads</div>
<div class="brown_box" style="margin-bottom: 5px;">
<div class="inner_brown_box">
The following extra files are available for download.<br/><br/>
Note: You don't need to download any of these files to play RuneScape. You can play the game directly in your web-browser by pressing "Play RuneScape" on the front page!<br/><br/>
The following files are bonus extras which are provided in addition to the game for players who want them.<br/><br/>
These are the only official RuneScape downloads. Unofficial downloads from other sites may contain viruses, keyloggers, etc.,
so if you want to run the game outside your browser, we recommend to keep your account safe you only use the client from here.
</div>
</div>
<div class="downloads_info">
<div class="inner_brown_box">
<div class="downloads_image">
<img class="files_image_border_s" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/misc/client.jpg" alt="Game Client"/>
</div> <div class="downloads_text_wrapper">
<div class="downloads_title">Game Client</div>
<div class="downloads_content">
<ul>
<li>Launch RuneScape directly from your desktop, without all that browser clutter;</li>
<li>Doesn't require administrator privileges for your PC or Mac;</li>
<li>The application is open source. For a copy of the source, <a href="<?php echo WWW; ?>/downloads/jagexlauncher-src.tar.bz2?171011">click here</a>.</li>
</ul>
</div>
<div class="downloads_content">
<b>Windows:</b> <a href="<?php echo WWW; ?>/downloads/runescape.msi?171011">Click here</a> to download. (This client doesn't need Java to be installed)
<br/>
<b>Mac:</b> <a href="<?php echo WWW; ?>/downloads/runescape.dmg?171011">Click here</a> to download. (In software mode, resizing the client window can cause it to freeze)
<br/><br/>
If you are having problems, please visit our <a href="http://services.runescape.com/m=forum/forums.ws?25,26  link to    Home > RuneScape Forums > Tech Support">technical forums</a> for troubleshooting tips.
</div>
</div> <br style="clear:both"/>
</div> </div> <div class="downloads_info" style="margin-top: 5px;">
<div class="inner_brown_box">
<div class="downloads_image">
<img class="files_image_border_s" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/misc/gamebar.jpg" alt="RuneScape Game Bar"/>
</div> <div class="downloads_text_wrapper">
<div class="downloads_title">RuneScape Game Bar</div>
<div class="downloads_content">
<ul>
<li>Access RuneScape with one click of a button;</li>
<li>Reminders for Tears of Guthix, Bork, Skeletal Horror, Phoenix Lair and more;</li>
<li>Live feed of news and blogs;</li>
<li>Keep track of your Grand Exchange offers.</li>
</ul>
</div>
<div class="downloads_content">
<a target="_blank" href="http://services.runescape.com/m=toolbar/download.ws" onclick="try{pageTracker._trackPageview('/kbase/guid/Downloads_and_Wallpapers/downloadGameBar/')}catch(x){}; try{_pageTracker._trackPageview('/kbase/guid/Downloads_and_Wallpapers/downloadGameBar/')}catch(x){}">
Click Here</a> to download. (Only supported in Firefox &amp; Internet Explorer)</div>
</div> <br style="clear:both"/>
</div> </div> <div class="downloads_info" style="margin-top: 5px;">
<div class="inner_brown_box">
<div class="downloads_image">
<img class="files_image_border_s" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/Betrayal-at-Falador.jpg" alt="RuneScape Novel - Betrayal at Falador"/>
</div> <div class="downloads_text_wrapper">
<div class="downloads_title">RuneScape Novel - Betrayal at Falador</div>
<div class="downloads_content">
<ul>
<li>Download three chapters of RuneScape's first novel.</li>
<li>Begin the epic saga of black knights, werewolves and unholy deception.</li>
<li>Continue the story by <a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/Betrayal at Falador - T. S. Church.pdf" target="_blank" onclick="try{pageTracker._trackPageview('/kbase/guid/Downloads_and_Wallpapers/buyBetrayalAtFalador/')}catch(x){}; try{_pageTracker._trackPageview('/kbase/guid/Downloads_and_Wallpapers/buyBetrayalAtFalador/')}catch(x){}">buying Betrayal at Falador here</a>.</li>
</ul>
</div>
<div class="downloads_content"><a target="_blank" href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/Betrayal-at-Falador.pdf" onclick="try{pageTracker._trackPageview('/kbase/guid/Downloads_and_Wallpapers/downloadBetrayalAtFalador/')}catch(x){}; try{_pageTracker._trackPageview('/kbase/guid/Downloads_and_Wallpapers/downloadBetrayalAtFalador/')}catch(x){}">Click Here</a> to download.</div>
</div> <br style="clear:both"/>
</div> </div> <div class="downloads_info" style="margin-top: 5px;">
<div class="inner_brown_box">
<div class="downloads_image">
<img class="files_image_border_s" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/misc/worldmap_link_3.gif" alt="World Map"/>
</div> <div class="downloads_text_wrapper">
<div class="downloads_title">World Map (7th November 2011)</div><div class="downloads_content">Get the complete RuneScape world map as an image. Right-click on the "Download Now" link and click on "Save Target/Link As..." to download.</div><div class="downloads_content_bottom"><a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/map-07november2011.png" target="_blank">Download Now</a></div>
</div> <br style="clear:both"/>
</div> </div> </div>
<a name="audio_assets"></a>
<div class="brown_box brown_box_stack">
<div class="subsectionHeader">Audio Assets</div>
<div id="audioAssets" class="inner_brown_box">
<div class="downloads_image">
<img class="files_image_border_s" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/misc/audio_assets.gif" alt="Audio Assets"/>
</div> <div class="downloads_text_wrapper">
<p id="duelTagline">A selection of RuneScape music to use in your RuneScape videos or just to listen to!</p>
<p>
Here are some choice RuneScape tracks that we've remixed from the in-game originals. You might wish to use them in your RuneScape videos or just listen to them. Right-click on a link and click on "Save Target/Link As..." to download.
</p>
<p id="assetLinks">
<span>Remixes:</span>
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Animal_Allegory_Remix.mp3" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Animal_Allegory_Remix.mp3')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Animal_Allegory_Remix.mp3')}catch(x){}" target="_blank">Animal Allegory</a> | <a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Animal_Rap-o-gee_Remix.mp3" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Animal_Rap-o-gee_Remix.mp3')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Animal_Rap-o-gee_Remix.mp3')}catch(x){}" target="_blank">Animal Rap-o-gee</a> | <a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Beat_Wars_Remix.mp3" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Beat_Wars_Remix.mp3')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Beat_Wars_Remix.mp3')}catch(x){}" target="_blank">Beat Wars</a> | <a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Har'Money_Remix.mp3" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Har'Money_Remix.mp3')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Har'Money_Remix.mp3')}catch(x){}" target="_blank">Har'Money</a> | <a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Temple_Dissected_Remix.mp3" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Temple_Dissected_Remix.mp3')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/assets/Temple_Dissected_Remix.mp3')}catch(x){}" target="_blank">Temple Dissected</a>
</p>
</div> <br class="clear"/>
</div>
</div>
<a name="duelcards"></a>
<div class="brown_box brown_box_stack">
<div class="subsectionHeader">RuneScape Duel Cards</div>
<div id="duelCards" class="inner_brown_box">
<img src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/runescape_duel_cards.jpg" alt=""/>
<p id="duelTagline">Ten RuneScape Duel cards for you to download, print out and use to defeat your friends!</p>
<p>
Ever wondered which of RuneScape's biggest creatures would win in a scrap? Download and print out ten RuneScape Duel cards by using the links below, and pit creatures like TzTok-Jad against the might of the Corporeal Beast. The rules couldn't be simpler: beat your opponent by winning all their cards, and win their cards by having higher Attack, Magic, Ranged, Agility and RuneScape Power. For the full rules, click on the right-hand link below.
</p>
<p id="duelLinks">
<span>Download:</span>
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards.jpg" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards.jpg')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards.jpg')}catch(x){}" target="_blank">Cards 1-3</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards_2.jpg" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards_2.jpg')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards_2.jpg')}catch(x){}" target="_blank">Cards 4-7</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards_3.jpg" onclick="try{pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards_3.jpg')}catch(x){}; try{_pageTracker._trackPageview('<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/download_layout_trading_cards_3.jpg')}catch(x){}" target="_blank">Cards 8-10</a>
| <a href="postbag_39#rules">Game Rules</a>
</p>
<br class="clear"/>
</div>
</div>


<!--

<div id="brown_box_christmas" class="brown_box"><a name="christmas"></a>
<div class="subsectionHeader">Christmas Cards</div>
<div id="christmas" class="wallpaper_wrapper">
<div class="inner_wallpaper">
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/warble');}catch(x){}" href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/warble_save.jpg" target="_blank"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/warble_thumb.jpg" alt="A Christmas Warble"></a>
<div class="wallpaper_title">A Christmas Warble</div>
<div class="wallpaper_desc">Santa brings a Hint of Christmas Future in this festive card.</div>
<div class="wallpaper_links">
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/warble');}catch(x){}" href="<?php echo WWW; ?>/xmas_card_warble" target="_blank">Print</a> |
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/warble');}catch(x){}" href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/warble_save.jpg" target="_blank">Save</a>
</div>
</div>
<div class="inner_wallpaper">
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/falador');}catch(x){}" href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/falador_save.jpg" target="_blank"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/falador_thumb.jpg" alt="Christmas in Falador"></a>
<div class="wallpaper_title">Christmas in Falador</div>
<div class="wallpaper_desc">See the city of Sir Amik Varze and the White Knights as you have never seen it before.</div>
<div class="wallpaper_links">
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/falador');}catch(x){}" href="<?php echo WWW; ?>/xmas_card_falador" target="_blank">Print</a> |
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/falador');}catch(x){}" href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/falador_save.jpg" target="_blank">Save</a>
</div>
</div>
<div class="inner_wallpaper">
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/bob');}catch(x){}" href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/bob_save.jpg" target="_blank"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/bob_thumb.jpg" alt="Sweet Dreams"></a>
<div class="wallpaper_title">Sweet Dreams</div>
<div class="wallpaper_desc">Bob the cat is lost in a feline dream world. Can you guess what he is dreaming about?</div>
<div class="wallpaper_links">
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/bob');}catch(x){}" href="<?php echo WWW; ?>/xmas_card_bob" target="_blank">Print</a> |
<a onclick="javascript:try{pageTracker._trackPageview('/www.runescape.com/l=0/xmas_cards/bob');}catch(x){}" href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/xmas_cards/bob_save.jpg" target="_blank">Save</a>
</div>
</div>
<br class="clear">
<p style="padding: 0 1px;"><strong>Printing notes:</strong> To print these Christmas Cards from your browser please click the 'Print' link. To make sure the card fills as much of the page as possible, print them in 'landscape' orientation. You will usually find the option to change the page orientation by choosing 'Page Setup...' from the 'File' menu in your browser.</p>
</div>
</div>

-->

<a name="wallpapers"></a>
<div id="brown_box_wallpaper" class="brown_box">
<div class="subsectionHeader" style="margin-bottom:10px">Wallpapers</div>
<div class="wallpaper_wrapper">
<div class="inner_wallpaper"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_assembly/thumb.jpg" alt="Citadel Senate ">
<div class="wallpaper_title">Clan Citadel Senate</div><div class="wallpaper_desc">The senate. Found within a Clan Citadel keep.</div>
<div class="wallpaper_links">
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_assembly/clan_assembly.zip" target="_blank">1024x768 |
1280x1024
<br>
1440x900 |
1920x1200</a>
</div>
</div>
<div class="inner_wallpaper"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_dragon/thumb.jpg" alt="Citadel Dragon ">
<div class="wallpaper_title">Clan Citadel Dragon</div><div class="wallpaper_desc">Dragons fly around a Clan Citadel.</div>
<div class="wallpaper_links">
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_dragon/clan_dragon.zip" target="_blank">1024x768 |
1280x1024
<br>
1440x900 |
1920x1200</a>
</div>
</div>
<div class="inner_wallpaper"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_portal/thumb.jpg" alt="Citadel Portal ">
<div class="wallpaper_title">Clan Citadel Portal</div><div class="wallpaper_desc">A portal entrance on a floating island.</div>
<div class="wallpaper_links">
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_portal/clan_portal.zip" target="_blank">1024x768 |
1280x1024
<br>
1440x900 |
1920x1200</a>
</div>
</div>
<div class="inner_wallpaper"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_welcome/thumb.jpg" alt="Citadel Welcome Area ">
<div class="wallpaper_title">Clan Citadel Welcome Area</div><div class="wallpaper_desc">A wallpaper of the Clan Citadel Welcome Area.</div>
<div class="wallpaper_links">
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clan_welcome/clan_welcome.zip" target="_blank">1024x768 |
1280x1024
<br>
1440x900 |
1920x1200</a>
</div>
</div>
<div class="inner_wallpaper"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clanlogo/thumb.jpg" alt="Clan Logo Winners ">
<div class="wallpaper_title">Clan Logo Winners</div><div class="wallpaper_desc">The winners of the clan logo competition on a red leather background.</div>
<div class="wallpaper_links">
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clanlogo/clanlogo_1024x768.jpg" target="_blank">1024x768</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clanlogo/clanlogo_1280x1024.jpg" target="_blank">1280x1024</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clanlogo/clanlogo_1440x900.jpg" target="_blank">1440x900</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_clanlogo/clanlogo_1920x1200.jpg" target="_blank">1920x1200</a>
</div>
</div>
<div class="inner_wallpaper"><img class="files_image_border" src="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_wilderness/thumb.jpg" alt="Return of the Wilderness ">
<div class="wallpaper_title">Return of the Wilderness</div><div class="wallpaper_desc">A wallpaper of the iconic green dragon to celebrate the forthcoming return of the Wilderness.</div>
<div class="wallpaper_links">
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_wilderness/W_800x600.jpg" target="_blank">800x600</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_wilderness/W_1024x768.jpg" target="_blank">1024x768</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_wilderness/W_1280x1024.jpg" target="_blank">1280x1024</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_wilderness/W_1440x900.jpg" target="_blank">1440x900</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_wilderness/W_1600x1200.jpg" target="_blank">1600x1200</a> |
<a href="<?php echo WWW; ?>/img/main/kbase/downloads_and_wallpapers/wallpaper_wilderness/W_1920x1200.jpg" target="_blank">1920x1200</a>
</div>
</div>
<br style="clear:both"/>
<div class="archive_link">
<a href="wallpapers_archive">Click here to view more wallpapers</a>
</div>
</div> </div>


<?php require_once("../search_box_brown.php"); ?>
<?php require_once("../../footer.php"); ?>