<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $posts = DB::table('articles')
            ->where('active', 1)
            ->orderBy('projectdate', 'desc')
            ->get();
       //dd($posts);

       // $posts  = Article::latest()->take(2)->get();

       // dd($posts);
          //  ->whereNotNull('published_at');
      //  $posts = Article::all();
        //   $file = Test::findOrFail(19);
//        foreach ($posts as $post) {
//            $post->img = Storage::get($post->img) ?? null;
//            $post->save();
//        }

        return view('article/index', [
            'posts' => $posts,
            'title' => 'Категория',
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Article::query()->where('id', $id)->first();

        return view('article.show', [
            'post' => $post
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
