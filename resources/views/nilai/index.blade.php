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
          <td>Nama Matkul</td>
          <td>Nama Mahasiswa</td>
          <td>Nilai</td>
          <td colspan="2 text-center">Action</td>
        </tr>
    </thead>
    <tbody>
      @php
      $roles = ['', 'Administrator', 'Dosen', 'Mahasiswa'];
      @endphp
        @foreach($nilai as $nilais)
        <tr>
            <td>{{$nilais->id}}</td>
            <td>{{$nilais->matkul->nama}}</td>
            <td>{{$nilais->user->name}}</td>
            <td>{{$nilais->nilai}}</td>
            <td><a href="{{ route('nilai.edit', $nilais->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('nilai.destroy', $nilais->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('nilai.create')}}" class="btn btn-primary">Create new Nilai</a>
<div>
@endsection