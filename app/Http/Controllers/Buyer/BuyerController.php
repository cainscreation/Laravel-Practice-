<?php

namespace App\Http\Controllers\Buyer;
use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = Buyer::has('transections')->get();
        return $this->showAll($buyers);
    }




    public function show($id)
    {
        $buyers = Buyer::has('transections')->findOrFail($id);
        return response()->json(['data'=>$buyers],200);
    }
}
