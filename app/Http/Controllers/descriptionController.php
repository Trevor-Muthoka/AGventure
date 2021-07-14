<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\descriptions;

class descriptionController extends Controller
{
    //
    function addData(Request $req)
    {
        $descriptions = new descriptions;
        $descriptions->title = $req->title;
        $descriptions->price = $req->price;
        $descriptions->stock = $req->stock;
        $descriptions->description = $req->description;
        $descriptions->save();

        return redirect('add');
    }
}
