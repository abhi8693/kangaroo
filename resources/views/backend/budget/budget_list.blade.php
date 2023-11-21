@extends('backend.admin')
@section('content')
<div class="col-lg-9 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">nich List</h4>
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
                    @foreach($budgets as $budget)
                        <tr class="table-info">
                            <td> {{$budget['id']}}</td>
                            <td>  {{$budget['price']}}</td>
                            <td> <span class="btn btn-xs btn-detail {{ ($budget->status===1) ? 'btn-success' : 'btn-danger ' }}">{{ ($budget->status===1) ? 'Active' : 'Inactive ' }}</span> </td>
                            <td>
                <a href="{{route('budgets.edit',encrypt($budget['id']))}}" class="btn btn-success">Edit</a>

                <a href="{{route('budgets.delete',$budget['id'])}}" onclick=" return confirm('Are You Sure want to Delete');" class="btn btn-danger">Delete</a>
              </td>
              <td>{{date('d-m-Y',strtotime($budget['created_at']))}}</td>

                        </tr>
@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection