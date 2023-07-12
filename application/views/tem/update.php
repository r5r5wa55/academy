<?php
	
	
	
	// require_once('dbConnection.php');

	// if (isset($_POST['image_id'])) {
		
	//     $image_id = $_POST['image_id'];
	// }
	
	// if (!empty($_FILES['file_name']['name'])) {

	//      $fileTmp = $_FILES['file_name']['tmp_name'];

	//      $allowImg = array('png','jpeg','jpg','gif');

	//      $fileExnt = explode('.', $_FILES['file_name']['name']);

	//      $fileActExt   = strtolower(end($fileExnt));

	//      $newFile = rand(). '.'. $fileActExt;

	// 		 	// echo "<pre>";
	// 			// print_r($fileTmp);
	// 			// echo "</pre>";

		
	//      $destination = './images/upload/'.$newFile;

	//      if (in_array($fileActExt, $allowImg)) {
	//         if ($_FILES['file_name']['size'] > 0 && $_FILES['file_name']['error']==0) {

	// 	    $query = "SELECT * FROM table_images WHERE id = '$image_id'";



	


	// 	    $result = mysqli_query($con, $query);

	// 	    $row = mysqli_fetch_assoc($result);

	// 	    $filePath = './images/upload/'.$row['images'];
				
	// 			// echo "<pre>";
	// 			// print_r($_FILES);
	// 			// echo "</pre>";

	// 			echo "<pre>";
	// 			print_r($row);
	// 			echo "</pre>";

	// 			echo "<pre>";
	// 			print_r($fileTmp);
	// 			echo "</pre>";

	// 			echo "<pre>";
	// 			print_r($destination);
	// 			echo "</pre>";
		
				
	// 	    if (move_uploaded_file($fileTmp, $destination)) {

	// 				$update = "UPDATE table_images SET images = '$newFile' WHERE id = '$image_id'";
	// 				mysqli_query($con, $update);
	// 				// echo "<pre>";
	// 				// print_r($update);
	// 				// echo "</pre>";

	// 				unlink($filePath);
	// 	    }
	// 	}
	//      }
	// }
		// exit;
// ?>