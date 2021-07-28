<?php

namespace App\Http\Controllers\Admin;

use App\HomePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Image;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('settings_access'), 403);

        $homepage = HomePage::first();
        $products = \DB::table('products')
                    ->orderBy('name', 'asc')
                    ->get();
        
        return view('admin.home_page.index', compact('homepage', 'products'));
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
        dd($request->all());
        // Upload image
        $sec1_img1 = null;
        if ($request->hasFile('sec1_img1')) {
            $image = $request->file('sec1_img1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img1 = $filenametostore;
        }
        $sec1_img2 = null;
        if ($request->hasFile('sec1_img2')) {
            $image = $request->file('sec1_img2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img2 = $filenametostore;
        }
        $sec1_img3 = null;
        if ($request->hasFile('sec1_img3')) {
            $image = $request->file('sec1_img3');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img3 = $filenametostore;
        }
        $sec1_img4 = null;
        if ($request->hasFile('sec1_img4')) {
            $image = $request->file('sec1_img4');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img4 = $filenametostore;
        }
        $sec2_image1 = null;
        if ($request->hasFile('sec2_image1')) {
            $image = $request->file('sec2_image1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec2_image1 = $filenametostore;
        }
        $sec2_image2 = null;
        if ($request->hasFile('sec2_image2')) {
            $image = $request->file('sec2_image2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec2_image2 = $filenametostore;
        }
        $sec2_image3 = null;
        if ($request->hasFile('sec2_image3')) {
            $image = $request->file('sec2_image3');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec2_image3 = $filenametostore;
        }
        $sec5_image1 = null;
        if ($request->hasFile('sec5_image1')) {
            $image = $request->file('sec5_image1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec5_image1 = $filenametostore;
        }
        $sec5_image2 = null;
        if ($request->hasFile('sec5_image2')) {
            $image = $request->file('sec5_image2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec5_image2 = $filenametostore;
        }


            $homepage = new HomePage();
            $homepage->sec1_img1 = $sec1_img1;
            $homepage->sec1_title1 = $request->sec1_title1;
            $homepage->sec1_desc1 = $request->sec1_desc1;
            $homepage->sec1_img2 = $sec1_img2;
            $homepage->sec1_title2 = $request->sec1_title2;
            $homepage->sec1_desc2 = $request->sec1_desc2;
            $homepage->sec1_img3 = $sec1_img3;
            $homepage->sec1_title3 = $request->sec1_title3;
            $homepage->sec1_desc3 = $request->sec1_desc3;
            $homepage->sec1_img4 = $sec1_img4;
            $homepage->sec1_title4 = $request->sec1_title4;
            $homepage->sec1_desc4 = $request->sec1_desc4;
            
            $homepage->sec2_image1 = $sec2_image1;
            $homepage->sec2_image2 = $sec2_image2;
            $homepage->sec2_image3 = $sec2_image3;
            $homepage->sec2_title = $request->sec2_title;
            $homepage->sec2_subtitle = $request->sec2_subtitle;
            $homepage->sec2_link = $request->sec2_link;
            $homepage->sec2_desc = $request->sec2_desc;

            $homepage->sec3_title1 = $request->sec3_title1;
            $homepage->sec3_subtitle1 = $request->sec2_subtitle1;
            $homepage->sec3_desc1 = $request->sec3_desc1;
            $homepage->sec3_title2 = $request->sec3_title2;
            $homepage->sec3_subtitle2 = $request->sec3_subtitle2;
            $homepage->sec3_desc2 = $request->sec3_desc2;
            $homepage->sec3_title3 = $request->sec3_title3;
            $homepage->sec3_subtitle3 = $request->sec3_subtitle3;
            $homepage->sec3_desc3 = $request->sec3_desc3;

            $homepage->sec4_title = $request->sec4_title;
            
            $homepage->sec5_image1 = $request->sec5_image1;
            $homepage->sec5_title1 = $request->sec5_title1;
            $homepage->sec5_text_one1 = $request->sec5_text_one1;
            $homepage->sec5_text_two1 = $request->sec5_text_two1;
            $homepage->sec5_text_three1 = $request->sec5_text_three1;
            $homepage->sec5_link1 = $request->sec5_link1;
            $homepage->sec5_desc1 = $request->sec5_desc1;
            $homepage->sec5_image2 = $request->sec5_image2;
            $homepage->sec5_title2 = $request->sec5_title2;
            $homepage->sec5_text_one2 = $request->sec5_text_one2;
            $homepage->sec5_text_two2 = $request->sec5_text_two2;
            $homepage->sec5_text_three2 = $request->sec5_text_three2;
            $homepage->sec5_link2 = $request->sec5_link2;
            $homepage->sec5_desc2 = $request->sec5_desc2;
            $homepage->save();
            $homepage->products()->sync($request->sec4_products);

            return redirect()->route('admin.home-page.index', compact('homepage'));
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
        // dd($request->all());
        $homepage = HomePage::find($id);
        $sec1_img1 = $homepage->sec1_img1;
        $sec1_img2 = $homepage->sec1_img2;
        $sec1_img3 = $homepage->sec1_img3;
        $sec1_img4 = $homepage->sec1_img4;
        $sec2_image1 = $homepage->sec2_image1;
        $sec2_image2 = $homepage->sec2_image2;
        $sec2_image3 = $homepage->sec2_image3;
        $sec5_image1 = $homepage->sec5_image1;
        $sec5_image2 = $homepage->sec5_image2;

        if ($request->hasFile('sec1_img1')) {
            $image = $request->file('sec1_img1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img1 = $filenametostore;
        }
        
        if ($request->hasFile('sec1_img2')) {
            $image = $request->file('sec1_img2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img2 = $filenametostore;
        }
       
        if ($request->hasFile('sec1_img3')) {
            $image = $request->file('sec1_img3');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img3 = $filenametostore;
        }
        
        if ($request->hasFile('sec1_img4')) {
            $image = $request->file('sec1_img4');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec1_img4 = $filenametostore;
        }
        
        if ($request->hasFile('sec2_image1')) {
            $image = $request->file('sec2_image1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec2_image1 = $filenametostore;
        }
        
        if ($request->hasFile('sec2_image2')) {
            $image = $request->file('sec2_image2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec2_image2 = $filenametostore;
        }
        
        if ($request->hasFile('sec2_image3')) {
            $image = $request->file('sec2_image3');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec2_image3 = $filenametostore;
        }
        
        if ($request->hasFile('sec5_image1')) {
            $image = $request->file('sec5_image1');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec5_image1 = $filenametostore;
        }
        
        if ($request->hasFile('sec5_image2')) {
            $image = $request->file('sec5_image2');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            $sec5_image2 = $filenametostore;
        }
     
            $homepage->sec1_img1 = $sec1_img1;
            $homepage->sec1_title1 = $request->sec1_title1;
            $homepage->sec1_desc1 = $request->sec1_desc1;
            $homepage->sec1_img2 = $sec1_img2;
            $homepage->sec1_title2 = $request->sec1_title2;
            $homepage->sec1_desc2 = $request->sec1_desc2;
            $homepage->sec1_img3 = $sec1_img3;
            $homepage->sec1_title3 = $request->sec1_title3;
            $homepage->sec1_desc3 = $request->sec1_desc3;
            $homepage->sec1_img4 = $sec1_img4;
            $homepage->sec1_title4 = $request->sec1_title4;
            $homepage->sec1_desc4 = $request->sec1_desc4;
            
            $homepage->sec2_image1 = $sec2_image1;
            $homepage->sec2_image2 = $sec2_image2;
            $homepage->sec2_image3 = $sec2_image3;
            $homepage->sec2_title = $request->sec2_title;
            $homepage->sec2_subtitle = $request->sec2_subtitle;
            $homepage->sec2_link = $request->sec2_link;
            $homepage->sec2_desc = $request->sec2_desc;

            $homepage->sec3_title1 = $request->sec3_title1;
            $homepage->sec3_subtitle1 = $request->sec3_subtitle1;
            $homepage->sec3_desc1 = $request->sec3_desc1;
            $homepage->sec3_title2 = $request->sec3_title2;
            $homepage->sec3_subtitle2 = $request->sec3_subtitle2;
            $homepage->sec3_desc2 = $request->sec3_desc2;
            $homepage->sec3_title3 = $request->sec3_title3;
            $homepage->sec3_subtitle3 = $request->sec3_subtitle3;
            $homepage->sec3_desc3 = $request->sec3_desc3;

            $homepage->sec4_title = $request->sec4_title;
            
            $homepage->sec5_image1 = $sec5_image1;
            $homepage->sec5_title1 = $request->sec5_title1;
            $homepage->sec5_text_one1 = $request->sec5_text_one1;
            $homepage->sec5_text_two1 = $request->sec5_text_two1;
            $homepage->sec5_text_three1 = $request->sec5_text_three1;
            $homepage->sec5_link1 = $request->sec5_link1;
            $homepage->sec5_desc1 = $request->sec5_desc1;
            $homepage->sec5_image2 = $sec5_image2;
            $homepage->sec5_title2 = $request->sec5_title2;
            $homepage->sec5_text_one2 = $request->sec5_text_one2;
            $homepage->sec5_text_two2 = $request->sec5_text_two2;
            $homepage->sec5_text_three2 = $request->sec5_text_three2;
            $homepage->sec5_link2 = $request->sec5_link2;
            $homepage->sec5_desc2 = $request->sec5_desc2;
            $homepage->save();
            $homepage->products()->sync($request->sec4_products);

        return redirect()->route('admin.home-page.index', compact('homepage'));

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
