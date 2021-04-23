@extends('layouts.app')

@section('content')
    @foreach($data as $data)
{{--<div>{{var_dump($data)}}</div>--}}
        <div class="flex justify-center">
            <div class="block w-8/12 bg-white p-6 rounded-lg m-6 space-x-4 text-lg">
                <div class="inline-block align-middle">
                    <img src="https://via.placeholder.com/320x232.png">
                </div>

                <div class="inline-block align-middle">
                    <tr>
                        <th><span class="font-bold">{{ $data->name}}</span></th> <br>
                            <th class="rounded-md">
                                @foreach($data->service_name as $service)
                                    <span class="bg-blue-400 text-white p-0.5">{{ $service }}</span>
                                @endforeach
                            </th> <br>
                        <th>{{ $data->address}}</th> <br>
                        <th>{{ $data->phone}}</th>
                    </tr>
                </div>
            </div>
        </div>
    @endforeach

@endsection
