<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
    <title>CBS--</title>
   </head>
<body>
    
    <header> 
      <nav style="background-color: blueviolet;" class="navbar fixed-top navbar-expand-lg navbar-dark bg- ">
        <div class="container-fluid">
          <a style="font-size: x-large;" class="navbar-brand  " href="#home">Code Business Solution</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li style="margin-left: 620px;" class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> </a>
              </li>
              <li style="margin-left: 20px;"  class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
           
              <li style="margin-left: 20px;"  class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
              </li>
              <li style="margin-left: 20px;"class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Services</a>
              </li>
              <li style="margin-left: 20px;" class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Team</a>
              </li>
          
              <li style="margin-left: 20px;" class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contact</a>
              </li>
            
          </div>
        </div>
      </nav>
    </header>
    <section id="main">
      <h1 id="m1">CBS</h1>
<h2 class="mh">Provide a Websites & Anroid Application & Logos For Your Company  </h2>
    <h1 class="jumbotron-heading"><span id="typed"></span><span class="typed-cursor typed-cursor--blink">|</span></h1>
 
    <div class="c">
    <img src="images/html-5.png" alt="" > 
 <img src="images/css-3.png" alt="">  
 <img src="images/java-script.png" alt="" >   
 <img src="images/php.png" alt="" >
  <img src="images/python.png" alt="">    
  <img src="images/mysql.png" alt="" >    
   <img src="images/java.png" alt="" >   

</div>
  </section>
   
  <section id="about">
      <h1 style="text-align: center;">About</h1>
 <p >

 Code Bussiness Solution provides your Bussiness  websites and android applications and Logos and this is work for very sincere work and provide a good service for the client  and I work done on time   

 </p>
  
    </section>
<section id="service">
  <h1 style="text-align: center;">Services</h1>
 <img  class="ser" src="images/web-link.png" alt="">
 <img class="ser" src="images/android.png " alt="">
 <img  class="ser" src="images/logo.png" alt="">
 
 <h5 class="s1">Make a Proffesional Website </h5>  <h5 class="s2" >for Your Business , School  </h5><h5 class="s3" >Hospital and Others.. </h5>
<h5   class="sh1" >Make a Usefull Anroid Application </h5>  <h5 class="sh2"  >for Your Business , School  </h5><h5 class="sh3"  >Hospital and Others.. </h5>
<h5   class="ss1" >Make a Usefull Logos </h5>  <h5 class="ss2"  >for Your Business , School  </h5><h5 class="ss3"  >Hospital and Others.. </h5>

<!-- <h5 id="s3" style="">Make a Proffesional Logos </h5>  <h5 style="">for Your Business , School  </h5><h5 style="">Hospital and Others.. </h5> -->
</section>
<section id="team">
 <h1 style="text-align: center;">Team</h1>
 
  <img  class="ter" src="images/qm.jpg" alt="">
  <img class="ter" src="images/as.jpeg" alt="">
  <img  class="ter" src="images/hass.jpg" alt="">
  <h5 class="t1">Abdul Qadir Mughal  </h5>  <h5 class="t2">"CEO of CBS"</h5> 
     <h5 class="tp1">Syed Muhammad Asharib Ali</h5><h5 class="tp2">"HR Manager of CBS"</h5>
     <h5 class="tp3">Hussnain Qureshi</h5><h5 class="tp4">"Genral Manager of CBS"</h5>

     <h2 id="other">Others team mates.......</h2>
</section>
<section style="margin-top: 22px;" id="contact">
  <h1 style="text-align: center;">Contact CBS</h1>
  <div class="container">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="enter your email address">
    </div>
    <div class="mb-3">
      <label for="subject" class="form-label">Subject</label>
      <input name="subject" type="text" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="enter message subject">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea name="message" class="form-control" id="message" rows="3" placeholder="enter your message"></textarea>
    </div>
     
    <input name="esubmit" type="submit">
  </form>
</div>
</section>
<!-- form backend email send code -->
<?php
if(isset($_POST['esubmit'])){
  $to=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $from="mrqadir1320@gmail.com";
  $headers="From:$from";
if(mail($to,$subject,$message,$headers)){
echo"email successfully sent to $to...";
}else{
echo'email field';
}

}

?>
<footer    class="text-muted py-5">
  <div class="container">
     
      <a  href="#">  
        <img class="fot"  src="images/top.png" alt="">
      </a>
     
    <p style="color: rgb(235, 233, 217); text-align: center; margin-top: 50px; font-size: x-large;" class="mb-1">  &copy;Code Business Solution 2021 to 2022</p>
  </div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="index.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    
  </body>

  </html>