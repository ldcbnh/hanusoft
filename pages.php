<?php 
	$title = "Hanusoft";
	include 'header.php';

	$pageCode = $_GET['code'];
	$result1=mysql_query("SELECT * FROM pages WHERE code ='".$pageCode."'");

	if (mysql_num_rows($result1) > 0) {
  	while ($row=mysql_fetch_array($result1)){
	    echo '<br>';
	    echo '
  	    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
  	    	<h3>'.$row['title'].'</h3>
  	    </div>
	  		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
		  		'.$row["content"].'
  	    </div>
	    ';
    }  
	}else{
    echo '
			<div class="alert alert-warning">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			    <center>
			    	<strong>Warning!</strong> you entered an invalid link.
				</center>
			</div>
    ';
	} 
	include 'footer.php';
?>
