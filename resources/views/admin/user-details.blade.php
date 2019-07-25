@extends('layouts.admin')


@section('content')

    <table class="table table-bordered table-condensed ">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$user->phone}}</td>
            </tr>
            <tr>
                <td>Verification_code</td>
                <td>{{$user->verification_code}}</td>
            </tr>
            <tr>
                <td>Phone verified at</td>
                <td>
                    @if($user->phone_verified_at)
                        {{$user->phone_verified_at}}
                    @else
                        Unverified by phone
                    @endif
                </td>
            </tr>
            <tr>
                <td>Admin verified at</td>
                <td>
                    @if($user->admin_verified_at)
                        {{$user->admin_verified_at}}
                    @else
                        Unverified by admin
                    @endif
                </td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{$user->created_at}}</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>{{$user->updated_at}}</td>
            </tr>
        </tbody>

    </table>

@endsection