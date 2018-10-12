<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
  <script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBwsAGzY7oZr-zoQJj1GkqFKcNHbL3p7V0",
    authDomain: "video-stream-bfc99.firebaseapp.com",
    databaseURL: "https://video-stream-bfc99.firebaseio.com",
    projectId: "video-stream-bfc99",
    storageBucket: "video-stream-bfc99.appspot.com",
    messagingSenderId: "63189921909"
  };
  firebase.initializeApp(config);
</script>
<script type="text/javascript" src="logout.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Zilla Slab Highlight' rel='stylesheet'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href="cssstyling.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<title>Welcome to the home page</title>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <a class="active" href="#home" style="font-family: 'Crete Round'; font-size:22px;">NEPTUNIA <i class="fa fa-youtube-play"></i></a>
    <a id="ababab" href="#about">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    <a id="apapap" id="log" onclick="logout()">Logout</a>
    <input class="sbox" type="text" id="search" onkeydown = "if (event.keyCode == 13){heh();}" placeholder="Search...">
    </div>

    <!--<img src="search.png" alt="magnifying glass">
    <a href="#fa fa-search"><i class="fa fa-search" style="font-size: 25px; margin-top: 10px;"></i></a>-->

    <script type="text/javascript">
      function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
        } 
      else {
        x.className = "topnav";
        }
      }
      function getTitle(videoid,cap){
            var xhttp1= new XMLHttpRequest();
            xhttp1.onreadystatechange = function(){
                if(this.readyState==4 && this.status== 200){
                    var myob=JSON.parse(this.responseText);
                    var haathi=myob.items[0].snippet.title;
                    document.getElementById(cap).innerHTML=haathi;
        }
    };
    xhttp1.open("GET",`https://www.googleapis.com/youtube/v3/videos?id=${videoid}&key=AIzaSyDdD_Q_6M_3t4fJ3-yLo5reUqr9w1Nqlq0&part=snippet`,true);
            xhttp1.send();
        }

      function searchit(){
            //var se= document.getElementById("search").value;
            var xhttp= new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState==4 && this.status== 200){
                    var obj=JSON.parse(this.responseText);
                    document.getElementById("vid0").src=`http://img.youtube.com/vi/${obj.items[0].id}/0.jpg`;
                    document.getElementById("vid1").src=`http://img.youtube.com/vi/${obj.items[1].id}/0.jpg`;
                    document.getElementById("vid2").src=`http://img.youtube.com/vi/${obj.items[2].id}/0.jpg`;
                    document.getElementById("vid3").src=`http://img.youtube.com/vi/${obj.items[3].id}/0.jpg`;
                    document.getElementById("vid4").src=`http://img.youtube.com/vi/${obj.items[4].id}/0.jpg`;
                    document.getElementById("vid5").src=`http://img.youtube.com/vi/${obj.items[5].id}/0.jpg`;
                    document.getElementById("vid6").src=`http://img.youtube.com/vi/${obj.items[6].id}/0.jpg`;
                    document.getElementById("vid7").src=`http://img.youtube.com/vi/${obj.items[7].id}/0.jpg`;
                    document.getElementById("vid8").src=`http://img.youtube.com/vi/${obj.items[8].id}/0.jpg`;
                    document.getElementById("vid9").src=`http://img.youtube.com/vi/${obj.items[9].id}/0.jpg`;
                    document.getElementById("anc0").href=`playpage.html?query=${obj.items[0].id}`;
                    document.getElementById("anc1").href=`playpage.html?query=${obj.items[1].id}`;
                    document.getElementById("anc2").href=`playpage.html?query=${obj.items[2].id}`;
                    document.getElementById("anc3").href=`playpage.html?query=${obj.items[3].id}`;
                    document.getElementById("anc4").href=`playpage.html?query=${obj.items[4].id}`;
                    document.getElementById("anc5").href=`playpage.html?query=${obj.items[5].id}`;
                    document.getElementById("anc6").href=`playpage.html?query=${obj.items[6].id}`;
                    document.getElementById("anc7").href=`playpage.html?query=${obj.items[7].id}`;
                    document.getElementById("anc8").href=`playpage.html?query=${obj.items[8].id}`;
                    document.getElementById("anc9").href=`playpage.html?query=${obj.items[9].id}`;
                    getTitle(obj.items[0].id,"cap0");
                    getTitle(obj.items[1].id,"cap1");
                    getTitle(obj.items[2].id,"cap2");
                    getTitle(obj.items[3].id,"cap3");
                    getTitle(obj.items[4].id,"cap4");
                    getTitle(obj.items[5].id,"cap5");
                    getTitle(obj.items[6].id,"cap6");
                     getTitle(obj.items[7].id,"cap7");
                     getTitle(obj.items[8].id,"cap8");
                     getTitle(obj.items[9].id,"cap9");
                     searchmusic;
                }
            };
            xhttp.open("GET","https://www.googleapis.com/youtube/v3/videos?part=contentDetails&chart=mostPopular&regionCode=US&maxResults=25&key=AIzaSyDdD_Q_6M_3t4fJ3-yLo5reUqr9w1Nqlq0",true);
            xhttp.send();
        }
        function searchmusic(){
            //var se= document.getElementById("search").value;
            var xhttp2= new XMLHttpRequest();
            xhttp2.onreadystatechange = function(){
                if(this.readyState==4 && this.status== 200){
                    var obj=JSON.parse(this.responseText);
                    document.getElementById("vid10").src=`http://img.youtube.com/vi/${obj.items[0].id.videoId}/0.jpg`;
                    document.getElementById("vid11").src=`http://img.youtube.com/vi/${obj.items[1].id.videoId}/0.jpg`;
                    document.getElementById("vid12").src=`http://img.youtube.com/vi/${obj.items[2].id.videoId}/0.jpg`;
                    document.getElementById("vid13").src=`http://img.youtube.com/vi/${obj.items[3].id.videoId}/0.jpg`;
                    document.getElementById("vid14").src=`http://img.youtube.com/vi/${obj.items[4].id.videoId}/0.jpg`;
                    document.getElementById("vid15").src=`http://img.youtube.com/vi/${obj.items[5].id.videoId}/0.jpg`;
                    document.getElementById("vid16").src=`http://img.youtube.com/vi/${obj.items[6].id.videoId}/0.jpg`;
                    document.getElementById("vid17").src=`http://img.youtube.com/vi/${obj.items[7].id.videoId}/0.jpg`;
                    document.getElementById("vid18").src=`http://img.youtube.com/vi/${obj.items[8].id.videoId}/0.jpg`;
                    document.getElementById("vid19").src=`http://img.youtube.com/vi/${obj.items[9].id.videoId}/0.jpg`;
                    document.getElementById("anc10").href=`playpage.html?query=${obj.items[0].id.videoId}`;
                    document.getElementById("anc11").href=`playpage.html?query=${obj.items[1].id.videoId}`;
                    document.getElementById("anc12").href=`playpage.html?query=${obj.items[2].id.videoId}`;
                    document.getElementById("anc13").href=`playpage.html?query=${obj.items[3].id.videoId}`;
                    document.getElementById("anc14").href=`playpage.html?query=${obj.items[4].id.videoId}`;
                    document.getElementById("anc15").href=`playpage.html?query=${obj.items[5].id.videoId}`;
                    document.getElementById("anc16").href=`playpage.html?query=${obj.items[6].id.videoId}`;
                    document.getElementById("anc17").href=`playpage.html?query=${obj.items[7].id.videoId}`;
                    document.getElementById("anc18").href=`playpage.html?query=${obj.items[8].id.videoId}`;
                    document.getElementById("anc19").href=`playpage.html?query=${obj.items[9].id.videoId}`;
                    getTitle(obj.items[0].id.videoId,"cap10");
                    getTitle(obj.items[1].id.videoId,"cap11");
                    getTitle(obj.items[2].id.videoId,"cap12");
                    getTitle(obj.items[3].id.videoId,"cap13");
                    getTitle(obj.items[4].id.videoId,"cap14");
                    getTitle(obj.items[5].id.videoId,"cap15");
                    getTitle(obj.items[6].id.videoId,"cap16");
                     getTitle(obj.items[7].id.videoId,"cap17");
                     getTitle(obj.items[8].id.videoId,"cap18");
                     getTitle(obj.items[9].id.videoId,"cap19");
                }
            };
            xhttp2.open("GET","https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=10&topicId=music&type=video&key=AIzaSyDdD_Q_6M_3t4fJ3-yLo5reUqr9w1Nqlq0",true);
            xhttp2.send();
        }
        function heh()
{
  search1=document.getElementById("search").value;
   var querystring= "?query=" + search1;
   window.location.href="aftersearch.html" + querystring;
   
        }
        
        function start(){
        	searchit();
        	searchmusic();
        }
        window.onload=start;
  </script>
  </div>
  <div class="w3-container">
    <div class="module" >
    <header>
      <p style="margin-top: 0px;" class="w3-center w3-animate-bottom"><span id="size1">Welcome to our page</span></p>
    </header>
  </div>
  <hr align="left" style="height:6px;width:99.2%; background-color:black;margin-left: 10px;">
  <div class="trendy">
    <span style="margin-left:45px;"><b style="font-family: Roboto; font-weight: bold;font-size: 25px;">Trending </b><span class="try"><i class="fa fa-fire" style="font-size:25px;color:#f77724;"></i></span></span>
    <br>
    <div class="img1" >
    <figure>
    <a class="login" id="anc0" href="http://www.google.com" title="Login"><img id="vid0" src="about:blank" width="200" height="150" class="vid1">
    <figcaption id="cap0">
    </figcaption>
    </a>
    </figure>
    </div>

    <div class="img1" >
    <figure>
    <a href="https://www.google.com" id="anc1" class="login" title="Login"><img src="about:blank" id="vid1" width="200" height="150" class="vid1">
    <figcaption id="cap1">
    </figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc2" href="www.google.com" class="login" title="Login"><img src="about:blank" id="vid2" width="200" height="150" class="vid1">
    <figcaption id="cap2"></figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc3" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid3" width="200" height="150" class="vid1">
    <figcaption id="cap3"></figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc4" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid4" width="200" height="150" class="vid1">
    <figcaption id="cap4"></figcaption>
    </a>
    </figure>
    </div>

    <div class="container2">
    <div class="img1">
    <figure>
    <a id="anc5" href="https://www.google.com" class="login" title="Login"><img src="about:" id="vid5" width="200" height="150">
    <figcaption id="cap5"></figcaption>
    </a>
    </figure>
    </div>
    
    <div class="img1">
    <figure>
    <a id="anc6" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid6" width="200" height="150">
    <figcaption id="cap6"></figcaption>
    </a>
    </figure>
    </div>
    
    <div class="img1">
    <figure>
    <a id="anc7"href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid7" width="200" height="150">
    <figcaption id="cap7"></figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc8" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid8" width="200" height="150">
    <figcaption id="cap8"></figcaption>
    </a>
    </figure>
    </div>
    <div class="img1">
    <figure>
    <a id="anc9" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid9" width="200" height="150">
    <figcaption id="cap9"></figcaption>
    </a>
    </figure>
    </div>
  </div>
</div>
<div class="music">
    <br>
    <span style="margin-left:45px;"><b style="font-family: Roboto; font-weight: bold;font-size: 25px;">Music </b><span class="try"><i class="fa fa-music" style="font-size:25px;color:#f77724;"></i></span></span>
    <br>
    <div class="img1" >
    <figure>
    <a class="login" id="anc10" href="http://www.google.com" title="Login"><img id="vid10" src="about:blank" width="200" height="150" class="vid1">
    <figcaption id="cap10">
    </figcaption>
    </a>
    </figure>
    </div>

    <div class="img1" >
    <figure>
    <a href="https://www.google.com" id="anc11" class="login" title="Login"><img src="about:blank" id="vid11" width="200" height="150" class="vid1">
    <figcaption id="cap11">
    </figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc12" href="www.google.com" class="login" title="Login"><img src="about:blank" id="vid12" width="200" height="150" class="vid1">
    <figcaption id="cap12"></figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc13" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid13" width="200" height="150" class="vid1">
    <figcaption id="cap13"></figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc14" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid14" width="200" height="150" class="vid1">
    <figcaption id="cap14"></figcaption>
    </a>
    </figure>
    </div>

    <div class="container2">
    <div class="img1">
    <figure>
    <a id="anc15" href="https://www.google.com" class="login" title="Login"><img src="about:" id="vid15" width="200" height="150">
    <figcaption id="cap15"></figcaption>
    </a>
    </figure>
    </div>
    
    <div class="img1">
    <figure>
    <a id="anc16" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid16" width="200" height="150">
    <figcaption id="cap16"></figcaption>
    </a>
    </figure>
    </div>
    
    <div class="img1">
    <figure>
    <a id="anc17"href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid17" width="200" height="150">
    <figcaption id="cap17"></figcaption>
    </a>
    </figure>
    </div>

    <div class="img1">
    <figure>
    <a id="anc18" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid18" width="200" height="150">
    <figcaption id="cap18"></figcaption>
    </a>
    </figure>
    </div>
    <div class="img1">
    <figure>
    <a id="anc19" href="https://www.google.com" class="login" title="Login"><img src="about:blank" id="vid19" width="200" height="150">
    <figcaption id="cap19"></figcaption>
    </a>
    </figure>
    </div>
  </div>
</div>
<div class="beeche_me" style="margin-left: 40vw;">
  <a href="www.google.com"><i class="fa fa-facebook-official" style="font-size:3vw"></i></a>
  <a href="www.google.com" style="margin-left: 15px;"><i class="fa fa-instagram" style="font-size:3vw"></i></a>
  <a href="www.google.com" style="margin-left: 15px;margin-right: 0px;"><i class="fa fa-twitter" style="font-size:3vw"></i></a>
</div>
</div>
</body>
</html>