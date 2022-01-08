<?php
function file_upload($image){
    $result = new stdClass();
    $result->fileName = 'product.png';
    $result->error = 1;
    $fileName = $image["name"];
    $filTmpName = $image["tmp_name"];
    $fileError = $image["error"];
    $fileSize = $image["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $filesAllowed = ["png", "jpg", "jpeg"];
    if($fileError == 4) {
        $result->ErrorMessage = "No image was chosen. It can always be updated later";
        return $result;
    }else{
        if (in_array($fileExtension, $filesAllowed)) {
            if($fileError === 0){
                if($fileSize < 2000000){
                    $fileNewName = uniqid('') . "." . $fileExtension;
                    $destination = "../images/$fileNewName";
                    if(move_uploaded_file($filTmpName, $destination)){
                        $result->error = 0;
                        $result->fileName = $fileNewName;
                        return $result;

                    }else{
                        $result->ErrorMeassage = "There was an error uploading this file.";
                        return $result;
                    }
                }else{
                    $result->ErrorMessage = "This image is bigger than the allowed 2mb. <br> Please choose a smaller on and update the product.";
                    return $result;
                }
            }else{
                $result->ErrorMessage = "There was an error uploading - $fileEroor code. Check the PHP documantation.";
                return $result;
            }
        }else{
            $result->ErrorMessage = "This file type can't be uploaded";
                return $result;
        }
    }
}
?>