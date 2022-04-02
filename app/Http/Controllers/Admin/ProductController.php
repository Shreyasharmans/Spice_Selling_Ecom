<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function addproduct()
    {
        return view('admin.add_product');
    }

    public function storeproduct(Request $request)
    {
        $product = new Product();

        $product->pname = $request->input('pname');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->disc = $request->input('disc');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product_images/', $filename);
            $product->image = $filename;
        }else{
            return $request;
            $product->image = '';
        }
        $product->save();

        return view('admin.add_product');
    }
    public function display(){
        if(Auth::check()){
            $products = Product::all();
            return view('product')->with('products',$products);
        }
        return view('auth.login');
    }

    public function adminproduct()
    {
        $products = Product::all();
            return view('admin.adminproduct')->with('products',$products);
    }
    public function editproduct($id)
    {
        $products = Product::find($id);
            return view('admin.update_product')->with('products',$products);
    }


    public function update(Request $request, $id)
    {
        
    
        $products = Product::find($id); //Added this
        $p['pname'] = $request->input('pname');
        $p['category'] = $request->input('category');
        $p['price']= $request->input('price');
        $p['disc'] = $request->input('disc');

        if ($request->hasfile('image')){
            $destination = 'uploads/product_images/'.$products->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product_images/', $filename);
            $products->image = $filename;
        }
      
        Product::where('id', $id)->update($p);
   
      
       return redirect('/admin/adminproduct');
     
    
    }

    public function delete($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect('admin/adminproduct')->with('products',$products);
    }
    

}