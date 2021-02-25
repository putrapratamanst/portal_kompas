@extends('layouts.app')
@section('content')

<center>
    <h1> 
    Portal Dashboard
</h1>
<a class="btn btn-success" href="/article/create">New Article</a>
</center>
<br>
<div class="container">
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Author</th>
        <th>Tanggal Terbit</th>
        <th>Status</th>
        <th colspan="3" style="text-align: center">Aksi</th>
    </tr>
    @foreach($listArticle as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->title }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->published_date}}</td>
        <td>{{ $p->status ==  1  ? "Published" : "Unpublished" }}</td>
        <td>

            <form method="POST" action="/article/edit/{{ $p->id }}">
                {{ csrf_field() }}
                {{ method_field('GET') }}
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                    </div>
            </form>
        </td>
        <td>
            <form method="POST" action="/article/change/{{ $p->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Change</button>
                    </div>
            </form>
        </td>
        <td>
            <form method="POST" action="/article/delete/{{ $p->id }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </div>
            </form>
        </td>
{{-- 
            <a class="btn btn-warning btn-sm" href="/article/edit/{{ $p->id }}">Edit</a>
            <a class="btn btn-primary btn-sm" href="/article/change-status/{{ $p->id }}">Status</a>
 --}}
    </tr>
    @endforeach
</table>
</div>
@endsection
