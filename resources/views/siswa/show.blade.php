@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Nis</label>
                            <input type="text" name="nis" value="{{ $post->nis }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" name="nama" value="{{ $post->nama }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <textarea type="text"name="alamat" class="form-control" readonly>{{ $post->alamat }}
                                </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" name="tanggal" value="{{ $post->tanggal }}" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection