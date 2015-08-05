<?php 
include 'db_connect.php';
if(isset($_POST['addGroup'])){
	$name = $_POST['txtName'];
	$description = $_POST['txtDescription'];
  $queryCheck = "SELECT * FROM groups";
	$resultCheck = mysql_query($queryCheck) or die("Query to get all page failed " . mysql_error());
	$isIn = false;
	while ($row_project = mysql_fetch_array($resultCheck)) {
    $nameCheck = $row_project["name"];
    if($name == $nameCheck){
    	$isIn == true;
    }
  }
	if ($isIn == false) {
			$query = "INSERT INTO groups(name, description)
			VALUES ('".$name."','".$description."')";
			$result = mysql_query($query) or die("Query to get insert new page failed " . mysql_error());
			if($result==1){
				echo "Added! with code";
		      	//header("refresh:2; url=../profile.php");
			}else{
				echo "Error when add new page!";
			}
	}else{
		echo "The group already added!";
	}
}else{
	echo'invalid link!';
}

?>

