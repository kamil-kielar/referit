<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

    // List all games
    public function index()
    {

        $images = Image::all();

        return view('pages.admindashboard.images', compact('images'));

    }

    public function create()
    {

        return view('pages.admindashboard.imageCreate');

    }

    public function edit($id)
    {

        $image = Image::where('id', $id)->first();

        return view('pages.admindashboard.imageEdit', compact('image'));

    }

    public function update(Request $request, $id)
    {
        $image = Image::findOrFail($id);

        $image->update($request->all());

        return redirect('images');
    }

    public function store(Request $request)
    {

        $file = $request->name . '.jpg';

        $targetFile = $request->name . '-t.jpg';

        $request->file('img_src')->storeAs('public/img', $file);

        $request->file('img_src_target')->storeAs('public/img', $targetFile);

        $request->request->add(['img_src' => '/storage/img/'. $file]);

        $request->request->add(['img_src_target' => '/storage/img/'. $targetFile]);

        Image::create($request->request->all());

        return redirect('images');

    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        $image->delete();

        return redirect()->back();

    }
}
