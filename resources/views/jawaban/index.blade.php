@extends('layout.app')
@section('content')

<div class="card card-default">
    <div class="card-header">
        <h1>Pertanyaan</h1>
    </div>

    <div class="card-body">
            <table class="table">
                <thead>
                    <th>
                        Judul
                    </th>
                    <th>
                        Isi
                    </th>

                    <th>
                        
                    </th>

                </thead>
                
                <tbody>
                    <tr>
                        <td>
                            {{$pertanyaan->judul}}
                        </td>

                        <td>
                            {{$pertanyaan->isi}}
                        </td>

                    </tr>
                    
                </tbody>
            </table>   
    </div>
</div>

<div class="card card-default">
    <div class="card-header">
        <h1>Jawaban</h1>
    </div>

    <div class="card-body">
        <table class="table">
 
            
            <tbody>
                @foreach($list_jawaban as $jawaban)
                <tr>
                    <td>
                        {{$jawaban->isi}}
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>    
    
        <form action="/jawaban/{{$pertanyaan->id}}" method="POST">
            {{@csrf_field()}}


            <div class="form-group">
                <label for="isi">Jawab</label>
                <textarea class="form-control" name="isi" id="isi" cols="2" rows="2" title='Masukan Jawabanmu'></textarea>                
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-success my-4 justify-right">
                Submit
                </button>
            </div>

        </form>
    </div>
</div>
@endsection