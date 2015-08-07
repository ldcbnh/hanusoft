<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin login</title>
      <link rel="stylesheet" href="asset/index/css/style.css">
  </head>

  <body>
   <script language="javascript" type="text/javascript" src="asset/tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: "#mytextarea"
    });
  </script>
    <div id="login">
      <h1>Admin Login</h1>
      <form method="POST" role="form">
        <input type="text" name="inputUsername" id="inputUsername" required="required" placeholder="Username" />
        <input type="password" name="inputPassword" id="inputPassword" required="required" placeholder="Password" />
        
        <textarea id="mytextarea"></textarea>
        <input type="submit" name="submit"value="Log in" />
      </form>
      <?php 
        if(isset($_POST['submit'])){
          $username = $_POST['inputUsername'];
          $password = $_POST['inputPassword'];
          if($username == "admin"){
              $_SESSION['admin'] = true;
              $_SESSION['login'] = $username;
              header("location: index.php");
          }
        }
       ?>
    </div>

    <script type="text/javascript">
      tinymce.init({
        selector: "#mytextarea1",
          width: 300,
          height: 300,
          plugins: [
           "advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak spellchecker",
           "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
           "save table contextmenu directionality emoticons template paste textcolor"
          ],
          content_css: "css/content.css",
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
          style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
          ]
        });
    </script>

    <div>
      <h1>TinyMCE Getting Started Guide</h1>
      <form method="post" action="dump.php">
        <textarea id="mytextarea1"></textarea>
      </form>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="asset/index/js/index.js"></script>
  </body>
</html>
