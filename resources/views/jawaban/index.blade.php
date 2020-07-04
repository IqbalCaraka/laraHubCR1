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
                    <td>
                        <a href="/jawaban/{{$jawaban->id}}/edit" class="button btn btn-success btn-sm">Edit</a>
                    </td>
                    <td>              
                        <form action="/jawaban/{{$jawaban->id}} " method="POST">
                            {{@csrf_field()}}
                            @method('DELETE')
                            <button typen="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>    
    
        <form action="{{isset($editJawaban)? route('jawaban.update', $editJawaban->id):route('jawaban.post', $pertanyaan->id)}}" method="POST">
            {{@csrf_field()}}
            @if(isset($editJawaban))
                @method('PUT')
            @endif


            <div class="form-group">
                <label for="isi">Jawab</label>
                <textarea class="form-control" name="isi" id="isi" cols="2" rows="2" title='Masukan Jawabanmu'>{{isset($editJawaban)? $editJawaban->isi:''}}</textarea>                
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-success my-4 justify-right">
                    {{isset($editJawaban)? 'Update':'Submit'}}
                </button>
                
            </div>

        </form>
    </div>
</div>
@endsection