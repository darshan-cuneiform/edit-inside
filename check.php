<?php 


$servername = "localhost";
$username = "nativela_admin";
$password = "Data@web37";
$dbname = "nativela_editinsider";

$conn = mysqli_connect("localhost","nativela_admin","Data@web37","nativela_editinsider");


// $query = "select * from web_user";

// $result = mysqli_query($conn, $query);

// while ($rows=mysqli_fetch_assoc($result)){
// 	echo $rows['id'].'<br>';
// }
// exit;

// $row = mysqli_fetch_array($result);

// echo "<pre>"; print_r($row); exit;


// $data = mysqli_fetch_array($result, $conn);
// echo "<pre>"; print_r($data); exit;

if (!$conn) {

	// die("connection failed" .mysqli_connect_error();
		echo "Sorry... u are nt connected";
}
else{
	// echo "congratss... you are connected";
}


 ?>