<?php
define('PAGE_TAB', 3);

require_once("global.php");
require_once("header.php");

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $country = $_POST['country'];
    $email = $_POST['email'];

    if (check_name($name) && check_password($pass1) && check_passwords($pass1, $pass2) && check_year($year) && check_email($email)) {
        $dbname = str_replace(' ', '_', strtolower(trim($name)));
        $pass = sha1($dbname . sha1($pass1));
        $dob = $day . '-' . $month . '-' . $year;
        $ip = $_SERVER["REMOTE_ADDR"];

        if ($email == "") {
            dbquery("INSERT INTO characters (username,displayname,password,dob,country,register_ip,register_date)
            VALUES ('$dbname','$dbname','$pass','$dob','$country','$ip',NOW());");
        } else {
            dbquery("INSERT INTO characters (username,displayname,password,dob,country,email,register_ip,register_date)
            VALUES ('$dbname','$dbname','$pass','$dob','$country','$email','$ip',NOW());");
        }
        
        $uid = dbevaluate("SELECT UID FROM users WHERE username = '$dbname' AND password = '$pass';");
        dbquery("INSERT INTO character_preferences (master_id) VALUES ('$uid');");

        die('<script type="text/javascript">top.location.href = \'' . WWW . '/create?created=' . $dbname . '\';</script>');
    }
}

if (isset($_GET['created'])) {
    $created = $_GET['created'];
}

function check_name($user) {
    if(strlen($user) < 1 || !preg_match("%[a-zA-Z0-9\ ]%", $user)) {
        return true;
    }

    $query = dbquery("SELECT UID FROM users WHERE username='$user' LIMIT 1;");
    if(mysql_num_rows($query) < 1) {
        return true;
    } else {
        return false;
    }
}

function check_password($pass) {
    if (strlen($pass) < 5 || strlen($pass) > 20) {
        return false;
    } else {
        return true;
    }
}

function check_passwords($pass1, $pass2) {
    if ($pass1 != $pass2) {
        return false;
    } else {
        return true;
    }
}

function check_year($year) {
    if (!is_numeric($year) || $year < 1800 || $year > 2010) {
        return false;
    } else {
        return true;
    }
}
?>




<script type="text/javascript" src="<?php echo WWW; ?>/js/create/ajax-0.js"></script>
<script type="text/javascript">//<![CDATA[
var last_ajax_username = "".toLowerCase();
var last_ajax_response = '17';
var has_valid_username = true;
var blocked = false;
var info_showing = '';
var submitted = false;


function _(objid){
 if (typeof objid == "string") objid=document.getElementById(objid);
 if (!objid) return;
 return objid;
}

function findPosY(obj)
{
  var curtop = 0;
  if(obj.offsetParent)
      while(1)
      {
        curtop += obj.offsetTop;
        if(!obj.offsetParent)
          break;
        obj = obj.offsetParent;
      }
  else if(obj.y)
      curtop += obj.y;
  return curtop;
}

function isLeapYear(year) {
 if ( year < 0) return (year +1) % 4 == 0;//>
 if ( year < 1582 ) return year % 4 == 0;//>
 if ( year % 4 != 0 ) return false;
 if ( year % 100 != 0 ) return true;
 if ( year % 400 != 0 ) return false;
 return true;
}

function display(obj){
 info_showing = obj.id;
 var jmesg = _('jmesg');
 var srctext = _(obj.id + '_desc').innerHTML;
 var ypos = findPosY(obj) - findPosY(_('formBoxes')) + 1;
 jmesg.innerHTML = srctext;
 jmesg.style.backgroundPosition =  '0px ' + (ypos - 10) + 'px';
}

function uncross(obj){
 if(obj.className == 'fail'){
  obj.className = '';
 }
 return;
}

function checkit(){
 _('creatForm').action='';
}

function validate_username(doajax){
 var obj = _('username');
 var str = obj.value;
 if(!str || str.length == 0){obj.className = ''; return false;}
 if(str.length > 12 || !str.match(/^[a-zA-Z0-9_ ]+$/)){
  obj.className = 'fail';
  _('alts').style.display = 'none';
  _('username_constraints_characters').className = 'error';
  _('errorUsername').innerHTML = "Please supply a valid username.";
  obj.focus(); 
  obj.select();
  return false;
 }else{
  _('username_constraints_characters').className = '';
  if(doajax == true && blocked == false){
   if(str.toLowerCase() != last_ajax_username){
    /* do ajax availability test */
    last_ajax_username = str.toLowerCase();
     callback_request("validate.php?username="+str, validate_username_ajax);
     obj.className = 'loading';
    }
    else {
     validate_username_ajax(last_ajax_response,true);
    }
  }else{
   return true;
  }
 }
}

function validate_username_ajax(response,no_alts){
 last_ajax_response = response;
 var obj = _('username');
 if(!response || response.length == 0){
  obj.className = '';
  _('alts').style.display = 'none';
  _('username_constraints_characters').className = '';
  _('errorUsername').innerHTML = '&nbsp;';
  if(!no_alts && info_showing == 'usr'){
   display(_('usr'));
  }
  return true;
 }
 var values = response.split(',');
 if(values[0] == 17){
  obj.className = 'success';
  _('alts').style.display = 'none';
  _('username_constraints_characters').className = '';
  _('errorUsername').innerHTML = '&nbsp;';
  if(!no_alts && info_showing == 'usr'){
   display(_('usr'));
  }
  return true;
 }
 else if(values[0] == 36 || values[0] == 47){
  blocked = true;
  obj.className = '';
  window.setTimeout('blocked = false',7000);
  _('alts').style.display = 'none';
  _('username_constraints_characters').className = '';
  _('errorUsername').innerHTML = '&nbsp;';
  if(!no_alts && info_showing == 'usr'){
   display(_('usr'));
  }
  return true;
 }
 else{
  obj.className = 'fail';
  _('errorUsername').innerHTML = "Sorry, that username is not available."; // "Please supply a valid username.";
  var alts = "Sorry, that username is not available.";
  if(values.length > 1){
   alts += " Possible alternatives: ";
   var limit = 9;
   if(values.length < limit){limit = values.length;}//>
   for(var i=1; i<limit; i++){//>
    alts += values[i];
    if(i+1 < limit){alts += ', ';}//>
   }
   alts += '.';
  }
  _('alts').innerHTML = alts;
  _('alts').style.display = 'block';
  _('username_constraints_characters').className = '';
  if(!no_alts && info_showing == 'usr'){
   display(_('usr'));
  }
  obj.focus(); 
  obj.select();
  return false;
 }
}

function validate_password(error,startup){
 var pass = _('password1');
 var pass2 = _('password2');
 var constraints = _('pass_constraints');
 var str = pass.value;
 var str2 = pass2.value;
 if(!str || str.length == 0){
  pass.className = '';
  pass2.className = '';
  constraints.className = '';
  if(!startup && info_showing == 'pass'){display(_('pass'));}
  return false;
 }
 else if(!str.match(/^[a-zA-Z0-9]{5,20}$/)){
  pass.className = 'fail';
  pass2.className = '';
  constraints.className = 'error';
  if(!startup && info_showing == 'pass'){display(_('pass'));}
  _('errorPassword').innerHTML = "Please supply a valid password.";
  return false;
 }
 else{
  pass.className = '';
  constraints.className = '';
  if(!startup && info_showing == 'pass'){display(_('pass'));}
  if(str2.length == 0){
   pass2.className = '';
   if(error == true){_('errorPassword').innerHTML = '&nbsp;';}
   return false;
  }
  else if(str2 != str || !str2.match(/^[a-zA-Z0-9]{5,20}$/)){
   pass2.className = 'fail';
   _('errorPassword').innerHTML = "Please make sure both passwords match.";
   return false;
  }
  else{
   pass2.className = '';
   _('errorPassword').innerHTML = '&nbsp;';
   return true;
  }
 }
}

function validate_date(reciprocate){
 var day = _('day');
 var month = _('month');
 var year = _('year');
 var yearint = parseInt(year.value,10);
 // not y3k compliant! cripes!
 if( yearint < 100 && yearint >= 0 ){//>
  if(yearint + 2000 > 2010){
   year.value = yearint + 1900;
  }else{
   year.value = yearint + 2000;
  }
 }
 if(day.value < 0 || /*>*/ month.value < 0 || !year.value.match(/^[0-9]{4,4}$/)){return false;}//>
 if(yearint > 2010 || yearint < 1890){return false;}//>
 var monlens = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
 if(isLeapYear(year.value)){monlens[1] = 29;}
 if(day.value > monlens[month.value]){
  day.value = monlens[month.value];
 }
 if(reciprocate == true && validate_country(false) && _('errorData').innerHTML != '&nbsp;'){
  _('errorData').innerHTML = '&nbsp;';
 }
 return true;
}

function validate_country(reciprocate){
 var country = _('country');
 if(country.value == '' || country.value <= 0){//>
  display(_('data'));
  return false;
 }
 if(reciprocate == true && validate_date(false) && _('errorData').innerHTML != '&nbsp;'){
  _('errorData').innerHTML = '&nbsp;';
 }
 return true;
}


function validate_all(){
 var returncode = true;
 if(!validate_date(true) || !validate_country(true)){
  returncode = false;
  _('errorData').innerHTML = "Please make sure you have provided a valid date of birth and country.";
  display(_('data'));
 }else{
  _('errorData').innerHTML = '&nbsp;';
 }
 if(!validate_password(true,true)){
  returncode = false;
  _('errorPassword').innerHTML = "Please supply a valid password.";
  display(_('pass'));
 }else{
  _('errorPassword').innerHTML = '&nbsp;';
 }
 if(!validate_username(false)){
  returncode = false;
  _('errorUsername').innerHTML = "Please supply a valid username.";
  _('username').focus(); 
  _('username').select();
  display(_('usr'));
 }else{
  _('errorUsername').innerHTML = '&nbsp;';
 }
 return returncode;
}

var input_order=["username","password1","password2","day","month","year","country","submitbutton"];

function a_pos(val, arr) {
 for(var i=0; i<arr.length; i++) if(val===arr[i]) return i;//>
 return -1;
}

function handle_keypress(event) {
 if(!event) event=window.event;
 if(event.keyCode!=13) return true;
 var p=a_pos(this.id, input_order);
 if(p!=-1 && p<input_order.length-1) var next=_(input_order[p+1]);//>
 if(next && next.focus) {
  next.focus();
  return false;
 }
 return true;
}

function install_textboxes() {
 // Skip the last one (submit button), but it needs to be in the array so things know where to go
 for(var i=0; i<input_order.length-1; i++) if(!_(input_order[i]).onkeypress){//>
  _(input_order[i]).onkeypress=handle_keypress;
 }
}

function install(){
 validate_username(false);
 validate_password(false,true);
 install_textboxes();
 if(_('jmesg').innerHTML == ''){display(_('usr'));}
}

// window.onload fix: Dean Edwards/Matthias Miller/John Resig
function dummy() {
};
function init() {
 if (arguments.callee.done) return;
 arguments.callee.done = true;
 if (_timer) clearInterval(_timer);
 if (install) install();
};
/* for Mozilla/Opera9 */
if (document.addEventListener) {
 document.addEventListener("DOMContentLoaded", init, false);
}
/* for Internet Explorer */
/*@cc_on @*/
/*@if (@_win32)
 document.write("<script id=__ie_onload defer src=dummy()><\/script>");
 var script = _("__ie_onload");
 script.onreadystatechange = function() {
  if (this.readyState == "complete") {
   init(); // call the onload handler
  }
 };
/*@end @*/
/* for Safari */
if (/WebKit/i.test(navigator.userAgent)) { // sniff
 var _timer = setInterval(function() {
  if (/loaded|complete/.test(document.readyState)) {
   init(); // call the onload handler
  }
 }, 10);
}
/* for other browsers */
window.onload = init;//]]></script>
<noscript>
<style type="text/css">
  #jmesgBg, #jmesg {
   display: none;
  }
  #formBoxes {
   padding-bottom: 1em;
  }
  .formDesc {
   display: block;
  }
  .formDesc p {
   display: inline;
  }
  .formSection {
   padding: 1em 0 5px;
  }
  #pass_desc, #data_desc {
   padding-top: 1em;
   border-top: 2px solid black;
  }
  #alts {
   display: block;
   margin-bottom: 1em;
   padding: 0;
  }
  #alts span {
   cursor: default;
   text-decoration: none;
  }
  #errorUsername, #errorPassword {
   margin-bottom: 1em;
  }
 </style>
