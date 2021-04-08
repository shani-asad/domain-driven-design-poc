@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class=" w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('registerClinic')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Clinic Name</label>
                    <input type="text" name="name" id="name" placeholder="Clinic name"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg
                        @error('name') border-red-500 @enderror"
                           value="{{ old('name') }}">

                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="address" class="sr-only">Clinic Address</label>
                    <input type="text" name="address" id="address" placeholder="Clinic address"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg
                        @error('address') border-red-500 @enderror"
                           value="{{ old('address') }}">

                    @error('address')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="pphone" class="sr-only">Clinic Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Clinic phone"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg
                        @error('phone') border-red-500 @enderror"
                           value="{{ old('phone') }}">

                    @error('phone')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="srcUrl" class="sr-only">Clinic Image Src URL</label>
                    <input type="text" name="srcUrl" id="srcUrl" placeholder="Clinic srcUrl"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg
                        @error('srcUrl') border-red-500 @enderror"
                           value="{{ old('srcUrl') }}">

                    @error('srcUrl')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
