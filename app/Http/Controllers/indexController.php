<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Type;
use DB;
use Session;

class indexController extends Controller
{
    public function index(){
        $types = Type::all();

        return view('index')->with('types', $types);
    }
    public function search(Request $request){
        $names     = $request->names;
        $type_id   = $request->type_id;
        $number    = $request->number;

        $cards = Card::where('number', $number)
                       ->orWhere('type_id', $type_id)
                       ->orWhere('holding_name', $names)->get();

        return view('search')->with('cards', $cards);
    }
}
