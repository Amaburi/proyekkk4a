<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addmovie = movie::all();
        // dd($addmovie);
        
        return view('product', compact('addmovie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addmovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $movie = movie::create($request->all());
        $movie-> save();

        return redirect('');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param string $name
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(){
        $search_text = $_GET['cari'];
        $movie = movie::where('name','LIKE','%'.$search_text.'%')->get();
        return view('product',compact('movie'));
    }
    public function list(){
        $listt = $_GET['list'];
        $liist = movie::where('page','LIKE','%'.$listt.'$');
        return view('list',compact('liist'));
    }
}
