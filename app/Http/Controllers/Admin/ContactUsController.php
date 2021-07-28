<?php

namespace App\Http\Controllers\Admin;

use App\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('settings_access'), 403);

        $contactus = Contactus::first();

        return view('admin.contactus.index', compact('contactus'));
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

        $contactus = new Contactus;
        $contactus->title = $request->title;
        $contactus->opening_time = $request->opening_time;
        $contactus->address = $request->address;
        $contactus->email1 = $request->email1;
        $contactus->phone = $request->phone;
        $contactus->banner_image = $banner_image_path;
        $contactus->image1 = $image1_path;
        $contactus->image2 = $image2_path;
        $contactus->image3 = $image3_path;
        $contactus->image4 = $image4_path;
        $contactus->save();

        return redirect()->route('admin.contactus.index', compact('contactus'));
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

        $contactus = Contactus::find($id);
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
            $banner_image_path = $contactus->banner_image;
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
            $image1_path = $contactus->image1;
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
            $image2_path = $contactus->image2;
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
            $image3_path = $contactus->image3;
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
            $image4_path = $contactus->image4;
        }

        $contactus->title = $request->title;
        $contactus->opening_time = $request->opening_time;
        $contactus->address = $request->address;
        $contactus->email1 = $request->email1;
        $contactus->phone = $request->phone;
        $contactus->banner_image = $banner_image_path;
        $contactus->image1 = $image1_path;
        $contactus->image2 = $image2_path;
        $contactus->image3 = $image3_path;
        $contactus->image4 = $image4_path;
        $contactus->save();

            return redirect()->route('admin.contactus.index', compact('contactus'));
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
