<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sir Crobie
 * Date: 16/02/2017
 * Time: 15:27
 */

namespace itb;


class DbManager {
    private $hostname;
    private $user;
    private $pass;
    private $db;
    private $con;

    function __construct(){
        $this->hostname = "localhost";
        $this->user = "root";
        $this->pass = "root";//May not need this if password is not set up for localhost
        $this->db = "spcdb";//Change to what ever your test db's name is :)
        $this->con = mysqli_connect($this->hostname, $this->user, $this->pass, $this->db);

        if(mysqli_connect_errno()){
            echo "Failed to connect to database";
        }
        else{
            echo "Connection Successful!";
        }
    }

    function addUser($username, $fname, $mobile, $email, $dob, $addL1, $addL2, $addL3, $pass){
        $sql = "INSERT INTO users (username, firstname, tel, email, dob, address1, address2, address3, pass) VALUES ('$username','$fname','$mobile','$email','$dob','$addL1','$addL2','$addL3','$pass')";
        echo "$sql";
        mysqli_query($this->con, $sql);
    }

    //Getters and Setters for the Users DB

    function setFirstName($fname, $email){
        $sql = "UPDATE users SET firstname= $fname WHERE email = $email";
        mysqli_query($this->con, $sql);
    }

    function setUsername($username, $email){
        $sql = "UPDATE users SET username= $username WHERE email = $email";
        mysqli_query($this->con, $sql);
    }

    function setPassword($password, $email){
        $sql = "UPDATE users SET pass = $password WHERE  email = $email";
        mysqli_query($this->con, $sql);
    }

    function getUsername($email){
        $sql = "SELECT username FROM users WHERE email = $email";
        $username = mysqli_query($this->con, $sql);
        return $username;
    }

    function getFirstName($email){
        $sql = "SELECT firstname FROM users WHERE email = $email";
        $fname= mysqli_query($this->con, $sql);
        return $fname;
    }

    //End of Getters and Setters for Users DB

}

//Code to put unto registering.php which will register a user with the DB
//  $dbm = new \itb\DbManager();
//  $dbm->addUser($_POST['username'],$_POST['name1'],$_POST['tel'],$_POST['email'],$_POST['date'],$_POST['addresslineone'],$_POST['addresslinetwo'],$_POST['addresslinethree'],$_POST['password']);