@extends('backend.admin')
@section('content')
<div class="col-lg-9 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">type List</h4>
            </p>
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
                    @foreach($types as $type)
                        <tr class="table-info">
                            <td> {{$type['id']}}</td>
                            <td>  {{$type['title']}}</td>
                            <td> <span class="btn btn-xs btn-detail {{ ($type->status===1) ? 'btn-success' : 'btn-danger ' }}">{{ ($type->status===1) ? 'Active' : 'Inactive ' }}</span> </td>
                            <td>
                <a href="{{route('types.edit',encrypt($type['id']))}}" class="btn btn-success">Edit</a>

                <a href="{{route('types.delete',$type['id'])}}" onclick=" return confirm('Are You Sure want to Delete');" class="btn btn-danger">Delete</a>
              </td>
              <td>{{date('d-m-Y',strtotime($type['created_at']))}}</td>

                        </tr>
@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection