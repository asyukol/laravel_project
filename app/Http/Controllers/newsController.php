<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class newsController extends Controller
{
    public function showNews()
    {
        $news = DB::table('news')->select('title', 'author', 'views', 'date', 'contents')->get();
        return view('newsPage', compact('news'));
    }

    public  function addNewsShow()
    {
        return view('newsAdd');
    }

    public  function addNews(Request $request)
    {
        $news=new News;
        $news->title=$request->title;
        $news->contents=$request->contents;

        $news->views=0;
        $news->author=Session::get('user');
        $news->date=now();
        if ($news->save())
            echo 'Успешно';
    }

    public function showNewsDetails($title)
    {
        $articleId=DB::table('news')->select('id')->where('title', '=', $title)->first()->id;
        //Session::put('article', $articleId);
        session(['articleId' => $title]);
        session(['article' => $articleId]);
        $post = DB::table('news')->select('id', 'title', 'author', 'date', 'views', 'contents')
            ->where('title', '=', $title)->get();
        $comments= DB::table('comments')->select('author', 'date', 'text')
            ->where('articleId', '=', $articleId)->get();
        return view('showNewsDetails', compact('post'), compact('comments'));
    }

    public function addComment(Request $request)
    {
        $articleId=Session::get('articleId');
        $comment=new Comment;
        $comment->articleId=$articleId;
        $comment->author=Session::get('user');
        $comment->date=now();
        $comment->text=$request->text;
        if ($comment->save())
            echo 'Комментарий отправлен';
        return redirect('/news');
    }
}
