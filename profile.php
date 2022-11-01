<?php session_start(); ?>
<html>
<script type="text/javascript">

function seshCheck() {
	document.getElementById("name").innerHTML = "Welcome <?php echo $_SESSION['user'];?>!";
	let l = sessionStorage.getItem("id");
	var request = new XMLHttpRequest();
	request.open("POST","sessionCheck.php",true);
	request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	request.send("id="+l);
//	if("<?php echo $_SESSION['validsession']; ?>" != "true"){
//		window.location.replace("login.html");
//		sessionStorage.setItem("conf", <?php echo $_SESSION['validatesession']; ?>);
//	}
}
</script>
<head>

<style>

#home{
	float: left;
	
}

</style>

</head>
<body>
<div id="header">
<li><a id="home" href="index.html">Home</a></li>
<h1 id="name">Your Profile</h1>
</div>
<div>Your in. yay.</div>
<script>
seshCheck();
</script>

</body>
</html>

