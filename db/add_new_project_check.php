<?php 
	include 'db_connect.php';
	if(isset($_POST['addProject'])){
		// if (isset($_POST['fileImage']))
		// {
		// 	$filename = $_FILES["fileImage"]["name"];
		// 	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
		// 	$file_ext = substr($filename, strripos($filename, '.')); // get file name
		// 	$filesize = $_FILES["fileImage"]["size"];
		// 	$allowed_file_types = array('.jpg','.png','.gif');	

		// 	if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000))
		// 	{	
		// 		// Rename file
		// 		$newfilename = md5($file_basename) . $file_ext;
		// 		if (file_exists("../img/project/" . $newfilename))
		// 		{
		// 			// file already exists error
		// 			echo "You have already uploaded this file.";
		// 		}else{
		// 			move_uploaded_file($_FILES["fileImage"]["tmp_name"], "../img/project/" . $newfilename);
		// 			$query = "UPDATE users SET avatar = '".$newfilename."' WHERE username = '".$user."'";
					

		// 			$result = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
		// 			if($result==1){
		// 				unlink("../img/project/".$old_avatar);
		// 	        	header("refresh:2; url=../profile.php");
		// 			}else{
		// 				echo "Error! Automatic return after 2 seconds!";
		// 			}
		// 		}
		// 	}elseif (empty($file_basename)){	
		// 			// file selection error
		// 			echo "Please select a file to upload.";
		// 	}elseif ($filesize > 200000){	
		// 		// file size error
		// 		echo "The file you are trying to upload is too large.";
		// 	}else{
		// 		// file type error
		// 		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		// 		unlink($_FILES["file"]["tmp_name"]);
		// 	}
		$filename = $_FILES["file"]["name"];
		$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
		$file_ext = substr($filename, strripos($filename, '.')); // get file name
		$filesize = $_FILES["file"]["size"];
		$allowed_file_types = array('.zip','.rar');	
		if(!empty($file_basename)){
			if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000)){
				// Rename file
				$newfilename = md5($file_basename) . $file_ext;
				if (file_exists("../SourceCode/" . $newfilename))
				{
					// file already exists error
					echo "You have already uploaded this file.";
				}else{
				move_uploaded_file($_FILES["file"]["tmp_name"], "../SourceCode/" . $newfilename);
				echo "File uploaded successfully.";
				$query = "INSERT INTO projects( name, status, description, sourcecode, created_date)
				VALUES ('".$_POST['txtName']."', '".$_POST['txtStatus']."', '".$_POST['txtDescription']."','".$newfilename."', CURRENT_TIMESTAMP)";
					echo $query;
				$result = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
				if($result==1){
					echo "Added! with code";

		        	//header("refresh:2; url=../profile.php");
				}else{
					echo "Error! Automatic return after 2 seconds!";
				}
			}
			 
			}elseif (file_exists("../SourceCode/" . $newfilename)){
					// file already exists error
					echo "You have already uploaded this file.";
			}elseif ($filesize > 200000){	
					// file size error
					echo "The file you are trying to upload is too large.";
			}else{
					// file type error
					echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
					unlink($_FILES["fileToUpload"]["tmp_name"]);
			
				}
		}else{
			$query1 = "INSERT INTO `projects`( id, name, `status`, description, created_date)
			VALUES ( '".$_POST['txtID']."', ' ".$_POST['txtName'].
				"', '".$_POST['txtStatus'].
				"', '".$_POST['txtDescription'].
				"', 'CURRENT_TIMESTAMP' )";
				echo $query1;
			$result1 = mysql_query($query1) or die("Query to get data from firsttable failed: " . mysql_error());
			if($result1==1){
				echo "Added! nofile";

	        	//header("refresh:2; url=../projects.php");
			}else{
				echo "Error!";
			}

		}
	}
		
 ?>

