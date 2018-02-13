<?php
class Menu_Model
{
    public static function get($condition)
    {
        $db = MySQL::getDB();
        $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
        $stmt = $db->prepare("SELECT * FROM menus WHERE $condition");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM menus WHERE id = :id");
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0];
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE menus SET $condition WHERE id = :id");
        $stmt->execute($data);
        return true;
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO menus ($condition) values ($value)");
        $stmt->execute($data);
        return $conn->lastInsertId();
    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM menus WHERE id = :id');
        $stmt->execute(array(':id' => $id));

        $stmt = $db->prepare('DELETE FROM menus WHERE parent_id = :id');
        $stmt->execute(array(':id' => $id));
    }
}