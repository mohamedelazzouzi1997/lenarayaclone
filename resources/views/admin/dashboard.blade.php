@extends('layouts.admin')

@section('title')
    Reservation | Le Blokk
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">
    <style>
        tr.hover {
            cursor: pointer;
            /* whatever other hover styles you want */
        }
    </style>
@endsection

@section('content')
    <div class="py-12 ">
        <div class="px-3 mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="table-responsive  text-black p-4">
                    <h1 class="text-center my-6 text-5xl">LES RESERVATION</h1>
                    <table class="table table-hover table-bordered">
                        <thead class="bg-slate-700 text-white">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Tel</th>
                                <th>Date</th>
                                <th>heur</th>
                                <th>N/P</th>
                                <th>message</th>
                                <th>Origin</th>
                                {{-- <th>#</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $res)
                                <tr
                                    class="@if ($res->status == 'declined') bg-red-400
                                        @elseif($res->status == 'confirmed')
                                        bg-teal-500
                                        @else
                                        bg-yellow-400 @endif">

                                    <td><a href="{{ route('reservation.show', $res->id) }}">#{{ $res->id }}</a></td>
                                    <td>{{ $res->full_name }}</td>
                                    <td>{{ $res->email }}</td>
                                    <td>{{ $res->phone }}</td>
                                    <td>{{ $res->date }}</td>
                                    <td>{{ $res->time }}</td>
                                    <td>{{ $res->number_of_persons }}</td>
                                    <td>{{ $res->message }}</td>
                                    <td>
                                        {{ $res->origin }}
                                    </td>
                                    {{-- <td>
                                        <div class="flex justify-center items-center ">
                                            <a href="{{ route('reservation.show', $res->id) }}" class="btn btn-primary"><i
                                                    class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('reservation.delete', $res->id) }}" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                            <a class="btn btn-warning" href=""><i
                                                    class="fa-solid fa-circle-xmark"></i></a>
                                            <a class="btn btn-success" href=""><i
                                                    class="fa-solid fa-circle-check"></i></a>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center py-4">
                    {{ $reservations->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('toaster/toaster.js') }}"></script>
    <script>
        $('tr').click(function(e) {
            console.log(e.target);
            if ($(e.target).is("td"))
                window.location = $(this).find('a').attr('href');
            else
                return;
        }).hover(function() {
            $(this).toggleClass('hover');
        });
    </script>
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
