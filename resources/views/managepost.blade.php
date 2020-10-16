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
                    <th>ID</th>
                    <th>KATEGORI</th>
                    <th>USER</th>
                    <th>HEADLINE</th>
                    <th>TANGGAL DIBUAT</th>
                    <th>AKSI</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$categories->find($post->id_kategori)->nama_kategori}}</td>
                    <td>{{$users->find($post->id_user)->name}}</td>
                    <td>{{$post->headline}}</td>
                    <td>{{date('l, d F Y h:mA', strtotime($post->updated_at))}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/post/{{$post->id}}">
                                <button type="button" class="btn btn-outline-warning">Lihat berita</button>
                            </a>
                            <a href="/managepost/{{$post->id}}/delete">
                                <button type="button" class="btn btn-outline-danger" onclick="return confirm('Hapus kategori ?')">Hapus berita</button>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
            <ul class="pagination justify-content-center mb-4">
            {{$posts->links()}}
            </ul>
            </div>
      </div>
    </div>

  </div>
@endsection