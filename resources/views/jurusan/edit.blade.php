@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Jurusan </div>

                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $post->id) }}" method="post">
                            @method('put')
                            @csrf
                         
                            <div class="mb-3">
                                <label for="">Kode Mata Pelajaran</label>
                                <input type="number" name="kode" value="{{ $post->kode }}"
                                    class="form-control @error('kode') is-invalid @enderror">
                                @error('kode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Mata Pelajaran</label>
                                <input type="text" name="mapel" value="{{ $post->mapel }}"
                                    class="form-control @error('mapel') is-invalid @enderror">
                                @error('mapel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Semester</label>
                                <input type="text" name="semester" value="{{ $post->semester }}"
                                    class="form-control @error('semester') is-invalid @enderror">
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" value="{{ $post->jurusan }}"
                                    class="form-control @error('jurusan') is-invalid @enderror">
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection