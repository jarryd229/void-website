<?php
define('PAGE_TAB', 1);
define('PAGE_TITLE', 'Homepage');

require_once("global.php");
require_once("header.php");

 $_SESSION['came_from'] = $_SERVER['REQUEST_URI'];

?>

<style type="text/css">/*\*/@import url(<?php echo WWW; ?>/css/skins/<?php echo $skin; ?>/home-28.css);/**/</style>
<div id="content">
<div id="left">
    <a href="<?php echo WWW; ?>/create" class="createbutton" onmouseover="h(this)" onmouseout="u(this)">
        <img src="<?php echo WWW; ?>/img/main/skins/<?php echo $skin; ?>/create.jpg" alt="Create a Free Account - Start your adventure today!" />
        <span class="shim"></span>
    </a>
	
	
    <div id="features">
        <div class="narrowHeader"><img src="<?php echo WWW; ?>/img/main/titles/websitefeatures.png" alt="Website Features" /></div>
        <div class="section">
		
		
		
		<div class="feature">
		<img src="<?php echo WWW; ?>/img/main/home/feature_kbsearch_icon.jpg" alt="" />
        <div class="featureTitle">Search RuneScape.com</div>
        <div class="featureDesc" style="padding: 2px 2px 0">
		<form action=<?php echo WWW; ?>>
		<input type="hidden" name="keywords_chk" value="1">
        <input type="hidden" name="body_chk" value="1">
        <input type="hidden" name="title_chk" value="1">
        <input type="hidden" name="description_chk" value="1">
        <div class="searchbar">
		<input id="kbsearch_in" name="search_query" maxlength="300" type="text">
        <input id="kbsearch_button" type="submit" value="Go">
			</div>
			</form>
			</div>
		    </div>
		

            <div class="feature">
                <a href="<?php echo WWW; ?>"><img src="<?php echo WWW; ?>/img/main/home/feature_upgrade_icon.jpg" alt="Upgrade Your Account" /></a>
                <div class="featureTitle">Upgrade Your Account</div>
                <div class="featureDesc">Find out about members? benefits and <a href="<?php echo WWW; ?>">Upgrade Here...</a></div>
            </div>

			
			
            <?php
            $polls_qry = dbquery("SELECT * FROM runescape_polls WHERE main_poll='1' ORDER BY id DESC LIMIT 1");
			
            if ($polls_qry->num_rows > 0) 
                while ($polls =$polls_qry->fetch_assoc()) {
		?>
            <div class="feature">
                <a href="<?php echo WWW; ?>"><img src="<?php echo WWW; ?>/img/main/home/feature_poll_icon.jpg" alt="Latest Poll" /></a>
                <div class="featureTitle">Latest Poll - <?php echo date('d-M-Y', strtotime($polls['date']))?> </div>
                <div class="featureDesc"><?php echo $polls['title'] ?> - (Free/Member)
				<A href="<?php echo WWW; ?>">Vote&nbsp;Here...</A>
				</div>
            </div>
			<?php
            }
            
            ?>

            <div class="feature">
                <img src="<?php echo WWW; ?>/img/main/home/feature_rsc.jpg" alt="RuneScape Classic" />
                <div class="featureTitle">RuneScape Classic</div>
                <div class="featureDesc">Experience RuneScape in its original glory.<A 
                href="<?php echo WWW; ?>">Click here to play...</A>
				</div>
            </div>   

</div>
</div>

<div id="aog" class="section">
    <div class="feature">
        <a href="<?php echo WWW; ?>"><img src="<?php echo WWW; ?>/img/main/home/feature_downloads_icon.jpg" alt="Downloads and Wallpapers" /></a>
        <div class="featureTitle">Downloads and Wallpapers</div>
        <div class="featureDesc">Download fantastic RuneScape wallpapers.
        <a href="<?php echo WWW; ?>">Click here...</a>
	    </div>
    </div>		
