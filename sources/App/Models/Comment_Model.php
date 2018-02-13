<?php
class Comment_Model
{
    public static function getAll()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM comments");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getParent()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM comments WHERE parent_id = 0");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function count($post_id){
    	$db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id FROM comments WHERE post_id = :post_id AND publish = 1');
        $stmt->execute(array(':post_id' => $post_id));
        return $stmt->rowCount();
    }

    public static function get($post_id,$condition){
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM comments WHERE post_id = :post_id AND $condition AND publish = 1");
        $stmt->execute(array(':post_id' => $post_id));
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    public static function show($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM comments WHERE id = :id");
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0];
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE comments SET $condition WHERE id = :id");
        $stmt->execute($data);
        return true;
    }

    public static function create($condition,$value,$data)
    {
        $conn = MySQL::getDB();
        $stmt = $conn->prepare("INSERT INTO comments ($condition) values ($value)");
        $stmt->execute($data);
        return $conn->lastInsertId();
    }

    public static function delete($id)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare('DELETE FROM comments WHERE id = :id');
        $stmt->execute(array(':id' => $id));

        $stmt = $db->prepare('DELETE FROM comments WHERE parent_id = :id');
        $stmt->execute(array(':id' => $id));
    }

    public static function getUnread()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT * FROM comments WHERE publish = 0");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function countUnread(){
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id FROM comments WHERE publish = 0');
        $stmt->execute();
        return $stmt->rowCount();
    }

    public static function countCM(){
        $db = MySQL::getDB();
        $stmt = $db->prepare('SELECT id FROM comments WHERE id > 0');
        $stmt->execute();
        return $stmt->rowCount();
    }

    public static function mask()
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE comments SET publish = :publish WHERE id > 0");
        $stmt->execute(array(':publish' => 1));
        return true;
    }
}