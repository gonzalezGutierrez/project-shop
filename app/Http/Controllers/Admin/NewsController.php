<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsStoreRequest;
use App\Http\Requests\Admin\NewsUpdateRequest;
use App\Models\Entry;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct() {
        $this->entry = new Entry();
    }

    public function saveImage(Request  $request) {
        try {
            $route_file_save = 'images/news/';
            $file = $request->file('file');
            $nameFile = 'image_news_'.rand(1000,10000).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($route_file_save),$nameFile);
            $request['url_image_news'] = $route_file_save.$nameFile;
            return true;
        }catch (\Exception $e) {
            return false;
        }
    }

    public function index()
    {
        $entries = $this->entry->get();
        return view('admin.news.index',compact('entries'));
    }

    public function create()
    {
        return view('admin.news.create',['entry'=>$this->entry]);
    }
    public function store(NewsStoreRequest $request)
    {
        try {

            $this->saveImage($request);

            $request['slug'] = Entry::setSlug($request->titulo);

            $this->entry->create($request->only([
                'titulo',
                'encabezado',
                'slug',
                'descripcion',
                'url_image_news'
            ]));

            return redirect('/administracion/news');

        }catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(NewsUpdateRequest $request, $id)
    {

        try {

            $entry = $this->entry->findOrFail($id);

            if ($request->hasFile('file')) {
                $this->saveImage($request);
                \File::delete($entry->url_image_news);
            }

            $entry->fill($request->only([
                'titulo',
                'encabezado',
                'slug',
                'descripcion',
                'url_image_news',
                'estatus'
            ]))->save();

            return redirect('/administracion/news');

        }catch (\Exception $exception){

        }





    }
    public function destroy($id)
    {
        //
    }
}
