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
        //Menggunakan Raw Query
        // $queryRaw = DB::select(DB::raw("select * from medicines"));
        
        //Menggunakan QueryBuilder
        //  $queryBuilder = DB::table('medicines')->get();

        //Menggunakan Eloquent Model
        $queryEloquent = Medicine::all();

        // dd($queryRaw);
        return view('medicine.index',compact('queryEloquent'));

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
                ->where('generic_name','like','%fen%')
                ->get();

         //query builder group
         
         $result=DB::table('medicines')
         ->select('generic_name')
         ->groupBy('generic_name')
         ->having('generic_name','>',1)
         ->get();
        
         //agregate . jumlah row
         $result=DB::table('medicines')->count(); // result = 16

          //agregate . price termahal
          $result=DB::table('medicines')->max('price'); // result = 35000

          //filter+aggregate 
          $result=DB::table('medicines') 
            ->where('price','<',20000)
            ->count();      // result 11

        //join, order
        $result=DB::table('medicines') 
            ->join('categories','medicines.category_id','=','categories.id')
            ->orderBy('price','desc')
            ->get();

        //eloquent filter
        $result=Medicine::where('price','>',20000)  
            ->orderBy('price','desc')
            ->get();

        //ambil 1 dat aberdasar id
        $result=Medicine::find(3);

        //ambil max price
        $result=Medicine::max('price');

        dd($result);
    }

    public function showInfo()
    {
        $result=Medicine::orderBy('price','desc')->first();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-danger'>
                     Did you know? <br>
                     Harga obat termahal adalah ".
                     $result->generic_name . " ".$result->form . 
                     " dengan harga " . $result->price
          ),200);
        
    }
}
