<html>
    <head>
        <title>Prowess World Series</title>
        <meta name="viewport" content=width=device-width, initial-scale=1>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>    
    <body>
        
        <?php
            if(isset($_REQUEST['ok'])){
                $xml = new DOMDocument("1.0","UTF-8");
                $xml->load("../Players.xml");
                //change this
                
                $rootTag = $xml->getElementsByTagName("site")->item(0);
                
                $entryTag = $xml->createElement("entry");
                
                $nameTag = $xml->createElement("name",$_REQUEST['name']);
                $countryTag = $xml->createElement("country",$_REQUEST['country']);
                $memTag = $xml->createElement("mem",$_REQUEST['mem']);
                
                $entryTag->appendChild($nameTag);
                $entryTag->appendChild($countryTag);
                $entryTag->appendChild($memTag);
                
                $rootTag->appendChild($entryTag);
                $xml->save("../Players.xml");
                //change this
                
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
        <p>Hello World</p>    
        <p>Welcome to PWS</p>  
        <p>Enter Tournaments with us</p>  
        <p><a href="#" class="btn btn-primary btn-lg">Tell Me More</a></p> <!--target="_blank"-->
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
            <input type="text" name="mem"/>

            <input type="submit" name="ok"/>
        </form>
    </div>
    
<div class="container" id="results">
		<div class="row padding" id="one">
			<div class="col-md-6">
				<img src="1.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Work 1</h2>
				<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				
			</div>
		</div>	
		<hr />
		
		<div class="row padding" id="two">
			<div class="col-md-6">
				<h2 class="text-center">Work 2</h2>
				<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				
			</div>
			<div class="col-md-6">
				<img src="2.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
		</div>
		<hr />
		<div class="row padding" id="three">
			<div class="col-md-6">
				<img src="3.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Work 3</h2>
				<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>	
			</div>
		</div>
		<hr />
	</div>
	
	<div class="container padding" id="contact">
		<form role="form">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>
			
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" name="message" id="message" placeholder="Your message here"></textarea>
			</div>
			<div class="form-group">
				<input type="checkbox" /> Send me promotional content
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
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