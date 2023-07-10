<?php
class Upload_img
{
    function __construct()
    {
        if (isset($_POST['save'])) {
            $image_name = $_FILES['image_']['name'];
            $temp_image_name = $_FILES['image_']['tmp_name'];
            $folder='../Upload/';
            move_uploaded_file($temp_image_name, $folder.$image_name);
        }
    }
}
