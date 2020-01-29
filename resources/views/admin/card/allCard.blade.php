@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            @if(session('success'))
                <p>{{ session('success')}}</p>
            @endif
                <table class="table table-striped table-responsive">
                    <thead>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Number</th>
                        <th>District</th>
                        <th>Sector</th>
                        <th>Cell</th>
                        <th>Village</th>
                        <th>Holder Name</th>
                        <th>Holder Number</th>
                        <th>Buttons</th>
                    </thead>
                    <tbody>
                        @foreach ($cards as $card)
                        <tr>
                            <td>{{$card->id}}</td>
                            <td>{{$card->type->name}}</td>
                            <td>{{$card->number}}</td>
                            <td>{{$card->district}}</td>
                            <td>{{$card->sector}}</td>
                            <td>{{$card->cell}}</td>
                            <td>{{$card->village}}</td>
                            <td>{{$card->holding_name}}</td>
                            <td>{{$card->holding_number}}</td>
                            <td>
                                <form action="{{route('card.destroy', $card->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('card.edit', $card->id)}}" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
@endsection