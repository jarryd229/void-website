
<div class="brown_box"><div class="inner_brown_box">
<div class="searchtextcategory">
<form method="get" action="<?php echo WWW; ?>/kbase/search">
<table class="bottomsearch">
<tr>
<td class="searchtitles" width="60" style="text-align: right">
Search for:
</td>
<td>
<input class="textinput" name="search_query" id="search_query" size="29" maxlength="300" value="">
</td>
<td rowspan="3">
<table>
<tr>
<td>
<label class="bold">Criteria:</label>
</td>
<td></td>
<td><label class="bold">Find:</label></td>
</tr>
<tr>
<td>
<input class="widget" type="checkbox" name="title_chk" value="1" checked="checked">
Title
</td>
<td>
<input class="widget" type="checkbox" name="keywords_chk" value="1" checked="checked">
Keywords
</td>
<td>
<input class="widget" type="radio" name="and_rad" value="1" checked="checked">
All
</td>
</tr>
<tr>
<td>
<input class="widget" type="checkbox" name="description_chk" value="1" checked="checked">
Description
</td>
<td>
<input class="widget" type="checkbox" name="body_chk" value="1" checked="checked">
Body
</td>
<td>
<input class="widget" type="radio" name="and_rad" value="0">
Any
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="searchtitles">
Category:
</td>
<td>
<select name="category" id="search_cat_select_footer" onchange="update_cats('_footer')">
<option value="null"> - ALL - </option>
<option value="4">Player Submissions</option>
<option value="775">Game Guide</option>
<option value="20">Development Diaries</option>
<option value="9">Customer Support</option>
<option value="3">Lores and Histories</option>
</select></td>
<td></td>
</tr>
<tr>
<td class="searchtitles">
Subcategory:
</td>
<td>
<div id="search_subcat_footer" style="display: none;">
<select name="subcat" id="search_subcat_select_footer">
<option value="null"> - ALL - </option>
</select>
</div>
<script type="text/javascript">
 document.getElementById("search_subcat_footer").style.display="inline";
 update_cats('_footer');
</script>
</td>
<td></td>
</tr>
</table>
<p style="text-align: center;font-size:11px;font-weight:bold; margin-bottom: 0px;">For help on searching, see our <a href="<?php echo WWW; ?>/kbase/searchtips">Search Tips</a> page.
<input type="submit" name="submit" class="searchbutton" value="" alt="Search"></p>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br class="clear"/>
</div>