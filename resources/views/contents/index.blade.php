<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="/blog/Image/fav.ico">


    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
<div id="app">
 
    <div class="container-fluid">
        <h2 class="page-header">List of Content</h2>
        <p>Cari Content :</p>
        <div class="form-group">
                    
        </div>
        <form action="./contents/cari" method="GET" class="form-inline">
            <input class="form-control" type="text" name="cari" placeholder="Cari Content .." value="{{ old('cari') }}">
            <input class="btn btn-primary ml-3" type="submit" value="Search">
        </form>

        <br/>
        <br/>

        <a href="./contents/tambah"> + Add </a>

        <br/>
        <br/>
        <table class="table table-bordered table-dark table-md table-hover">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col" style="width: 256px;">Excerpt</th>
                <th scope="col">Content</th>
                <th scope="col" style="width: 136px;">Opsi</th>
               
            </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->title }}</td>
                    <td>{{ $d->excerpt }}</td>
                    <td>{{ $d->content }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="./contents/edit/{{ $d->id }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="./contents/hapus/{{ $d->id }}">Delete</a>
                    </td>    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
 
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>