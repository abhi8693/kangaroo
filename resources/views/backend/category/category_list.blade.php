@extends('backend.admin')
@section('content')
<div class="col-lg-9 stretch-card">
    <div class="card">
        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <div class="card-body">
            <div class="cards">
            <h4 class="card-title">Category List</h4>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCategory">
                + Add Category
            </button>
            </div>
            <div class="table-responsive mt-2">
                <table class="table table-bordered table-contextual">
                    <thead>
                        <tr>
                            <th> Sr No</th>
                            <th> Title</th>
                            <th> Status</th>
                            <th> Opretions</th>
                            <th> Created_At</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="table-info">
                            <td> {{$category['id']}}</td>
                            <td> {{$category['title']}}</td>
                            <td> <span class="btn btn-xs btn-detail {{ ($category->status===1) ? 'btn-success' : 'btn-danger ' }}">{{ ($category->status===1) ? 'Active' : 'Inactive ' }}</span> </td>
                            <td>
                                <a href="{{route('categories.edit',encrypt($category['id']))}}" class="btn btn-success">Edit</a>

                                <a href="{{route('categories.delete',$category['id'])}}" onclick=" return confirm('Are You Sure want to Delete');" class="btn btn-danger">Delete</a>
                            </td>
                            <td>{{date('d-m-Y',strtotime($category['created_at']))}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="forms-sample" action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Name">
                        <span style="color:red"> @error('title')
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection