@extends('admin.templates.default')
@section("title")Create Classroom

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Berita</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-book-open"></i> Tambah Rombongan Belajar</h4>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ route('admin.classroom.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>LEVEL CLASS</label>
                                        <select class="form-control select-category @error('levelclass_id') is-invalid @enderror" 
                                        id="myLevelclassselect" name="levelclass_id" >
                                            <option value="">-- SELECT --</option>
                                            @foreach ($levelclasses as $levelclass)
                                                <option value="{{ $levelclass->id }}">
                                                    {{ $levelclass->title }} | {{ $levelclass->idalphabet }} | {{ $levelclass->enalphabet }}
                                                </option>
                                            @endforeach
                                        </select>
                                       
                                        @error('levelclass_id')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                            <div class="form-group">
                                                <label>DEPARTMENT</label>
                                                <select class="form-control select-category @error('department_id') is-invalid @enderror" 
                                                id="myDepartmentselect" name="department_id" >
                                                    <option value="">-- SELECT --</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->title_id }}</option>
                                                    @endforeach
                                                </select>
                                                @error('department_id')
                                                <div class="invalid-feedback" style="display: block">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ROOM</label>
                                        <select class="form-control select-category @error('room_id') is-invalid @enderror" 
                                        name="room_id" id="myRoomselect"  >
                                            <option value="">-- SELECT --</option>
                                            @foreach ($rooms as $rooms)
                                                <option value="{{ $rooms->id }}">
                                                    {{ $rooms->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('levelclass_id')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
   

@stop