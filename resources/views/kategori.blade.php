@extends('master')
@section('title','Kategori')
<!-- Custom styles for this template -->
<link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
@section('content')
    @include('layouts.navigation')
  <!-- Page Content -->
  <!-- Page Content -->
  <div class="container">
      @if(session('sukses'))
        <div class="alert alert-success" role="alert">{{session('sukses')}} </div>
      @endif
    <div class="row">
        <div class="col-6">
            <h1>Daftar Kategori</h1>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Kategori</button>
        </div>
            <div class="table-responsive">
            <table class="table table-dark table-hover table-bordered">
                <tr>
                    <th>NAMA KATEGORI</th>
                    <th>TANGGAL DIBUAT</th>
                    <th>AKSI</th>
                </tr>
                @foreach($categories as $cat)
                <tr>
                    <td>{{$cat->nama_kategori}}</td>
                    <td>{{$cat->updated_at}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/kategori/{{$cat->id}}/edit">
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                        </a>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/kategori/create" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Kategori</label>
                            <input name="nama_kategori" type="text" class="form-control" id="nama_kategori" aria-describedby="nama_kategori">
                        </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>



  </div>
@endsection