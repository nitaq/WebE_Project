<?php

    require_once 'db_connect.php';

    class View  extends Db_connect 
    {
        protected $link;
        
        public function __construct()
        {
            $this->link = $this->database_connection();
        }

        // All Gallery Images
        public function select_all_gallery_images()
        {
            $sql="SELECT * FROM tbl_gallery";
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

        // 3 Latest Images
        public function select_latest_gallery_images()
        {
            $sql="SELECT * FROM tbl_gallery ORDER BY created_date DESC limit 3";
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
    }

?>