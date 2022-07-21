@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Jurusan </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Kode Mata Pelajaran</label>
                            <input type="" name="kode" value="{{ $post->kode }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Mata Pelajaran</label>
                            <input type="" name="mapel" value="{{ $post->mapel }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Semester</label>
                            <input type="" name="semester" value="{{ $post->semester }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <input type="" name="jurusan" value="{{ $post->jurusan }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jurusan.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection