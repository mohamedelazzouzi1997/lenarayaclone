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
    {{-- <div class="py-12 ">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $res)
                                <tr
                                    class="@if ($res->status == 'declined') bg-red-200
                                        @elseif($res->status == 'confirmed')
                                        bg-blue-100
                                        @else
                                        bg-yellow-200 @endif">

                                    <td><a href="{{ route('reservation.show', $res->id) }}">#{{ $res->id }}</a></td>
                                    <td>{{ $res->full_name }}</td>
                                    <td>{{ $res->email }}</td>
                                    <td>{{ $res->phone }}</td>
                                    <td>{{ $res->date->format('d-m-Y') }}</td>
                                    <td>{{ $res->time }}</td>
                                    <td>{{ $res->number_of_persons }}</td>
                                    <td>{{ $res->message }}</td>
                                    <td>
                                        {{ $res->origin }}
                                    </td>

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
    </div> --}}
      <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="text-center uppercase">
                    <h2 class="text-3xl"><strong class="text-green-500">Admin Tous</strong> Notification </h2>
                </div>
                <div class="">
                    <form action="{{ route('admin.all.event') }}" class="flex space-x-10 justify-center items-center"
                        method="get">
                        <div class="grid grid-cols-1 gap-2">
                            <div class="shadow-2xl border-2 border-gray-400 drop-shadow-lg rounded">
                                <select class=" ms select2" aria-placeholder="Select" name="filter">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button name="filterButton" type="submit" class="btn btn-primary shadow-md">Filter</button>
                        </div>
                        @csrf

                    </form>
                    <div>
                        @if ($current_user == 'all')
                            All Users
                        @else
                            <span class="text-xl font-extrabold text-green-500">User :</span> {{ $current_user->name }}
                        @endif
                    </div>
                </div>
                <div class="body shadow-2xl">

                    <form id="allEventForm" action="{{ route('admin.delete.multipl.event') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 mb-3">
                            <div class="text-start">
                                <a href="{{ route('export.event') }}"
                                    class="px-3 py-2 bg-slate-900 shadow-xl hover:bg-slate-800 text-white rounded ">EXEL
                                </a>
                                <button disabled id="deleteEventButton" name="deleteEventButton" type="submit"
                                    class="btn shadow-xl btn-danger waves-effect"><i class="zmdi zmdi-delete"></i>
                                    Supprimé</button>
                            </div>
                            <div class="text-end flex justify-center items-center space-x-2">

                                <select name="editEventStatusSelect" class="rounded ms shadow-md w-1/2"
                                    data-placeholder="Select">
                                    <option disabled selected>select status</option>
                                    <option class="bg-warning" value="En attente">En attente</option>
                                    <option class="bg-teal-500" value="Valide">Validé</option>
                                    <option class="bg-danger" value="Rejete">Rejeté</option>
                                </select>
                                <button disabled id="editEventStatusButton" name="editEventStatusButton" type="submit"
                                    class="btn shadow-xl btn-primary w-1/2 waves-effect">
                                    Modifier</button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th data-orderable="false"> <input id="makeAllChecked" type="checkbox"
                                                name="checkallbox"></th>
                                        <th>id</th>
                                        <th>date</th>
                                        <th>Title du tache</th>
                                        <th>description</th>
                                        <th>User</th>
                                        <th>Etat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($EVENTS as $event)
                                        <tr>
                                            <td>
                                                <input class="evenCheckBox" type="checkbox" name="events[]"
                                                    value="{{ $event->id }}">
                                            </td>
                                            <td>{{ $event->id }}</td>
                                            <td>{{ $event->start }}</td>
                                            <td>{{ Str::limit($event->title, 50) }}</td>
                                            <td>{{ Str::limit($event->description, 15) }}</td>
                                            <td>{{ $event->user->name }}</td>

                                            <td>
                                                @if ($event->status == 'Rejete')
                                                    <span class="badge badge-danger uppercase">{{ $event->status }}</span>
                                                @elseif ($event->status == 'Valide')
                                                    <span class="badge badge-success uppercase">{{ $event->status }}</span>
                                                @else
                                                    <span class="badge badge-warning uppercase">{{ $event->status }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
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
