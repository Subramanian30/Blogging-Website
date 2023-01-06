<html>
    <head>
        <title>
            Review Website
        </title>
        <link rel="stylesheet" href="theme.css">
    </head>    
    <body>
        
        <div class="banner">
          
            <div class="navbar">
                <img src="logo.jpg" class="logo">
                <ul>
                    <li><b><a href="home.php">Home</a></b></li>
                    <li><b><label onclick="myFunction()">BACK STORY</label></b></li>
                    <li><b><a href="userreview.php">Reviews</a></b></li>
                    <li><b><a href="feedback.html">FeedBack</a></b></li>
                    <li><b><label onclick="myFunction1()">CONTACT</label></b></li>
                    <li><b><a href="login.php">Login</a></b></li>

                </ul>
            </div>
            <div class="body1">
                <div class="slider">
                    <div class="slides">
                      <!--radio buttons start-->
                      <input type="radio" name="radio-btn" id="radio1">
                      <input type="radio" name="radio-btn" id="radio2">
                      
                      <!--radio buttons end-->
                      <!--slide images start-->
                      <div class="slide first">
                        <img src="review1.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="review2.jpg" alt="">
                      </div>
                      
                      <!--slide images end-->
                      <!--automatic navigation start-->
                      <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        
                      </div>
                      <!--automatic navigation end-->
                    </div>
                    <!--manual navigation start-->
                    <div class="navigation-manual">
                      <label for="radio1" class="manual-btn"></label>
                      <label for="radio2" class="manual-btn"></label>
                      
                    </div>
                    <!--manual navigation end-->
                  </div>
                  <!--image slider end-->
              
                  <script type="text/javascript">
                  var counter = 1;
                  setInterval(function(){
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if(counter > 2){
                      counter = 1;
                    }
                  }, 5000);
                </script>
                </div>
              </div>
                <div id="b2">
                  
                  <div class="heading"><h2>Back Story</h2></div>    
                  

                  <br><br>
                  <button type="button" class="collapsible">Benefits</button>
                  <div class="content">
                    
                    <p>Delivering work on time requires efficiency and coordination between marketing, legal, and product departments. Without a draft review process, each department may develop a new idea that might clash with the overall resulting product. Let’s look at some of the benefits of having a content review team.</p>
                  </div>
                  
                  <br><br>
                  <button type="button" class="collapsible">Ensure Brand Consistency</button>
                  <div class="content">
                    <p>One of the most important reasons for carrying out a content review process is to ensure brand consistency. With the number of digital applications available online, it has become relatively easy to create multiple content types that highlight your brand mission.

                      A review process will ensure that your marketing team knows what tone to adapt to each of their content. It may also help align all content produced with the company’s mission statement.</p>
                  </div>
                  <br><br>
                  <button type="button" class="collapsible">Help Save Your Time</button>
                  <div class="content">
                    <p>Establishing guidelines will make it easier for your marketing team to know precisely what kind of content to create. Adhering to a set standard will also minimize any misunderstanding within the content team and ensure that job is done quickly and efficiently. </p>
                  </div>
                  
                  
                  <script>
                  var coll = document.getElementsByClassName("collapsible");
                  var i;
                  
                  for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var content = this.nextElementSibling;
                      if (content.style.display === "block") {
                        content.style.display = "none";
                      } else {
                        content.style.display = "block";
                      }
                    });
                  }
                  </script>
                   <div class="img1">
                     <img src="home1.jpg" width="500">
                   </div>
                   <div class="creators">
                     <h3>Creators:<br><br></h3>

                     <p><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Optimize Prime</h3></p>
                   </div>
                   </div>
                </div>
                <script>
                  function myFunction() {
                    var elmnt = document.getElementById("b2");
                    elmnt.scrollIntoView();
                  }
                  </script>
                <div class="b3">
                  <div class="r"><h1>SEE WHAT OTHERS SAY</h1></div>
                  <div class="review">
                  <img src="Excellent.png" width="400">
                  
                  </div>
                  <div class="r1">
                    <img src="r1.png" width="500">
                  </div>

                  <div class="r2">
                    <img src="Excellent 1.png" width="400">
                  </div>
                  <div class="r3">
                    <img src="Excellent 2.png" width="400">
                  </div>
                  <div class="r4">
                    <img src="Excellent4.png" width="400">
                  </div>
                  <div class="r5">
                    <img src="Excellent5.png" width="440">
                  </div>
                </div>
                <div id="b4">
                  <div class="ins">
                      <a href="https://www.instagram.com/subramanian_30/"><img src="insta.png" width="50"></a>
                  </div>

                  <div class="meta">
                      <a href="https://wa.me/917397423447"> <img src="meta.png" width="50"></a>
                  </div>


                  <div class="wp">
                      <a href="https://wa.me/917397423447"><img src="wp.png" width="50"></a>
                  </div>
                  <div class="mail">
                      <a href="mailto:rmsubramanian2@gmail.com"><img src="mail.png" width="50"></a>
                  </div>
                    
                    

                  <div class="contact">
                    <p>Phone : 7397423447 </p>
                    
                  </div>
                </div>
                <script>
                  function myFunction1() {
                    var elmnt = document.getElementById("b4");
                    elmnt.scrollIntoView();
                  }
                  </script>
                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                <script>
                  //Get the button
                  var mybutton = document.getElementById("myBtn");
                  
                  // When the user scrolls down 20px from the top of the document, show the button
                  window.onscroll = function() {scrollFunction()};
                  
                  function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                      mybutton.style.display = "block";
                    } else {
                      mybutton.style.display = "none";
                    }
                  }
                  
                  // When the user clicks on the button, scroll to the top of the document
                  function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                  }
                  </script>
                  
           </body>
           </html>

