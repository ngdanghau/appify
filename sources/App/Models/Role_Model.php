<?php
class Role_Model
{
    public static function get($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT vi_name FROM roles WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        $item = $stmt->fetch(PDO::FETCH_OBJ);
        return $item->vi_name;
    }

    public static function show()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT * FROM roles');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}