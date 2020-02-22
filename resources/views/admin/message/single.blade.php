@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <p>{{$message->name}}</p>
                    </div>
                    <div class="card-body">
                        <p>{{$message->message}}</p>                        
                    </div>
                    <div class="card-footer">
                        <p>{{$message->number}}</p>
                        <br/>
                        <p>{{$message->email}}</p>
                        <br/>
                        <div class="row">
                            <form action="{{message.destroy, $message->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="col-md-12">
                                    <button type="submit" class="form-control">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection