<?php 
include 'db_connect.php';
if(isset($_POST['addPage'])){
	$code = $_POST['txtCode'];
	$title = $_POST['txtTitle'];
	$content = $_POST['txtContent'];
  $queryCheck = "SELECT * FROM pages";
	$resultCheck = mysql_query($queryCheck) or die("Query to get all page failed " . mysql_error());
	$isIn = false;
	while ($row_page = mysql_fetch_array($resultCheck)) {
    $codeCheck = $row_page["code"];
    if($code == $codeCheck){
    	$isIn == true;
    }
  }
	if ($isIn == false) {
			$query = "INSERT INTO pages(code, title, content, created_date, last_updated)
			VALUES ('".$code."','".$title."','".$content."','CURRENT_TIMESTAMP',CURRENT_TIMESTAMP)";
			$result = mysql_query($query) or die("Query to get insert new page failed " . mysql_error());
			if($result==1){
				echo "Added! with code";
		      	//header("refresh:2; url=../profile.php");
			}else{
				echo "Error when add new page!";
			}
	}else{
		echo "Page code already added!";
	}
}else{
	echo'invalid link!';
}

?>

