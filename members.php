<?php 
	$title = "Hanusoft's Members";
	include 'header.php';

	include 'db/get_all_members.php';
 
	while ($row = mysql_fetch_array($rs_all_members)) {
        $name = $row["display_name"];
        $id = $row["id"];
        $avatar = $row["avatar"];

 	echo '
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
				<div class="thumbnail">
					<img src="';
						if(is_null($avatar)){echo 'img/avatars/default.jpg';}
						else{echo 'img/avatars/'.$avatar.'"';}
					echo '"alt="">
				</div>
				<h4><a href="selected_member.php?id='.$id.'" title="">'.$name.'</a></h4>	
			</div>
 	';
    }
 
	include 'footer.php';
 ?>
