<?php

$validFileType = array("jpg", "png", "gif", "zip", "bmp"); // filetypes to accept
$maxFileSize = 1024*100000; // Maximum file size: 10MB
$uploadDir = "Projects/"; //  Upload directory
$uploadCount = 0; //Counter that keeps track of successful uploads

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to execute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // if an error is found then skip the file
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $maxFileSize) {
	            $message[] = "$name is too large!.";
	            continue; // if file is larger than the maximum file size then skip it
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $validFileType) ){
				$message[] = "$name is not a valid format";
				continue; // if the file is not in a valid format then skip it
			}
	        else{ // Move the uploaded files to the correct directory if no errors happened
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $uploadDir.$name))
	            $uploadCount++; // Increment successfully uploaded file counter
	        }
	    }
	}
}

?>