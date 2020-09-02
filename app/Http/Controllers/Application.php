<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class Application extends Controller
{
    public function createUser($name, $email)
    {
        $user = new User;

        $user->name = $name;;
        $user->email = $email;
        $user->password = bcrypt('123123123');

        $user->save();

        return $user;
    }

    public function showUsers()
    {
        $users = User::all();

        dd($users);
    }

    public function showUser($id)
    {
        $user = User::findOrFail($id);

        return $user;
    }

    public function createPost($user_id, $titlePost, $bodyPost)
    {

        $user = User::findOrFail($user_id);

        $post = new Post(['title' => $titlePost, 'body' => $bodyPost]);

        $user->posts()->save($post);

        dd($user->posts);
    }

    public function showPostsByIdUser($user_id)
    {
        $user = User::findOrFail($user_id);

        $posts = $user->posts;

        return $posts;

    }

    public function showUsersByIdPost($post_id)
    {
        $post = Post::findOrFail($post_id);

        $users = $post->users;

        return $users;
    }

    public function updatePost($user_id, $post_title, $post_body)
    {

        $user = User::findOrFail($user_id);

        if ($user->has('posts')) {
            foreach ($user->posts as $post) {
                $post->title = $post_title . ' ' . $post->id;
                $post->body = $post_body . ' ' . $post->id;

                $post->save();
            }
        }
    }

    public function deletePost($user_id)
    {
        $user = User::findOrFail($user_id);

        if ($user->has('posts')) {
            $i = 0;
            foreach ($user->posts as $post) {
                if ($i == 0) {
                    $result = $post->whereId($post->id)->delete();
                    $i++;
                }
            }
        }
        return $result;
    }

    public function attaching($user_id, $post_id)
    {

        $user = User::findOrFail($user_id);
//        $post = Post::findOrFail($post_id);

        $user->posts()->attach($post_id);
    }

    public function detaching($user_id, $post_id)
    {
        $user = User::findOrFail($user_id);
        $post = Post::findOrFail($post_id);

        $user->posts()->detach($post_id);
    }

    public function sync($user_id)
    {
        $user = User::findOrFail($user_id);

        $user->posts()->sync([3, 4]);
    }
}
