<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $queryRaw = DB::select(DB::raw("select * from medicines"));

         $queryBuilder = DB::table('medicines')->get();

        // $queryModel = Medicine::all();

        // dd($queryRaw);
        return view('medicine.index',compact('queryBuilder'));

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
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        // dd($medicine);
        $data=$medicine;
        return view('medicine.show',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function coba1()
    {
        //query builder filter
        $result=DB::table('medicines')
        ->where('price','>',20000)
        ->get();
  
        //agregate . jumlah row
        $result2=DB::table('medicines')->count(); // result = 16

        //filter+aggregate 
        $result3=DB::table('medicines') 
        ->where('price','<',20000)
        ->count();      // result 11

        //join, order
        $result4=DB::table('medicines') 
        ->join('categories','medicines.category_id','=','categories.id')
        ->orderBy('price','desc')
        ->get();

        //eloquent filter
        $result5=Medicine::where('price','>',20000)  
        ->orderBy('price','desc')
        ->get();


        //tugas

        //1
        $allCategory = Category::all();
        $allCategory2 = DB::table('categories')->get();

        //2
        $medicine = Medicine::select('generic_name','form','price')->get();
        $medicine2 = DB::table('medicines')->select('generic_name','form','price')->get();

        //3
        $innerJoin = Medicine::join('categories','category_id','=','categories.id')->select('medicines.*','categories.name')->get();
        $innerJoin2 = DB::table('medicines')->join('categories','category_id','=','categories_id')->select('medicines.*','categories.name')->get();

        //4
        $soal4 = Category::has('medicines')->count();       

        //5
        $soal5 = Category::select(['name'])->doesntHave('medicines')->get();
        //6
        $soal6 = Medicine::select(DB::raw('avg(medicines.price) as average_price'))->has('category')->get();

        //7
        $soal7 =  DB::table('medicines')
        ->join('categories', 'medicines.category_id', '=', 'categories.id')
        ->select('categories.name')
        ->groupBy('categories.name')
        ->having(DB::raw('count(medicines.category_id)'), '<', 2)
        ->get();
        
        dd($allCategory2);
    }
}
