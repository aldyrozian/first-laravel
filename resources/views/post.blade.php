@extends('layouts.main')

@section('container')
<table style="border: 1px solid black;">
    <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">ID</th>
        <th style="border: 1px solid black;">Penerima</th>
        <th style="border: 1px solid black;">Pengirim</th>
        <th style="border: 1px solid black;">Judul</th>
        <th style="border: 1px solid black;">Text Pesan</th>
        <th style="border: 1px solid black;">Waktu Pesan</th>
        <th style="border: 1px solid black;">Action</th>
    </tr>

    @foreach ($post as $post)
    <tr style="border: 1px solid black;">
        <td style="border: 1px solid black;">{{ $post->id}}</td>
        <td style="border: 1px solid black;">{{ $post->nama_penerima}}</td>
        <td style="border: 1px solid black;">{{ $post->nama_pengirim}}</td>
        <td style="border: 1px solid black;">{{ $post->judul}}</td>
        <td style="border: 1px solid black;">{{ $post->text_pesan}}</td>
        <td style="border: 1px solid black;">{{ $post->published_at}}</td>
        <td style="border: 1px solid black;"><a href="#">link</a></td>
    </tr>
    @endforeach
</table>




@endsection
