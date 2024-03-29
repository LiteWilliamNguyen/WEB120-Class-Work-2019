<!DOCTYPE html>
<html>
<head>
<title>WEB120 Portal - Khanh Trinh Nguyen</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Khanh Trinh's Web120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="index.php">Big</a></li>
      <li><a href="../fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/vietnam.jpg" class="desktop" alt="picture of Country of Vietnam" />
 <img src="images/android.jpg" class="phone" alt="picture of android fandom" />
 <p>My first time traveling from Vietnam to United State was more than 10 years ago.</p>
 <p>I have a Chihuahua that is about 70 years old in human year</p>
 <p>My hobby is reading light novel. I can go days reading novel without eating. I have always use Android and Microsoft product through out my life, therefore I know more about Android than Apple.</p>
 <p>The type of web development is mostly for programmer. I want to make an interface that allow people to easily look at and nagivate to</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/technology.jpg" class="tablet" alt="" />
 <p>I am the only member in my family who use android, due to being overly familiar to android. The rest of my family use Apple Product</p>
 <p>My goal is to work as a programmer in a decent size company.</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019 - <?=date('Y')?> by <a href="#" target="_blank">Khanh Trinh Nguyen</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>

