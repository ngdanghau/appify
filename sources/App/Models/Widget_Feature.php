<?php
class Widget_Feature
{
    public static function get($name)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("SELECT content FROM widget_feature WHERE name = :name");
        $stmt->execute(array(':name' => $name));
        return $stmt->fetchAll(PDO::FETCH_OBJ)[0]->content;
    }

    public static function update($condition,$data)
    {
        $db = MySQL::getDB();
        $stmt = $db->prepare("UPDATE widget_feature SET $condition WHERE name = :name");
        $stmt->execute($data);
        return true;
    }
}