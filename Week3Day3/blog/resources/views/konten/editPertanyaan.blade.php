@extends('adminlte.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Question</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{$data->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{$data->judul}}">
            </div>
            <div class="form-group">
                <label for="body">Question</label>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <textarea class="form-control" id="body" rows="3" placeholder="Your question here..." name="body">{{$data->isi}}</textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection