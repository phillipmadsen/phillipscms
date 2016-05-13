<?php

namespace Fully\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Fully\Models\Product;
// use Fully\Models\File;
use Fully\Http\Requests;
use Fully\Http\Controllers\Controller;
use Fully\Http\Controllers\Admin;
use View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProductController extends AppBaseController
{

    protected $product;

    // public function __construct(Product $product,  CategoryInterface $category)
    // {
    //     $this->product = $product;
    //     $this->category = $category;
    // }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        View::share('active', 'shop');
        $products = Product::all();

        return view('backend.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->category->lists();

        return view('backend.products.create', compact('categories'));
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $file = Request::file('file');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));

        // $entry = new \App\File();
        $product = $this->file->create($input);
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;

        $entry->save();

        //$product  = new Product();
        $product = $this->product->create($input);

        // $product->file_id=$entry->id;
        // $product->name =Request::input('name');
        // $product->description =Request::input('description');
        // $product->price =Request::input('price');
        // $product->imageurl =Request::input('imageurl');

        $product->save();

        Flash::success('Product saved successfully.');

        return redirect(route('admin.products.index'));

    }


    public function togglePublish($id)
    {
        return $this->product->togglePublish($id);
    }
}