<?php
session_start();
session_destroy();
die('<script type="text/javascript">top.location.href = \'home\';</script>');
?>