</noscript>

<style type="text/css">/*\*/@import url(<?php echo WWW; ?>/css/create3-11.css);/**/</style>

<div id="content">
<div id="article">
    <div class="sectionHeader">
        <div class="left">
            <div class="right">
                <div class="plaque">
                    Create a Free Account
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="brown_background sectionContentContainer">
            <div class="inner_brown_background">
                <div class="brown_box">
				
				<div class="section">
<div class="statusbarwrap">
<div id="statusbar">
<div class="left">
<div class="right">


                    <?php
                    if ($created) {
                        ?>
						
						
<div class="statusbutton firstoffspring"><div class="subButton left">1. Enter Your Details</div></div>
<div class="statusbutton middleoffspring "><div class="subButton middle">2. Enter Your Email (optional)</div></div>
<div class="statusbutton lastoffspring  lastActive"><div class="subButton right">3. Account Creation Complete</div></div>
<br style="clear: both;"/>
</div>
</div>
</div>
</div>
</div>

                    <div class="width756">
                        <div class="inner_brown_box" style="padding: 8px;">

							
							
							
							<p>Your account <span class="usernamecreate"><?php echo ucwords(str_replace('_', ' ',  $created ));?></span> has now been created with the password you have chosen. We recommend you make a note of it on a bit of paper and keep it somewhere <strong>really</strong> safe, in case you forget it.</p>
<p>We have many guides and manuals on the RuneScape website that you will find extremely helpful. The following are some of the most important that you will need to be aware of:</p>
<ul>
<li><a href="http://www.runescape.com/kbase/view.ws?guid=rules_of_conduct">Read our Rules</a></li>
<li><a href="http://www.runescape.com/kbase/view.ws?guid=safety_and_security_guidelines">Read our Safety + Security guidelines</a></li>
<li><a href="http://www.runescape.com/kbase/view.ws?guid=how_do_i_get_started0">Getting started guide</a></li>
</ul>
<div class="buttons" id="playnow">
<a class="button" id="button-right" href="<?php echo WWW; ?>/game/game.php" >
<img alt="Play RuneScape" src="<?php echo WWW; ?>/img/create/playnow.png"/>
</a>
							
							</div>
                        </div>
                        <br class="clear" />
                    </div>
                        <?php
                    } else {
                        ?>
						
<div class="statusbutton firstoffspring firstActive"><div class="subButton left">1. Enter Your Details</div></div>
<div class="statusbutton middleoffspring "><div class="subButton middle">2. Enter Your Email (optional)</div></div>
<div class="statusbutton lastoffspring "><div class="subButton right">3. Account Creation Complete</div></div>
<br style="clear: both;"/>
</div>
</div>
</div>
</div>
<br class="clear"/>


<div class="width756">
<div id="errorlog" style="position: absolute; top: 5px; right: 5px; float: right; padding: 5px;"></div>
<form id="createForm" action="<?php echo WWW; ?>/create" method="post" onsubmit="return checkit()">
<div class="inner_brown_box brown_box_stack" id="cIntro">
Creating an account is simple and free, and you will have access to the free worlds on Runescape for as long as you like. Just complete the form below, click on Continue, and get ready to play!
</div>
<div id="formBoxes" class="inner_brown_box brown_box_stack brown_box_padded">

<div class="formDesc" id="usr_desc">
<p class="error" id="alts"  style="display:none;">Sorry, that username is not available.
</p>
<p id="username_constraints_characters">Usernames can be a maximum of 12 characters long and may contain letters, numbers, spaces and underscores.</p>
<p>They should not contain your real name, birth date, or other personally identifiable information, to better protect your identity.</p>
<p>They should not be offensive or break our <a href="<?php echo WWW; ?>/terms/terms" onclick="window.open(this.href+'#create','_blank','width=800,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,copyhistory=no,resizable=yes'); return false;" target="_blank">Terms &amp; Conditions</a>.</p>
</div>
<div class="formSuperGroup single_line">
<div class="formSection" id="usr">
<input style="display:none;" type="hidden" id="origusername" name="origusername" value="">
<label for="username">Your Username:</label>
<input id="username" name="username" autocomplete="off" maxlength="12" onfocus="display(this.parentNode);" onkeypress="display(this.parentNode);uncross(this);" onblur="validate_username(true);" value="">
<br class="clear" />
</div>
<div class="error formError" id="errorUsername">&nbsp;</div>
<br class="clear" />
</div>
<div class="formSuperGroup double_line">
<div class="formDesc" id="pass_desc">
<p>NEVER give anyone your password, not even to Jagex staff. Jagex staff will never ask you for your password.</p>
<p id="pass_constraints">Passwords must be between 5 and 20 characters long and may contain letters and numbers.</p>
<p>We recommend you use a mixture of numbers and letters in your password to make it harder for someone to guess.</p>
</div>
<div id="pass" class="formGroup">
<div class="formSection">
<label for="password1">Your Password:</label>
<input id="password1" name="password1" type="password" autocomplete="off" value="" maxlength="20" onfocus="display(this.parentNode.parentNode);uncross(this)" onblur="validate_password(true);">
</div>
<div class="formSection">
<label for="password2">Re-enter Password:</label>
<input id="password2" name="password2" type="password" autocomplete="off" value="" maxlength="20" onfocus="display(this.parentNode.parentNode);uncross(this)" onblur="validate_password(true);">
</div>
<br class="clear" />
</div>
<div class="error formError" id="errorPassword">&nbsp;</div>
<br class="clear" />
</div>
<div class="formDesc" id="data_desc">
<p>Your date of birth is required for account creation, but we will not share it with any third parties.</p>
<p>Your country of residence is required for the purposes of identifying your account.</p>
<p>For more details see the <a href="<?php echo WWW; ?>/privacy/privacy" onclick="window.open(this.href+'#create','_blank','width=800,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,copyhistory=no,resizable=yes'); return false;" target="_blank">Privacy Policy</a>.</p>
</div>
<div class="formSuperGroup double_line">
<div id="data" class="formGroup">
<div class="formSection">
<label for="day">Your Date of Birth:</label>
<div>
<select id="day" name="day" onfocus="display(this.parentNode.parentNode.parentNode);" onchange="validate_date(true)">
<option value="-1" selected="selected" disabled="disabled">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="month" name="month" onfocus="display(this.parentNode.parentNode.parentNode);" onchange="validate_date(true)">
<option value="-1" selected="selected" disabled="disabled">Month</option>
<option value="0">January</option>
<option value="1">February</option>
<option value="2">March</option>
<option value="3">April</option>
<option value="4">May</option>
<option value="5">June</option>
<option value="6">July</option>
<option value="7">August</option>
<option value="8">September</option>
<option value="9">October</option>
<option value="10">November</option>
<option value="11">December</option>
</select>
<input id="year" name="year" maxlength="4" value="Year" onfocus="display(this.parentNode.parentNode.parentNode); if(this.value=='Year'){this.value='';}" onblur="if(this.value==''){this.value='Year';}" onchange="validate_date(true)">
</div>
</div>
<div class="formSection country" >
<label for="country">Your Country of Residence:</label>
<select id="country" name="country" onfocus="display(this.parentNode.parentNode);">
<option value="-1">Select one</option>
<optgroup label="---">
<option value="225">United States</option>
<option value="77">United Kingdom</option>
</optgroup>
<optgroup label="---">
<option value="5">Afghanistan</option>
<option value="8">Albania</option>
<option value="61">Algeria</option>
<option value="14">American Samoa</option>
<option value="3">Andorra</option>
<option value="11">Angola</option>
<option value="7">Anguilla</option>
<option value="12">Antarctica</option>
<option value="6">Antigua and Barbuda</option>
<option value="13">Argentina</option>
<option value="9">Armenia</option>
<option value="17">Aruba</option>
<option value="16"  selected="selected">Australia</option>
<option value="15">Austria</option>
<option value="18">Azerbaijan</option>
<option value="32">Bahamas</option>
<option value="25">Bahrain</option>
<option value="21">Bangladesh</option>
<option value="20">Barbados</option>
<option value="36">Belarus</option>
<option value="22">Belgium</option>
<option value="37">Belize</option>
<option value="27">Benin</option>
<option value="28">Bermuda</option>
<option value="33">Bhutan</option>
<option value="30">Bolivia</option>
<option value="19">Bosnia and Herzegovina</option>
<option value="35">Botswana</option>
<option value="34">Bouvet Island</option>
<option value="31">Brazil</option>
<option value="104">British Indian Ocean Territory</option>
<option value="29">Brunei Darussalam</option>
<option value="24">Bulgaria</option>
<option value="23">Burkina Faso</option>
<option value="26">Burundi</option>
<option value="114">Cambodia</option>
<option value="47">Cameroon</option>
<option value="38">Canada</option>
<option value="52">Cape Verde</option>
<option value="121">Cayman Islands</option>
<option value="41">Central African Republic</option>
<option value="207">Chad</option>
<option value="46">Chile</option>
<option value="48">China</option>
<option value="53">Christmas Island</option>
<option value="39">Cocos (Keeling) Islands</option>
<option value="49">Colombia</option>
<option value="116">Comoros</option>
<option value="42">Congo</option>
<option value="40">Congo, The Democratic Republic of the</option>
<option value="45">Cook Islands</option>
<option value="50">Costa Rica</option>
<option value="44">Cote D'Ivoire</option>
<option value="97">Croatia</option>
<option value="51">Cuba</option>
<option value="54">Cyprus</option>
<option value="55">Czech Republic</option>
<option value="58">Denmark</option>
<option value="57">Djibouti</option>
<option value="59">Dominica</option>
<option value="60">Dominican Republic</option>
<option value="216">East Timor</option>
<option value="62">Ecuador</option>
<option value="64">Egypt</option>
<option value="203">El Salvador</option>
<option value="87">Equatorial Guinea</option>
<option value="66">Eritrea</option>
<option value="63">Estonia</option>
<option value="68">Ethiopia</option>
<option value="71">Falkland Islands (Malvinas)</option>
<option value="73">Faroe Islands</option>
<option value="70">Fiji</option>
<option value="69">Finland</option>
<option value="74">France</option>
<option value="75">France, Metropolitan</option>
<option value="80">French Guiana</option>
<option value="170">French Polynesia</option>
<option value="208">French Southern Territories</option>
<option value="76">Gabon</option>
<option value="84">Gambia</option>
<option value="79">Georgia</option>
<option value="56">Germany</option>
<option value="81">Ghana</option>
<option value="82">Gibraltar</option>
<option value="88">Greece</option>
<option value="83">Greenland</option>
<option value="78">Grenada</option>
<option value="86">Guadeloupe</option>
<option value="91">Guam</option>
<option value="90">Guatemala</option>
<option value="85">Guinea</option>
<option value="92">Guinea-Bissau</option>
<option value="93">Guyana</option>
<option value="98">Haiti</option>
<option value="95">Heard Island and McDonald Islands</option>
<option value="228">Holy See (Vatican City State)</option>
<option value="96">Honduras</option>
<option value="94">Hong Kong</option>
<option value="99">Hungary</option>
<option value="107">Iceland</option>
<option value="103">India</option>
<option value="100">Indonesia</option>
<option value="106">Iran, Islamic Republic of</option>
<option value="105">Iraq</option>
<option value="101">Ireland</option>
<option value="102">Israel</option>
<option value="108">Italy</option>
<option value="109">Jamaica</option>
<option value="111">Japan</option>
<option value="110">Jordan</option>
<option value="122">Kazakstan</option>
<option value="112">Kenya</option>
<option value="115">Kiribati</option>
<option value="118">Korea, Democratic People's Republic of</option>
<option value="119">Korea, Republic of</option>
<option value="120">Kuwait</option>
<option value="113">Kyrgyzstan</option>
<option value="123">Lao People's Democratic Republic</option>
<option value="132">Latvia</option>
<option value="124">Lebanon</option>
<option value="129">Lesotho</option>
<option value="128">Liberia</option>
<option value="133">Libyan Arab Jamahiriya</option>
<option value="126">Liechtenstein</option>
<option value="130">Lithuania</option>
<option value="131">Luxembourg</option>
<option value="143">Macau</option>
<option value="139">Macedonia, the Former Yugoslav Republic of</option>
<option value="137">Madagascar</option>
<option value="151">Malawi</option>
<option value="153">Malaysia</option>
<option value="150">Maldives</option>
<option value="140">Mali</option>
<option value="148">Malta</option>
<option value="138">Marshall Islands</option>
<option value="145">Martinique</option>
<option value="146">Mauritania</option>
<option value="149">Mauritius</option>
<option value="238">Mayotte</option>
<option value="152">Mexico</option>
<option value="72">Micronesia, Federated States of</option>
<option value="136">Moldova, Republic of</option>
<option value="135">Monaco</option>
<option value="142">Mongolia</option>
<option value="242">Montenegro</option>
<option value="147">Montserrat</option>
<option value="134">Morocco</option>
<option value="154">Mozambique</option>
<option value="141">Myanmar</option>
<option value="155">Namibia</option>
<option value="164">Nauru</option>
<option value="163">Nepal</option>
<option value="161">Netherlands</option>
<option value="10">Netherlands Antilles</option>
<option value="156">New Caledonia</option>
<option value="166">New Zealand</option>
<option value="160">Nicaragua</option>
<option value="157">Niger</option>
<option value="159">Nigeria</option>
<option value="165">Niue</option>
<option value="158">Norfolk Island</option>
<option value="144">Northern Mariana Islands</option>
<option value="162">Norway</option>
<option value="167">Oman</option>
<option value="173">Pakistan</option>
<option value="180">Palau</option>
<option value="178">Palestinian Territory, Occupied</option>
<option value="168">Panama</option>
<option value="171">Papua New Guinea</option>
<option value="181">Paraguay</option>
<option value="169">Peru</option>
<option value="172">Philippines</option>
<option value="176">Pitcairn</option>
<option value="174">Poland</option>
<option value="179">Portugal</option>
<option value="177">Puerto Rico</option>
<option value="182">Qatar</option>
<option value="183">Reunion</option>
<option value="184">Romania</option>
<option value="185">Russian Federation</option>
<option value="186">Rwanda</option>
<option value="193">Saint Helena</option>
<option value="117">Saint Kitts and Nevis</option>
<option value="125">Saint Lucia</option>
<option value="175">Saint Pierre and Miquelon</option>
<option value="229">Saint Vincent and the Grenadines</option>
<option value="236">Samoa</option>
<option value="198">San Marino</option>
<option value="202">Sao Tome and Principe</option>
<option value="187">Saudi Arabia</option>
<option value="199">Senegal</option>
<option value="239">Serbia</option>
<option value="189">Seychelles</option>
<option value="197">Sierra Leone</option>
<option value="192">Singapore</option>
<option value="196">Slovakia</option>
<option value="194">Slovenia</option>
<option value="188">Solomon Islands</option>
<option value="200">Somalia</option>
<option value="240">South Africa</option>
<option value="89">South Georgia and the South Sandwich Islands</option>
<option value="67">Spain</option>
<option value="127">Sri Lanka</option>
<option value="190">Sudan</option>
<option value="201">Suriname</option>
<option value="195">Svalbard and Jan Mayen</option>
<option value="205">Swaziland</option>
<option value="191">Sweden</option>
<option value="43">Switzerland</option>
<option value="204">Syrian Arab Republic</option>
<option value="220">Taiwan</option>
<option value="211">Tajikistan</option>
<option value="221">Tanzania, United Republic of</option>
<option value="210">Thailand</option>
<option value="209">Togo</option>
<option value="212">Tokelau</option>
<option value="215">Tonga</option>
<option value="218">Trinidad and Tobago</option>
<option value="214">Tunisia</option>
<option value="217">Turkey</option>
<option value="213">Turkmenistan</option>
<option value="206">Turks and Caicos Islands</option>
<option value="219">Tuvalu</option>
<option value="223">Uganda</option>
<option value="222">Ukraine</option>
<option value="4">United Arab Emirates</option>
<option value="77">United Kingdom</option>
<option value="225">United States</option>
<option value="224">United States Minor Outlying Islands</option>
<option value="226">Uruguay</option>
<option value="227">Uzbekistan</option>
<option value="234">Vanuatu</option>
<option value="230">Venezuela</option>
<option value="233">Vietnam</option>
<option value="231">Virgin Islands, British</option>
<option value="232">Virgin Islands, U.S.</option>
<option value="235">Wallis and Futuna</option>
<option value="65">Western Sahara</option>
<option value="237">Yemen</option>
<option value="241">Zambia</option>
<option value="243">Zimbabwe</option>
</optgroup>
</select>
</div>
<br class="clear" />
</div>
<div class="error formError" id="errorData">&nbsp;</div>
<br class="clear" />
</div>
<br class="clear" />
<div id="jmesgBg" class="input_details"><div id="jmesg" class="input_details"></div></div>
</div>
<div class="inner_brown_box brown_box_padded">
<button type="submit" value="" id="submitbutton" name="submit" onclick="return validate_all();"> 
</button>
</div>
</form>
</div>
</div>


                        <?php } ?>
						
                </div>
            </div>
        </div>
    </div>
</div> 

<?php require_once("footer.php"); ?>
