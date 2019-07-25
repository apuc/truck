@extends('layouts.admin')

@section('content')

    <div class="well">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Verified by</label>

                    <select name="filter_verified_at" id="" class="form-control">
                        <?php $filter_verified_at = ['*' => '', 'phone_verified_at' => 'Phone', 'admin_verified_at' => 'Admin']?>
                        @foreach($filter_verified_at as $k => $v)
                            @if(!empty($filters['filter_verified_at']) && $filters['filter_verified_at'] == $k)
                                <option value="{{$k}}" selected>{{$v}}</option>
                            @else
                                <option value="{{$k}}">{{$v}}</option>
                            @endif
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <button type="button" id="button-search" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </div>
    </div>

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
                    <td>
                        <div>{{$user->phone}}</div>
                        @if($user->phone_verified_at)
                            <strong class="text-success">Verified</strong>
                        @else
                            <strong class="text-danger">Unverified</strong>
                        @endif
                    </td>

                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        @if(!$user->admin_verified_at)
                            <a href="{{url('/admin/user/' . $user->id . '/verify')}}" class="btn btn-primary">Verify</a>
                        @endif
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

    <script>

        $(document).on("click", "#button-search", function (e) {

            let url = "{{url('/admin/unverified?')}}";

            let filter_verified_at = $("select[name='filter_verified_at']").val();

            if(filter_verified_at && filter_verified_at !== '*'){
                url += "&filter_verified_at=" + filter_verified_at;
            }

            location = url;
        });

    </script>
@endsection