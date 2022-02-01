<?php

namespace App\Http\Controllers;
use App\Category;
use Image;
use Session;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
        public function Category()
    {
        $cats = Category::orderBy('id','desc')->get();
        return view('admin.category.category',['cats'=>$cats]);
    }
    public function CategoryNew(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:30|min:2',
            'description' => 'required|min:2',
            'img' => 'required|image',
            'status' => 'required'
        ]);
        $cat = new Category();
        $cat->name = $request->name;
        $cat->description = $request->description;

        $imgUrl = $this->imageUpload($request);
        $cat->img = $imgUrl;

        $cat->status = $request->status;
        $cat->save();
        Session::flash('success','Save successfully');
        return redirect('/admin/category');
    }
    protected function imageUpload($request)
    {   
        $img = $request->file('img');
        $imageName = $img->getClientOriginalName();
        $dir = 'img/';
        $imgUrl = $dir.time().$imageName;

        Image::make($img)->resize(300,200)->save($imgUrl);
        return $imgUrl;
    }

    public function DetailCat($id)
    {
        return Category::findOrFail($id);
    }

    public function UpdateCat(Request $request)
    {
        $this->validate($request,[
                'cat_name' => 'required|max:30|min:2',
                'description' => 'required|min:2'
        ]);

        $img = $request->file('img');
        if($img)
        {
            $cat = Category::find($request->catId);
            unlink($cat->img);
            $imgUrl = $this->imageUpload($request);

            $cat->name = $request->cat_name;
            $cat->description = $request->description;
            $cat->img = $imgUrl;
            $cat->status = $request->status;
            $cat->save();
            Session::flash('success','Updated successfully');
            return redirect('/admin/category');
        }
        else
        {
            $cat = Category::find($request->catId);
            $cat->name = $request->cat_name;
            $cat->description = $request->description;
            $cat->status = $request->status;
            $cat->save();
            Session::flash('success','Updated successfully');
            return redirect('/admin/category');            
        }


    }
    public function DeleteCat($id)
    {
        $cat = Category::find($id);
        $img = $cat['img'];
        unlink($img);
        $cat->delete();
        Session::flash('success','Success');
        return redirect('/admin/category');
    }

    public function StatusChangeCat(Request $request)
    {
        $cat = Category::find($request->status_id);
        $cat->status = $request->status;
        $cat->save();
        return response()->json(['success'=>'successful']);
    }
}
