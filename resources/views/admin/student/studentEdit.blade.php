
@extends('auth.layout.header')

@section('content')


<div class="content">
    <div class="row">
        <div class="col-lg-30">
            <div class="card" style="padding: 39px; margin-top: -36px; margin-right: 13px; margin-left: -12px;">
            <form method="post" action="{{ route('studentupdate',$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="box-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 mt-3 w-50">
                                        <label>Student-Name</label>
                                        <input type="text" class="form-control" placeholder="Add Student-Name"
                                            name="student_name" value="{{ $data->student_name }}">
                                        <span class="text-danger">
                                            @error('student_name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3 mt-3 w-50">
                                        <label>Class-Teacher</label>

                                        <select class="form-control" name="class_teacher_id">
                                            <option value="" disabled selected>Select Your Class Teacher</option>
                                            @foreach($new as $user)
                                            <option value="{{ $user->id }}"
                                            {{ old('class_teacher_id', $data->class_teacher_id) == $user->id ? 'selected' : '' }}>
                                            {{ $user->class_teacher }}
                                            </option>
                                            @endforeach
                                        </select>

                                        <span class="text-danger">
                                            @error('class_teacher_id')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3 mt-3 w-50">
                                        <label>Class</label>
                                        <input type="text" class="form-control" placeholder="Add Class" name="class"
                                        value="{{ $data->class }}">
                                        <span class="text-danger">
                                            @error('class')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 mt-3 w-50">
                                        <label>Admission-Date</label>
                                        <input type="date" class="form-control" name="admission_date"
                                        value="{{ $data->admission_date }}">
                                        <span class="text-danger">
                                            @error('admission_date')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3 mt-3 w-50">
                                        <label>Year-fess</label>
                                        <input type="text" class="form-control" placeholder="Add Year-fess "
                                            name="yearly_fess" value="{{ $data->yearly_fess }}">
                                        <span class="text-danger">
                                            @error('yearly_fess')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>




                            <div class="form-check mb-7" style="padding: 10px; margin-left: -10px;">
                                <button class="btn btn-sm btn-info" type="submit">Update</button>
                            </div>

                </form>
            </div>
        </div>
    </div>

</div>



@endsection