@extends('admin.templates.default')
@section("title")PARTICIPANT @endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Participant</h1>
                
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-bell"></i> Add Participant</h4>
                        <div class="card-header-action">
                            <a href="{{ route('admin.participant.index') }}" class="btn btn-info btn-reset">BACK</a>
                          </div>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.participant.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group text-center">
                                <label>Photo</label> <br />

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new img-thumbnail" style="width: 250px;">
                                        <img src="{{ asset('/assets/admin/img/avatar/avatar-5.png') }}">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 250px;"></div>
                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                        <input type="file" class="@error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"></span>
                                        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>EVENT</label>
                                <select class="form-control select-category @error('event_id') is-invalid @enderror" name="event_id">
                                    <option value="">-- SELECT EVENT --</option>
                                    @foreach ($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->title }}</option>
                                    @endforeach
                                </select>
                                @error('event_id')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK" class="form-control @error('nik') is-invalid @enderror">
        
                                        @error('nik')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-9 col-lg-9">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Legkap" class="form-control @error('name') is-invalid @enderror">
        
                                        @error('name')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="birthplace" value="{{ old('birthplace') }}" placeholder="Masukkan Tempat Lahir" class="form-control @error('birthplace') is-invalid @enderror">
        
                                        @error('birthplace')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="dateofbirth" value="{{ old('dateofbirth') }}" placeholder="Masukkan Nama Legkap" class="form-control @error('dateofbirth') is-invalid @enderror">
        
                                        @error('dateofbirth')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label>Jenis Kelamin </label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" 
                                   value="Laki-laki" >
                                  <label class="form-check-label" for="gender">
                                    Laki-laki
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" 
                                  value="Perempuan"  >
                                  <label class="form-check-label" for="gender">
                                    Perempuan
                                  </label>
                                </div>

                                @error('gender')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="religion" 
                                      value="Islam" >
                                    <label class="form-check-label" for="religion">
                                      Islam
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="religion" 
                                    value="Katholik"  >
                                    <label class="form-check-label" for="religion">
                                        Katholik
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="religion" 
                                    value="Hindu"  >
                                    <label class="form-check-label" for="religion">
                                        Hindu
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="religion" 
                                     value="Budha"  >
                                    <label class="form-check-label" for="religion">
                                        Budha
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="religion" 
                                    value="Konghucu"  >
                                    <label class="form-check-label" for="religion">
                                        Konghucu
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="religion" 
                                     value="Kepercayaan"  >
                                    <label class="form-check-label" for="religion">
                                        Kepercayaan
                                    </label>
                                  </div>
                                {{-- <input type="text" name="religion" value="{{ old('religion', $participant->religion) }}" placeholder="Masukkan Agama" class="form-control @error('religion') is-invalid @enderror"> --}}

                                @error('religion')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>No. Handphone</label>
                                        <input type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan No. Handphone" class="form-control @error('no_hp') is-invalid @enderror">
        
                                        @error('no_hp')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>No. Whatsapp</label>
                                        <input type="text" name="no_wa" value="{{ old('no_wa') }}" placeholder="Masukkan No. Whatsapp" class="form-control @error('no_wa') is-invalid @enderror">
        
                                        @error('no_wa')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jabatan DPD/DPC</label>
                                <input type="text" name="jabatan_dpc" value="{{ old('jabatan_dpc') }}" placeholder="Masukkan Jabatan DPC/DPD" class="form-control @error('jabatan_dpc') is-invalid @enderror">

                                @error('jabatan_dpc')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status Kenggotaan DPRD</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_dprd" 
                                   value="Ya" >
                                  <label class="form-check-label" for="status_dprd">
                                    Ya
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_dprd" 
                                   value="Tidak"  >
                                  <label class="form-check-label" for="status_dprd">
                                    Tidak
                                  </label>
                                </div>

                                @error('status_dprd')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jabatan DPRD</label>
                                <input type="text" name="jabatan_dprd" value="{{ old('jabatan_dprd') }}" placeholder="Masukkan Jabatan DPRD" class="form-control @error('jabatan_dprd') is-invalid @enderror">

                                @error('jabatan_dprd')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="address" value="{{ old('address') }}" placeholder="Masukkan alamat" class="form-control @error('address') is-invalid @enderror">

                                @error('address')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" name="rt" value="{{ old('rt') }}" placeholder="Masukkan RT" class="form-control @error('rt') is-invalid @enderror">
        
                                        @error('rt')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-9 col-lg-9">
                                    <div class="form-group">
                                        <label>Dusun/Desa/Kelurahan</label>
                                        <input type="text" name="district" value="{{ old('district') }}" placeholder="Dusun/Desa/Kelurahan" class="form-control @error('district') is-invalid @enderror">
        
                                        @error('district')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-5 col-lg-5">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" name="vilage" value="{{ old('vilage') }}" placeholder="Kecamatan" class="form-control @error('vilage') is-invalid @enderror">
        
                                        @error('vilage')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-lg-5">
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <input type="text" name="city" value="{{ old('city') }}" placeholder="Kabupaten/Kota" class="form-control @error('city') is-invalid @enderror">
        
                                        @error('city')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="number" name="postalcode" value="{{ old('postalcode') }}" placeholder="Kode Pos" class="form-control @error('postalcode') is-invalid @enderror">
        
                                        @error('postalcode')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-upload"></i> SAVE</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
                            <a href="{{ route('admin.participant.index') }}" class="btn btn-info btn-reset">BACK</a>

                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>

  
    @push('page-style')
    <!-- Jasny Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/modules/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css')}}">
    @endpush
    @push('page-script')
    <!-- Jasny Bootstrap 4 -->
    <script src="{{ asset('/assets/admin/modules/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js')}}"></script>
   
    @endpush
@stop