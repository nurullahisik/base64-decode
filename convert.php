<?php
/**
 * Created by PhpStorm.
 * User: nurul
 * Date: 22.12.2018
 * Time: 23:56
 */

if ( $_POST ) {
    require "src/Base64Decode.php";
    $base64_decode = new Base64Decode();

    $text = $_POST['text'];
    $file = $_FILES['file'];

    $new_filename = "files/" . rand() . "." . $_POST['type'];
    if ( !empty($text) ) {
        $base64_decode->convertText($text, $new_filename);
        $base64_decode->download($new_filename);
    } else if ( !empty($file) ) {
        $file_name = $file['name'];
        $mime_type = mime_content_type($file['tmp_name']);

        $mime_type = explode("/", $mime_type);

        if ( $mime_type[1] == "txt" ) {
            if ( move_uploaded_file($this->getFile()['tmp_name'], "files/$file_name") ) {
                $base64_decode->convertFile("files/$file_name", $new_filename);
                $base64_decode->download($new_filename);
            }else{
                echo "dosya okunurken hata olustu";
                die;
            }
        } else {
            echo "dosya uzantısı txt olmalıdır";
            die;
        }
    }

    header("Location:index.php");

}
