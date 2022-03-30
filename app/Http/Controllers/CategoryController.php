<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menggunakan Raw Query
        // $queryRaw = DB::select(DB::raw("select * from categories"));

        //Menggunakan QueryBuilder
        // $queryBuilder = DB::table('categories')->get();

        //Menggunakan Eloquent Model
        $queryEloquent = Category::all();

        // dd($queryRaw);
        return view('category.index',compact('queryEloquent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showlist($id_category)
    {
        $data=Category::find($id_category);
        $namecategory=$data->name;
        $result=$data->medicines;
        if($result) $getTotalData=$result->count();
          else  $getTotalData=0;
        return view('report.list_medicines_by_category',
          compact('id_category','namecategory','result','getTotalData'));       
    }
}
