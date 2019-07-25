@extends('layouts.dashboard')


@section('content-dashboard')
    <form action="{{route('cargo.store')}}" method="post">
        @csrf
        <input type="hidden" name="shipping" value="{{$shipping}}">
        <div class="form-group">
            <label for="shipper">Shipper</label>
            <select name="shipper" id="shipper" class="form-control">
                @foreach($shippers as $shipper)
                    <option value="{{$shipper->id}}">{{$shipper->email}} / {{$shipper->firm}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control">
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->id}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="length">Length</label>
            <input type="number" name="length" min="0" placeholder="length" id="length" class="form-control">
        </div>

        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" name="weight" min="0" placeholder="weight" id="weight" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection