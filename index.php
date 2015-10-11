<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Prabhakar Gupta">
    <link rel="shortcut icon" href="https://38.media.tumblr.com/avatar_fa1372ef2579_128.png">
    <title>Speed Tester</title>
	
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
	<script src="http://speedof.me/api/api.js" type="text/javascript"></script>
</head>

<body class="text-center">

    <h1 class="page-header">Basic Speed Tester</h1>
	<h3>An accurate and basic speed tester</h3>
	
	<button class="btn btn-warning btn-lg" onclick="btnStartClick()">Begin Test</button>

	<div id="msg" class="col-md-8 col-md-offset-2 text-center"></div>
	
	<footer>
		Made by <a href="http://www.prabhakargupta.com" target="_blank">Prabhakar Gupta</a> using <a href="http://speedof.me/api.html">Speedof.me API</a>
	</footer>
	
<script type="text/javascript">
	SomApi.account = "SOM5492258025569";
	SomApi.domainName = "www.prabhakargupta.com";
	SomApi.config.sustainTime = 4; 
	SomApi.onTestCompleted = onTestCompleted;
	SomApi.onError = onError;

	var msgDiv = document.getElementById("msg");
	
	function btnStartClick() {
		msgDiv.innerHTML = "<br><div class='spinner'>Loading...</div>";
		SomApi.startTest();
	}

	function onTestCompleted(testResult) {
		msgDiv.innerHTML = 
		"<table class='table table-bordered my'><tbody><tr>" +	
		"<tr><td>Download Speed</td><td>"+testResult.download+" Mbps</td></tr>" +
		"<tr><td>Upload Speed</td><td>"+testResult.upload+" Mbps</td></tr>" +
		"<tr><td>Latency</td><td>"+testResult.latency+" ms</td></tr>" +
		"<tr><td>Test Server</td><td>"+testResult.testServer+"</td></tr>" +
		"<tr><td>Your IP</td><td>"+testResult.ip_address+"</td></tr>" +
		"<tr><td>Hostname</td><td>"+testResult.hostname+"</td></tr>" +
		"</tbody></table>";
	}

	function onError(error) {
		msgDiv.innerHTML = "Error "+ error.code + ": "+error.message;
	}
</script>

</body>
</html>