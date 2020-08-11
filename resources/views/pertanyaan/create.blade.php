@extends('adminlte.master')

@section('content')
<div class="card card-primary mt-3 ml-3">
    <div class="card-header">
    <h3 class="card-title">Tulis Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
        @csrf
    <div class="card-body">
        <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', '') }}" placeholder="Enter title">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
        <label for="body">Isi</label>
        <input type="text" class="form-control" id="body" name="body" value="{{ old('body', '') }}" placeholder="body">
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
    </form>
</div>
@endsection