<?php
	
	// Database connection 
	
// 	require_once('dbConnection.php');

// 	// Upload multiple image in Database using PHP MYSQL

// 	if (!empty($_FILES['multipleFile']['name'])) {

// 	    $multiplefile = $_FILES['multipleFile']['name'];

// 	    foreach ($multiplefile as $name => $value) {
		
// 	    $allowImg = array('png','jpeg','jpg','gif');	

// 	    $fileExnt = explode('.', $multiplefile[$name]);

// 	    $fileTmp = $_FILES['multipleFile']['tmp_name'][$name];
					
// 	    $newFile = 	rand(). '.'. $fileExnt[1];

// 	    $target_dir = './images/upload/'.$newFile; 

// 	if (in_array($fileExnt[1], $allowImg)) {

// 	    if ($_FILES['multipleFile']['size'][$name] > 0 && $_FILES['multipleFile']['error'][$name]== 0) {
					
// 		if (move_uploaded_file($fileTmp, $target_dir)) {
// 		    $query  = "INSERT INTO table_images (images) VALUES('$newFile')";
// 		    mysqli_query($con, $query);
// 		}
// 	    }
// 	}
//     }
// }	



?>