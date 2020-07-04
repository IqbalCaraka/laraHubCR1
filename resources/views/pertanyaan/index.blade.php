@extends('layout.app')
@section('content')



<div class="card card-default">
    <div class="card-header">
        <h1>List Pertanyaan</h1>
    </div>

    <div class="card-body">
        @if($list_pertanyaan -> count() > 0)
            <table class="table">
                <thead>
                    <th>
                        Judul
                    </th>
                    <th>
                        Isi
                    </th>



                </thead>
                
                <tbody>
                    @foreach ($list_pertanyaan as $pertanyaan)
                    <tr>
                        <td>
                            {{$pertanyaan->judul}}
                        </td>

                        <td>
                            {{$pertanyaan->isi}}
                        </td>

                        <td>
                            <a href="/jawaban/{{$pertanyaan->id}}" class="button btn btn-info btn-sm">Jawab</a>
                            <a href="/pertanyaan/{{$pertanyaan->id}}" class="button btn btn-success btn-sm">Edit</a>
                        </td>
                        <td>                            
                            <form action="/pertanyaan/{{$pertanyaan->id}} " method="POST">
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
        @else
            <h3 class="text-center">Tidak ada daftar pertanyaan</h3>
        @endif
        
        
    </div>
</div>
@endsection