@extends('layouts.app')

@section('content')
    @foreach($name as $data)
        <div class="flex justify-center">
            <div class="block w-8/12 bg-white p-6 rounded-lg m-6 space-x-4">
                <div class="inline-block align-middle">
                    <img src="{{ $data->srcUrl }}">
                </div>

                <div class="inline-block align-middle">
                    <tr>
                        <th>{{ $data->name}}</th> <br>
                        <th>{{ $data->address}}</th> <br>
                        <th>{{ $data->phone}}</th>
                    </tr>
                </div>
            </div>
        </div>
    @endforeach

@endsection
