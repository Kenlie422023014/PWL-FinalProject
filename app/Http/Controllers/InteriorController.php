<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Models\Interior;

class InteriorController extends Controller
{
    /**
     * display a listing of the item.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::get()
    }

    /**
     * store a newly created item in storage 
     * 
     * @param \Illuminate\Http\Request $request
     * @return \illuminate\Http\Response   
     */
    public function store(Request $request)
    {
        try {
            $interior = new Interior;
            $interior = fill ($request->validated())->save();

            return $interior;
        
        } catch(\Exception){
            throw new HttpException(400,"Invalid data -{$exception->getMessage}");
        }
    }

    /**
     * Display the specified item.
     * 
     *  @param int $id
     *  @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interior = Interior::findOrfail($id);
        
        return $book;
    }

    /**
     * Update the specified item in storage.
     * 
     *   @param \Illuminate\Http\Request $request
     *   @param int $id
     *   @return \Illuminate\Http\Response
     */
    public function update (Request $request,$id)
}
