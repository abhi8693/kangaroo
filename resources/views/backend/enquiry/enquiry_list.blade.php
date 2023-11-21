@extends('backend.admin')
@section('content')
<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enquiry List</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-contextual">
                    <thead>
                        <tr>
                            <th> Sr No</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Category</th>
                            <th> Niche</th>
                            <th> Type</th>
                            <th> Budget</th>
                            <th> Status</th>
                            <th> Created_At</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enquiry as $enq)
                        <tr class="table-info">
                            <td> {{$enq['id']}}</td>
                            <td> {{$enq['name']}}</td>
                            <td> {{$enq['email']}}</td>
                            <td> {{$enq['phone']}}</td>
                            <td> {{$enq['category']}}</td>
                            <td> {{$enq['niche']}}</td>
                            <td> {{$enq['type']}}</td>
                            <td> {{$enq['budget']}}</td>
                            <td> <span class="btn btn-xs btn-detail {{ ($enq->status===1) ? 'btn-success' : 'btn-danger ' }}">{{ ($enq->status===1) ? 'Active' : 'Inactive ' }}</span> </td>
                          
                            <td>{{date('d-m-Y',strtotime($enq['created_at']))}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection