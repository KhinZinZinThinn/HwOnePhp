<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{


    public function getDashboard(){
        return view('home');
    }

    public function getProduct(){
        return view('product');
    }

    public function getCategory(){
        $cats=Category::OrderBy('id','desc')->paginate("3");
        return view('category')->with(['cats'=>$cats]);
    }
    public function postNewCategory(Request $request)
        {
            $this->validate($request, [
                'cat_name' => 'required|unique:categories'
            ]);
            $cat = new Category();
            $cat->cat_name = $request['cat_name'];
            $cat->save();
            return redirect()->back()->with('alert', 'The category has been saved');
        }

    public function getDeleteCategory($id){
        $cats=Category::where('id',$id)->firstOrFail();
        $cats->delete();
        return redirect()->back()->with('info','The selected category has been deleted');
    }

    public function getUpdateCategory(Request $request){
        $cat_id=$request['id'];
        $cat_name=$request['cat_name'];
        $cats=Category::whereId($cat_id)->firstOrFail();
        $cats->cat_name=$cat_name;
        $cats->update();
        return redirect()->back()->with('info','The category has been updated');
    }

}
