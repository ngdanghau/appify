<?php
class Fact_Model
{
    public static function get()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM facts");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM facts WHERE id = :id");
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0];
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE facts SET $condition WHERE id = :id");
        $stmt->execute($data);
        return true;
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO facts ($condition) values ($value)");
        $stmt->execute($data);
        return $conn->lastInsertId();
    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM facts WHERE id = :id');
        $stmt->execute(array(':id' => $id));
    }
}