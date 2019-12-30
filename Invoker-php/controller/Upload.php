<?php



   if (isset($_FILES['MyForm']))
   {
   			$separa=DIRECTORY_SEPARATOR;

   			$tmp = dirname(tempnam (null,'')); 

			mkdir( $tmp.$separa."upload");

		    $file_name = $_FILES['MyForm']['name'];
		    $file_tmp =$_FILES['MyForm']['tmp_name'];
			$tamanio = $_FILES["MyForm"]["size"];
			$tipo = $_FILES["MyForm"]["type"];

			move_uploaded_file($file_tmp,$tmp.$separa."upload".$separa.$file_name);

	    	
   }
   




?>

