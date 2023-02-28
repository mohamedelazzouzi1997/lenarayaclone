@extends('layouts.admin')

@section('title')
    Reservation Details
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">
@endsection

@section('content')
    <div class="py-12 px-6 md:px-28">
        <h1 class="text-2xl my-4">Reservation Details <span class="font-extrabold">#{{ $res->id }}</span> </h1>
        <div
            class="@if ($res->status == 'declined') bg-red-200
                                @elseif($res->status == 'confirmed')
                                bg-teal-200
                                @else
                                    bg-yellow-200 @endif overflow-hidden shadow-xl sm:rounded-lg p-6 font-sans">
            <div class="text-gray-500">
                <span>
                    {{ $res->created_at->format('F d, Y') . ' ' . $res->time }}
                </span>
                <span class="mx-6 block md:inline">
                    <button type="button" data-toggle="modal" data-target="#emailConfirmModal"
                        class="py-1 hover:bg-green-600 px-3 bg-green-500 text-white rounded-md">Confirme</button>
                    <button type="button" data-toggle="modal" data-target="#emailRejectModal"
                        class="py-1 hover:bg-yellow-600 px-3 bg-yellow-500 text-white rounded-md">Reject</button>
                    <button type="button" data-toggle="modal" data-target="#emailDeletemModal"
                        class="py-1 hover:bg-red-600 float-right px-3 bg-red-500 text-white rounded-md">Delete</button>
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
        @include('modal.reservationConfirmModal')
        @include('modal.reservationRejectModal')
        @include('modal.reservationDeleteModal')
    @endsection


    @section('scripts')
        <script src="{{ asset('toaster/toaster.js') }}"></script>
        <script>
            const ToasterOptions = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
        </script>
        @if (Session::has('success'))
            <script>
                toastr.success("{{ Session::get('success') }}");
                toastr.options = ToasterOptions;
            </script>
        @endif
        @if (Session::has('warning'))
            <script>
                toastr.warning("{{ Session::get('warning') }}");
                toastr.options = ToasterOptions;
            </script>
        @endif
        @if (Session::has('delete'))
            <script>
                toastr.error("{{ Session::get('delete') }}");
                toastr.options = ToasterOptions;
            </script>
        @endif
    @endsection
