@extends('master')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3>Update Customer</h3>
            <form method="post" action="{{route('customers.update', ['id'=>$customer->id])}}" enctype="multipart/form-data">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$customer->name}}" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label>MKH</label>
                        <input type="text" name="customer_number" value="{{$customer->customer_number}}" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Birthday</label>
                        <input type="date" name="birthday" value="{{$customer->birthday}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{$customer->phone}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" value="{{$customer->email}}" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{$customer->address}}" class="form-control">
                </div>
                <label for="inputFileName">Avatar</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile" value="{{$customer->image}}">
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('storage/'.$customer->image)}}" style="width: 100px;height: 100px">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{route('customers.list')}}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
