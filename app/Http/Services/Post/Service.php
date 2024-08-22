<?php

namespace App\Http\Services\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'], $data['category']);
            $tagIds = $this->getTagIds($tags);
            $categoryId = $this->getCategoryId($category);
            $data['category_id'] = $categoryId;
            $post = Post::create($data);
            $post->tags()->attach($tagIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post;
    }

    public function update($post, $editedData)
    {
        try {
            DB::beginTransaction();
            $tags = $editedData['tags'];
            $category = $editedData['category'];
            unset($editedData['tags'], $editedData['category']);
            $tagIds = $this->getTagIdsWithUpdate($tags);
            $categoryId = $this->getCategoryIdWithUpdate($category);
            $editedData['category_id'] = $categoryId;
            $post->update($editedData);
            $post->tags()->sync($tagIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post->fresh();
    }

    private function getCategoryId($category)
    {
        $category = !isset($category['id']) ? Category::create($category) : Category::find($category['id']);
        return $category->id;
    }

    private function getTagIds($tags)
    {
        $tagIds = [];
        foreach ($tags as $tag) {
            $tag = !isset($tag['id']) ? Tag::create($tag) : Tag::find($tag['id']);
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }

    private function getCategoryIdWithUpdate($category)
    {
        if (!isset($category['id'])) {
            $category = Category::create($category);
        } else {
            $lastCategory = Category::find($category['id']);
            $lastCategory->update($category);
            $category = $lastCategory->fresh();
        }
        return $category->id;
    }

    private function getTagIdsWithUpdate($tags)
    {
        $tagIds = [];
        foreach ($tags as $tag) {
            if (!isset($tag['id'])) {
                $tag = Tag::create($tag);
            } else {
                $lastTag = Tag::find($tag['id']);
                $lastTag->update($tag);
                $tag = $lastTag->fresh();
            }
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }
}
