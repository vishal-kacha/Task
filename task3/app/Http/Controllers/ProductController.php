<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request): \Illuminate\Http\JsonResponse
{
    $body = json_decode($request->getContent(), true);


    $product = new Product();
    $product->name = $body['name'];
    $product->price = $body['price'];
    $product->description = $body['description'];
    $product->quantity = $body['quantity'];
    $product->image = $body['image'];
    $product->save();

    return response()->json(['message' => 'Product created successfully'], 201);
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!Product::find($id)) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->image = $request->image;
        $product->save();

        return response()->json(['message' => 'Product updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        if (!Product::find($id)) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product = Product::find($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully'], 200);   
    }
}
