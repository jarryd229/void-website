<style type="text/css">/*\*/@import url(<?php echo WWW; ?>/css/kbase-6.css);/**/</style>

<script type="text/javascript">
var link_no=0;
function open_window(url, width, height) {
 var settings="toolbar=0,scrollbars=0";
 if(width && width!=0) settings+=",width=" + width;
 if(height && height!=0) settings+=",height=" + height;
 window.open(url, "popuplink" + link_no++, settings);
}
var subcats=new Array();
function add_subcat(parent, id, name, selected) {
 if(!subcats[parent]) subcats[parent]=new Array();
 var new_option=document.createElement("OPTION");
 new_option.name=name;
 new_option.innerHTML=name;
 new_option.value=id;
 if(selected) { new_option.selected='selected'; }
 subcats[parent][subcats[parent].length]=new_option;
 return new_option;
}
function update_cats(suffix) {
 if(!suffix) suffix="";
 var top_level_select=document.getElementById("search_cat_select" + suffix);
 var subcat_select=document.getElementById("search_subcat_select" + suffix);
 if(!top_level_select || !subcat_select) return;
 if(subcat_select.options)
  for(old in subcat_select.options) subcat_select.options[1]=null;
  
 to_show=top_level_select.value;
 if(to_show>-1 && subcats[to_show]) {
  for(new_opt=0; new_opt<subcats[to_show].length; new_opt++) {
   var oldopt=subcats[to_show][new_opt];
   var newopt=document.createElement("OPTION");
   newopt.name=oldopt.name;
   newopt.innerHTML=oldopt.innerHTML;
   newopt.value=oldopt.value;
   subcat_select.appendChild(newopt);
  }
 }
}
window.onload=function() {
 update_cats();
 update_cats('_footer');
}
</script>
<script type="text/javascript">
new_subcat=add_subcat(4, 5, "Postbag from the Hedge", -1 == 5);new_subcat=add_subcat(4, 6, "Players' Gallery", -1 == 6);new_subcat=add_subcat(4, 19, "God letters", -1 == 19);new_subcat=add_subcat(775, 892, "How do I get started?", -1 == 892);new_subcat=add_subcat(775, 798, "Controls", -1 == 798);new_subcat=add_subcat(775, 795, "Combat", -1 == 795);new_subcat=add_subcat(775, 776, "Skills", -1 == 776);new_subcat=add_subcat(775, 7, "Quests", -1 == 7);new_subcat=add_subcat(775, 1, "Achievement Diary", -1 == 1);new_subcat=add_subcat(775, 10, "Activities", -1 == 10);new_subcat=add_subcat(775, 38, "Distractions and Diversions", -1 == 38);new_subcat=add_subcat(775, 831, "Miscellaneous Guides", -1 == 831);new_subcat=add_subcat(775, 881, "Area Guides", -1 == 881);new_subcat=add_subcat(20, 32, "A New Look RuneScape: Part 1", -1 == 32);new_subcat=add_subcat(20, 21, "Graphics Team - NPC Improvement Project", -1 == 21);new_subcat=add_subcat(9, 127, "Billing", -1 == 127);new_subcat=add_subcat(9, 126, "Technical", -1 == 126);new_subcat=add_subcat(9, 827, "Safety & Security Guidelines", -1 == 827);new_subcat=add_subcat(9, 872, "Other", -1 == 872);
</script>