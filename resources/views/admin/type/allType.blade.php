@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-md-3 mr-5">
            <div class="card-header">Add Type</div>
            @if(session('success'))
                <p class="alert">{{ session('success') }}</p> 
            @endif
            <div class="card-body">
            <form action="{{route('type.store')}}" method="post">
                @csrf
                <input type="text" name="name" id="" class="form-control">
                <button type="submit" class="btn btn-success form-control mt-2">Save</button>
            </form>
            </div>
        </div>
        <div class="card col-md-7">
            <div class="card-header">All Types</div>
            <div class="card-body">
                <div class="container">
                @foreach ($types->chunk(3) as $row)
                    <div class="row">
                        @foreach ($row as $type)
                        <div class="col-md-4">
                            <div class="container">
                                <div class="row">
                                    <p>{{$type->name}}</p>
                                </div>
                                <div class="row">
                                <form action="{{route('type.destroy',$type->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="row">
                                        <button type="submit" class="btn"><img src="{{URL::asset('/img/delete.png')}}" alt="" height="15" width="15" style="font-weight:800">Delete</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>                
                @endforeach
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection