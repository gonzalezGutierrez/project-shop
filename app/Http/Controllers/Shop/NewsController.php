<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Entry;

class NewsController extends Controller
{
    
    public function __construct() {
        $this->entry = new Entry();
    }

    public function index()
    {
        $entries = $this->entry->getActives()->paginate(10);
        return view('shop.entries.index',compact('entries'));
    }

    public function show($slug)
    {
        $entry = $this->entry->where('slug',$slug)->first();
        $entries = $this->entry->getActives()->where('id','<>',$entry->id)->take(4)->get();
        return view('shop.entries.show',compact('entry','entries'));
    }

}
