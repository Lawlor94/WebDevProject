<html>
   <head>
      <title>Prowess World Series</title>
      <meta name="viewport" content=width=device-width, initial-scale=1>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/style.css" />
      <script>
         function validateForm() {
             
             var x = document.forms["form"]["name"].value;
         	
         	var y = document.forms["form"]["dob"].value;
             var atdob = y.indexOf("/");
         	
         	var z = document.forms["form"]["emailaddress"].value;
             var atpos = z.indexOf("@");
             var dotpos = z.lastIndexOf(".");
         	
             if (x==null || x=="") {
         	alert("Name field is mandatory");
                 return false;
         		
         	}
         	
         	else if (atdob< 1) {
             alert("Not a valid date of birth, must be wrote in DD/MM/YYYY format");
             return false;	
             }
         	
             else if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=z.length) {
                 alert("Not a valid e-mail address");
                 return false;	
             }
         	
         	else {
             alert("Sign Up Complete!");
             return false;
         	}
         
         
         }
      </script>
   </head>
   <body>
      <?php
         if(isset($_REQUEST['ok'])){
             $xml = new DOMDocument("1.0","UTF-8");
             $xml->load("../Players.xml");
         
             $rootTag = $xml->getElementsByTagName("site")->item(0);
         
             $entryTag = $xml->createElement("entry");
         
             $nameTag = $xml->createElement("name",$_REQUEST['name']);
             $countryTag = $xml->createElement("country",$_REQUEST['country']);
             $gameTag = $xml->createElement("game",$_REQUEST['game']);
             $memTag1 = $xml->createElement("mem",$_REQUEST['mem1']);
             $memTag2 = $xml->createElement("mem",$_REQUEST['mem2']);
             $memTag3 = $xml->createElement("mem",$_REQUEST['mem3']);
             $memTag4 = $xml->createElement("mem",$_REQUEST['mem4']);
             $memTag5 = $xml->createElement("mem",$_REQUEST['mem5']);
         
             $entryTag->appendChild($nameTag);
             $entryTag->appendChild($countryTag);
             $entryTag->appendChild($memTag1);
             $entryTag->appendChild($memTag2);
             $entryTag->appendChild($memTag3);
             $entryTag->appendChild($memTag4);
             $entryTag->appendChild($memTag5);
         
             $rootTag->appendChild($entryTag);
             $xml->save("../Players.xml");
         
         }
         ?>
      <div class="navbar-static-top navbar-inverse" id="home">
         <div class="container">
            <div class="navbar-brand">
               Prowess World Series
            </div>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            Menu
            </button>
            <div class="collapse navbar-collapse navHeaderCollapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="">Home</a></li>
                  <li><a href="#tournaments">Tournaments</a></li>
                  <li><a href="#results">Results</a></li>
                  <li><a href="#signup">Sign Up</a></li>
                  <li><a href="#contact">Contact</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="jumbotron">
         <div class="container">
            <p>WELCOME TO THE PROWESS WORLD SERIES!</p>
            <p><a href="#" class="btn btn-warning btn-lg">Tell Me More</a></p>
            <!--target="_blank"-->
            <div ="container">
         </div>
      </div>
      </div>
      <div class="alt1" id="tournaments">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h2 class="text-center">Past Work</h2>
                  <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <a href="#one" class="btn btn-default">Tell Me More...</a>
               </div>
               <div class="col-md-4">
                  <h2 class="text-center">Past Work</h2>
                  <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <a href="#two" class="btn btn-default">Tell Me More...</a>
               </div>
               <div class="col-md-4">
                  <h2 class="text-center">Past Work</h2>
                  <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <a href="#three" class="btn btn-default">Tell Me More...</a>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <form action="index.php" method="post">
            <input type="text" name="name"/>
            <input type="text" name="country"/>
            <input type="text" name="game"/>
            <input type="text" name="mem1"/>
            <input type="text" name="mem2"/>
            <input type="text" name="mem3"/>
            <input type="text" name="mem4"/>
            <input type="text" name="mem5"/>
            <input type="submit" name="ok"/>
         </form>
      </div>
      <div class="games" id="results">
      <div class="container">
         <div class="row padding" id="one">
            <div class="col-md-6">
               <img src="csgo.png" class="img-circle img-responsive" alt="Circular holding image" id="gameimage"/>
            </div>
            <div class="col-md-6">
               <h2 class="text-center">Counter Strike : Global Offensive</h2>
               <p class="text-justify">Counter-Strike: Global Offensive (CS:GO) is an online first-person shooter developed by Hidden Path Entertainment and Valve Corporation. It is the fourth game in the main Counter-Strike franchise. Counter-Strike: Global Offensive was released on August 21, 2012, and made available for Microsoft Windows and OS X on Steam, Xbox 360, and a United States-only version on PlayStation 3. The Linux version was released in September 2014.</p>
               <p>It features classic content, such as revamped versions of classic maps, as well as brand new maps, characters and game modes. Cross-platform multiplayer was planned between Windows, OS X, Linux, and PlayStation 3 players, but was ultimately limited to Windows, OS X, and Linux because of the differences in update-frequency between systems. </p>
            </div>
         </div>
         <hr />
         <div class="row padding" id="two">
            <div class="col-md-6">
               <h2 class="text-center">Hearthstone</h2>
               <p class="text-justify">Hearthstone: Heroes of Warcraft is an online collectible card game developed by Blizzard Entertainment. It is free-to-play with optional purchases to acquire additional cards and access content quicker. The game was announced at the Penny Arcade Expo in March 2013 and released on March 11, 2014. Hearthstone is available on both Microsoft Windows and OS X systems, and is also available on iOS and Android touchscreen devices. </p>
               <p>New content for the game involves the addition of new card sets and gameplay, taking the form of either expansion packs or single-player adventures that reward the player with collectible cards upon completion. As of November 2015, there were more than 40 million registered Hearthstone accounts.</p>
            </div>
            <div class="col-md-6">
               <img src="hearthstone.png" class="img-circle img-responsive" alt="Circular holding image"/>
            </div>
         </div>
         <hr />
         <div class="row padding" id="three">
            <div class="col-md-6">
               <img src="LOL.png" class="img-circle img-responsive" alt="Circular holding image"/>
            </div>
            <div class="col-md-6">
               <h2 class="text-center">League of Legends</h2>
               </h2>
               <p class="text-justify">League of Legends (LoL) is a multiplayer online battle arena, real-time strategy video game developed and published by Riot Games, for Microsoft Windows and Mac OS X. It is a free-to-play game supported by microtransactions and inspired by the mod Defense of the Ancients for the video game Warcraft III: The Frozen Throne. </p>
               <p>In League of Legends, players assume the role of an unseen "summoner" that controls a "champion" with unique abilities and battle against a team of other players or computer-controlled champions. The goal is usually to destroy the opposing team's "nexus", a structure which lies at the heart of a base protected by defensive structures. Each League of Legends match is discrete, with all champions starting off fairly weak but increasing in strength by accumulating items and experience over the course of the game.</p>
            </div>
         </div>
         <hr />
      </div>
      <div>
         <form id="signup" name="form" align="center" action="demo_form.asp" onsubmit="return foo()" method="post">
            <label>
            <span>Name: </span><br />
            <input id="name" type="text" placeholder="Forename Surename" name="name" />
            </label>
            <br />
            <br />
            <label>
            <span>Address: </span><br />
            <input id="address" type="text" placeholder="No., Street, Town, County" name="address" />
            </label>
            <br />
            <br />
            <label>
            <span>Date Of Birth: </span><br />
            <input id="dob" type="text" placeholder="DD/MM/YYYY" name="dob" />
            </label>
            <br />
            <br />
            <label>
            <span>Email Address: </span><br />
            <input id="emailaddress" type="text" placeholder="email@hostsite.com" name="emailaddress" />
            </label>
            <br />
            <br />
            <label>
            <br />
            <br />
            <input type="button"  onClick="validateForm()" value="Sign Up Now">
            </label>
         </form>
      </div>
      <div class="alt2">
         <div class="container">
            <footer>&copy; eSports <br /><a href="#home">Back To Top</a></footer>
         </div>
      </div>
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script>
         $(function() {
         $('a[href*=#]:not([href=#])').click(function() {
         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
         if (target.length) {
         $('html,body').animate({
           scrollTop: target.offset().top
         }, 1000);
         return false;
         }
         }
         });
         });
      </script>
   </body>
</html>