<?php
class Category_Model
{
    public static function get()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getid($title_seo)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id FROM categories WHERE title_seo = :title_seo');
        $stmt->execute(array(':title_seo' => $title_seo));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0]->id;
    }

    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM categories WHERE id = :id");
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0];
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE categories SET $condition WHERE id = :id");
        $stmt->execute($data);
        return true;
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO categories ($condition) values ($value)");
        $stmt->execute($data);
        return $conn->lastInsertId();
    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM categories WHERE id = :id');
        $stmt->execute(array(':id' => $id));
    }
}