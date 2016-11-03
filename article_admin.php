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
    <div id="scrollTo" class="container">
      <ul id="drop-nav">
  <li><a href="add_article.php">Add article</a></li> 
  <li><a href="article.php">Articles</a></li>   
  <li><a href="index_admin.php">Inroduction
  </a></li>
  <li><a  class="scrollTo" href="#">Team & partners</a>
  </li>
  <li><a class="scrollTo"  href="#">Main Activities</a>
    <ul>
      <li><a class="scrollTo"  href="#"></a></li>
      <li><a class="scrollTo"  href="#"></a></li>
    </ul>
  </li>
  <li><a class="scrollTo"  href="#">Contact</a>
    <ul>
      <li><a class="scrollTo" href="#">Details</a></li>
      <li><a class="scrollTo"  href="#">Ask me a Question</a></li>
    </ul>
  </li>
  <li><a class="scrollTo"  href="#">Testimonial </a>
    <ul>
      <li><a class="scrollTo"  href="#">Testimonial video</a></li>
      <li><a href="#">Testimonial text </a></li>
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