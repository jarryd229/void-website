<?php
define('PAGE_TAB', 4);
define('PAGE_TITLE', 'Homepage');

require_once("global.php");
require_once("header.php");

?>

<script src="<?php echo WWW; ?>/css/scriptaculous/functions-0.js" type="text/javascript"></script>
<script src="<?php echo WWW; ?>/css/scriptaculous/prototype-0.js" type="text/javascript"></script>
<script src="<?php echo WWW; ?>/css/scriptaculous/effects-0.js" type="text/javascript"></script>
<script src="<?php echo WWW; ?>/css/scriptaculous/lightbox-0.js" type="text/javascript"></script>
<script type="text/javascript">
var waittime = 1500;
var fadetime = 75;
var numofimg = 10;

function showAll(){
  for(var i=1;i<11;i++){
   document.getElementById("screen_b"+i).style.filter="alpha(opacity=0)";
   document.getElementById("screen_b"+i).style.opacity= 0;
 }
}

function hideAll(id){
 for(var i=1;i<11;i++){
  if (id==i){
   document.getElementById("screen_b"+i).style.filter="alpha(opacity=10)";
   document.getElementById("screen_b"+i).style.opacity= 0.10;
  }
  else {
   document.getElementById("screen_b"+i).style.filter="alpha(opacity=0)";
    document.getElementById("screen_b"+i).style.opacity= 0;
  }
 }
}

function setopacity(obj, opacity){
 obj.style.filter="alpha(opacity="+(opacity*100)+")";
 obj.style.opacity= opacity;
}

