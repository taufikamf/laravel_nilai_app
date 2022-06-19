@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nama</td>
          <td>Deskripsi</td>
          <td colspan="2 text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($matkul as $matkuls)
        <tr>
            <td>{{$matkuls->id}}</td>
            <td>{{$matkuls->nama}}</td>
            <td>{{$matkuls->deskripsi}}</td>
            <td><a href="{{ route('matkul.edit', $matkuls->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('matkul.destroy', $matkuls->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('matkul.create')}}" class="btn btn-primary">Create new Matkul</a>
<div>
@endsection