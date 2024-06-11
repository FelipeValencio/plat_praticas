<?php

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Serve the requested resource as-is.
include_once("index.html");
?>
