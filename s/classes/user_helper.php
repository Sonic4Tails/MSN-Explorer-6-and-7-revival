<?php

/**
* @Auther: bhief
* @Version: 1.0
* @Added Base
*
* Use this class for getting user information
*
**/
class user_helper {
    public $__db;

	public function __construct($conn){
        $this->__db = $conn;
	}

    function fetch_pfp($username) {
        $stmt = $this->__db->prepare("SELECT pfp FROM users WHERE username = :username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pfp = $row['pfp'];
        } // why the while statement? just remove it (i cant be bothered to)

        return (isset($pfp) ? $pfp : "default.png");
    }

    
    function fetch_sub($user) {
        $stmt = $this->__db->prepare("SELECT subscription FROM users WHERE username = :user AND subscription = 'y'");
        $stmt->bindParam(":user", $user);;
        $stmt->execute();

        return $stmt->rowCount() === 1;
    }    


    function fetch_user_username($username) {
        $stmt = $this->__db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        return ($stmt->rowCount() === 0 ? 0 : $stmt->fetch(PDO::FETCH_ASSOC));
    }

    function user_exists($user) {
        $stmt = $this->__db->prepare("SELECT username FROM users WHERE username = :username");
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        return $stmt->rowCount() === 1;
    }


}

?>