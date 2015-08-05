<?php 
$title = "Edit a group";
include '../db/checklogin.php';
  include '../db/get_current_user_info.php';
 ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/hanusoft.gif">
    <title>
      <?php echo $title ?>
    </title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css" media="screen">
    @media (min-width: 979px) {
      ul.nav li.dropdown:hover > ul.dropdown-menu {
        display: block;
      }
    }
    body {
      padding-top: 90px;
    }
    nav a {
      padding-top: 20px !important;
      padding-bottom: 20px !important;
      font-size: 18px;
    }
    nav .navbar-toggle {
      margin: 0px 0px 0px 0;
    }
    .navbar-brand {
      font-size: 20px;
    }
    .navbar-brand img {}
    nav.shrink a {
      padding-top: 15px !important;
      padding-bottom: 5px !important;
      font-size: 15px;
    }
    nav.shrink .navbar-brand {
      font-size: 15px;
    }
    nav.shrink .navbar-toggle {
      margin: 8px 8px 8px 0;
    }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><img style="max-height: 35px" alt="logo" src="..//img/hanusoft.gif"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../members.php">Members</a></li>
            <li><a href="../projects.php">Projects</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../pages.php?id=1">About</a></li>
                <li><a href="../contact.php">Contact us</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php 
          if(isset($_SESSION['login']) && $_SESSION['login'] = true){
            $username = $_SESSION['myusername'];
            echo '
            <li>
              <a href="../profile.php" role="button"><span class="fa fa-user" aria-hidden="true"></span> '.$username.' </a>
            </li>
            <li>
              <a href="../db/logout.php"> <span class="fa fa-sign-out" aria-hidden="true"></span> Logout</a>
            </li>
            ';
          }else{
            echo '
            <li>
              <a data-toggle="modal" href="#modal-login"><span class="fa fa-sign-in" aria-hidden="true"></span> Login</a>
            </li>
            ';
          }
        ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <div class="modal fade" id="modal-login">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="modal-header form-group float-label-control">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Member login</h4>
            </div>
          </div>
          <form action="../db/checklogin.php" method="POST" role="form">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
              <input type="text" class="form-control" required="required" name="inputUsername" id="inputUsername" placeholder="Username">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
              <input type="password" name="inputPassword" id="inputPassword" class="form-control" required="required" placeholder="Password">
            </div>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary" data-style="zoom-in">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
    <script language="javascript" type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
      <script type="text/javascript">
      tinymce.init({
        selector: "#txtContent",
        height: 300,
        plugins: [
          "advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak spellchecker",
          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
          "save table contextmenu directionality emoticons template paste textcolor"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [{
          title: 'Bold text',
          inline: 'b'
        }, {
          title: 'Red text',
          inline: 'span',
          styles: {
            color: '#ff0000'
          }
        }, {
          title: 'Red header',
          block: 'h1',
          styles: {
            color: '#ff0000'
          }
        }, {
          title: 'Example 1',
          inline: 'span',
          classes: 'example1'
        }, {
          title: 'Example 2',
          inline: 'span',
          classes: 'example2'
        }, {
          title: 'Table styles'
        }, {
          title: 'Table row 1',
          selector: 'tr',
          classes: 'tablerow1'
        }]
      });

      </script>
      <?php 
      if($role == 0){
        if(isset($_POST['selectPage'])){
          $page_ID = $_POST['pageID'];
          $query = "SELECT * FROM pages WHERE id ='".$page_ID."'";
          $rs = mysql_query($query) or die("Query to get insert new page failed " . mysql_error());
          while ($row = mysql_fetch_array($rs)) {
            $pageCode = $row['code'];
            $pageContent = $row['content'];
            $pageTitle = $row['title'];
            $pageID = $row['id'];
          }
          echo '

              <div class="modal-content well">
                <div class="modal-header">
                  <h4 class="modal-title">New Page</h4>
                </div>
                <form action="edit_page_message.php" enctype="multipart/form-data" method="POST" role="form">
                  <input type="hidden" name="pageID" id="inputPageID" class="form-control" value="'.$pageID.'">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
                    <label for="txtCode">Code</label>
                    <input type="text" class="form-control" name="txtCode" id="txtCode" required="required" placeholder="" value = "'.$pageCode.'">
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
                    <label for="txtTitle">Title</label>
                    <input type="text" class="form-control" name="txtTitle" id="txtTitle" required="required" placeholder="Title" value="'.$pageTitle.'">
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
                    <label for="txtContent">Content</label>
                    <textarea name="txtContent" id="txtContent" required="required">'.$pageContent.' </textarea>
                  </div>
                  <div class="modal-footer">
                    <div style="float: right;">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="submit" id="editPage" name="editPage" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              ';

        }else{
          echo '
          <div class="alert alert-warning">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <center>
                <strong>Warning!</strong> Invalid access.
            </center>
          </div>
          ';
        }
      
      }else{
        echo '
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <center>
              <strong>Warning!</strong> you dont have permission to do this action.
          </center>
        </div>
        ';
      }
   ?>

   

</div> <!--end container /-->
<div class="container">
  <div class="panel panel-default">
      <div class="panel-body">
      <div class="col-md-6 footer-grid">
          <h4>About Hanusoft</h4>
          <div class="border2"></div>
          <p>Founded in 2006, hanusoft is a small web design & development agency.</p>
          <p>Over the last few years we've made a reputation for building websites that look great and are easy-to-use.</p>
        </div>
        <div class="col-md-6 footer-grid tags">
          <h4>Contact us</h4>
          <div class="border2"></div>
          <p> Address: Room 210 C-Building, Hanoi University </p>
        </div>
      </div>
    <div class="panel-footer">
      <center>
        <h4>Hanusoft 2015 | &copy; &Tab; All rights reserved</h4>
      </center> 
    </div>
  </div>
</div>  
</body>
</html>
