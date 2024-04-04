<?php

define('PAGE_TAB', 7);
define('PAGE_TITLE', 'Web Login');

require_once("global.php");

if (LOGGED_IN) {
    header("Location: home");
}

if (isset($_POST['submit'])) {
    $username = $users->format_dbname($_POST['username']);
    $password = sha1($_POST['password']);
    $remember = (isset($_POST['rem']));

    if ($users->validate_details($username, $password)) {
        $_SESSION['RUNESCAPE_USER'] = $username;
        $_SESSION['RUNESCAPE_HASH'] = $password;

        if ($remember && !isset($_COOKIE['RUNESCAPE_REM_NAME'])) {
            setcookie("RUNESCAPE_REM_NAME", $username, time()+60*60*24*30);
        } else {
            setcookie("RUNESCAPE_REM_NAME", "", time() - 3600);
        }
		
		//new login redirecting
        
		header("Location: http://" . $_SERVER['HTTP_HOST'] . $_SESSION['came_from']);
		
		//old login with out redirecting
        //die('<script type="text/javascript">top.location.href = \'home\';</script>');
    } else {
        $failed = true;
    }
}

require_once("header.php");
?>
<script type="text/javascript"> 
    function SetFocus() {
        var Username = document.getElementById('username');
        var Password = document.getElementById('password');
        if ( Username.value == ''){
            Username.focus();
            return false;
        }
        if ( Password.value == ''){
            Password.focus();
            return false;
        }
        return true;
    }
</script>
<style type="text/css">/*\*/@import url(<?php echo WWW; ?>/css/weblogin-6.css);/**/</style>

<div id="content">
<div id="article">
    <div class="sectionHeader">
        <div class="left">
            <div class="right">
                <div class="plaque">
                    Secure Login
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="brown_background">
            <div id="login_background" class="inner_brown_background" >
                <div id="login_panel" class="brown_box" >
                    <form id="login_form" action="login" method="post" autocomplete="off">
                        <div class="bottom">
                            <div class="repeat">
                                <div class="top_section">
                                    <div id="message">
                                        <?php if(isset($failed)) { ?>
                                        <font color="red">Invalid login details.</font>
                                        <?php } else { ?>
                                        Please enter your username and password to continue.
                                        <?php } ?>

                                        <!-- <font color="red">Invalid username or password.</font> -->
                                    </div> <div class="section_form" id="usernameSection">
                                        <label for="username">Username:</label>
                                        <input size="20" type="text" name="username" id="username" maxlength="12" <?php if (isset($_COOKIE['JWEB_REM_NAME'])) { echo "value='" . $_COOKIE['JWEB_REM_NAME'] . "'"; } ?>/>
                                    </div>
                                    <div class="section_form" id="passwordSection">
                                        <label for="password">Password:</label>
                                        <input size="20" type="password" id="password" name="password" maxlength="20"/>
                                    </div>
                                </div>
                                <div class="bottom_section">
                                    <div id="remember">
                                        <label for="rem">
                                            <input type="checkbox" name="rem" id="rem" value="1" class="checkbox" <?php if (isset($_COOKIE['JWEB_REM_NAME'])) { echo "checked='checked'"; } ?>/>
                                            Check this box to remember username</label>
                                    </div>
                                    <div id="submit_button">
                                        <button type="submit" name="submit" value="Login Now!" onmouseover="this.style.backgroundPosition='bottom';" onmouseout="this.style.backgroundPosition='top';" onclick="return SetFocus();">Login Now!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="buttons">
                    <a href="create" class="createaccount"><span class="buttbg"></span>Create a New Account<br/>Click Here!</a>
                    <a href="recover" class="recoveraccount"><span class="butt1bg"></span>Lost Your Password?<br/> Click Here!</a>
                </div>
                <br class="clear" />
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>