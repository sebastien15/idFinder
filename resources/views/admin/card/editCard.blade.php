@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add card</div>
                <div class="card-body">
                    <form action="{{route('card.update', $card->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <select name="type_id" id="" class="form-control mt-2">
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach                                    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="number" value="{{$card->number}}" class="form-control mt-2" id="" placeholder="card number">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input type="text" name="district" value="{{$card->district}}" id="" class="form-control mt-2" placeholder="District">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="sector" value="{{$card->sector}}" id="" class="form-control mt-2" placeholder="Sector">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input type="text" name="cell" value="{{$card->cell}}" id="" class="form-control mt-2" placeholder="Cell">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="village" value="{{$card->village}}" id="" class="form-control mt-2" placeholder="Village">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input type="text" name="holding_name" value="{{$card->holding_name}}" id="" class="form-control mt-2" placeholder="Card holder name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="holding_number" value="{{$card->holding_number}}" id="" class="form-control mt-2" placeholder="Card holder Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="form-control btn btn-success  mt-2">Save</button>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection