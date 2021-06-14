<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->get();
         
        return view('welcome', compact('articles'));



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
        $user = auth()->user();
        return view('addArticle', compact('user'));
        // return view('addArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $this->validatedArticle();
        // return $input;
        $categorie = $input['categorie'];
        $input['categorie'] = implode(',', $categorie);
        $categorieservice = $input['categorieservice'];
        $input['categorieservice'] = implode(',', $categorieservice);
        Article::create($input);

        //  $article = new Article();
            //  $article->titre = request('titre');
            //  $article->categorie = request('categorie');
            //  $article->adresse = request('adresse');
            //  $article->phone = request('phone');
            //  $article->weekdays = request('weekdays');
            //  $article->weekends = request('weekends');
            //  $article->heuresouverture = request('heuresouverture');
            //  $article->heuresfermeture = request('heuresfermeture');
            //  $article->description = request('description');
            //          $article->save();
        // return redirect('/dashboard');

        // return request();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        if (Auth()->check()) {
            $comments = $article->comments;

            return view('showArticle', compact('article', 'comments'));
        }
        return view('guestShow', compact('article'));
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
             'titre'=>'required',
             'categorie'=>'required',
             'adresse'=>'required',
             'phone'=>'required'
             ,'weekdays'=>'nullable'
            ,'weekends'=>'nullable',
             'heuresouverture'=>'required',
             'heuresfermeture'=>'required',
             'description'=>'required',
             'image'=>'required',
             'nom'=>'nullable'
            ,'email'=>'nullable'
            ,'telephoneperso'=>'nullable'
            ,'adresseperso'=>'nullable'
            ,'facebookurl'=>'nullable'
            ,'twitterurl'=>'nullable'
            ,'googleplusurl'=>'nullable'
            ,'googlemapsurl'=>'nullable'
            ,'anneefondation'=>'nullable'
            ,'categorieservice'=>'nullable'
         ]);
    }
}
