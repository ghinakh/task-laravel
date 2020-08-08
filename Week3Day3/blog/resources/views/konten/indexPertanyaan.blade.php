@extends('adminlte.master')

@section('content')
<div class="div">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Questions</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-primary alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session('success') }}</strong>
            </div>
            @endif
            <a href="/pertanyaan/create" class="btn btn-info mb-3">Create New Question</a>
            <table id="pertanyaan" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body(Question)</th>
                        <th>Created_at</th>
                        <th>Update_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $k => $val)
                    <tr>
                        <td><?= $k + 1; ?></td>
                        <td><?= $val->judul; ?></td>
                        <td><?= substr($val->isi, 0, 50) . '...'; ?></td>
                        <td><?= $val->tanggal_dibuat; ?></td>
                        <td><?= $val->tanggal_diperbaharui; ?></td>
                        <td style="color: whitesmoke;display:flex">
                            <a href="/pertanyaan/{{$val->id}}" class="btn btn-info btn-sm">More</a>
                            <a href="/pertanyaan/{{$val->id}}/edit" class="btn btn-success btn-sm">Update</a>
                            <form action="/pertanyaan/{{$val->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function() {
        $("#pertanyaan").DataTable();
    });
</script>
@endpush