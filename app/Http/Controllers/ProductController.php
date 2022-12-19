<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // dd($clients);
        return view('product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $containers = Container::all();
        return view('product.create', ['containers' => $containers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Product();

        $product->title = $request->title;

        $product->category = $request->category;
        $product->weight = $request->weight;
        $product->size = $request->size;
        $product->manufacturer = $request->manufacturer;
        $product->container_id = $request->container;
        $product->save();
        // Product::create([
        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'weight' => $request->weight,
        //     'size' => $request->size,
        //     'manufacturer' => $request->manufacturer,
        //     'container_id' => $request->ship
        // ]);
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $containers = Container::all();
        return view('product.edit')->with('product', $product)->with('containers', $containers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        Product::where('id', $product->id)->update([
            'title' => $request->title,
            'category' => $request->category,
            'weight' => $request->weight,
            'size' => $request->size,
            'manufacturer' => $request->manufacturer,
            'container_id' => $request->container
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect(route('products.index'))->with('message', 'Product has been deleted.');
    }
}
