@extends('adminlte.master')

@section('content')
<div class="card card-info" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
    <div class="card-header">
        <h3 class="card-title">{{$data->judul}}</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {{$data->isi}}
    </div>
    <!-- /.card-body -->
</div>
@endsection