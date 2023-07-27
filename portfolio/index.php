<?php
$con = mysqli_connect('localhost','root','','portfoliodb') or die('connection Failed');

if(isset($_POST['send'])){
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $number = mysqli_real_escape_string($con,$_POST['number']);
  $message = mysqli_real_escape_string($con,$_POST['message']);

  $select_message = mysqli_query($con, "SELECT * FROM `contactform` WHERE name = '$name' AND email = '$email' AND password = '$password' AND number = '$number' AND message = '$message' ") or die('Query Failed');

  if(mysqli_num_rows($select_message)>0){
    $message="message Sent Already";
  }else{
    mysqli_query($con,"INSERT INTO  `contactform`(name,email,password,number,message) VALUES ('$name', '$email', '$password', '$number' , '$message')") or die("Queary Failed");
    $message="message Sent Successfully";
  }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTFOLIO WEBSITE</title>

    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- aos css link  -->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Custom Css File Link  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

  
  <?php
      if(isset($messages)){
        foreach($messages as $messages);
        echo '<div class="message"  data-aos="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
      }
  ?>
  
 <!-- Header Section Start  -->
 
 <header class="header">

    <!-- <div id="menu-btn" class="fas fa-bars"> -->

    </div>

    <a href="#home" class="logo">portfolio</a>
   
    <nav class="navbar">
       <a href="#home" class="active">Home</a>
       <a href="#about">About</a>
       <a href="#Services">Services</a>
       <a href="#portfolio">Portfolio</a>
       <a href="#contact">Contact</a>
    </nav>


    <div class="follow">
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-instagram"></a>
        <a href="" class="fab fa-linkedin"></a>
    </div>

 </header>

  <!-- Header Section Ends  -->

   <!-- home section starts -->
      <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="img/ronak img.png" alt="">
        </div>

        <div class="content">
            <h3  data-aos="fade-up">hi, i am ronak gokani</h3>
            <span  data-aos="fade-up">web designer & developer</span>
            <p  data-aos="fade-up">i am fresher but my knowledge is more than experience <br> i build this portfolio website for me using HTML , CSS , JAVASCRIPT , PHP and SQL <br> i am also freelancher and i make beutiful website for my client <br> so you make a best responsive and beutiful website then Contact Me !</p>
            <a  data-aos="fade-up" href="#about" class="btn">About Me</a>
        </div>
      </section>
   <!-- home section ends  -->


   <!-- about section starts  -->

   <section class="about" id="about">
   
      <h1 class="heading" data-aos="fade-up"><span>Biography</span></h1> 

      <div class="biography">
        <p  data-aos="fade-up">hi , my name is ronak and i am full stack web developer and i have completed my graduation and i have completed many project and i am happy to say my skills like :- <b>HTML, CSS , JS , PHP , SQL , LARAVEL , BOOTSTRAP , API , MVC , AJAX , JSON , JQUERY<b> and core knowledge of <b>REACT JS</b> i am quick leaner </p>
     
      <div class="bio">
        <h3  data-aos="zoom-in"><span>name :</span> Ronak Gokani </h3>
        <h3  data-aos="zoom-in"><span>email :</span>ronakgokani82@gmail.com</h3>
        <h3  data-aos="zoom-in"><span>address :</span>Rajkot, Gujarat</h3>
        <h3  data-aos="zoom-in"><span>phone :</span>8128314206</h3>
        <h3  data-aos="zoom-in"><span>age :</span>22 Years</h3>
        <h3  data-aos="zoom-in"><span>experience :</span>Fresher</h3>
      </div>

      <a href="#" class="btn"  data-aos="fade-up">Download CV</a>

    </div> 

    <div class="skills">
        <h1 class="heading"><span>skills</span></h1>

        <div class="progress">
            <div class="bar"  data-aos="fade-left"><h3><span>HTML</span><span>95%</span></h3></div>
            <div class="bar"  data-aos="fade-right"><h3><span>CSS</span><span>80%</span></h3></div>
            <div class="bar"  data-aos="fade-left"><h3><span>JavaScript</span><span>65%</span></h3></div>
            <div class="bar"  data-aos="fade-right"><h3><span>PHP</span><span>80%</span></h3></div>
            <div class="bar"  data-aos="fade-left"><h3><span>SQL</span><span>85%</span></h3></div>
            <div class="bar"  data-aos="fade-right"><h3><span>LARAVEL</span><span>80%</span></h3></div>
            <div class="bar"  data-aos="fade-left"><h3><span>BootStrap</span><span>90%</span></h3></div>
            <div class="bar"  data-aos="fade-right"><h3><span>API</span><span>75%</span></h3></div>
            <div class="bar"  data-aos="fade-left"><h3><span>WordPress</span><span>85%</span></h3></div>
            <div class="bar"  data-aos="fade-right"><h3><span>jquery</span><span>65%</span></h3></div>
        </div>
    </div>

    <div class="edu-exp">
        <h1 class="heading"  data-aos="fade-up"><span>Education</span></h1>
     <div class="row">

       <div class="box-container">
          <h3 class="title"  data-aos="fade-right">Education</h3>
          <div class="box"  data-aos="fade-right">
            <span>(2018 - 2020)</span>
            <h3>Higher Secondary</h3>
            <p>I Was Completed My 11th and 12th in 2018 to 2020</p>
          </div>

          <div class="box"  data-aos="fade-right">
            <span>(2021- 2023)</span>
            <h3>B.com</h3>
            <p>I Am In The Last Year Of B.com</p>
          </div>

          <div class="box"  data-aos="fade-right">
            <span>(2022- 2023)</span>
            <h3>Diploma In Software Management || Certificate Course</h3>
            <p>Recently I Was Completed This Course I Know Many Languages, I Was Completed My Course IANT - Institute Of Advance Network Technology</p>
          </div>
       </div>

    </div>
  </div>
   </section>


   <!-- about section ends  -->

    <!-- services section starts  -->
         <section class="services" id="services">
            <h1 class="heading"  data-aos="fade-up"><span>Service</span></h1>

            <div class="box-container">
              <div class="box"   data-aos="zoom-in">
              <i class="fas fa-code"></i>
              <h3>Web Development</h3>
              <p>As your web partner, we develop and create web pages tailored to your requirements, providing a beautiful and functional end product at an affordable price.</p>
              </div>

              <div class="box"   data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>Web Designer</h3>
                <p>Nicely finished, easy to navigate and well put together pages with great content help to build trust and credibility with potential customers. Whether your website is informational, interactive or transactional, our web designers design attractive and effective online spaces that achieve your communication objectives.</p>
              </div>
           
              <div class="box"   data-aos="zoom-in">
                <i class="fas fa-bootstrap"></i>
                <h3>Bootstrap</h3>
                <p>You receive your brand’s website that is beautiful, fresh and current with secure hosting and management. Our team of experts will consider all aspects of the site including the navigation, content, images, logo, layout and marketing strategies.</p>
              </div>
           
            </div>
         </section>
    <!-- service section ends  -->

     <!-- portfolio section start  -->
       
     <section class="portfolio" id="portfolio">
       <h1 class="heading" data-aos="fade-up"><span>Portfolio</span></h1>

       <div class="box-container">
        <div class="box"   data-aos="zoom-in">
          <img src="img/img (5).jpg" alt="">
          <h3>Front-End</h3>
          <p>(2022 - 2023)</p>
        </div>

        <div class="box"   data-aos="zoom-in">
          <img src="img/img 4 (1).jpg" alt="">
          <h3>Backed-End</h3>
          <p>(2022 - 2023)</p>
        </div>

        <div class="box"   data-aos="zoom-in">
          <img src="img/img1.jpg" alt="">
          <h3>Full Stack</h3>
          <p>(2022 - 2023)</p>
        </div>

        <div class="box"   data-aos="zoom-in" >
          <img src="img/img2.jpg" alt="">
          <h3>Web Development</h3>
          <p>(2022 - 2023)</p>
        </div>

        
        <div class="box"   data-aos="zoom-in">
          <img src="img/hero.jpg.jpg" alt="">
          <h3>Web Development</h3>
          <p>(2022 - 2023)</p>
        </div>

        
        <div class="box"   data-aos="zoom-in">
          <img src="img/bioimage.jpg" alt="">
          <h3>Web Development</h3>
          <p>(2022 - 2023)</p>
        </div>
       </div>
     </section>
                
    <!-- portfolio section ends  -->

    <!-- contact section start  -->

      <section class="contact" id="contact">
        <h1 class="heading"   data-aos="fade-up"><span>Contact Me</span></h1>

        <form action="" method="post">
          <div class="flex">
            <input   data-aos="fade-right" type="text" name="name" placeholder="Enter Your Name" class="box" required>
            <input   data-aos="fade-left" type="email" name="email" placeholder="Enter Your Email Address" class="box" required>
            <input   data-aos="fade-up" type="password" name="password" placeholder="Enter Your Password" class="box" required>
            <input   data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter Your Number" class="box" required>
          </div>
          <textarea   data-aos="zoom-in" name="message" class="box" placeholder="Enter Your Message" cols="30" rows="10" required></textarea>
          <input type="submit"   data-aos="zoom-in" value="Contact Me" name="send" class="btn">
        </form>

        <div class="box-container">
          <div class="box"   data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p>8128314206</p>
         </div>

         <div class="box"   data-aos="zoom-in">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p>ronakgokani82@gmail.com</p>
       </div>

       <div class="box"   data-aos="zoom-in">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Address</h3>
        <p>Rajkot, India - 360001</p> 
        </div>

       
     </div>

   
      </section>

    <!-- contact section ends  -->
    
     <div class="credit">&copy; copyright @ <?php echo date('Y'); ?>by <span>Mr.Ronak Gokani</span></div>



    <!-- Custom Javascript Code  -->
    <script src="js/script.js">

    </script>


    <!-- aos js link  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


    <script>
      AOS.init({
        duration:800,
        deley:300,
      });
    </script>
</body>
</html>