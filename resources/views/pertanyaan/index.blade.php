@extends('adminlte.master')

@section('content')
    <div class="mt-3" ml-3>
    <div class="card">
            <div class="card-header">
            <h3 class="card-title">Tabel Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
            <a href="/pertanyaan/create" class="btn btn-primary mb-2">Bertanya?</a>
            <table class="table table-bordered">
                <thead>                  
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th style="width: 40px">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($tables as $key => $table)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $table->judul }}</td>
                            <td>{{ $table->isi }}</td>
                            <td style="display: flex;">
                                <a href="/pertanyaan/{{$table->id}}" class="btn  btn-info btn-sm mr-1">show</a>
                                <a href="/pertanyaan/{{$table->id}}/edit" class="btn  btn-default btn-sm mr-1">edit</a>
                                <form action="/pertanyaan/{{$table->id}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <input type="submit" value="delete" class="btn btn-danger btn_sm">
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" align="center">Data Kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
            </div> -->
        </div>
    </div>
@endsection