function changeimg(currentStep,nextimg){
 var divimg = document.getElementById("divimg");
 var imgimg = document.getElementById("imgimg");

 if(currentStep < 9){
  setopacity(imgimg,(currentStep + 1) * 0.1);
 }
 else if(currentStep == 9){
  setopacity(imgimg,1);
  if(nextimg>numofimg)nextimg=1;
  divimg.style.background = "url(<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen"+nextimg+"_Mq.jpg)";
  setTimeout("changeimg("+(currentStep+1)+","+(nextimg+1)+")",waittime);
  return;
 }
 else if(currentStep > 9 && currentStep < 19){
  setopacity(imgimg, 1 - ((currentStep - 9) * 0.1));
 }
 else if(currentStep==19){
  setopacity(imgimg,0);
  if(nextimg>numofimg)nextimg=1;
  imgimg.src = "<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen"+nextimg+"_Mq.jpg";
  setTimeout("changeimg(0,"+(nextimg+1)+")",waittime);
  return;
 }
 setTimeout("changeimg("+(currentStep+1)+","+nextimg+")",fadetime);
}
setTimeout("changeimg(0,3)",waittime);
</script>
  <style type="text/css">
 .background_container { background: url(<?php echo WWW; ?>/img/main/what_is_runescape/container_background.jpg) no-repeat; width: 754px; height: 674px; position: relative; }
 .character_arm { background: url(<?php echo WWW; ?>/img/main/what_is_runescape/character_arm.gif) no-repeat; width: 46px; height: 233px; position: absolute; right: -46px; top: 71px; }
 .character_head { background: url(<?php echo WWW; ?>/img/main/what_is_runescape/character_head.gif) no-repeat; width: 69px; height: 37px; position: absolute; right: 79px; top: -37px; }
 .character_sword {  background: url(<?php echo WWW; ?>/img/main/what_is_runescape/character_sword.gif) no-repeat; width: 35px; height: 70px; position: absolute; right: -35px; top: 353px; }
 .intro_text { position: absolute; line-height: 17px; color: white; width: 452px; height: 151px; top: 80px; left: 38px; overflow: hidden; }
 .join_now_text { position: absolute; text-align: center; color: #ffd200; width: 208px; height: 60px; bottom: 276px; left: 285px; overflow: hidden; }
 .button_container { position: absolute; width: 218px; height: 72px; top: 252px; left: 280px; }
 .join_now { cursor:pointer; display:block; height:54px; position:relative; width:217px; color: white; font-weight: bold; font-size: 12px; }
 .join_now:hover .buttbg { background-position: bottom left}
 .buttbg { background:url(<?php echo WWW; ?>/img/main/what_is_runescape/join_button.png) no-repeat; height:71px; width:222px; display: block; position: absolute;}
 .marquee_image { width: 220px; height: 146px; position: absolute; top: 251px; left: 40px; }
 .screenshots_box { width: 665px; height: 200px; text-align: left; position: absolute; bottom: 47px; left: 50px; }
 .screenshots_text { font-size: 11px; margin: 0px; color: white; }
 .screenshots_text b { color: #ffd200; }
 .assets { text-align: center; margin: 0px 0px 6px 0px; }
 .thumb_border { position: relative; float: left; width: 124px; height: 82px; margin: 9px 9px 0px 0px; background:url(<?php echo WWW; ?>/img/main/what_is_runescape/tn_border.png) no-repeat; }
 .thumb_border a img { margin: 2px; }
 #imgimg { top: 0px; left: 0px; }
 .normal_image { cursor: pointer; background-color: white; margin: 2px; position: absolute; left: 0px; top: 0px; width: 120px; height: 78px; filter:alpha(opacity=0); opacity:0; }

 
 #loading img { display:inline; }
 #lightbox{ position: absolute; left: 0; width: 100%; z-index: 200; text-align: center; line-height: 0; }
 #lightbox a img{ border: none; }
 #outerImageContainer{ background-color: #fff; width: 250px; height: 250px; margin: 0 auto; }
 #imageContainer{ padding: 10px; position: relative; }
 #loading{ position: absolute; top: 40%; left: 0%; height: 25%; width: 100%; text-align: center; line-height: 0; }
 #imageContainer>#hoverNav{ left: 0;}
 #imageDataContainer{ font: 10px Verdana, Helvetica, sans-serif; background-color: #fff; margin: 0 auto; line-height: 1.4em; overflow: auto; width: 100%; }
 #imageData{ padding:0 10px; color: #666; }
 #imageData #imageDetails{ text-align: center; margin-bottom:5px;}
 #imageData #caption{ font-weight: bold; display:block; text-align:center; }
 #bottomNav {position:absolute; top:10px; right:10px}
 #overlay{ position: absolute; top: 0; left: 0; z-index: 190; width: 100%; height: 500px; background-color: #000; }
 #prevLink { background:url(<?php echo WWW; ?>/img/main/what_is_runescape/lightbox/arrow_prev.gif) no-repeat left; padding-left:15px; text-decoration:none;}
 #imageDetails a { color: black; font-weight:bold;}
 #nextLink { background:url(<?php echo WWW; ?>/img/main/what_is_runescape/lightbox/arrow_next.gif) no-repeat right; padding-right:15px; text-decoration:none;}
 
</style>

    <div class="navigation">
     <div class="location">
      <b>Location: </b> <a href="<?php echo WWW; ?>">Home</a> &gt; What is Runescape
     </div>
    </div>
   </div>
   <div id="content">
<div id="article">
<div class="sectionHeader">
<div class="left">
<div class="right">
<div class="plaque">
What is RuneScape?
</div>
</div>
</div>
</div>
<div class="section">
<div class="background_container">
<div class="character_head"></div>
<div class="character_arm"></div>
<div class="character_sword"></div>
<div class="intro_text">
RuneScape is a massively-multiplayer online game (MMOG), set in a fantasy world of warring races, ravaged landscapes and sinister powers. Having chosen an adventurer, players are free to find their role within it: to live by the sword and face hundreds of enemies, to further the storyline in RuneScape's quests, or to train in any of a number of skills.
<br/><br/>
RuneScape can be played directly in your browser, requiring no installation. It is also free to play, offering everyone the chance to explore the involving story and vast game area without paying a single gold piece!
</div>
<div id="divimg" class="marquee_image" style="padding:0;background:transparent url(<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen1_Mq.jpg)">
<img id="imgimg" class="marquee_image" style="margin:0;opacity:0;filter:alpha(opacity=0)" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen2_Mq.jpg" alt="Screenshot Viewer"/>
</div>
<div class="button_container">
<a href="<?php echo WWW; ?>/create" class="join_now"><span class="buttbg"></span>Join Now</a>
</div>
<div class="join_now_text">
Join now to choose your character
<br/>
and start exploring the magical
<br/>
realm of RuneScape.
</div>
<div class="screenshots_box"/>
<div class="screenshots_text"><b>Screenshots</b> (Click an image below to enlarge)</div>
<div class="thumb_border">
<a onmouseover="hideAll(1);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen1.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b1"></div><img id="screenshot1" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen1_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(2);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen2.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b2"></div><img id="screenshot2" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen2_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(3);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen3.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b3"></div><img id="screenshot3" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen3_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(4);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen4.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b4"></div><img id="screenshot4" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen4_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(5);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen5.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b5"></div><img id="screenshot5" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen5_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(6);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen6.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b6"></div><img id="screenshot6" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen6_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(7);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen7.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b7"></div><img id="screenshot7" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen7_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(8);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen8.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b8"></div><img id="screenshot8" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen8_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(9);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen9.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b9"></div><img id="screenshot9" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen9_tn.jpg" alt=""/></a>
</div>
<div class="thumb_border">
<a onmouseover="hideAll(10);" onmouseout="showAll();" href="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen10.jpg" rel="lightbox[screenshots]" title=" "><div class="normal_image" id="screen_b10"></div><img id="screenshot10" src="<?php echo WWW; ?>/img/main/what_is_runescape/screenshots/screen10_tn.jpg" alt=""/></a>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include_once("./footer.php");
?>