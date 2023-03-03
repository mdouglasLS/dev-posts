<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, User $user, string $slug)
    {
        $post = Post::where('slug', $slug)->where('user_id', $user->id)->with('user', 'comments')->first();;

        $fields = [
            'user_id' => Auth::user()->id,
            'post_id' => $post->id,
            'comment' => $request->comment
        ];
        $comment = Comment::create($fields);

        return redirect()->route('get-post', ['user' => $post->user->username,'slug' =>$post->slug]);
    }

    public function delete(Comment $comment)
    {
        $userAuth = Auth::user()->id;

        if($userAuth == $comment->user_id || $userAuth == $comment->post->user_id) {
            Comment::where('id', $comment->id)->delete();
        }

        return redirect()->route('get-post',['user' => $comment->post->user->username, 'slug' => $comment->post->slug]);
    }

    public function getComments(string $where)
    {
        return Comment::where('post_id', $where)->orderByDesc('id')->get();
    }

}
