<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Auth;

use Illuminate\Http\Request;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $article)
    {
        //
        if (Auth()->check()) {
            $comment = new Comment();
            $comment->name = request('nom');
            $comment->comment = request('comment');
            $comment->article_id = $article->id ;
            $comment->user_id = Auth::id();
            $comment->save();
            return redirect('/article/'.$article->id);
        } else {
            throw ValidationException::withMessages(['field_name' => 'You should be Logged in !']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    protected function validatedArticle()
    {
        return request()->validate([
             'nom'=>'required',
             'comment'=>'required',
            // 'user_id'=>'required',
            // 'article_id'=>'required'
         ]);
    }
}
