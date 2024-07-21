<?php

namespace App\Controllers;

use App\Models\Carousel;
use App\Models\Tag;

class AdminController extends BaseController
{
    public function index()
    {
        // Fetch all links for the sidebar
        $links = [
            ['name' => 'Create a New Slideshow', 'url' => '/admin/create-slideshow']
        ];

        $this->render('pages/admin/index.html.twig', ['links' => $links]);
    }

    public function createSlideshow()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $tags = $_POST['tags']; // comma-separated
            $tagIds = $this->processTags($tags);

            // Convert name to folder_name
            $folder_name = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $name));

            // Save carousel
            $carousel = new Carousel();
            $carousel->create($name, $folder_name, $description, $tagIds);

            // Create folder for the carousel images
            mkdir(__DIR__ . '/../../public/images/' . $folder_name);

            header('Location: /admin');
            exit;
        }

        $this->render('pages/admin/create-slideshow.html.twig');
    }

    private function processTags($tags)
    {
        $tagIds = [];
        $tagsArray = array_map('trim', explode(',', $tags));

        foreach ($tagsArray as $tagName) {
            $tag = Tag::findByName($tagName);
            if (!$tag) {
                $tag = new Tag();
                $tag->create($tagName);
            }
            $tagIds[] = $tag->id;
        }

        return $tagIds;
    }
}
