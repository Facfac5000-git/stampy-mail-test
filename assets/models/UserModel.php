<?php

class UserModel
{

    private $db;
    private $users;

    public function __construct(){
        $this->db = Connect::db_connect();
        $this->users = array();
    }

    public function login($username){
        $sql = "SELECT * FROM users WHERE (email = 'Facfac5000' OR username = 'Facfac5000') and isActive = 1";
        $result = $this->db->query($sql);

        $row = $result->fetch_assoc();

        return $row;
    }

    public function all(){
        $sql = "SELECT * FROM users WHERE isActive = 1";
        $result = $this->db->query($sql);

        while($row = $result->fetch_assoc()){
            $this->users[] = $row;
        }

        return $this->users;
    }

    public function find($user_id){
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = $this->db->query($sql);

        $row = $result->fetch_assoc();

        return $row;
    }

    public function store($username, $email, $name, $password){
        $sql = "INSERT INTO users(username, email, name, password, created_at, isActive) 
                    values ('$username', '$email', '$name', '$password', CURRENT_TIME(), 1)";
        
        $result = $this->db->query($sql);

        if($result === TRUE){
            return 1;
        }else{
            return 2;
        }
    }

    public function update($user_id, $username, $email, $name){
        $sql = "UPDATE users SET username = '$username', email = '$email', name = '$name' 
                    WHERE id = '$user_id'";

        $result = $this->db->query($sql);

        if($result === TRUE){
            return 1;
        }else{
            return 2;
        }
    }

    public function destroy($user_id){
        $sql = "UPDATE users SET isActive = 0 where id = '$user_id'";
        
        $result = $this->db->query($sql);
    }

}

?>