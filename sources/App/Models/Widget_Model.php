<?php
class Widget_Model
{
    public static function get()
    {
        $db = MySQL::getDB();
        $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
        $stmt = $db->prepare("SELECT * FROM widgets");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM widgets WHERE id = :id');
        $stmt->execute(array(':id' => $id));
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE widgets SET $condition WHERE id = :id");
        $stmt->execute($data);
        return true;
    }

    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM widgets WHERE id = :id");
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0];
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO widgets ($condition) values ($value)");
        $stmt->execute($data);
        return $conn->lastInsertId();
    }
}