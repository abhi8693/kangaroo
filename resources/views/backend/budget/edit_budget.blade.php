@extends('backend.admin')
@section('content')
<div class="col-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <h4 class="card-title">Edit Niche</h4>
            <form class="forms-sample" action="{{route('budgets.update',$budget->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH" />
                @csrf
                <input type="hidden" name="id" value="{{$budget->id}}" />
                <div class="form-group">
                    <label for="exampleInputName1">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputName1" placeholder="price" value="{{$budget->price}}">
                    <span style="color:red"> @error('price')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Status</label>
                    <select name="status" class="form-control" id="exampleSelectGender">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection