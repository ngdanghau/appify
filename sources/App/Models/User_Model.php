<?php
class User_Model
{
    public static function get($arr)
    {
        $db = MySQL::getDB();
        $in  = str_repeat('?,', count($arr) - 1) . '?';
        $sql = "SELECT * FROM users WHERE role IN ($in)";
        $stm = $db->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getAdmin($arr)
    {
        $db = MySQL::getDB();
        $in  = str_repeat('?,', count($arr) - 1) . '?';
        $sql = "SELECT * FROM users WHERE role IN ($in)";
        $stm = $db->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(array('id' => $id));
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO users ($condition) values ($value)");
		$stmt->execute($data);
        return $conn->lastInsertId();
    }

    public static function updateAdmin($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE users SET $condition WHERE id = :id");
		$stmt->execute($data);
        return true;
    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM users WHERE id = :id');
        $stmt->execute(array(':id' => $id));
    }

    public static function inlist($arr)
    {
        $db = MySQL::getDB();
        $in  = str_repeat('?,', count($arr) - 1) . '?';
        $sql = "SELECT * FROM users WHERE id IN ($in)";
        $stm = $db->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll(PDO::FETCH_OBJ);

    }

    public static function inAdmin($arr,$word)
    {
        $db = MySQL::getDB();
        $in  = str_repeat('?,', count($arr) - 1) . '?';
        $sql = "SELECT * FROM users WHERE role IN ($in) AND name LIKE '$word%'";
        $stm = $db->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll(PDO::FETCH_OBJ);

    }

    public static function avatar($id)
    {
        if ($id == 0) {
            return Config_Model::get('site_avatar');
        }else{
            $avatar = User_Model::show($id);
            return $avatar->avatar;
        }
       
    }

}