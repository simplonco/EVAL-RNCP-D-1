
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin page</title>
  <link rel="stylesheet" href="css/article.css">
 	<link rel="stylesheet" href="./material.min.css">
    <script src="./material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 </head>
 <body>

 	 <div class="mdl-layout mdl-js-layout">
     <main class="mdl-layout__content">
      <div class="mdl-card mdl-shadow--6dp">
         <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <h2 class="mdl-card__title-text">Konexio</h2>
         </div>
         <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
           <h2 class="mdl-card__title-text">Admin Page</h2>
         </div>
      <div class="mdl-card__supporting-text">
            <form action = "" method = "post">
               <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="email" id="email" name = "email"/>
                  <label class="mdl-textfield__label" for="email">Email</label>
               </div>
               <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="password" id="userpass" name = "password" />
                  <label class="mdl-textfield__label" for="password">Password</label>
               </div>
            
         </div>
         <div class="mdl-card__actions mdl-card--border">
            <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" value=" Submit">Sumbit</button>

            </form>
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            <a href="login.php"> Sign in</a>
         </div>
      </div>
     </main>
   </div>
 <?php
  include 'connect.php';

    
      // email and password sent from form 
      
      $email = $conn->real_escape_string($_POST['email']);
      $password = $conn->real_escape_string($_POST['password']); 

      $sql = "INSERT INTO login (email,password) VALUES ('$email' ,'$password')";
      
      if ($conn->query($sql) === TRUE) {
    $error = "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


 ?>
 </body>
 </html>