<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function abc(){
        $prod= product::all();
        return view('product',compact('prod'));
    }
    public function addProduct(){
        return view('addproductform');
    }
    public function storeProduct(Request $request){
        $pname=$request->productname;
        $price=$request->price;
        $datastore=new product;
        $datastore->productname=$pname;
        $datastore->price=$price;
        $datastore->save();
        return redirect('product')->with('success','New product added successfully');
}
public function deleteProduct($id){
    $pdelete=product::FindorFail($id);
    $pdelete->delete();
    return redirect('product')->with('successdanger','product deleted successfully');

}
}

