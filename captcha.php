<?php
    session_start();
    header("Content-type: image/jpeg");

    function generateImage(){
        try{
            
            $word = substr(str_shuffle("AaBbCcDdEeFfGgHhIiJjKkLlMmNnPpQqRrSsTtUuVvYyXxWwZz23456789!@#$"),0,(5));
            
            $_SESSION['word'] = $word;

            $background_options = ["01", "02", "03", "04", "05", "06"];

            $background_number = array_rand($background_options, 1);
            
            $im = imagecreatefromjpeg("backgrounds_captcha/bg" . $background_options[$background_number] . ".jpg");
            $white = imagecolorallocate($im, 255, 255, 255);
            
            $font_size = 20;
            $font_path = "/var/www/html/captcha_php/Trebuc.ttf";
            $text = $_SESSION['word'];
            $text_angle = 0;
            $horizontal_position = 10;
            $vertical_position = 40;
            
            imagettftext($im, $font_size, $text_angle, $horizontal_position, $vertical_position, $white, $font_path, $text);
            
            imagejpeg($im);
            imagedestroy($im);

        }catch(Exception $e){
            return "erro: " .  $e->getMessage();
        }
    }

    generateImage();
?>