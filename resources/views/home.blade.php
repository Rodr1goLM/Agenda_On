@extends('templates.template')

@section('content')

  <h2>
    View Home
  </h2>

    <div class="col-8 m-auto">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Registro</th>
                    <th scope="col">Especialização</th>
                    <th scope="col">Unidade</th>
                </tr>
            </thead>
              <tbody>
                @foreach ($medicos as $medico)
                    <tr>
                    {{-- <th scope="row">{{$medicos->id}}</th> --}}
                    <th scope="row">
                      <a href="{{ route('medico.agenda', $medico->id) }}">
                          {{$medico->id}}
                      </a>
                    </th>
                    <td>{{$medico->nome}}</td>
                    <td>{{$medico->registro}}</td>
                    <td>{{$medico->especializacao}}</td>
                    <td>{{$medico->unidade}}</td>
                  </tr>               
                @endforeach
                
              </tbody>
        </table>
    </div>

@endsection