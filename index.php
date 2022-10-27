<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!--<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="loggout">
		<a href="logout.php">Logout</a>
	
	</div> 
	
	<div class ="indek"> 
		<h1>CryptoCast</h1><break><break>
	</div>
	 <div class ="clickme">
	 <button class="button-30" role="button"></button>
	  <a id ="clickme" href ="">Click Me </a>
	  <br>
 	</div>
	
	
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoCast</title>
    <link rel="stylesheet" href="styleindex.css">
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav>
            <img src ="images/logo.png" class="logo">
            <ul>
                <li><a href ="pagemarket.html">Market</a></li>
                <li><a href ="https://minorprojectt.herokuapp.com">Predict</a></li>
                <li><a href ="https://whitepaperdatabase.com/">White Papers</a></li>
                <li><a href ="logout.php">Log Out</a></li>
            </ul>
        </nav>
       <!-- <a href="#" class="btn">EN</a> -->
        <div class="content">
            <h1>ALL in<br> ONE <span>Crypto</span> </h1>
            <p>Need help in Trading ?  Get all crypto information at one place and predict like a pro.</p>
            <a href="#" class="btn">Explore More</a>    
		<div class= "echo">
			<br><br>
			Hello, <?php echo $user_data['user_name']; ?>
    	</div>  	
                 
        </div>
    
        <div class="coin-list">
            <div class="coin">
                <img src="images/bitcoin.png" >
                <div>
                    <h3>$<span id="bitcoin"></span></h3>
                    <P>Bitcoin</P >
                </div>
            </div>
            <div class="coin">
                <img src="images/ethereum.png" >
                <div>
                    <h3>$<span id="ethereum"></span></h3>
                    <P>Ethereum</P >
                </div>
            </div>
            <div class="coin">
                <img src="images/dogecoin.png" >
                <div>
                    <h3>$<span id="dogecoin"></span></h3>
                    <P>Dogecoin</P >
                </div>
            </div>

         </div>
        
    </div>

    <script src="script.js"></script>
</body>

</html>  