@extends('layouts.admin')


@section('content')
    <table class="table table-bordered table-condensed ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <a href="{{url('/admin/user', $user->id)}}" class="btn btn-primary">Details</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No one unverified user</td>
                </tr>
            @endforelse

        </tbody>

    </table>
    {{$users->links()}}

@endsection