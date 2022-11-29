<?php
    header("Status: 301 Moved Permanently");
    header("Location:http://www.frogfind.com/?". $_SERVER['QUERY_STRING']);
    exit;
?>