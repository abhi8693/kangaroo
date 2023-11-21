@extends('backend.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <h4 class="card-title">Edit Template</h4>

            <form class="forms-sample" action="{{route('templates.update',$template->id)}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH" />

                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">select Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                        <option value="{{$cat->id}}" {{$cat->id===$template->category_id ? 'selected' :''}}>{{$cat->title}} </option>
                        @endforeach
                    </select>
                    <span style="color:red"> @error('category')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Title" value="{{$template->title}}">
                    <span style="color:red"> @error('title')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Image</label>
                    <input type="file" class="form-control" name="image" id="exampleInputName1" placeholder="Image" value="{{$template->image}}">
                    <img src='{{asset("assets/img/$template->image")}}' alt="profile Pic" height="100" width="100">
                    <span style="color:red"> @error('image')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputName1" placeholder="Price" value="{{$template->price}}">
                    <span style="color:red"> @error('price')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Description </label>
                    <textarea class="form-control" name="description" id="ckeditor" placeholder="Description" >{{$template->description}}</textarea>
                    <span style="color:red"> @error('description')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Meta_title </label>
                    <input type="text" class="form-control" name="meta_t" id="exampleInputName1" placeholder="Meta_title" value="{{$template->meta_title}}">
                    <span style="color:red"> @error('meta_t')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1"> Meta_keywords</label>
                    <input type="text" class="form-control" name=" meta_k" id="exampleInputName1" placeholder="Meta_keywords" value="{{$template->meta_keywords}}">
                    <span style="color:red"> @error(' meta_k')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Meta_description</label>
                    <input type="text" class="form-control" name="meta_d" id="exampleInputName1" placeholder="Meta_description" value="{{$template->meta_description}}">
                    <span style="color:red"> @error('meta_d')
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