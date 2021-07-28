<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Image; //Intervention Image
use Illuminate\Support\Facades\Storage; //Laravel Filesystem
use App\Product;
use App\Category_products;
use App\Colors;
use App\ProductsImage;
use GuzzleHttp\Psr7\Request;

class ProductsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('product_access'), 403);

        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('product_create'), 403);
        $categories = Category_products::all();
        // $colors = Colors::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        
        abort_unless(\Gate::allows('product_create'), 403);
        
        // Upload image
        $path = null;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
                //get filename with extension
            $filenamewithextension = $image->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $image->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/products/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/products/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(470, 600)->save($thumbnailpath);
            $path = $filenametostore;
        }

        $product = new Product;
        $product->name          = $request->name;
        $product->chinese_name          = $request->chinese_name;
        $product->img           = $path;
        $product->description   = $request->description;
        // $product->price         = $request->price;
        // $product->price_range   = $request->price_range;
        // $product->availability  = $request->availability;
        $product->save();
        $product->categories()->sync($request->categories);
        // $product->colors()->sync($request->colors);

        if ($request->hasFile('productImages')) {
            $images = $request->file('productImages');
            foreach($images as $image){
                    //get filename with extension
                $filenamewithextension = $image->getClientOriginalName();
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                //get file extension
                $extension = $image->getClientOriginalExtension();
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;
                Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
                Storage::put('public/products/thumbnail/'. $filenametostore, fopen($image, 'r+'));
                //Resize image here
                $thumbnailpath = public_path('storage/products/thumbnail/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(470, 600)->save($thumbnailpath);
                
                ProductsImage::create([
                    'productImages' => $filenametostore,
                    'product_id' => $product->id,
                ]);
            }
        }
        
        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        abort_unless(\Gate::allows('product_edit'), 403);
        $categories = Category_products::all();
        // $colors = Colors::all();
        $productImages = $product->images()->get();
        return view('admin.products.edit', compact('product', 'categories', 'productImages'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        abort_unless(\Gate::allows('product_edit'), 403);
        // Upload image
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            //get filename with extension
            $filenamewithextension = $image->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $image->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
            Storage::put('public/products/thumbnail/'. $filenametostore, fopen($image, 'r+'));
            //Resize image here
            $thumbnailpath = public_path('storage/products/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(470, 600)->save($thumbnailpath);
            $path = $filenametostore;
        }else {
            $product = Product::find($id);
            $path = $product->img;
        }

        $product = Product::find($id);
        $product->name          = $request->name;
        $product->chinese_name  = $request->chinese_name;
        $product->img           = $path;
        $product->description   = $request->description;
        $product->save();
        $product->categories()->sync($request->categories);
        // $product->colors()->sync($request->colors);
        
        if ($request->hasFile('productImages')) {
            $images = $request->file('productImages');
            foreach($images as $image){
                    //get filename with extension
                $filenamewithextension = $image->getClientOriginalName();
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                //get file extension
                $extension = $image->getClientOriginalExtension();
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;
                Storage::put('public/products/'. $filenametostore, fopen($image, 'r+'));
                Storage::put('public/products/thumbnail/'. $filenametostore, fopen($image, 'r+'));
                //Resize image here
                $thumbnailpath = public_path('storage/products/thumbnail/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(470, 600)->save($thumbnailpath);
               
                ProductsImage::create([
                    'productImages' => $filenametostore,
                    'product_id' => $product->id,
                ]);
            }
        }
        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        abort_unless(\Gate::allows('product_show'), 403);

        return view('admin.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        abort_unless(\Gate::allows('product_delete'), 403);

        $product->delete();

        return back();
    }
    

    public function deleteImage(ProductsImage $image)
    {
        abort_unless(\Gate::allows('product_delete'), 403);

        $image->delete();

        return response(null, 204);
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
