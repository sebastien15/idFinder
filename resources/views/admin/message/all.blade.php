@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
                @if(session('success'))
                    <p>{{ session('success')}}</p>
                @endif
                    <table class="table table-striped table-responsive">
                        <thead>
                            <th>Itariki</th>
                            <th>Amazina</th>
                            <th>Telephone</th>
                            <th>E-mail</th>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr>
                                <td>{{$message->created_at}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->number}}</td>
                                <td>{{$message->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
    </div>
@endsection