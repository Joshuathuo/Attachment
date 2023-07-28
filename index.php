<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <a href="css/style.css"></a> -->

    <!-- Bootstrap CSS -->
    <link
      href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity=
"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet"href="css/style.css" />
    <script src="script.js"></script>

    <link rel="preconnect" 
          href="https://fonts.gstatic.com" />
    <link
      href=
"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
  <title>Student Attachment Application </title>
</head>
<style>

.container {
  width: 80%;
  margin: 0 auto;
  text-align: center;
}

h1 {
  margin-bottom: 20px;
}

.slideshow {
  display: flex;
  overflow: hidden;
}

.slide {
  width: 100%;
  flex-shrink: 0;
  transition: transform 0.5s ease-in-out;
}

.slideshow img {
  width: 100%;
  height: auto;
}


  col-md-4{
    width: 33.33%;
    height: 25%;
    background-color: #ec1010;

  }
  h5
  {
  text-align:center;
  color:white;
  }
 

#navbar {
  overflow: hidden;
  background-color: green;
}



/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
/* .sticky + .content {
  padding-top: 60px;
}*/
</style> 


<body>
  

  <section id="navbar">
    
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
        <!-- <img src="images/logo.jpg" width="80px" height="50px"> -->

          <a class="navbar-brand" >
              Student Attachment Application
            </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" 
               id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link active" 
                   aria-current="page" 
                   href="#"></a>
                   <div class="sub-menu">
                   <ul>
                  
                      </ul>

              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" 
                   href="#service">Services</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" 
                   href="register.php">Register</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" 
                   href="login.php">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" 
                   href="admin.php">Admin</a>
              </li>
              
              <!-- <li class="nav-item">
                <a class="nav-link" 
                   href="#social">Contact Us</a>
              </li> -->
            </ul>

   
          </div>
        </div>
      </nav>
     
<h5></h5>




</div>


    </section>


    <!-- banner -->
    <section id="banner"style =" height: 1000px;" >
      <div class="container-fluid" id="banner-container">
        <div class="row" id="banner-row">
          <div class="col-md-6" id="banner-col">
            <h3>
              GET YOUR ATTACHMENT REQUEST FILLED WITH A SINGLE TOUCH OF THE ONLINE MEDIA
            </h3>


            <p>
              And in whatever you do, do it in a good will and in a good heart.
            </p>

            </div>
          </div>
          <div class="col-md-6" id="banner-col2">
            <!-- <img
              class="img-responsive rounded mx-auto d-block"
              src="images/logo.jpg"
              alt=""
            /> -->
          </div>
          <!-- <div class="container"> -->
    <!-- <h1>Welcome to the Homepage</h1>
    <div class="slideshow">
      <div class="slide">
        <img src="ECD2-01.jpg" alt="Image 1">
      </div>
      <div class="slide">
        <img src="ajira.png" alt="Image 2">
      </div>
      <div class="slide">
        <img src="image3.jpg" alt="Image 3">
      </div>
    </div> -->
  </div>
        </div>
      </div>
      
    </section> 
  
    <!-- services -->
    <section id="service">
      <h1 class="text-center">SERVICES</h1>
      <div class="container-fluid" id="service-container">
        <div class="row" id="banner-row">
          <div class="col-md-4 " style="width: 30%;
    height: 25%;
    background-color: #ddd; margin: 18px; height: 400px; padding: 18px; border-radius: 12px;" id="service-col1">
            <img
              src="images/register.jpg"
              class="img-fluid rounded mx-auto d-block"
              alt="..."
            />
            <h3>Registration</h3>
              
<p>
Register with us either as an attachee or organization/company/institution 
            </p>
            <a href="registerdetails.php">Read More</a>

          </div>
          <div class="col-md-4" style="width: 30%;
    height: 25%;
    background-color: #ddd;margin: 18px; height: 400px;  padding: 18px; border-radius: 12px;" id="service-col2">
            <img
              src="images/post.jpg"
              class="img-fluid rounded mx-auto d-block"
              alt="..."
            />
            <h3>Post Attachment Opportunity</h3>
              
<p> Post the attachment positions that you are offering for willing and prospective attachees to find and apply.
            </p>

            <a href="attachmentopp.php">Read More</a>

  
          </div>
          <div class="col-md-4" style="width: 30%;
    height: 25%;
    background-color: #ddd; margin: 18px; height: 400px;  padding: 18px; border-radius: 12px;" id="service-col3">
            <img
              src="images/apply.jpg"
              class="img-fluid rounded mx-auto d-block"
              alt="..."
            />
            <h3>View and Apply Attachment</h3>
              
<p>
              Achived through the contious contribution
              of the members
            </p>

            <a href="applyinfo.php">Read More</a>

  
          </div>
        </div>
      </div>


      
    </section>
    <hr />
  
  

    <!-- <section id="social">
      <h1 class="text-center">Get In Touch</h1>
      <div class="d-grid gap-2 d-md-flex justify-content-center">
        <div class="row align-items-center" id="social-row">
          <div class="col-md-4 social-col">
            <a href=""
              ><img
                class="img-responsive rounded mx-auto d-block"
                src="images/drum1.jpg"
                alt=""
            /></a>
          </div>
          <div class="col-md-4 social-col">
            <a href=""
              ><img
                class="img-responsive rounded mx-auto d-block"
                src="images/icons8-instagram-64.png"
                alt=""
            /></a>
          </div>
          <div class="col-md-4 social-col">
            <a href=""
              ><img
                class="img-responsive rounded mx-auto d-block"
                src="images/icons8-twitter-64.png"
                alt=""
            /></a>
          </div>
        </div>
      </div>
    </section> -->
  
    <!-- footer -->

    <section id="footer">
      <section id="banner">
        <div class="container-fluid" id="banner-container">
          <div class="row" id="banner-row">
            <div class="col-md-4" id="footer-col1">
              <h3>My Website</h3>
                
<p>
               
  
            </div>
            <div class="col-md-4" id="footer-col2">
              <h3>Contact Us</h3>
                
              <ul class="info">
		    		<li>
		    			<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
		    			<span>Nyandarua County<br>Olkalou HQ,<br>Kenya</span>
		    		</li>
		    		<li>
		    			<span><i class="fa fa-phone" aria-hidden="true"></i></span>
		    			<p><a href="tel:123456789">+254 729 115 946<br>+254 704 484 285</br></a></p>
		    		</li>

            <li>
		    			<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
		    			<p><a href="mailto:test@user.com">joshuawainaina31@gmail.com</a></p>
		    		</li>
		    	
		    	</ul>
  
            </div>
  
            <div class="col-md-4" id="footer-col2">
              <h3>Subscribe To Newsletter</h3>
              <form>
                <div class="mb-3">
                  <input
                    type="email"
                    placeholder="Enter Your Email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                  />
                  <div id="emailHelp" 
                       class="form-text">
                    We'll never share your email with anyone else.
                  </div>
                </div>
                <button type="submit" 
                        class="btn btn-primary">
                        Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </section>
  
    <!-- Optional JavaScript; choose one of the two! -->
  
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script
      src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity=
"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>

    
</body>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>  

</html>