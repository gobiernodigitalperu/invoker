<?php
require('../util/config.php');


$type=$_POST['type'];
$documentName=$_POST['documentName'];



if($type=="L")
{
$param ='{
			"app":"pdf",
			"fileUploadUrl":"'.$FILEUPLOADURL.'",
			"reason":"Soy el autor del documento",
			"type":"L",
			"clientId":"'.$CLIENTID.'",
			"clientSecret":"'.$CLIENTSECRET.'",
			"dcfilter":".*FIR.*|.*FAU.*",
			"fileDownloadUrl":"",
			"posx":"5",
			"posy":"5",
			"outputFile":"'.$documentName.'",
			"protocol":"T",
			"contentFile":"",
			"stampAppearanceId":"0",
			"isSignatureVisible":"true",
			"idFile":"MyForm",
			"fileDownloadLogoUrl":"'.$SERVER_PATH.'/resources/img/iLogo1.png",
			"fileDownloadStampUrl":"'.$SERVER_PATH.'/resources/img/iFirma1.png",
			"pageNumber":"0",
			"maxFileSize":"5242880",
			"fontSize":"7",			
			"timestamp":"false"
		}';

		echo  base64_encode($param);

		
	//$array = array(
		    
	     //   'idRegister' => $ID_REGISTER,
	      //  'idFile'  => '002',
	      //  'type'  => 'L', /*L=Documento está en la PC , W=Documento está en la Web.*/
	     //   'protocol'  => $PROTOCOL, /*T=http, S=https (SE RECOMIENDA HTTPS)*/
	     //   'fileDownloadUrl'  =>'',
	     //   'fileDownloadLogoUrl'  =>$DIR_IMAGE.'iLogo1.png',
	     //   'fileDownloadStampUrl'  =>$DIR_IMAGE.'iFirma1.jpg',
	     //   'fileUploadUrl' =>$DIR_UPLOAD.'upload.php',                   
	     //   'contentFile' => '',
	     //   'reason' => 'Soy el autor del documento',
	     //   'isSignatureVisible' => 'true',            
	     //   'stampAppearanceId' => '0', /*0:(sello+descripcion) horizontal, 1:(sello+descripcion) vertical, 2:solo sello, 3:solo descripcion*/
	     //   'pageNumber' => '0',
	     //   'posx' => '5',
	     //   'posy' => '5',
	     //   'width' => '170',        
	     //   'fontSize' => '9' ,
	    //    'dcfilter' => '.*FIR.*|.*FAU.*', /*'.*' todos, solo fir '.*FIR.*|.*FAU.*'*/
	     //   'timestamp' => 'false',               
	     //   'outputFile' => $documentName,  
	      //  'maxFileSize' => '5242880' /*Por defecto será 5242880 5MB - Maximo 100MB*/
	    //);

		//echo  base64_encode( json_encode($array) );

}	

if($type=="W")
{

$param ='{
			"app":"pdf",
			"fileUploadUrl":"'.$FILEUPLOADURL.'",
			"reason":"Soy el autor del documento",
			"type":"W",
			"clientId":"'.$CLIENTID.'",
			"clientSecret":"'.$CLIENTSECRET.'",
			"dcfilter":".*FIR.*|.*FAU.*",
			"fileDownloadUrl":"'.$SERVER_PATH.'/documents/demo.pdf",
			"posx":"5",
			"posy":"5",
			"outputFile":"'.$documentName.'",
			"protocol":"T",
			"contentFile":"demo.pdf",
			"stampAppearanceId":"0",
			"isSignatureVisible":"true",
			"idFile":"MyForm",
			"fileDownloadLogoUrl":"'.$SERVER_PATH.'/resources/img/iLogo1.png",
			"fileDownloadStampUrl":"'.$SERVER_PATH.'/resources/img/iFirma1.png",
			"pageNumber":"0",
			"maxFileSize":"5242880",
			"fontSize":"7",			
			"timestamp":"false"
		}';

		echo  base64_encode($param);

}	


?>