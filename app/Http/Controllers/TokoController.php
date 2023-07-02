<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
}

    public function about() {
        return view('toko/about');
    }

    public function admin()
    {
        $products = Product::all();
        return view('toko/admin', compact('products'));
}
    public function customer()
    {
        $customers = Customer::all();
        return view('toko/customer',compact('customers'));
}

public function create ()
{
    return view ('toko/create');
}

public function store (Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'description' => 'required', 
    ]);

    Product::create($request->all());
    return redirect()->route('produk.admin')->with('success', 'Product berhasil di simpan');
}

public function edit (Product $product)
{
    return view ('toko/edit', compact('product'));
}

public function destroy (Product $product)
{
    $product->delete();

    return redirect()->route('produk.admin')->with('delete', 'Product Berhasil Dihancurkan');
}

public function update (Request $request, Product $product)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
    ]);

    $product->update($request->all());
    return redirect()->route('produk.admin')->with('update', 'Product Updated Completed');
}

public function createC ()
    {
        return view ('toko/createC');
    } 

    public function storeC (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);

        Customer::create($request->all());
        return redirect()->route('customer.customer')->with('success', 'Customer berhasil disimpan');
    }

    public function editC (Customer $customer)
    {
        return view ('toko/editC', compact('customer'));
    }

    public function destroyC (Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.customer')->with('delete', 'Customer Has Been Slain');       
    }

    public function updateC (Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);

        $customer->update($request->all());
        return redirect()->route('customer.customer')->with('update', 'Customer Update Completed');
    }


}
