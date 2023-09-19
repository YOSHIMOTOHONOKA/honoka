<?php

namespace App\Http\Controllers;

use App\Review;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateData;


use Illuminate\Support\Facades\Auth;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Int $id)
    {
                                 // すべての記事を取得
    $product = Product::find($id);
                                 
     return view('reviews.review', compact('product'));                          
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Int $id)
    {
                // 特定のIDに基づいて既存の製品を取得
                $product = Product::find($id);

                        // フォームデータを使用して製品属性を更新
        $product->title = $request->title;
        $product->comment = $request->comment;

                // 製品を保存
                $product->save();
    
                // 製品更新後にリダイレクト
                return redirect('/');
        


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
}
