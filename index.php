<!DOCTYPE html>
<html>
<title>Ainthinai</title>
<link rel="shortcut icon" type="image/x-icon" href="images\icon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" id="topNav" >
      <a class="w3-bar-item w3-button w3-hover-white w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button"  style="color:black"><img src="images\icon.png"height="40px"border-radius"10px">&nbsp  Ainthinai</a>
      <a href="adminmainpage3.php" class="w3-bar-item w3-button w3-hide-small w3-right"  style="color:black" font-family="Arial"><i class="fa fa-user" style="font-size:25px;color:green"></i> Admin</a>
      <a href="#about" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-users" style="font-size:25px;color:green"></i> About Us</a>
      <a href="#projects" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-line-chart" style="font-size:25px;color:green"></i> Projects</a>
      <a href="#gallery" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-picture-o" style="font-size:25px;color:green"></i> Gallery</a>
      <a href="#plant" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-leaf" style="font-size:25px;color:green"></i> Plant trees</a>
      <a href="#blog" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-id-card-o" aria-hidden="true" style="font-size:25px;color:green"></i> Blog</a>
      <a href="#locations" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-map-marker" aria-hidden="true" style="font-size:25px;color:green"></i> Locations</a>
      <a href="#contact" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-envelope" style="font-size:25px;color:green"></i> Contact us</a>
  </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"> About Us</a>
      <a href="#projects" class="w3-bar-item w3-button" onclick="toggleFunction()"> Projects</a>
      <a href="#gallery" class="w3-bar-item w3-button" onclick="toggleFunction()"> Gallery</a>
      <a href="#plant" class="w3-bar-item w3-button" onclick="toggleFunction()"> Plant Trees</a>
      <a href="#blog" class="w3-bar-item w3-button" onclick="toggleFunction()"> Blog</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()"> Contact Us</a>
      <a href="#locations" class="w3-bar-item w3-button" onclick="toggleFunction()"> Locations</a>
      <a href="adminsignin.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> Admin</a>
    </div>


      </div>
  </div>
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
<!-- particles.js container --> <div id="particles-js"></div> <!-- stats - count particles --> <div class="count-particles"> <span class="js-count-particles">--</span> particles </div> <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <div class="w3-display-middle" style="white-space:nowrap;">
      <img src="images\icon.png"border-radius="30px"></img><br>
<h6 style="color:white"><b>&nbsp An Environment Conservation<br> Organization</b></h6>
    </div>
  </div>

  <div class="w3-content w3-container w3-padding-64" id="about">
  <h2 class="w3-center">About Us</h2>
  <h3 class="w3-center">Ainthinai</h3>
  <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
  <p>Ainthinai, is a volunteering non-profit organisation created with a vision to restore our environment and replenish its resources. The organisation aims to bring in public-spirited people to share their efforts to transform our society into a much better place to thrive! </p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-users w3-margin-right"></i>Members of Ainthinai</b></p><br>
      <img src="images\members.jpg" class="w3-round w3-image  w3-hover-opacity-off" alt="Members of Ainthinai" width="500" height="333">
    </div>
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p> This organisation was formed a few years ago with a social initiative of ‘Service to our Society’. This mantra drives in groups of selfless minds to work for our surrounding and bring out a promising change. “It is us, who live in this society and it obviously becomes the sole responsibility of ours to take enough care of them and make it an ecofriendly and a suitable place for us to sustain”, we people here at Ainthinai completely believe in this and cordially work for the betterment of lives of many people around. We have cooperatively did a number of plantation activities ,maintenance events, other social welfare practices and promise to continue them and do commendable jobs in future. Our social activities and initiatives may be small but we believe that it has created remarkable effects around. As it is an absolute fact that ‘little things makes a mighty difference’ and we, the people at Ainthinai are ready to make positive differences around us!.<b>#Nature #Conservation #replinish #GoGreen #Ecosystem</b></p>
    </div>
  </div>

  <p class="w3-large w3-center w3-padding-16" id="projects">Our Target This Year:</p>
  <p class="w3-wide"><i class="fa fa-leaf" ></i>Saplings Planted</p>
  <div class="w3-light-grey">
 <div class="w3-container w3-padding-small w3-green w3-center" style="width:90%">862/1000</div>
  </div>
  <p class="w3-wide"><i class="fa fa-shower" ></i>Maintainance</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-green w3-center" style="width:65%">65%</div>
  </div>
</div>
<div class="w3-row w3-center w3-green w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">50+</span><br>
    Team Members
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">25+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">1000+</span><br>
    Saplings Planted
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">30+</span><br>
    Locations
  </div>
</div>
<div class="bgimg-2 w3-display-container w3-opacity-min"id="gallery">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-black w3-wide">MOMENTS</span>
  </div>
</div>


<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">GALLERY</h3>
  <p class="w3-center"><em>Here are some of our latest photos .<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="gallery\img1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="“ If you can’t fee(plant) 100 people (trees),then feed (plant) JUST ONE - Mother Theresa

Ainthinai- Nellai Nature Club
Every Tuesday’s">
    </div>

    <div class="w3-col m3">
      <img src="gallery\img2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Nellai Nature Club
· 28 January ·

At Perumalpuram.">
    </div>

    <div class="w3-col m3">
      <img src="gallery\img3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="gallery\img4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt=" Service to Planet is Service to God “
#ainthinai #everytuesdays
Volunteer for green hands of Nellai from Nellai Nature club">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="gallery\img5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="gallery\img6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="gallery\img7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="gallery\img8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
    <a href="gallery.html"><button class="w3-button w3-padding-large w3-green" style="margin-top:64px">LOAD MORE</button></a>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<div class="bgimg-2 w3-display-container w3-opacity-min"id="plant">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">Plant Trees<i class="fa fa-leaf" style="font-size:25px;color:white"></i></span>
  </div>
</div>




<div class="w3-content w3-container w3-padding-64" >
<h2 class="w3-center">Plant Tree  <i class="fa fa-leaf" style="font-size:25px;color:green"></i></h2>
<h3 class="w3-center">You can also Contribute</h3>
<p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
<p>If you are concerned or interested to build a green ecosystem environment around your house, then we could help you. We are group of members help people in motivating their interest towards planting Saplings .<b>Creating a Natural Ecosystem.</b> </p>

<section class="blog-post-area">
           <div class="container">
               <div class="row">
                   <div class="blog-post-area-style">
                           <div class="col-md-12">
                               <div class="single-post-big">
                                 <div class="w3-col m6 w3-center w3-padding-large">
                                   <img src="gallery/img1.jpg" class="w3-round w3-image  w3-hover-opacity-off" alt="Members of Ainthinai" width="600" height="333">
                                 </div>
                                   <div >
                                       <h2 class="w3-center">Fill The form.</h2>
                                       <p> 1)If you are alone but interested to maintain a lush green environment view around your house area,then don’t worry.We will help you out by connecting some of our volunteers near your house. </p>
                                       <p> 2)We will be meeting our members every Tuesday and plan the structure of your environment ,whether the allocated area for planting the tree is safe .And also discuss about the maintenance for the saplings.We will work it out!</p>
                                       <p> 3)You have to fill up a form asking the variant of tree that you desired to plant along your place.Your place must be within the regional area of Palayamkottai. </p>
                                      <a href="form.php"> <button class="w3-button w3-green w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> Take up Form
        </button></a>
                                   </div>
                               </div>
                           </div></section>



</div>

<div class="bgimg-2 w3-display-container w3-opacity-min"id="blog">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">BLOG</span>
  </div>
</div>
<br>

