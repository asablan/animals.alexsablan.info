<?php

namespace App\Models;

class Tag extends BaseModel
{
    public static function findByName($name)
    {
        $db = self::getDb();
        $stmt = $db->prepare("SELECT * FROM tags WHERE name = ?");
        $stmt->execute([$name]);
        return $stmt->fetchObject(self::class);
    }

    public function create($name)
    {
        $db = self::getDb();
        $stmt = $db->prepare("INSERT INTO tags (name) VALUES (?)");
        $stmt->execute([$name]);
        $this->id = $db->lastInsertId();
    }
}
