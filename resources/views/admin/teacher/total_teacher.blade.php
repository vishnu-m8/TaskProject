@extends('auth.layout.header')

@section('content')
<style>
    #example_wrapper {
        overflow-x: scroll !important;
    }

    .btn.btn-sm {
        font-size: 12px;
        line-height: 13px;
        padding: 5px 9px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-30">
            <div class="card">
                <div class="card-body">
                    <!-- Your table and scripts go here -->
                    <div class="box-content">
                        <div class="text-right">
                        <a class="btn btn-sm btn-info" href="{{ route('teacheradd') }}">Add
                                    Teacher
                                </a>
                        </div>
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Teacher</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($teacher_listing as $banner)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $banner->class_teacher }}</td>
                                        <td>
                                            <a href="{{ route('teacheredit', ['id' => $banner->id] ) }}"><i
                                                    class="fa fa-edit fa-2x" style="color:blue"></i></a>
                                            <a onclick="return confirm('Are you sure?')"
                                                href="{{ route('teacherdestory', ['id' => $banner->id] ) }}"><i
                                                    class="fa fa-trash fa-2x" style="color:red"></i></a>
                                            @csrf
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>








@endsection