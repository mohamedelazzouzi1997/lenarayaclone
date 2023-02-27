@extends('layouts.admin')

@section('styles')
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="table-responsive  text-black p-4">
                    <h1 class="text-center my-6 text-5xl">LES RESERVATION</h1>
                    <table class="table table-hover table-bordered">
                        <thead class="bg-slate-400">
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
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $res)
                                <tr>
                                    <td>{{ $res->id }}</td>
                                    <td>{{ $res->full_name }}</td>
                                    <td>{{ $res->email }}</td>
                                    <td>{{ $res->phone }}</td>
                                    <td>{{ $res->date }}</td>
                                    <td>{{ $res->time }}</td>
                                    <td>{{ $res->number_of_persons }}</td>
                                    <td>{{ $res->message }}</td>
                                    <td>
                                        {{ $res->origin }}
                                        {{-- @if ($res->origin == 'tk')
                                            <span class="px-3 rounded-md py-2 bg-blue-200">TIKTOK</span>
                                        @endif --}}

                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center ">
                                            <a href="{{ route('reservation.show', $res->id) }}" class="btn btn-primary"><i
                                                    class="fa-solid fa-eye"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </div>
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
    </div>
@endsection


@section('scripts')
@endsection
