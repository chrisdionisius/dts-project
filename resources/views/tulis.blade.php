@extends('master')
@section('title','Tulis Berita')
<!-- Custom styles for this template -->
<link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
@section('content')
    @include('layouts.navigation')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Tulis Berita</h1>

        <hr>
        <form action="/tulis/create" method="POST">
        {{csrf_field()}}       
            <div class="form-group">
                <label for="formGroupExampleInput">Judul Berita</label>
                <input type="text" class="form-control" name="headline" id="headline" placeholder="Judul Berita">
                <input type="hidden" class="form-control" name="id_user" id="headline" value="{{$sessionId ?? ''}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Berita </label>
                <textarea class="form-control" id="content" rows="12" name="content"></textarea>
            </div>
        
        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
        <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Publikasi</button>
        
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Pilih Kategori Berita</h5>
            <select class="form-control" name="id_kategori">
                @foreach($categories as $cat)
                <option value="{{$cat->id}}" >{{$cat->nama_kategori}}</option>
                @endforeach
            </select>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">URL Gambar</h5>
          <div class="card-body">
          <input type="text" class="form-control" name="url_gambar" id="url_gambar" placeholder="Judul Berita">
          </div>
        </div>

      </div>
      </form>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  @include('layouts.footer')
@endsection