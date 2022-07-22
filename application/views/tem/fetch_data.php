<?php

	// Database connection 
	
	// require_once('dbConnection.php');

	// $query = "SELECT * FROM table_images ORDER BY id DESC";
	
	// $result = mysqli_query($con, $query);
	
	// $output = "";


	// if (mysqli_num_rows($result) > 0) {
	// 	$output .= "<table class='table table-striped'>";
	// 	$output .= "<thead>
	// 		        <tr>
	// 		          <th>S.no</th>
	// 		          <th>Image Name</th>
	// 		          <th>Edit</th>
	// 		          <th>Delete</th>
	// 		        </tr>
	// 		      </thead>";

	// 			// echo "<pre>";
	// 			// print_r($output);
	// 			// echo "</pre>";
		
	// 			exit;
	// 	while ($row = mysqli_fetch_assoc($result)) {
	// 	$images = '/images/upload/'. $row['images'];
	// 	$output .=  "<tr>
	// 		          <td>".$row["id"]."</td>
	// 		          <td><img src='".$images."' class='img-thumbnail' width='150px' height='150px' /></td>
	// 		          <td><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#exampleModal' data-id='".$row["id"]."'>Edit</button></td>
	// 		          <td><button type='button' class='btn btn-danger btn-sm delete-btn' data-id='".$row["id"]."'>Delete</button></td>
	// 		        </tr>";
	// 	}
	// 	$output .="</tbody>

  //   			</table>";
  //   	echo $output;
	// }else{
	// 	echo "<h3 style='text-align:center'>No Image found</h3>";
	// }

?>