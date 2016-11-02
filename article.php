<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konexion</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <!--Start first page -->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="col-sx-12">
          <h2 align="center">Connecting the world together through code</h2>
          <h4 align="center">Welcoming refugees into the community through tech</h4>
          <img src="images/backg.jpg" width="100" height="100" alt="logo" class="img-responsive center-block"/>
        </div>
      </div>
    </div>
      <!--End first page -->
    <!--Start list  page -->
    <div class="container">
      <ul class="links">
      <li><a href="article.php">Articles</a></li>
  <li><a href="index.php" data-value="">Inroduction
    <ul>
      <li><a href="#" data-value="About">About Konexio</a></li>
      <li><a href="#" data-value="About">Our Mission</a></li>
    </ul>
  </a></li>
  <li><a href="#" data-value="team">Team</a>
    <ul>
      <li><a href="#" data-value=""></a></li>
      <li><a href="#" data-value="our-partners">partners</a></li>
    </ul>
  </li>
  <li><a href="#" data-value="main-act">Main Activities</a>
  </li>
  <li><a href="#" data-value="contact">Contact</a>
    <ul>
      <li><a href="#" data-value="">Details</a></li>
      <li><a href="#" data-value="">Ask me a Question</a></li>
    </ul>
  </li>
  <li><a href="#" data-value="testi-m">Testimonial </a>
    <ul>
      <li><a href="#" data-value="">Testimonial video</a></li>
      <li><a href="#" data-value="">Testimonial text </a></li>
    </ul>
  </li>
</ul>
    </div>
    <!--End list page -->
   <article>
      <?php
      include("connect.php");
      
        
      $sql1= "SELECT title,text FROM article";
      $result1 = $conn->query($sql1);

      if($result1->num_rows >0) {
      while($row = $result1->fetch_assoc()){
      
        
        echo $row['title'] . $row['text'];
       }
        
      } 
      ?>
   </article>   
    </body>
    </html>