@extends('layouts.app')

@section('content')
    @foreach($data as $data)
<div>{{var_dump($data)}}</div>
{{--<div>{{var_dump($name[1])}}</div>--}}
{{--        <div class="flex justify-center">--}}
{{--            <div class="block w-8/12 bg-white p-6 rounded-lg m-6 space-x-4">--}}
{{--                <div class="inline-block align-middle">--}}
{{--                    <img src="https://via.placeholder.com/320x232.png">--}}
{{--                </div>--}}

{{--                <div class="inline-block align-middle">--}}
{{--                    <tr>--}}
{{--                        <th>{{ $data->name}}</th> <br>--}}
{{--                        <th>{{ $data->service_name }}</th> <br>--}}
{{--                        <th>{{ $data->address}}</th> <br>--}}
{{--                        <th>{{ $data->phone}}</th>--}}
{{--                    </tr>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endforeach

@endsection
