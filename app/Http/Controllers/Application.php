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

    public function showPostsByIdUser($user_id){
        $user = User::findOrFail($user_id);

        $posts = $user->posts;

        return $posts;

    }

    public function showUsersByIdPost($post_id){
        $post = Post::findOrFail($post_id);

        $users = $post->users;

        return $users;
    }
}
