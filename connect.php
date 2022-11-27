
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mphone";

	$connect = mysqli_connect($servername,$username,$password,$database);
	if(!$connect){
        echo '<script>alert("Kết nối thất bại ! !")</script>';
	}
    else{
		echo '<script>alert("Kết nối thành công ! !")</script>';
   //header("location: http://localhost:8012/Homepage.php");
}
if(isset($_GET['detail'])){
	$IDProduct = $_GET['detail'];
	$connect -> query("SELECT FROM mphone WHERE IDphone = $IDphone");
	header("Location: https://www.facebook.com/chedauxanhne/");
}
?>
