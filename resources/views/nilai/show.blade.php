@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Nilai </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Nis</label>
                            <input type="" name="nis" value="{{ $post->nis }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Kode Mata Pelajaran</label>
                            <input type="" name="kode" value="{{ $post->kode }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Nilai</label>
                            <input type="" name="nilai" value="{{ $post->nilai }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Grade</label>
                            <input type="" name="grade" value="{{ $post->grade }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('nilai.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection