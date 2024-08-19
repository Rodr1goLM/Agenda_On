@extends('templates.template')

@section('content')

<h2>
    View Agenda Mes
  </h2>

    <div class="col-26 m-auto">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">Dia</th>
                    <th scope="col">00:00</th>
                    <th scope="col">01:00</th>
                    <th scope="col">02:00</th>
                    <th scope="col">03:00</th>
                    <th scope="col">04:00</th>
                    <th scope="col">05:00</th>
                    <th scope="col">06:00</th>
                    <th scope="col">07:00</th>
                    <th scope="col">08:00</th>
                    <th scope="col">09:00</th>
                    <th scope="col">10:00</th>
                    <th scope="col">11:00</th>
                    <th scope="col">12:00</th>
                    <th scope="col">13:00</th>
                    <th scope="col">14:00</th>
                    <th scope="col">15:00</th>
                    <th scope="col">16:00</th>
                    <th scope="col">17:00</th>
                    <th scope="col">18:00</th>
                    <th scope="col">19:00</th>
                    <th scope="col">20:00</th>
                    <th scope="col">21:00</th>
                    <th scope="col">22:00</th>
                    <th scope="col">23:00</th>
                </tr>
            </thead>
              <tbody>
                @foreach ($agendas as $agenda)
                    <tr>
                    <td>{{$agenda->dia}}</td>
                    <td>{{$agenda->h_00}}</td>
                    <td>{{$agenda->h_01}}</td>
                    <td>{{$agenda->h_02}}</td>
                    <td>{{$agenda->h_03}}</td>
                    <td>{{$agenda->h_04}}</td>
                    <td>{{$agenda->h_05}}</td>
                    <td>{{$agenda->h_06}}</td>
                    <td>{{$agenda->h_07}}</td>
                    <td>{{$agenda->h_08}}</td>
                    <td>{{$agenda->h_09}}</td>
                    <td>{{$agenda->h_10}}</td>
                    <td>{{$agenda->h_11}}</td>
                    <td>{{$agenda->h_12}}</td>
                    <td>{{$agenda->h_13}}</td>
                    <td>{{$agenda->h_14}}</td>
                    <td>{{$agenda->h_15}}</td>
                    <td>{{$agenda->h_16}}</td>
                    <td>{{$agenda->h_17}}</td>
                    <td>{{$agenda->h_18}}</td>
                    <td>{{$agenda->h_19}}</td>
                    <td>{{$agenda->h_20}}</td>
                    <td>{{$agenda->h_21}}</td>
                    <td>{{$agenda->h_22}}</td>
                    <td>{{$agenda->h_23}}</td>
                  </tr>               
                @endforeach
                
              </tbody>
        </table>
    </div>

@endsection