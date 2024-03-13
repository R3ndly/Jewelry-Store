<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{  public function index(): View
    {
        $products = Product::paginate(10);

        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
     public function create(): View
     {
         return view('products.create');
        }
        */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'type' => 'required',
            'material' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'brand' => 'required',
            'collection' => 'required',
            'telephone' => 'required',
            'engraving' => 'required'
        ]);

        $file_name = "";
        if($request->hasFile('image')){
            $file_name = '/img/products/'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img/products'),$file_name);
        } else {
            echo "Фото не загружено";
        }

        $product = new Product;
        $product->type = $request->type;
        $product->material = $request->material;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->brand = $request->brand;
        $product->collection = $request->collection;
        $product->telephone = $request->telephone;
        $product->engraving = $request->engraving;
        $product->image = $file_name;
        $product->save();

        return redirect()->route('products.index')->with('Выполнено','изделия добавлены');
    }
    public function show(Product $product): View
    {
        return view('products.show', compact('product'));
    }
    
    /*
    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }
    */


    /*
     
    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'type' => 'required',
            'material' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'brand' => 'required',
            'collection' => 'required',
            'telephone' => 'required',
            'engraving' => 'required'
        ]);

        $file_name = $product->image;
        if($request->hasFile('image')) {
            $file_name = '/img/products/'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img/products'),$file_name);
        } else {
            echo "Фото не загружено";
        }
        $product->type = $request->type;
        $product->material = $request->material;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->brand = $request->brand;
        $product->collection = $request->collection;
        $product->telephone = $request->telephone;
        $product->engraving = $request->engraving;
        $product->image = $file_name;
        $product->save();

        return redirect()->route('products.index')->with('выполнено','изделия добавлены');
    }
*/

    /*
     public function destroy(Product $product): RedirectResponse
     {
         $product->delete();
         
         
         return redirect()->route('products.index')
         
         ->with('выполнено','изделие удалёно.');
        }
        */
}
