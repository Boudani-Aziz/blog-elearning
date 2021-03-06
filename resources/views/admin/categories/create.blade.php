@extends('admin.templates.default')
@section("title")Categories @endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Kategori</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-folder"></i> Tambah Kategori</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>NAMA KATEGORI</label>
                                <input type="text" name="title" value="{{ old('title') }}" placeholder="Masukkan Nama Kategori" class="form-control @error('title') is-invalid @enderror">

                                @error('title')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
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