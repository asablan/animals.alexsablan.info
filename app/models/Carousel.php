<?php

namespace App\Models;

class Carousel extends BaseModel
{
    public function create($name, $folder_name, $description, $tagIds)
    {
        $db = self::getDb();
        $stmt = $db->prepare("INSERT INTO carousels (name, folder_name, description) VALUES (?, ?, ?)");
        $stmt->execute([$name, $folder_name, $description]);
        $carouselId = $db->lastInsertId();

        foreach ($tagIds as $tagId) {
            $stmt = $db->prepare("INSERT INTO carousel_tags (carousel_id, tag_id) VALUES (?, ?)");
            $stmt->execute([$carouselId, $tagId]);
        }

        return $carouselId;
    }
}
