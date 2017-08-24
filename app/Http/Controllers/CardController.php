<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page;
use Illuminate\Support\Facades\Auth;
use App\Categories;
use App\Regions;
use App\PageType;
use App\User;
use Illuminate\Support\Facades\Cookie;
use App\Views;
class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        $category= Categories::where('id', '=' , $page->category_id)->firstOrFail();
        $region= Regions::where('id', '=' , $page->region)->firstOrFail();
        $author= User::where('id', '=' , $page->user_id)->firstOrFail();
        $title = $page->normalizeTitle($page->title);
        if(Cookie::get('visited_'.$page->id) != true){
            Cookie::queue('visited_'.$page->id, true, 3);
            $page->visit = $page->visit+1;
            $page->update();

        }
        function multiexplode ($delimiters,$string) {

            $ready = str_replace($delimiters, $delimiters[0], $string);
            $launch = explode($delimiters[0], $ready);
            return  $launch;
        }
        $keywords=multiexplode(array(",",".","|",":"," "),strtolower($page->keywords)) ;
        $title_a=multiexplode(array(",",".","|",":"," "),strtolower($page->title)) ;
        $words=array_merge($keywords,$title_a);
        $best_tags=(array_count_values (array_filter($words)));
        arsort($best_tags);
        list ($klucz, $wartosc) = each ($best_tags);
        $search = $klucz;
        $repliced_chars = array(' ', '-', '_', ',','.', '/');
        $search_text = '%'.str_replace($repliced_chars, "%", $search).'%';
        $similar_p=Page::where('title', 'like', $search_text)
                ->where('id', '<>', $page->id)
            ->orWhere('keywords', 'like', $search_text)
                ->where('id', '<>', $page->id)
            ->orderBy('id','DESC')
            ->limit(3)
            ->get();


        return view('card.index', compact('page','category','region', 'author', 'title','similar_p'));
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
    public function store(Request $request)
    {
        //
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
}