<section class="blog-post-area">
           <div class="container">
               <div class="row">
                   <div class="blog-post-area-style">
                           <div class="col-md-12">
                               <div class="single-post-big">
                                 <div class="w3-col m6 w3-center w3-padding-large">
                                   <img src="gallery/img17.jpg" class="w3-round w3-image  w3-hover-opacity-off" alt="Members of Ainthinai" width="500" height="333">
                                 </div>
                                   <div>
                                       <h2 class="w3-center">Renowation Work Of NGO Colony Pond </h2>
                                       <p>This pond is situated in the middle of NGO Colony of Tirunelveli. This pond is termed as Periakolam.The main crisis faced by the environment of this pond id that the water gets overflowed and reaches the locality during the span of heavy rain and it gets easily drained of from the pond after the rain.in order to overcome the crisis a bank surrounding the pond has been constructed.</p>
                                       <p>This project cost is mainly taken from crowd funding. Therefore this project made it possible for pisciculture harvesting. We also planned and achieved to plant about 236 saplings around the pond to make it lively. It is expected that this pond would become a marvellous environment for hibernating hotspot for migratory birds as well as pisciculture harvest.</p>
                                       <h4><span class="date">25 February 2019</span><span class="author"><b>  Posted By: </b><span class="author-name">AinthinaiNellai</span></span>
                                       </h4>
                                   </div>
                               </div>
                           </div></section><br><hr>
                           <section class="blog-post-area">
                                      <div class="container">
                                          <div class="row">
                                              <div class="blog-post-area-style">
                                                      <div class="col-md-12">
                                                          <div class="single-post-big">
                                                            <div class="w3-col m6 w3-center w3-padding-large">
                                                              <img src="gallery/img26.jpg" class="w3-round w3-image  w3-hover-opacity-off" alt="Members of Ainthinai" width="500" height="333">
                                                            </div>
                                                              <div>
                                                                  <h2 class="w3-center">Work So Far.</h2>
                                                                  <p>Yes! We have reached our achievement so far and we will keep pursuing toward our goal. We have planned to plant saplings among various places in Nellai city. We are also concerned about handling and maintaining the plants. Our goal  is to provide a natural and fresh green environment in Nellai. And thanks to all volunteers who involved to build such a sustainable environment and will work to give a great impact.</p>
                                                                  <h4><span class="date">25 September 2019</span><span class="author"><b>  Posted By: </b><span class="author-name">AinthinaiNellai</span></span>
                                                                  </h4>
                                                              </div>
                                                          </div>
                                                      </div></section><br><hr>
                                                      <section class="blog-post-area">
                                                                 <div class="container">
                                                                     <div class="row">
                                                                         <div class="blog-post-area-style">
                                                                                 <div class="col-md-12">
                                                                                     <div class="single-post-big">
                                                                                       <div class="w3-col m6 w3-center w3-padding-large">
                                                                                         <img src="gallery/img19.jpg" class="w3-round w3-image  w3-hover-opacity-off" alt="Members of Ainthinai" width="500" height="333">
                                                                                       </div>
                                                                                         <div>
                                                                                             <h2 class="w3-center">Our  Next Project</h2>
                                                                                             <p>The pond work is finally finished .And we are happy to announce that our next project is plant saplings on either sides of roadside of 60ft road which is in front of  Sarah Tucker College. The project will be initiated as soon as the lockdown ends. You can also be a part of this project .Leave a message here. </p>
                                                                                             <h4><span class="date">25 March 2020</span><span class="author"><b>  Posted By: </b><span class="author-name">AinthinaiNellai</span></span>
                                                                                             </h4>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div></section>
                                                                                    <br>
                                                                                    <div class="bgimg-2 w3-display-container w3-opacity-min"id="locations">
                                                                                      <div class="w3-display-middle">
                                                                                         <span class="w3-xxlarge w3-text-white w3-wide">LOCATIONS</span>
                                                                                      </div>
                                                                                    </div>
                                                                                    <br>


                                                                                    <section class="blog-post-area">
                                                                                               <div class="container">
                                                                                                   <div class="row">
                                                                                                       <div class="blog-post-area-style">
                                                                                                               <div class="col-md-12">
                                                                                                                   <div class="single-post-big">
                                                                                                                     <div class="w3-col m6 w3-center w3-padding-large">
                                                                                                                       <iframe src="https://fallingfruit.org/locations/embed?z=12&y=8.70982&x=77.73783&m=true&t=roadmap&c=forager,freegan&l=false&locale=en" width=440 height=400 scrolling="no" style="border:none;"></iframe>
                                                                                                                       <a href="http://fallingfruit.org/?z=13&y=8.71543&x=77.73195&m=true&t=roadmap&l=false&locale=en&c=forager,freegan"><button class="w3-button w3-green w3-center w3-section" type="submit" name="submit">
                                                                                                                         <i class="fa fa-map-marker"></i> Go to Maps
                                                                                                                       </button></a>
                                                                                                                          </div>
                                                                                                                       <div>
                                                                                                                           <h2 class="w3-center">Plantation of Trees </h2>
                                                                                                                           <p>We plant Community Fruit Trees in many different locations where the public can access them including residential front yards and businesses with access from a public sidewalk, in the medians between streets and sidewalk, at schools, in public parks. These trees are planted where people walk every day and where they are highly accessible<br>
                                                                                                                           No financial transactions take place at all. Instead, nature and community provide for each other. And the fruit is likely to be some of the freshest and richest that can be found. We’re on a mission to wake people up to the idea that food doesn’t have to come from the store. It can be taken free!</p>
                                                                                                                         </div>

                                                                                                                   </div>
                                                                                                               </div>


                                                                                                         </section><br><hr>

                                                                                    <div class="bgimg-2 w3-display-container w3-opacity-min"id="contact">
                                                                                      <div class="w3-display-middle">
                                                                                         <span class="w3-xxlarge w3-text-white w3-wide">Contact Us</span>
                                                                                      </div>
                                                                                    </div><br>
                                                                                    <div class="w3-content w3-container w3-padding-64" >


  <h3 class="w3-center">Contact</h3>
  <p class="w3-center"><em>We'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="gallery/img6.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Tirunelveli,TamilNadu<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +073581 11111<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: ainthinai@gmail.com<br>
      </div>
      <p>Let's join our hands <i class="fa fa-leaf" style="color:green"></i> and make a better Eco-System</p>


      <?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['message'];

  $to='harikumarkannanarul@gmail.com';
  $message="Name: ".$name."\n\n"."Email: ".$email."\n\nWrote the following message: ".$msg;
  $header="From :".$email;
  mail($to,$header,$message);
  echo"<h4>Thank You!".$name."We'll contact you soon.</h4>";

  include_once'dbh.inc.php';

$sql="INSERT INTO contact(name,email,message) VALUES('$name','$email','$msg');";
mysqli_query($conn,$sql);
echo"success";
}

 ?>

      <form action="" target="" method="POST">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name"  name="name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email"  name="email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message"  name="message">
        <button class="w3-button w3-green w3-right w3-section" type="submit" name="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
<footer class="w3-center w3-green w3-padding-64  w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
  <a href="https://www.facebook.com/pg/NellaiNatureClub/"><i class="fa fa-facebook-official w3-hover-opacity w3-green"></i></a>
  <a href="/"><i class="fa fa-instagram w3-hover-opacity w3-green"></i></a>
    <i class="fa fa-snapchat w3-hover-opacity w3-green"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity w3-green"></i>
    <i class="fa fa-twitter w3-hover-opacity w3-green"></i>
    <i class="fa fa-linkedin w3-hover-opacity w3-green"></i>
  </div>
  <p>Copyrights &copy AinthinaiNellai</p>
</footer>



  <script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

particlesJS("particles-js", {"particles":{"number":{"value":250,"density":{"enable":true,"value_area":900}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#ffffff"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":600}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},"repulse":{"distance":400,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
