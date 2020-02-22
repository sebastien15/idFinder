<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Type;
use App\Success;
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
        $number    = $request->number;

        $cards = Card::where('number', $number)->get();
                    //    ->orWhere('holding_name', $names)

        return view('search')->with('cards', $cards);
    }
    public function saveSuccess(Request $request){
        $success = new Success;

        $names = $request->names;
        $number= $request->number;

        $success->save();
    }
}
