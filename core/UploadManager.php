<?php

class UploadManager
{
    public function uploadImg() {
        $target_dir = "views/img/";
        $timestamp = round(microtime(true) * 1000); // 13:45:56 -> 121321412
        $file_name = $timestamp . "_" . basename($_FILES["file_to_upload"]["name"]); // 121321412_duck.jpg
        $final_path_to_file = $target_dir . $file_name; // views/img/121321412_duck.jpg
        $uploadOk = true;
        $image_file_type = strtolower(pathinfo($final_path_to_file, PATHINFO_EXTENSION)); // JpG -> jpg

        $check = getimagesize($_FILES["file_to_upload"]["tmp_name"]); // [dsadasdsadsas] | false
        // Is it an image
        if (!$check) {
            $uploadOk = false;
            echo "File is not an image";
        }

        // Is file already in the folder
        if (file_exists($final_path_to_file)) {
            $uploadOk = false;
            echo "File already exists";
        }

        // Is the size allowed
        if ($_FILES["file_to_upload"]["size"] > 10000000) {
            $uploadOk = false;
            echo "File size is above the limitation";
        }

        // Is the file type supported
        if (
            $image_file_type !== "jpg" &&
            $image_file_type !== "png" &&
            $image_file_type !== "jpeg" &&
            $image_file_type !== "gif"
        ) {
            $uploadOk = false;
            echo "File type is not supported";
        }

        if (!$uploadOk) {
            echo "Img will not be uploaded";
            return false;
        } else {
            if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $final_path_to_file)) {
                return $file_name;
            } else {
                return false;
            }
        }
    }
}