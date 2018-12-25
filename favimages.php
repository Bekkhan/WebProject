<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "favourites";

	//connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){die("Connection failed".$conn->connect_error);}

	echo "Connection succesfully";
	echo "<br>";




	function adding($name){

		switch ($name) {
			case 'a':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'a'";
				break;
			case 'b':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'b'";
				break;

			case 'c':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'c'";
				break;
			case 'd':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'd'";
				break;
			case 'e':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'e'";
				break;
			case 'f':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'f'";
				break;
			case 'g':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'g'";
				break;
			case 'h':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'h'";
				break;
			case 'i':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'i'";
				break;
			case 'j':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'j'";
				break;
			case 'k':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'k'";
				break;
			case 'l':
				$sql = "INSERT INTO favimages(img,imgname,author)
				SELECT img,imgname,autor FROM alimages
				WHERE imgname = 'l'";
				break;
			
			default:
				
				break;
		}
	}
?>