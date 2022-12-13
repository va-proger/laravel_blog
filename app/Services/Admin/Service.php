<?php

namespace App\Services\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function storePost($data)
    {
        try {
            Db::beginTransaction();
            $data['preview_image'] = Storage::put('/images/preview', $data['preview_image'] );
            $data['main_image'] = Storage::put('/images/main', $data['main_image'] );
            $post = Post::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {

            DB::rollBack();
            return $exception->getMessage();
        }
        return $post;
    }

    public function updatePost($post, $data)
    {
        try {
            Db::beginTransaction();

            $post->update($data);
            DB::commit();
        } catch (\Exception $exception) {

            DB::rollBack();
            return $exception->getMessage();
        }

        return $post->fresh();
    }
    public function storeCategory($data)
    {
        try {
            Db::beginTransaction();
            $category = Category::firstOrCreate($data);
            DB::commit();
        }catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $category;
    }
    public function updateCategory($data, $category)
    {
        try {
            Db::beginTransaction();
            $category->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $category->fresh();
    }

    private function getTagIdsWithUpdate($tags)
    {
        $tagIds = [];
        foreach ($tags as $tag) {
            if (!isset($tag['id'])) {
                $tag = Tag::create($tag);
            } else {
                $currentTag = Tag::find($tag['id']);
                $currentTag->update($tag);
                $tag = $currentTag->fresh();
            }
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }

    private function getCategoryIdWithUpdate($item)
    {
        if (!isset($item['id'])) {
            $category = Category::create($item);
        } else {
            $category = Category::find($item['id']);
            $category->update($item);
            $category = $category->fresh();
        }
        return $category->id;
    }

    public function storeTag(mixed $data)
    {
        try {
            Db::beginTransaction();
            $tag = Tag::firstOrCreate($data);
            DB::commit();
        }catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $tag;

    }

    public function updateTag(mixed $data, $tag)
    {
        try {
            Db::beginTransaction();
            $tag->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $tag->fresh();
    }
}