</div>


	
<div id="articles"> 
      <div class="narrowHeader">
       <img src="<?php echo WWW; ?>/img/main/titles/runescapearticles.png" alt="RuneScape Articles">
      </div> 
      <div class="section"> 
       <div class="articlesBody"> 
        <div class="articlesTitle">
         <img alt="Article of the Week" src="<?php echo WWW; ?>/img/main/home/aow_title.png">
        </div> 
        <div class="aowBody">
         <div class="aowHeight"> 
          <div class="aowImage">
           <a href="<?php echo WWW; ?>" onclick="javascript:try{pageTracker._trackPageview('title.ws/raa/kbase/viewarticle.ws?article_id=2879');}catch(x){}">
		   <img src="<?php echo WWW; ?>/img/main/kbase/aow_icons/skills.jpg" alt=""></a>
          </div> 
          <p class="aowTitle">Hunter - Getting Started</p> 
          <p>Use the Hunter skill to track, trap, tease and tangle creatures; from those as small as birds to the impressively spiny larupia. <a href="<?php echo WWW; ?>" onclick="javascript:try{pageTracker._trackPageview('title.ws/raa/kbase/viewarticle.ws?article_id=2879');}catch(x){}">More...</a></p> 
         </div>
        </div> 
        <div class="articlesTitle">
         <img alt="Recently Added Articles" src="<?php echo WWW; ?>/img/main/home/raa_title.png">
        </div> 
        <div class="raaBody first"> <a href="<?php echo WWW; ?>" onclick="javascript:try{pageTracker._trackPageview('title.ws/raa/0/kbase/viewarticle.ws?article_id=937');}catch(x){}"> 
		<img src="<?php echo WWW; ?>/img/main/kbase/raa_icons/quests.jpg" alt=""></a> 
         <p class="aowTitle">Missing My Mummy (Members)</p> 
         <p>Encounter the early history of the desert. <a href="<?php echo WWW; ?>" onclick="javascript:try{pageTracker._trackPageview('title.ws/raa/0/kbase/viewarticle.ws?article_id=937');}catch(x){}">More...</a></p> 
        </div> 
        <div class="raaBody"> <a href="<?php echo WWW; ?>" onclick="javascript:try{pageTracker._trackPageview('title.ws/raa/1/kbase/viewarticle.ws?article_id=928');}catch(x){}"> 
		<img src="<?php echo WWW; ?>/img/main/kbase/raa_icons/quests.jpg" alt=""></a> 
         <p class="aowTitle">The Tale of the Muspah (Members)</p> 
         <p>A tale from nightmares. <a href="<?php echo WWW; ?>" onclick="javascript:try{pageTracker._trackPageview('title.ws/raa/1/kbase/viewarticle.ws?article_id=928');}catch(x){}">More...</a></p> 
        </div> 
       </div> 
       <div class="articlesFooter"></div> 
      </div> 
     </div> 
    </div> 
	
	
