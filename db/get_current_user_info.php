<?php 
if(isset($_SESSION['login']) && $_SESSION['login'] = true){
$username = $_SESSION['myusername'];
$query = "SELECT * FROM users WHERE username = '" . $username . "'";
$result = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
while ($row = mysql_fetch_array($result)) {
$name = $row["display_name"];
$id = $row["id"];
$password = $row["password"];
$role = $row["role"];
$user_email = $row["email"];
$class = $row["class"];
$gender = $row["gender"];
$birthday = $row["dob"];
$description = $row["description"];
$avatar = $row["avatar"];
$lastupdate = $row['last_updated'];
}
}
?>
