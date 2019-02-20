<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallpost;

class WallpostController extends Controller
{
    public function index()
    {
        return Wallpost::all();
    }

    public function show(Wallpost $wallpost)
    {
        return $wallpost;
    }

    public function store(Request $request)
    {
        return Wallpost::create($request->all());
    }

    public  function  delete(Wallpost $wallpost)
    {
       $wallpost->delete();

       return 204;
    }

    public function update(Request $request , Wallpost $wallpost)
    {
        $wallpost->update($request->all());
        return response()->json($wallpost, 200); //
    }




}
