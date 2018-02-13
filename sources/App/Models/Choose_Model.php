<?php
class Choose_Model
{
    public static function get()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM chooses");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM chooses WHERE id = :id");
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0];
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE chooses SET $condition WHERE id = :id");
        $stmt->execute($data);
        return true;
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO chooses ($condition) values ($value)");
        $stmt->execute($data);
        return $conn->lastInsertId();
    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM chooses WHERE id = :id');
        $stmt->execute(array(':id' => $id));
    }
}