<div id="right">
    <a href="<?php echo WWW; ?>/game" id="playbutton" onmouseover="h(this)" onmouseout="u(this)" onclick="if(!this.j){this.href+='?j=1';this.j=true;}">
        <img src="<?php echo WWW; ?>/img/main/skins/<?php echo $skin; ?>/play.jpg" alt="Play RuneScape - Continue Your Adventure" />
        <span class="shim"></span>
    </a>
	
	

	
	<!-- 
	
	
	<div id="latestcontent"> 
      <div class="sectionHeader"> 
       <div class="left"> 
        <div class="right"> 
         <div class="plaque"> 
          <img src="<?php echo WWW; ?>/img/main/titles/featurednews.png" alt="Featured News"> 
         </div> 
        </div> 
       </div> 
      </div> 
	
	<div class="section">
        <div class='sectionBody'>
        <div class='sectionHeight'>
            <?php
            $news_qry = dbquery("SELECT * FROM runescape_news WHERE main_news='1' ORDER BY date DESC LIMIT 1");
			
            if ($news_qry->num_rows > 0) {
                while ($news = $news_qry->fetch_assoc()) {
                    echo "
                        
                            <div class='recentNews'>
                                <div class='newsTitle'>
                                    <h3>" . $news['title'] . " </h3>
                                    <span>" . date('d-M-Y', strtotime($news['date'])) . " </span>
                                </div>		
                                   <A class=newsImage href='viewnews/id/" . $news['id'] . "'>
								   <img alt='' src='img/news/icons/large/".$news['pic_big'] .".jpg'></A><p>" . $news['description'] . " <a href='viewnews/id/" . $news['id'] . "'>Read more...</a></p></div>
                            ";
                }
            }
            ?>
			
			</div>
            </div>
	        </div>
	
	
	--> 
	
	
	
	
	
    <div id="recentnews">
        <div class="sectionHeader">
            <div class="left">
                <div class="right">
                    <div class="plaque">
                        <img src="<?php echo WWW; ?>/img/main/titles/recentnews.png" alt="Recent News" />
                    </div>
                </div>
            </div>
        </div>
		
		
        <div class="section">
        <div class='sectionBody first'>
        <div class='sectionHeight'>
            <?php
            $news_qry = dbquery("SELECT * FROM runescape_news WHERE main_news='1' ORDER BY date DESC LIMIT 1");
			
            if ($news_qry->num_rows > 0) {
                while ($news = $news_qry->fetch_assoc()) {
                    echo "
                        
                            <div class='recentNews'>
                                <div class='newsTitle'>
                                    <h3>" . $news['title'] . " </h3>
                                    <span>" . date('d-M-Y', strtotime($news['date'])) . " </span>
                                </div>		
                                   <A class=newsImage href='viewnews/id/" . $news['id'] . "'>
								   <img alt='' src='img/news/large/".$news['pic_big'] .".jpg'></A><p>" . $news['description'] . " <a href='viewnews/id/" . $news['id'] . "'>Read more...</a></p></div>
                            ";
                }
            }
            ?>
			
			</div>
            </div>
			<?php
            $news_qry = dbquery("SELECT * FROM runescape_news WHERE main_news='0' ORDER BY date DESC LIMIT 0,3");

            if ($news_qry->num_rows > 0) {
                while ($news = $news_qry->fetch_assoc()) {
                    echo '
                        <div class="sectionBody">
                            <div class="recentNews">
                                <div class="newsTitle">
                                    <h3>' . $news['title'] . ' </h3>
                                    <span>' . date('d-M-Y', strtotime($news['date'])) . '</span>
                                </div>							
								   <img src="img/news/icons/'.$news['pic'] .'.jpg"/img>
                                <p>' . $news['description'] . ' <a href="viewnews/id/' . $news['id'] . '">Read more...</a></p>
                            </div>
                        </div>';
                }
            }
            ?>

            <div class="moreArchive"><a href="listnews">Browse our news archive</a></div>
        </div>
    </div>
    



<div id="devblog">
<div class="sectionHeader">
<div class="left">
<div class="right">
<div class="plaque">
<img src="<?php echo WWW; ?>/img/main/titles/devblog.png" alt="Developers' Blogs" />
</div>
</div>
</div>
</div>
<div class="section">
<div class="sectionBody">
<table class="MoreNewsDevblog" >


<tr>
<td>
<a href="<?php echo WWW; ?>">Elite Tasks - Development</a>
</td>
<td class="AuthorMore">
by&nbsp;<a href="<?php echo WWW; ?>">Mod Maz</a>
</td>
<td class="Date">
02-Sep-2010
</td>
</tr>


<tr>
<td>
<a href="<?php echo WWW; ?>">Second Helping</a>
</td>
<td class="AuthorMore">
by&nbsp;<a href="<?php echo WWW; ?>">Mod Knox</a>
</td>
<td class="Date">
23-Aug-2010
</td>
</tr>


<tr>
<td>
<a href="<?php echo WWW; ?>">Damage Control</a>
</td>
<td class="AuthorMore">
by&nbsp;<a href="<?php echo WWW; ?>">Mod Chris</a>
</td>
<td class="Date">
12-Aug-2010
</td>
</tr>

</table>
</div>
<div class="moreArchive"><a href="<?php echo WWW; ?>">Browse all Developers' Blogs</a></div>
</div>
</div>
</div>
<br class="clear"/>
</div>


<?php
include_once("./footer.php");
?>