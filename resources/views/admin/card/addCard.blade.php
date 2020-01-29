@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add card</div>
                <div class="card-body">
                    <form action="{{route('card.store')}}" method="POST">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <select name="type_id" id="" class="form-control mt-2">
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="number" class="form-control mt-2" id="" placeholder="card number">
                                
                                @if($errors->has('number'))
                                <div class="a">
                                    <ul>
                                    @foreach ($errors->get('number') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input type="text" name="district" id="" class="form-control mt-2" placeholder="District">
                                
                                @if($errors->has('district'))
                                <div class="a">
                                    <ul>
                                    @foreach ($errors->get('district') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="sector" id="" class="form-control mt-2" placeholder="Sector">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input type="text" name="cell" id="" class="form-control mt-2" class="@error('cell') has-error @enderror" placeholder="Cell">
                                
                                @if($errors->has('cell'))
                                <div class="a">
                                    <ul>
                                    @foreach ($errors->get('cell') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div> 
                            <div class="col-md-6">
                                <input type="text" name="village" id="" class="form-control mt-2" placeholder="Village">
                                @if($errors->has('village'))
                                <div class="a">
                                    <ul>
                                    @foreach ($errors->get('village') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input type="text" name="holding_name" id="" class="form-control mt-2" placeholder="Card holder name">
                                @if($errors->has('holding_name'))
                                <div class="a">
                                    <ul>
                                    @foreach ($errors->get('holding_name') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="holding_number" id="" class="form-control mt-2" placeholder="Card holder Number">
                                @if($errors->has('holding_number'))
                                <div class="a">
                                    <ul>
                                    @foreach ($errors->get('holding_number') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
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