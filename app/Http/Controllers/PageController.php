<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Categories;
use App\Regions;
use App\PageType;

class PageController extends Controller
{
//    function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page=page::where('user_id', Auth::id())->orderBy('id','DESC')->paginate(10);

        return view('page.index', compact('page'));
    }
    public function addons()
    {
        return view('page.addons');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Categories::pluck('name')->toArray();
        $regions= Regions::pluck('title')->toArray();
        $pagetype= PageType::pluck('name')->toArray();
        return view('page.create', compact('categories', 'regions', 'pagetype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $page = new page();
        $page->title = $request['title'];
        $page->keywords = $request['keywords'];
        $page->content = $request['content'];
        $page->visit = 0;
        $page->category_id = $request['categories_id']+1;
        $page->page_type_id = $request['page_type_id']+1;
        $page->url = $request['url'];
        $page->slug = $page->slugify($request['title']);
        $page->user_id = Auth::id() ;

        $page->page_rank = 0;
        //Not required
        $page->region = $request['region'];
        $page->email = $request['email'];
        $page->kod = $request['kod'];
        $page->ulica = $request['ulica'];
        $page->miasto = $request['miasto'];
        $page->phone = $request['phone'];

        $page->save();
        return redirect()->route('page.addons');
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
     * @param  \App\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $user = $page->user_id;
        if(Auth::id() ==$user){
            $categories= Categories::pluck('name')->toArray();
            $regions= Regions::pluck('title')->toArray();
            $pagetype= PageType::pluck('name')->toArray();

            return view('page.edit', compact('page'), compact('categories', 'regions','pagetype'));
        }
        else{
            return redirect()->route('page.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PageRequest  $request
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, Page $page)
    {
        $page->title = $request['title'];
        $page->content = $request['content'];
        $page->keywords = $request['keywords'];
        $page->category_id = $request['categories_id']+1;
        $page->page_type_id = $request['page_type_id']+1;

        $page->url = $request['url'];
        $page->user_id = Auth::id() ;

        //Not required
        $page->region = $request['region'];
        $page->email = $request['email'];
        $page->kod = $request['kod'];
        $page->ulica = $request['ulica'];
        $page->miasto = $request['miasto'];
        $page->phone = $request['phone'];

        $page->update();
        return redirect()->route('page.addons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $user = $page->user_id;
        if(Auth::id() ==$user) {

            $page->delete();
            return redirect()->route('page.index');
        }
        else{
            return redirect()->route('page.index');
        }
    }
}
