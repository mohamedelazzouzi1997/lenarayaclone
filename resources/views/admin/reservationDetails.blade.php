@extends('layouts.admin')

@section('styles')
@endsection

@section('content')
    <div class="py-12 px-6 md:px-28">
        <h1 class="text-2xl my-4">Reservation Details <span class="font-extrabold">#{{ $res->id }}</span> </h1>
        <div class="bg-red-200 overflow-hidden shadow-xl sm:rounded-lg p-6 font-sans">
            <div class="text-gray-500">
                <span>
                    {{ $res->created_at->format('F d, Y') . ' ' . $res->time }}
                </span>
                <span class="mx-6">
                    <a href="" class="text-blue-700">Edit</a> | <a href="" class="text-red-500">Delete</a>
                </span>
            </div>
            <div class="my-3 text-center space-y-5">
                <div class="grid grid-cols-2 md:grid-cols-4 text-black border-b border-gray-700">
                    <div class="font-extrabold text-start text-lg">Reservation ID :</div>
                    <div class="text-start md:col-span-3 text-gray-700"> #{{ $res->id }}</div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 text-black border-b border-gray-700">
                    <div class="font-extrabold text-start text-lg">Nombre de Personnage :</div>
                    <div class="text-start md:col-span-3 text-gray-700"> {{ $res->number_of_persons }}</div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 text-black border-b border-gray-700">
                    <div class="font-extrabold text-start text-lg">Email :</div>
                    <div class="text-start md:col-span-3 text-gray-700"> {{ $res->email }}
                        <a href="" class="text-blue-700">
                            Send Email
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 text-black border-b border-gray-700">
                    <div class="font-extrabold text-start text-lg">Telephone :</div>
                    <div class="text-start md:col-span-3 text-gray-700"> {{ $res->phone }}</div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 text-black border-b border-gray-700">
                    <div class="font-extrabold text-start text-lg">Origin :</div>
                    <div class="text-start md:col-span-3 text-gray-700"> {{ $res->origin }}</div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 text-black border-b border-gray-700">
                    <div class="font-extrabold text-start text-lg">Message :</div>
                    <div class="text-start md:col-span-3 text-gray-700"> {{ $res->message }}</div>
                </div>

            </div>

        </div>
    @endsection


    @section('scripts')
    @endsection
