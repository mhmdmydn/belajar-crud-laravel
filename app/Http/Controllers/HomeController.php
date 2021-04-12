<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Facade\FlareClient\View;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //

    public function index()
    {
        $data = [
            'judul' => 'Index - MyWebApp',
            'data' => Article::orderBy('id', 'desc')->get()
        ];
        return view('article.home', $data);
    }

    public function about($slug)
    {
        $data = [
            'slug' => $slug,
            'judul' => 'About - MyWebApp'
        ];
        return view('article.about', $data);
    }

    public function article($title)
    {
        $data = [
            'data' => Article::where('title', $title)->first(),
            'judul' => 'Article - MyWebApp'
        ];
        return view('article.article', $data);
    }

    public function create()
    {
        $data = [
            'judul' => 'Create - MyWebApp'
        ];
        return view('article.create', $data);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'subject' => 'required',
        // ]);

        // $data = new Article();
        // $data->title = $request->judul;
        // $data->subject = $request->subject;
        // $data->save();

        Article::create([

            'title' => $request->title,
            'subject' => $request->subject

        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Index - MyWebApp',
            'data' => Article::find($id)
        ];
        return view('article.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // cara simple
        Article::find($id)->update([
            'title' => $request->title,
            'subject' => $request->subject
        ]);

        // Cara biasa
        // $data = Article::find($id);
        // $data->title = $request->title;
        // $data->subject = $request->subject;
        // $data->save();

        return redirect('/');
    }
}
