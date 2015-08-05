
<?php 

	include 'db_connect.php';
	$user = $_SESSION['myusername'];
	$old_avatar = $_SESSION['avatar'];
		if (isset($_POST['edit_avatar']))
		{
			$filename = $_FILES["file"]["name"];
			$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
			$file_ext = substr($filename, strripos($filename, '.')); // get file name
			$filesize = $_FILES["file"]["size"];
			$allowed_file_types = array('.jpg','.png','.gif');	

			if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000))
			{	
				// Rename file
				$newfilename = md5($file_basename) . $file_ext;
				if (file_exists("../img/avatars/" . $newfilename))
				{
					// file already exists error
					echo "You have already uploaded this file.";
				}else{
					move_uploaded_file($_FILES["file"]["tmp_name"], "../img/avatars/" . $newfilename);
					echo "File uploaded successfully.";
					$query = "UPDATE users SET avatar = '".$newfilename."' WHERE username = '".$user."'";
					

					$result = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
					if($result==1){
						echo "Profile Changed! Automatic return after 2 seconds!";
						unlink("../img/avatars/".$old_avatar);
			        	header("refresh:2; url=../profile.php");
					}else{
						echo "Error! Automatic return after 2 seconds!";
					}
				}
			}elseif (empty($file_basename)){	
					// file selection error
					echo "Please select a file to upload.";
			}elseif ($filesize > 200000){	
				// file size error
				echo "The file you are trying to upload is too large.";
			}else{
				// file type error
				echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
				unlink($_FILES["file"]["tmp_name"]);
			}
						
		}
		

 ?>
