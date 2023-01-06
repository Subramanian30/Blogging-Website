



<html>
    <head>
        <title>
            Review Website
        </title>
        <link rel="stylesheet" href="expert.css">
    </head>    
    <body>
        
        <div class="banner">
          
            <div class="navbar">
                <img src="logo.jpg" class="logo">
                <ul>
                    <li><b><a href="expert.php">Home</a></b></li>
                    
                    <li><b><a href="selection.php">Blogs</a></b></li>
                    <li><b><a href="feedback.html">FeedBack</a></b></li>
                    <li><b><label onclick="myFunction1()">CONTACT</label></b></li>
                    <li><b><a href="home.php">Logout</a></b></li>

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
    </body>
</html>