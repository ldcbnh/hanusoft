<?php 
      $title = "Project Detail";
      include 'header.php';
      
      $pageID = $_GET['id'];
      $result=mysql_query("SELECT * FROM projects WHERE id ='".$pageID."'");
      if (mysql_num_rows($result) > 0) {
            while ($row=mysql_fetch_array($result))
                {
                  $name = $row["name"];
                  $id = $row["id"];
                  $status = $row["status"];
                  $description = $row["description"];
                  $created_date = $row["created_date"];
                  $lastupdate = $row['last_updated'];
                  $sourcecode = $row['sourcecode'];
                  echo'
                  
                        
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                              <h4>Project Name:</h4>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                              <h4>'. $name.'</h4>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                              <h4>Status:</h4>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                              <h4>'. $status.'</h4>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                              <h4>Last update:</h4>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                              <h4>'. $lastupdate.'</h4>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                              <h4>Description:</h4>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <textarea style="resize: none; border: none; background: white; width:100%;" rows="8" disabled>'. $description .'</textarea>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                              <h4>Source Code</h4>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                              <h4><a href="SourceCode/'.$sourcecode.'" title="">Download</a></h4>
                        </div>
                  </div>
';
                }  
      } else {
          echo '
                  <div class="alert alert-warning">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <center>
                        <strong>Warning!</strong> you entered an invalid link.
                        </center>
                  </div>
          ';
      }

           

      //user verified
      // rest of your profile code here
 ?>



<?php 
      include 'footer.php';
 ?>
