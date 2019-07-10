<?php

    require_once 'db_connect.php';

    class Gallery extends Db_connect 
    {
        protected $link;

        public function __construct() 
        {
            $this->link = $this->database_connection();
        }

        public function save_gallery_image($data) 
        {
            $directory = '../uploads/';
            $target_file = $_FILES['gallery_image']['name'];
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

            //create an unique name
            $target_file = $directory . uniqid() .'.'. $file_type;

            $check = getimagesize($_FILES['gallery_image']['tmp_name']);
            if ($check) 
            {
               move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target_file);
               $created_date = date("Y-m-d H:i:s");
               $sql = "INSERT INTO tbl_gallery (image_title, gallery_image, user, image_description, created_date)"
                . "VALUES ('$data[image_title]','$target_file', '$data[user]', '$data[image_description]', '$created_date')";
               if (mysqli_query($this->link, $sql)) 
               {
                    $message = 'Image uploded';
                    return $message;
               } 
               else 
               {
                   echo ('Died' . mysqli_error($this->link));
               }

            } 
            else 
            {
                die('Not an image!');
            }
        }

        // All Gallery Info
        public function select_all_gallery_info()
        {
            $sql="SELECT * FROM tbl_gallery INNER JOIN users ON tbl_gallery.user = users.id";
            if(mysqli_query($this->link, $sql))
            {
                $query_result=mysqli_query($this->link,$sql);  
                return $query_result;
            }
            else
            {
                die('Query Problem'.mysqli_error($this->link));
            }
        }
        
        // Gallery Info By ID
        public function select_gallery_info_by_id($image_id)
        {
            $sql="SELECT * FROM tbl_gallery WHERE image_id='$image_id' ";
            if(mysqli_query($this->link, $sql))
            {
                $query_result=mysqli_query($this->link,$sql);  
                return $query_result;
            }
            else
            {
                die('Query Problem'.mysqli_error($this->link));
            }
        } 
        
           // All Users (Admin)
            public function select_all_users()
            {
                $sql = "SELECT * FROM users where usertype='admin'";
                if(mysqli_query($this->link, $sql)) 
            {
                $query_result = mysqli_query($this->link, $sql);
                return $query_result;
            } 
            else 
            {
                die('query problem' . mysqli_error($this->link));
            }
        }
    }
?>