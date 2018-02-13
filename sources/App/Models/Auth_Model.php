<?php
class Auth_Model
{
    public static function login($username,$password)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id,password,role FROM users WHERE username = :username');
        $stmt->execute(array(':username' => $username));
        $item = $stmt->fetch(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0)
        {
            if(password_verify($password, $item->password) && in_array($item->role,[1,2,3]))
            {
                $_SESSION['Adminid'] = $item->id;
                $_SESSION['role'] = $item->role;
                return true;
            }
            else
            {
                return false;
            }
        }
    
    }

    public static function logout()
    {
        session_destroy();
        unset($_SESSION['role']);
        unset($_SESSION['Adminid']);
        return true;
    }

    public static function isAdmin() {
        if(empty($_SESSION['Adminid'])) {
            return false;
        }else{
            return true;
        }
    }

    public static function isUser() {
        if(empty($_SESSION['Userid'])) {
            return false;
        }else{
            return true;
        }
    }

    public static function checkPass($old_password,$id){
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT password FROM users WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        $item = $stmt->fetch(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0)
        {
            if(password_verify($old_password, $item->password))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public static function checkUser($username){
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id FROM users WHERE username = :username');
        $stmt->execute(array(':username' => $username));
        $item = $stmt->fetch(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0){
                return false;
        }else{
                return true;
        }
    }

}