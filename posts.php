<?php
require_once('lib/path.inc');
require_once('lib/get_host_info.inc');
require_once('lib/rabbitMQLib.inc');

session_start();

//$client = new rabbitMQClient("testRabbitMQ.ini","dbServer");
//if (isset($argv[1]))
//{
//  $msg = $argv[1];
//}
//else
//{
//  $msg = "test message";
//}

//$request = array();
//$request['type'] = "forumPosts";
//$request['top'] = $_SESSION['top'];

//$response = array();
//$response = $client->send_request($request);
//this is gonna be deets on the categories
//form should be as follows:
//response[x][0]=topic poster username
//response[x][1]=timestamp of topic creation
//response[x][2]=title of topic
//the array returned to me can't have named keys like dictionary or else it doesn't count as an array


      $response = [
      ["bob", "11/11/2000", "Is it ok to breathe fire?"],
      ["iii", "22/22/2022", "Baloney"]
      ];


?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<script type="text/javascript">
function seshCheck(){

//	document.getElementById("name").innerHTML = "Welcome <?php echo $_SESSION['user'];?>!";
//      let l = sessionStorage.getItem("id");
//      var request = new XMLHttpRequest();
//	request.open("POST","sessionCheck.php",true);
//	request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
//	request.send("id="+l);
//	if("<?php echo $_SESSION['user']; ?>" == "undefined"){
//              window.location.replace("login.html");
//      }
	
}

document.getElementById("move").addEventListener("click", function(){
        <?php $_SESSION['top'] =?>document.querySelector("#move").querySelector("#which").innerHTML();
        console.log(document.querySelector("#move").querySelector("#which").innerHTML());
}); 


</script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<style>
body {
    background-color: #4E4E4E;
    text-align: center;         /* make sure IE centers the page too */
}
 
#wrapper {
    width: 900px;
    margin: 0 auto;             /* center the page */
}
 
#content {
    background-color: #fff;
    border: 1px solid #000;
    float: left;
    font-family: Arial;
    padding: 20px 30px;
    text-align: left;
    width: 100%;                /* fill up the entire div */
}
 
#menu {
    float: left;
    border: 1px solid #000;
    border-bottom: none;        /* avoid a double border */
    clear: both;                /* clear:both makes sure the content div doesn't float next to this one but stays under it */
    width:100%;
    height:20px;
    padding: 0 30px;
    background-color: #FFF;
    text-align: left;
    font-size: 85%;
}
 
#menu a:hover {
    background-color: #009FC1;
}
 
#userbar {
    background-color: #fff;
    float: right;
    width: 250px;
}
 
#footer {
    clear: both;
}
 
/* begin table styles */
table {
    border-collapse: collapse;
    width: 100%;
}
 
table a {
    color: #000;
}
 
table a:hover {
    color:#373737;
    text-decoration: none;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
}
 
td {
    padding: 5px;
}
 
/* Begin font styles */
h1, #footer {
    font-family: Arial;
    color: #F1F3F1;
}
 
h3 {margin: 0; padding: 0;}
 
/* Menu styles */
.item {
    background-color: #00728B;
    border: 1px solid #032472;
    color: #FFF;
    font-family: Arial;
    padding: 3px;
    text-decoration: none;
}
 
.leftpart {
    width: 70%;
}
 
.rightpart {
    width: 30%;
}
 
.small {
    font-size: 75%;
    color: #373737;
}
#footer {
    font-size: 65%;
    padding: 3px 0 0 0;
}
 
.topic-post {
    height: 100px;
    overflow: auto;
}
 
.post-content {
    padding: 30px;
}
 
textarea {
    width: 500px;
    height: 200px;
}
</style>
</head>
<body>
<h1>My forum</h1>
    <div id="wrapper">
    <div id="menu">
        <a class="item" href="index.html">Home</a> -
        <a class="item" href="create_topic.php">Create a topic</a> -
        <a class="item" href="create_cat.php">Create a category</a>
        
        <div id="userbar">
	<div id="userbar">Hello <?php echo $_SESSION['user']; ?>. Not you? Log out.</div>
    </div>
	<div id="content">
		<h3>Topics</h3>
		<ol>
		<?php
			for($x = 0; $x < count($response); $x++){
				echo '<li>
                        <a id="move" href = "thread.php">
                        <h4 class="title">
                                '.$response[$x][2].'
                        </h4>
                        <div class="bottom">
                                <p class="timestamp">
                                '.$response[$x][1].'
                                </p>
                                <p class="username">
                                '.$response[$x][0].'
                                </p>
                        </div>
                        </a>
                        </li>';
			}
		?>
		<li>
                        <a href="">
                        <h4 class="title">
                                Thread 2
                        </h4>
                        <div class="bottom">
                                <p class="timestamp">
                                        10/10/2000
                                </p>
                        </div>
                        </a>
		</li>
		</ol>
<script>
seshCheck();
</script>

</div><!-- content -->
</div><!-- wrapper -->

</body>
</html>

