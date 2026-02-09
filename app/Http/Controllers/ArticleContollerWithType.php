<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleContollerWithType extends Controller
{

    // list of articles have id title content static for all the controller methods
    private static $articles = [
        1 => [
            'title' => 'First Article',
            'content' => 'This is the content of the first article.'
        ],
        2 => [
            'title' => 'Second Article',
            'content' => 'This is the content of the second article.'
        ],
        3 => [
            'title' => 'Third Article',
            'content' => 'This is the content of the third article.'
        ],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return all articles in html format
        $html = '<h1>Articles</h1><ul>';
        foreach (self::$articles as $id => $article) {
            $html .= '<li><a href="' . route('articles.show', $id) . '">' . htmlspecialchars($article['title']) . '</a></li>';
        }
        $html .= '</ul>';
        return $html;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return a html form for creating a new article
        return '<form method="POST" action="/articles">
            <input type="text" name="title" placeholder="Title">
            <textarea name="content" placeholder="Content"></textarea>
            <button type="submit">Create Article</button>
        </form>';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $newId = count(self::$articles) + 1;
        self::$articles[$newId] = [
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ];
        return null;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if (isset(self::$articles[$id])) {
            //return html interface of article selected
            $article = self::$articles[$id];
            return '<h1>' . htmlspecialchars($article['title']) . '</h1>
                    <p>' . nl2br(htmlspecialchars($article['content'])) . '</p>';

        } else {
            return response()->json(['message' => 'Article not found'], 404);
        }
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
