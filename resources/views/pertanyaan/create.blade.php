@extends('layout.app')
@section('content')
<h1>
    {{isset($pertanyaan)? 'Edit Pertanyaan' :'Buat Pertanyaan'}}
</h1>

<form action=" {{isset($pertanyaan)? route('pertanyaan.update', $pertanyaan->id):'/pertanyaan'}}" method="POST">
    {{@csrf_field()}}
    @if(isset($pertanyaan))
        @method('PUT')
    @endif
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" title="Masukan Judul" value="{{isset($pertanyaan)? $pertanyaan->judul :''}}">                
    </div>

    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" name="isi" id="isi" cols="5" rows="10" title='Masukan Pertanyaanmu'>{{isset($pertanyaan)? $pertanyaan->isi :''}}</textarea>                
    </div>

    <div class="form-group">
        <button type="submit"class="btn btn-success my-4 justify-right">
        {{isset($pertanyaan)? 'Update' :'Submit'}}
        </button>
    </div>

</form>
@endsection