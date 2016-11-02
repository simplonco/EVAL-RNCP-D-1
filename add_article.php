
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add article</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="bootstrap3-wysihtml5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>

    <style type="text/css">
      body{
        margin: 50px;
        background-image: url(Photos/codd.jpg);      }
        h1{
          color:rgb(152, 210, 250);
        }
        h5{
          color:rgb(152, 210, 250);
        }
    </style>
   
  </head>
  <body>
    
    <!--Start list  page -->
    <div class="container">
      <ul class="links">
      <li><a href="add_article.php">Add articles</a></li>
      <li><a href="article.php">Articles</a></li>
  <li><a href="#" data-value="">Inroduction
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
    <h1>Add new article</h1>
    <article>
      <?php
      include("connect.php");
      
        
      $sql1= "SELECT * FROM article";
      $result1 = $conn->query($sql1);

      echo "<table align='center' class='mdl-data-table mdl-js-data-table'><thead><tr><th> ID </th><th>Name of article</th></tr></thead> ";
      while($row = $result1->fetch_assoc()){
      
           
      echo " <tbody><tr><td>" . $row['id']. "</td><td>" . $row['title']. "</td><td><a onclick=\"return confirm('Are you sure?')\" href=\"delete.php?id=".$row['id']."\">Delete</a></td><td><a href=\"update.php?id=".$row['id']."\">Update</a></td></tr></tbody>" ;  
   

        
      } 
      ?>

    <form method="post">
      <h5>The title : </h5><input type="text" name="title"> <br>
      <h5>Write your article here :</h5> <textarea class="form-control" id="edittext" name="text"></textarea> <br>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="submit" value="add">
      Add
      </button>

      <?php
         include('connect.php');
        if (isset($_POST['submit'])) { 
  
  
          $title = $_POST['title'] ;
          $text = $_POST['text'] ;
         
                        
     $sql = "INSERT INTO article (title,text) VALUES ('$title','$text')";
     $result = $conn->query($query);
      if ($conn->query($sql) === TRUE) {
          echo "New article created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      }
             ?> 
    </form>

    
      
    </article>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap3-wysihtml5.all.min.js"></script>
    <script src="bootstrap3-wysihtml5.min.js"></script>
    <script src="custom_image_and_upload_wysihtml5.js"></script>
    <script src="jqueryupload.js"></script>
    <script type="text/javascript">
      $('#edittext').wysihtml5();

    </script>
  </body>
</html>