<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>

<body>


   <!-- header section starts  -->

   <header class="header">

      <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Songshoptok | সংশপ্তক </a>

      <nav class="navbar">
         <div id="close-navbar" class="fas fa-times"></div>
        
         <a href="home.php" class="link">home</a>
         <a href="about.php" class="link">about</a>
         <a href="courses.php" class="link">courses</a>
         <a href="contact.php" class="link">contact</a> 
         <a href="student.php"><span class="btn active login-btn">login</span></a>

         <!-- <i class='bx bx-toggle-left change-theme' id="theme-button"></i> -->


      </nav>

      <!-- <div class="icons">
         <div id="account-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div> -->

   </header>

   <!-- account form section starts  -->

   <div class="account-form">

      <div id="close-form" class="fas fa-times"></div>

      <div class="buttons">
         <span class="btn active login-btn">login</span>
         <span class="btn register-btn">register</span>
      </div>

      <form class="login-form active" action="">
         <h3>login now</h3>
         <input type="email" placeholder="enter your email" class="box">
         <input type="password" placeholder="enter your password" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
            <a href="#">forgot password?</a>
         </div>
         <input type="submit" value="login now" class="btn">
      </form>

      <form class="register-form" action="">
         <h3>register now</h3>
         <input type="email" placeholder="enter your email" class="box">
         <input type="password" placeholder="enter your password" class="box">
         <input type="password" placeholder="confirm your password" class="box">
         <input type="submit" value="register now" class="btn">
      </form>

   </div>

   <!-- account form section ends -->

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <section class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
               <div class="content">
                  <h3>Welcome to the future of learning</h3>
                  <p>Songshoptok | সংশপ্তক makes learning engaging & effective by leveraging deep pedagogy & cutting edge technology. With offerings ranging from adaptive self-learning courses on web to personalised 1-on-1 classes with expert teachers for ages 4-18+, we have programs for every learner.</p>
                  <a href="#" class="btn">get started</a>
               </div>
            </section>

            <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
               <div class="content">
                  <h3>Welcome to the future of learning</h3>
                  <p>Songshoptok | সংশপ্তক makes learning engaging & effective by leveraging deep pedagogy & cutting edge technology. With offerings ranging from adaptive self-learning courses on web to personalised 1-on-1 classes with expert teachers for ages 4-18+, we have programs for every learner.</p>
                  <a href="#" class="btn">get started</a>
               </div>
            </section>

            <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
               <div class="content">
                  <h3>Welcome to the future of learning</h3>
                  <p>Songshoptok | সংশপ্তক makes learning engaging & effective by leveraging deep pedagogy & cutting edge technology. With offerings ranging from adaptive self-learning courses on web to personalised 1-on-1 classes with expert teachers for ages 4-18+, we have programs for every learner.</p>
                  <a href="#" class="btn">get started</a>
               </div>
            </section>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- subjects section starts  -->

   <section class="subjects">

      <h1 class="heading">our popular subjects</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/subject-icon-1.png" alt="">
            <h3>graphic design</h3>
            <p>12 modules</p>
         </div>

         <div class="box">
            <img src="images/subject-icon-2.png" alt="">
            <h3>mathemetics</h3>
            <p>12 modules</p>
         </div>

         <div class="box">
            <img src="images/subject-icon-3.png" alt="">
            <h3>teaching</h3>
            <p>12 modules</p>
         </div>

         <div class="box">
            <img src="images/subject-icon-4.png" alt="">
            <h3>development</h3>
            <p>12 modules</p>
         </div>

         <div class="box">
            <img src="images/subject-icon-5.png" alt="">
            <h3>science</h3>
            <p>12 modules</p>
         </div>

         <div class="box">
            <img src="images/subject-icon-6.png" alt="">
            <h3>engineering</h3>
            <p>12 modules</p>
         </div>

      </div>

   </section>

   <!-- subjects section ends -->

   <!-- home courses slider section starts  -->

   <section class="home-courses">

      <h1 class="heading"> our popular courses </h1>

      <div class="swiper home-courses-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-1.png" alt="">
                  <h3>Information and communication technology</h3>
               </div>
               <div class="content">
                  <h3>Information and communication technology</h3>
                  <p>Class 11-12 ICT (Information and communication technology) Course + Model Test</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-2.png" alt="">
                  <h3>Biology</h3>
               </div>
               <div class="content">
                  <h3>Biology</h3>
                  <p>Class 9-10 Biology Course + Model Test</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-3.png" alt="">
                  <h3>University Admission</h3>
               </div>
               <div class="content">
                  <h3>University Admission</h3>
                  <p>University admission complete course</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-4.png" alt="">
                  <h3>Medical Admission</h3>
               </div>
               <div class="content">
                  <h3>Medical Admission</h3>
                  <p>Medical admission complete course</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-5.png" alt="">
                  <h3>Mathemetics</h3>
               </div>
               <div class="content">
                  <h3>Mathemetics</h3>
                  <p>Class 11-12 Mathemetics Course + Model Test</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-6.png" alt="">
                  <h3>web development</h3>
               </div>
               <div class="content">
                  <h3>web development</h3>
                  <p>Web development complete free course</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

         </div>

      </div>

   </section>

   <!-- home courses slider section ends -->









   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3> <i class="fas fa-lightbulb"></i> Songshoptok | সংশপ্তক </h3>
            <p>If you have any query then connect with us by social media.</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>

         <div class="box">
            <h3>quick links</h3>
            <a href="home.html" class="link">home</a>
            <a href="about.html" class="link">about</a>
            <a href="courses.html" class="link">courses</a>
            <a href="contact.html" class="link">contact</a>
         </div>

         <div class="box">
            <h3>useful links</h3>
            <a href="#" class="link">help center</a>
            <a href="#" class="link">ask questions</a>
            <a href="#" class="link">send feedback</a>
            <a href="#" class="link">private policy</a>
            <a href="#" class="link">terms of use</a>
         </div>

         <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest upadates</p>
            <form action="">
               <input type="email" name="" placeholder="enter your email" id="" class="email">
               <input type="submit" value="subscribe" class="btn">
            </form>
         </div>

      </div>

   </section>

   <!-- footer section ends -->

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script1.js"></script>

</body>

</html>