
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
<h1>Modify article</h1>

<?php
include("connect.php");
$id = $_GET['id']; 
$sql1= "SELECT title,text,id FROM article WHERE id=$id";
      $result1 = $conn->query($sql1);

      
      if($row = $result1->fetch_assoc()){
        echo '<form method="post"><input type="text" name="title" value=' . $row['title'] . '>';
        echo '<textarea class="form-control" id="edittext" name="text"> ' . $row['text'] . '</textarea>';
              
      } 
?>
<br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="submit" value="save"> Save
</button>
<?php
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$text = $_POST['text'];
	$sql = "UPDATE article SET title = '$title' , text = '$text' WHERE id = '$id' ";
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location:add_article.php');
} else {
    echo "Error updating record: " . $conn->error;
}
}
 
?> 
</form>
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