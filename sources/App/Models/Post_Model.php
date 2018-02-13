<?php
class Post_Model
{
    public static function get($starting_limit,$limit,$condition)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT id,title,featured,timeupdate,description FROM post WHERE $condition ORDER BY id DESC LIMIT $starting_limit, $limit");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT * FROM post WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function count($category)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id FROM post WHERE category = :category');
        $stmt->execute(array(':category' => $category));
        return $stmt->rowCount();
    }

    public static function recent($limit)
    {
        $db = MySQL::getDB();
        $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
        $stmt = $db->prepare('SELECT id,title,featured FROM post ORDER BY id DESC LIMIT ?,?');
        $stmt->execute($limit);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getAll()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM post");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getByUser($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM post WHERE author = :author");
        $stmt->execute(array(':author' => $id));
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE post SET $condition WHERE id = :id");
        $stmt->execute($data);
        return true;
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO post ($condition) values ($value)");
        $stmt->execute($data);
        return $conn->lastInsertId();
    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM post WHERE id = :id');
        $stmt->execute(array(':id' => $id));
    }

    public static function countPost(){
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id FROM post WHERE id > 0');
        $stmt->execute();
        return $stmt->rowCount();
    }

}
