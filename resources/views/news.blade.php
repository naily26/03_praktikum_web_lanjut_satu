@extends('utama')

@section('title', 'News')

@section('content')
<p>NEWS PAGE <hr/><br></p>
    <a href="https://www.educastudio.com/{{ $news }}"> Berita Utama</a><br>
    <a href="https://www.educastudio.com/{{ $news }}/{{ $topic }}"> Berita Covid</a>
@endsection
