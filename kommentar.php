<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 780px)" href="forum.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/ico">
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
	<title>Kebab i Oslo</title>
</head>
<body onload="myFunction()">
<div id="BG-top">
<div class="bigtitle"><a href="index.php" id ="kebabiOslo"></a></div>
<div id="location">
<ul><li class ="padding"><img src='country-no.png' alt ='country-no.png' height='30' width='30'>
 <!--  bildet link er http://www.apple.com/choose-your-country/ -->
</li><li class ="padding"><img src='country-icon-gb.png' alt ='country-gb.png' height='30' width='30'>
</li></ul>
</div>
  <div id="narrowbody">
  <nav id="main_nav">
 <ul class="nav_ul">
    <li><a class="question" href="page1.html">F A Q</a></li>
    <li><a href="page2.html">Søk Her</a></li>
    <li><a href="kommentar.html">Skriv kommentar</a></li>
    <li><a href="page4.html">Bla gjennom</a></li>
    <li><a href="page5.html">Populær</a></li>
  </ul>
  </nav><!--end nav 1 -->
      <div id="main_a">
<div id="msg" class="msg">
	<div id="temarammen" class="temarammen">
		<!-- <iframe src="articlepost.php" style="border:0px;" 
		name="temaFrame" onload="this.width=screen.width;this.height=screen.height;">
		</iframe>  -->
		<!-- this iframe is the one for picture and kommentar -->
	</div><!-- end of temarammen -->

	<div class="post chat">
			<!-- this following div is for admin to post picture and kommentar -->
			<div id="newPost">
			<iframe src="database2.php" style="border:0px;" 
    name="skrivkommentar" onload="this.width=screen.width;this.height=screen.height;">
    </iframe>
			</div>
			<script>
			$(document).ready(function(){
				$("#newPost").hide();
			  $("#button").click(function(){
			    $("#newPost").toggle("slow");
			    $("#temarammen").hide();
			  });
			});
			</script>
			<script type="text/javascript">
			function temainclude(){
			var tema = document.getElementById("msg");
			var newDIV = document.getElementById("newPost");
			var temarammen = document.getElementById("temarammen");
			tema.insertBefore(newDIV,temarammen);
			}
			</script>
			<h3>Are you admin?</h3>
			<a id="button" onclick="temainclude()">click here for enter new post</a>
	</div><!-- end "postchat" -->
</div><!-- end "msg" -->
	</div><!--div include-->
      <script type="text/javascript" src="footer.js"></script>
</div><!--end narrowbody-->
</div><!--end bgtop -->
       <script type="text/javascript">
        function myFunction() {
          var greeting;
          if (new Date().getHours() < 19) {
              greeting = "Good day, Kebab i Oslo!";
          } else {
              greeting = "Good evening , Kebab i Oslo!";
          }
          document.getElementById("kebabiOslo").innerHTML = greeting;
      }
       </script>
</body>
</html>
