<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Category_products;
use Image;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class categoryController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('product_access'), 403);

        $categories = Category_products::all();

        return view('admin.products.category.index', compact('categories'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('product_create'), 403);

        return view('admin.products.category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        abort_unless(\Gate::allows('product_create'), 403);
         // Upload image
        //  $path = null;
        //  if ($request->hasFile('category_image')) {
        //      $image = $request->file('category_image');
        //          //get filename with extension
        //      $filenamewithextension = $image->getClientOriginalName();
        //      //get filename without extension
        //      $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //      //get file extension
        //      $extension = $image->getClientOriginalExtension();
        //      //filename to store
        //      $filenametostore = $filename.'_'.uniqid().'.'.$extension;
        //      Storage::put('public/images/category_image/'. $filenametostore, fopen($image, 'r+'));
        //      $path = $filenametostore;
        //  }

         $category = new Category_products();
         $category->category_name = $request->category_name;
        //  $category->category_image = $path;
         $category->save();
        // $categories = Category_products::create($request->all());

        return redirect()->route('admin.category.index');
    }

    public function edit(Category_products $category)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        return view('admin.products.category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category_products $category)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        // $path = $category->category_image;
        // // Upload image
        // if ($request->hasFile('category_image')) {
        //     $image = $request->file('category_image');
        //         //get filename with extension
        //     $filenamewithextension = $image->getClientOriginalName();
        //     //get filename without extension
        //     $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //     //get file extension
        //     $extension = $image->getClientOriginalExtension();
        //     //filename to store
        //     $filenametostore = $filename.'_'.uniqid().'.'.$extension;
        //     Storage::put('public/images/category_image/'. $filenametostore, fopen($image, 'r+'));

        //     $path = $filenametostore;
        // }

            $category->category_name = $request->category_name;
            // $category->category_image = $path;
            $category->save();

        // $category->update($request->all());

        return redirect()->route('admin.category.index');
    }

    public function show(Category_products $category)
    {
        abort_unless(\Gate::allows('product_show'), 403);

        return view('admin.products.category.show', compact('category'));
    }

    public function destroy(Category_products $category)
    {
        abort_unless(\Gate::allows('product_delete'), 403);

        $category->delete();

        return back();
    }

    public function massDestroy(MassDestroyCategoryRequest $request)
    {
        Category_products::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
