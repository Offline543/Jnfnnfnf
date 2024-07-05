
<html>
<head>
<title>Discovery Play </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="SPIDY">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="https://graph.org/file/955809664b91d2cf4c76e.jpg">
	<script type='text/javascript' src='https://content.jwplatform.com/libraries/IDzF9Zmk.js'></script>
   <script type="text/javascript">jwplayer.key = 'Khpp2dHxlBJHC8MCmLnBuV2jK/DwDnJMniwF6EO9HC/riJ712ZmbHg==';</script>
 
<body>
	<style>
        html {
            font-family: Poppins;
            background: #000;
            margin: 0;
            padding: 0
        }
		</style>
		
<script>var channel_id = "<?php if(isset($_GET['id'])){ print($_GET['id']); } ?>";</script>
<div id="myElement"></div>

<script type="text/JavaScript">
    jwplayer("myElement").setup({ 
        "playlist": [{
           "sources": [
        {
          "default": false,
          "type": "hls",
          "file": "https://mytv.maxmentor.in/voot/apivoot.php?id="+channel_id,
          "label": "0"
        }
      ],
        }],
 "primary": "html5",
  "hlshtml": true,
  "autostart": true,
  responsive: true,
  width: "100%",
  aspectratio: "16:9"
    });
</script>
</body>
</html>
