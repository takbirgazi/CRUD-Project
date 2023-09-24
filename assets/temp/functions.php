<?php
// Database Name: crud_project
// Database User Name: root
// Database Password: 

// Table 1
// Table name:      usr
// id	            int(11)	
// usr_name	        varchar(255)	
// usr_email	    varchar(255)	
// usr_pwd	        varchar(255)

// Table 2
// id	        int(11)	
// post_title	text	
// post_desc	longtext	
// post_date	timestamp	



Class Crudproject{

    private $conn;
    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_project";
        
        // Create connection
        $this->conn = mysqli_connect($servername, $username, $password,$dbname);
        if(!$this->conn){
            die("error");
        }
    }
    public function usr_login($data){
        $name = $data['usr_name'];
        $email = $data['usr_email'];
        $pwd = $data['usr_pwd'];

        $sql = "SELECT * FROM usr";
        if(mysqli_query($this->conn,$sql)){
            $db_data = mysqli_query($this->conn,$sql);
            $row = mysqli_fetch_assoc($db_data);
            if($row['usr_name']==$name && $row['usr_email']==$email && $row['usr_pwd']==$pwd){
                header('Location: dashbord.php');
            }else{
                return "not valid";
            }  
        }
    }
    public function insert_post($data){
        $title = $data['title'];
        $desc = $data['desc'];
        $sql = "INSERT INTO post (post_title, post_desc) VALUES ('$title','$desc');";
        if(mysqli_query($this->conn,$sql)){
        return "Post Aded Successfully!";
        }else{
            return "Post Aded Unsuccessfully!";
        }

    }
    public function show_post(){
        $sql = "SELECT * FROM post";
        if(mysqli_query($this->conn,$sql)){
            $data = mysqli_query($this->conn,$sql);
            return $data;
        }
    }
    public function fiend_post($data){
        $sql= "SELECT * FROM post WHERE id= $data";
        if(mysqli_query($this->conn,$sql)){
            $data = mysqli_query($this->conn,$sql);
            $result = mysqli_fetch_assoc($data);
            return $result;
        }

    }
    public function myobject_post($data){


        $sl_id = $data['postid'];
        $title = $data['title'];
        $desc = $data['desc'];
        $sql = "UPDATE post SET post_title = '$title', post_desc = '$desc' WHERE post.id = $sl_id";
        if(mysqli_query($this->conn,$sql)){
        return "Post Update Successfully!";
        }else{
            return "Post Update Unsuccessfully!";
        }
    }
    public function delete_post($dldata){
        $sql = "DELETE FROM post WHERE post.id = $dldata";
        if(mysqli_query($this->conn,$sql)){
            header('Location: dashbord.php');
        }else{
            return "Not Deleted";
        }

    }


    
// Class Eand
}



























?>