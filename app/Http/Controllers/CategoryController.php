<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result['data']=Category::all();
        return view('admin/category',$result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function manage_category(Request $request,$id='')
    {
        if($id>0){
            $arr=Category::where(['id'=>$id])->get();
            $result['category_name']=$arr['0']->category_name;
            $result['category_slug']=$arr['0']->category_slug;
            $result['id']=$arr['0']->id;
        }else{
            $result['category_name']='';
            $result['category_slug']='';
            $result['id']='0';
        }
        return view('admin/manage_category',$result);

    }
    public function manage_category_process(Request $request)
    {
       // return $request->post();
        $request->validate([
        'category_name'=>'required',
        'category_slug'=>'required|unique:categories,category_slug,'.$request->post('id'),
        
        ]);
        if($request->post('id')>0){
        
            $model=Category::find($request->post('id'));
            $msg="Category updated by yash";
            
        }else{
            $model=new Category();
            $msg="Category inserted by yash";
        }
        $model->category_name=$request->post('category_name');
        $model->category_slug=$request->post('category_slug');
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/category');
        

    }
    public function delete( Request $request,$id){
        
           $model=Category::find($id);
           $model->delete();
           $request->session()->flash('message','Category deleted by yash');
        return redirect('admin/category');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
