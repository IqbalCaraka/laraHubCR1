@extends('layout.app')
@section('content')
<h1>Untuk membuat pertanyaan</h1>
<form action="/pertanyaan" method="POST">
    {{@csrf_field()}}
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" title="Masukan Judul">                
    </div>

    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" name="isi" id="isi" cols="5" rows="10" title='Masukan Pertanyaanmu'></textarea>                
    </div>

    <div class="form-group">
        <button type="submit"class="btn btn-success my-4 justify-right">
        Submit
        </button>
    </div>

</form>
@endsection