@extends('auth.layout.header')

@section('content')


<div class="content">
    <div class="row">
        <div class="col-lg-30">
            <div class="card" style="padding: 39px; margin-top: -36px; margin-right: 13px; margin-left: -12px;">
                <form method="post" action="{{ route('teacherstore') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="box-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3 mt-3 w-50">
                                        <label>Class-Teacher</label>
                                        <input type="text" class="form-control" placeholder="Add Class Teacher" name="class_teacher"
                                            value="{{ old('class_teacher') }}">
                                        <span class="text-danger">
                                            @error('class_teacher')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                               
                            </div>


                            

                            <div class="form-check mb-7" style="padding: 10px; margin-left: -10px;">
                                <button class="btn btn-sm btn-info" type="submit">Add</button>
                            </div>

                </form>
            </div>
        </div>
    </div>

</div>



@endsection