<?php 
require "Database.php";

class User extends Database{

    public function get_users(){
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);

        //initialize an array
        $rows = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            //$rowはDatabase-arrayなので$rows[],php-arrayに変換
                $rows[] = $row;
            }
            return $rows;
        }
        else{
            return $this->conn->error;
        }
    }

    public function insert($username,$password,$firstname,$lastname,$email){
        $sql1 = "SELECT * FROM users where username = '$username'";
        $result1 = $this->conn->query($sql1);

        if($result1->num_rows > 0){
            echo "Username is already taken.";
        }else{
        $sql = "INSERT INTO users (username, password, firstname, lastname, email, status)VALUES('$username', '$password', '$firstname', '$lastname', '$email', 1)";

        $result = $this->conn->query($sql);

      if($result){
        header("Location: userlist.php");
      }else{
        echo "Error : ".$this->conn->error;
      }
    }
    }  

    public function get_user($id){
        // WHERE user_id=$id"値が数字の場合''で囲まなくて良い
        $sql = "SELECT * FROM users where user_id = $id";
        $result = $this->conn->query($sql);
        
        if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        return $row;
    }else{
        return $this->conn->error;
    }
    }

    public function update($username,$password,$firstname,$lastname,$email,$id){
        $sql = "SELECT * FROM users where username = '$username' and user_id != $id";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            echo "Username is already taken.";
        }
        else{
        $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email' WHERE user_id='$id'";
            
        if($this->conn->query($sql)){
            header("Location: userlist.php");
        }
        else{
            echo "Error: ".$this->conn->error;
        }
        }
        }

    public function delete($id){
        // WHERE user_id=$id"値が数字の場合''で囲まなくて良い
        $sql = "DELETE FROM users WHERE user_id=$id";
    
        if($this->conn->query($sql)){
            header("Location: userlist.php");
        }
        else{
            echo "Error: ".$this->conn->error;
        }
    }
}
?>