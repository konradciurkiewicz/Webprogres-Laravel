<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regions;
use App\page;

class RankController extends Controller
{
    public function index()
    {
        return view('rank.index');
    }
    public function regions()
    {
        return view('rank.regions');
    }
    public function regionlist(Request $request, $region)
    {
        $region=Regions::where('slug','=', $region)->firstOrFail();
        $page=page::where('region', '=', $region->id)->orderBy('page_rank','DESC')->paginate(10);
        return view('rank.regionlist', compact('page'),compact('region'));
    }
}
