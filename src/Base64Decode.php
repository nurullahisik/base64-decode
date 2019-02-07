<?php
/**
 * Created by PhpStorm.
 * User: nurul
 * Date: 20.12.2018
 * Time: 20:43
 */

class Base64Decode
{
    public function convertFile($text_file, $new_file_name = "")
    {
        //Get File content from txt file
        $pdf_base64_handler = fopen($text_file,'r');
        $pdf_content = fread ($pdf_base64_handler, filesize($text_file));
        fclose ($pdf_base64_handler);

        $this->convert($pdf_content, $new_file_name);
    }

    public function convertText($pdf_content, $new_file_name = "")
    {
        $this->convert($pdf_content, $new_file_name);
    }

    public function convert($pdf_content, $file_name)
    {
        //Decode pdf content
        $pdf_decoded = base64_decode ($pdf_content);
        //Write data back to pdf file

        $pdf = fopen ($file_name,'w');
        fwrite ($pdf, $pdf_decoded);

        //close output file
        fclose ($pdf);
    }

    public function download($file = "")
    {
        header("Content-Disposition: attachment; filename=" . urlencode($file));
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Description: File Transfer");
        header("Content-Length: " . filesize($file));
        flush();
        $fp = fopen($file, "r");
        while (!feof($fp))
        {
            echo fread($fp, 65536);
            flush();
        }
        fclose($fp);

    }

}
