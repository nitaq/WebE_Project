<?php

require_once 'db_connect.php';

class About  extends Db_connect {
 
    protected $link;
    
    public function __construct(){
        
        $this->link = $this->database_connection();
        
    }
    
 
    //4 funksione per njejt veq se thirr tabela te ndryshme ne databaze
    public function select_all_about(){
           $sql = "SELECT * FROM about";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
 
        public function select_all_sherbimet_about(){
           $sql = "SELECT * FROM sherbimet_about";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
       
 
        public function select_all_content_about(){
           $sql = "SELECT * FROM content_about";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
   
 
        public function select_all_gallery_about(){
           $sql = "SELECT * FROM about_gallery";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }


   

     
   




}
