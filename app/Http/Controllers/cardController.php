<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Type;
use Session;
use DB;

class cardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::orderBy('id', 'DESC')->simplePaginate(30);
        $types = Type::all();

        return view('admin.card.allCard')->with('cards', $cards)
                                         ->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.card.addCard')->with('types', $types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $card                  = new Card;

        $request->validate([
            'number'           =>'required | max:250',
            'district'         =>'required | max:250',
            'sector'           =>'required | max:250',
            'cell'             =>'required | max:250',
            'village'          =>'required | max:250',
            'holding_name'     =>'required | max:250',
            'holding_number'   =>'required | max:250',
        ]);
        
        $card->type_id         = $request->type_id;
        $card->number          = $request->number;
        $card->district        = $request->district;
        $card->sector          = $request->sector;
        $card->cell            = $request->cell;
        $card->village         = $request->village;
        $card->holding_name    = $request->holding_name;
        $card->holding_number  = $request->holding_number;

        $card->save();

        return redirect()->route('card.index')->with('success','Card added successfully');
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
    public function edit($id)
    {
        $types = Type::all();
        $card  = Card::find($id); 

        return view('admin.card.editCard')->with('types', $types)
                                          ->with('card', $card);
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
        $card = Card::find($id);

        $card->type_id         = $request->type_id;
        $card->number          = $request->number;
        $card->district        = $request->district;
        $card->sector          = $request->sector;
        $card->cell            = $request->cell;
        $card->village         = $request->village;
        $card->holding_name    = $request->holding_name;
        $card->holding_number  = $request->holding_number;

        $card->save();

        return redirect()->route('card.index')->with('success','Card updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = Card::find($id);

        $card->delete();

        return redirect()->route('card.index')->with('success','Card deleted successfully!');
    }
}
