<?php
    header("Status: 301 Moved Permanently");
    header("Location:./ads/". $_SERVER['QUERY_STRING']);
    exit;
?>