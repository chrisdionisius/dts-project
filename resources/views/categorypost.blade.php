@extends('master')
@section('title','Beranda')
  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
@section('content')
    @include('layouts.navigation')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Recent News|
            <small>Baca Berita Terbaru di Sini</small>
            </h1>

            @foreach($posts as $post)
            <!-- Blog Post -->
            <div class="card mb-4">
            <img class="img-thumbnail img-fluid gambar" src="{{$post->url_gambar}}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$post->headline}}</h2>
                <p class="card-text">{{substr($post->content,0,300)}}.......</p>
                <a href="/post/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                {{date('l, d F Y', strtotime($post->created_at))}} By
                <a href="#">{{$author->find($post->id_user)->name}}</a>
            </div>
            </div>
            @endforeach

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
            {{$posts->links()}}
            </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-append">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                </div>
            </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
            <h5 class="card-header">Pilih Kategori</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 list-menu">
                        @foreach($categories as $category)
                            <a href="/home/kategori/{{$category->id}}">
                                <button type="button" class="btn btn-primary btn-sm mt-1">
                                    {{$category->nama_kategori}}
                                </button>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>

            
        </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    @include('layouts.footer')
@endsection