@extends('backend.admin')
@section('content')
<div class="col-lg-9 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">nich List</h4>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCategory">
                + Add Category
            </button>

            <div class="table-responsive">
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
                        @foreach($niche as $nich)
                        <tr class="table-info">
                            <td> {{$nich['id']}}</td>
                            <td> {{$nich['title']}}</td>
                            <td> <span class="btn btn-xs btn-detail {{ ($nich->status===1) ? 'btn-success' : 'btn-danger ' }}">{{ ($nich->status===1) ? 'Active' : 'Inactive ' }}</span> </td>
                            <td>
                                <a href="{{route('niches.edit',encrypt($nich['id']))}}" class="btn btn-success" data-toggle="modal" data-target="#editCategory{{$nich->id}}">Edit</a>

                                <a href="{{route('categories.delete',$nich['id'])}}" onclick=" return confirm('Are You Sure want to Delete');" class="btn btn-danger">Delete</a>
                            </td>
                            <td>{{date('d-m-Y',strtotime($nich['created_at']))}}</td>
                        </tr>

                        <div class="modal fade" id="editCategory{{$nich->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="forms-sample" action="{{route('niches.update',$nich->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="PATCH" />
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="title" value="{{$nich->title}}" id="exampleInputName1" placeholder="Name">
                                                <span style="color:red"> @error('title')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleSelectGender">Status</label>
                                                <select name="status" class="form-control" id="exampleSelectGender">
                                                    <option value="1" @if($nich->status==1) ? 'selected' : '' @endif>Active</option>
                                                    <option value="0" @if($nich->status==0) ? 'selected' : '' @endif>Inactive</option>

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
            <form class="forms-sample" action="{{route('niches.store')}}" method="post" enctype="multipart/form-data">
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