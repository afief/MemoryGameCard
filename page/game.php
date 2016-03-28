<?php

require_once('../php/config.php');
require_once('../php/validate_access_token.php');

?>
<html>
<head>
	<script type="text/javascript" src="../js/easeljs/create.js"></script>
	<script type="text/javascript" src="../js/build/main.js"></script>
		<link rel="stylesheet" href="../css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body onLoad="init();">
	<div id="access_token"><?php echo $access_token ?></div>
	<canvas id="game" width="300" height="100" style=" position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);" >
  </canvas>

</body>

</html>