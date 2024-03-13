<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminSuppliersController extends Controller
{
    public function index(): View
    {
        $suppliers = Suppliers::paginate(10);

        return view('admin.suppliers.index',compact('suppliers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
     public function create(): View
     {
         return view('admin.suppliers.create');
        }
        

    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name_supplier' => 'required',
            'Address' => 'required',
            'delivery_time' => 'required',
            'supplier_rating' => 'required',
            'supplier_status' => 'required',
            'type_transportation' => 'required',
            'unit_price' => 'required',
            'order_number' => 'required'
        ]);

        $file_name = "";
        if($request->hasFile('image')){
            $file_name = '/img/suppliers/'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img/suppliers'),$file_name);
        } else {
            echo "Фото не загружено";
        }

        $suppliers = new Suppliers;
        $suppliers->name_supplier = $request->name_supplier;
        $suppliers->Address = $request->Address;
        $suppliers->delivery_time = $request->delivery_time;
        $suppliers->supplier_rating = $request->supplier_rating;
        $suppliers->supplier_status = $request->supplier_status;
        $suppliers->type_transportation = $request->type_transportation;
        $suppliers->unit_price = $request->unit_price;
        $suppliers->order_number = $request->order_number;
        $suppliers->image = $file_name;
        $suppliers->save();

        return redirect()->route('admin.suppliers.index')->with('Выполнено','изделия добавлены');
    }
    public function show(Suppliers $supplier): View
    {
        return view('admin.suppliers.show', compact('supplier'));
    }
    
    
    public function edit(Suppliers $supplier): View
    {
        return view('admin.suppliers.edit', compact('supplier'));
    }
    


    
     
    public function update(Request $request, Suppliers $supplier): RedirectResponse
    {
        $request->validate([
           'name_supplier' => 'required',
            'Address' => 'required',
            'delivery_time' => 'required',
            'supplier_rating' => 'required',
            'supplier_status' => 'required',
            'type_transportation' => 'required',
            'unit_price' => 'required',
            'order_number' => 'required'
        ]);

        $file_name = $supplier->image;
        if($request->hasFile('image')) {
            $file_name = '/img/suppliers/'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img/suppliers'),$file_name);
        } else {
            echo "Фото не загружено";
        }
        $supplier->name_supplier = $request->name_supplier;
        $supplier->Address = $request->Address;
        $supplier->delivery_time = $request->delivery_time;
        $supplier->supplier_rating = $request->supplier_rating;
        $supplier->supplier_status = $request->supplier_status;
        $supplier->type_transportation = $request->type_transportation;
        $supplier->unit_price = $request->unit_price;
        $supplier->order_number = $request->order_number;
        $supplier->image = $file_name;
        $supplier->save();

        return redirect()->route('admin.suppliers.index')->with('выполнено','изделия добавлены');
    }

    
     public function destroy(Suppliers $supplier): RedirectResponse
     {
         $supplier->delete();
         
         
         return redirect()->route('admin.suppliers.index')
         
         ->with('выполнено','изделие удалёно.');
        }
        
}
