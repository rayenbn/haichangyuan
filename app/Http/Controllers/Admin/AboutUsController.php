<?php

namespace App\Http\Controllers\Admin;

use App\Aboutus;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('settings_access'), 403);

        $aboutus = Aboutus::first();
        
        return view('admin.aboutus.index', compact('aboutus'));
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
        abort_unless(\Gate::allows('settings_access'), 403);

        // Upload page banner image
        $banner_image_path = null;
        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            $banner_image_path = $filenametostore;
        }
      
        // Upload page banner image
        $image1_path = null;
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(220, 207)->save($thumbnailpath);
            $image1_path = $filenametostore;
        }

        // Upload page banner image
        $image2_path = null;
        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(351, 277)->save($thumbnailpath);
            $image2_path = $filenametostore;
        }

        // Upload page banner image
        $image3_path = null;
        if ($request->hasFile('image3')) {
            $image = $request->file('image3');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(270, 277)->save($thumbnailpath);
            $image3_path = $filenametostore;
        }

        // Upload page banner image
        $image4_path = null;
        if ($request->hasFile('image4')) {
            $image = $request->file('image4');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(270, 277)->save($thumbnailpath);
            $image4_path = $filenametostore;
        }

        $aboutus = new Aboutus;
        $aboutus->banner_image = $banner_image_path;
        $aboutus->image1 = $image1_path;
        $aboutus->image2 = $image2_path;
        $aboutus->image3 = $image3_path;
        $aboutus->image4 = $image4_path;
        $aboutus->title = $request->title;
        $aboutus->desc = $request->desc;
        $aboutus->desc1 = $request->desc1;
        $aboutus->save();

        return redirect()->route('admin.aboutus.index', compact('aboutus'));
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
        abort_unless(\Gate::allows('settings_access'), 403);

        $aboutus = Aboutus::find($id);
        $aboutus->title = $request->title;
        $aboutus->desc = $request->desc;
        $aboutus->desc1 = $request->desc1;
        // Upload page banner image
        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            $banner_image_path = $filenametostore;
        }else {
            $banner_image_path = $aboutus->banner_image;
        }
      
        // Upload page banner image
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(220, 207)->save($thumbnailpath);
            $image1_path = $filenametostore;
        }else {
            $image1_path = $aboutus->image1;
        }

        // Upload page banner image
        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(351, 277)->save($thumbnailpath);
            $image2_path = $filenametostore;
        }else {
            $image2_path = $aboutus->image2;
        }

        // Upload page banner image
        if ($request->hasFile('image3')) {
            $image = $request->file('image3');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(270, 277)->save($thumbnailpath);
            $image3_path = $filenametostore;
        }else {
            $image3_path = $aboutus->image3;
        }

        // Upload page banner image
        if ($request->hasFile('image4')) {
            $image = $request->file('image4');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/images/banners/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/images/banners/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(270, 277)->save($thumbnailpath);
            $image4_path = $filenametostore;
        }else {
            $image4_path = $aboutus->image4;
        }

        $aboutus->banner_image = $banner_image_path;
        $aboutus->image1 = $image1_path;
        $aboutus->image2 = $image2_path;
        $aboutus->image3 = $image3_path;
        $aboutus->image4 = $image4_path;
        $aboutus->save();

            return redirect()->route('admin.aboutus.index', compact('aboutus'));
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
