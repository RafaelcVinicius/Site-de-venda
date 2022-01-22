<link rel="stylesheet" href="{{asset('css/adm/admindexsite.css')}}">
@extends('layouts.adm.admsite')

@section('corpo')
<div class="tudo">
    <div class="copo">

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <canvas id="myChart" width="400" height="400"></canvas>
        <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>
         


            <table id="table_id" class="">
                <thead>                
                    <tr>
                        <th>ID</th>
                        <th>Endereço</th>
                        <th>Tipo pedido</th>
                        <th>Subtotal</th>
                        <th>Data</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>@if ($pedido->id_endereco == null)
                            Local
                        @else
                            {{$pedido->endereco->endereco}}
                        @endif</td>
                        <td>{{$pedido->tipopedido}}</td>
                        <td>R$ {{$pedido->valor}}</td>
                        <td>{{date('d/m/y - H:i', strtotime($pedido->created_at))}}</td>
                        <td>{{$pedido->status}}</td>   
                        <td>1</td>      
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        
        
        <script type="text/javascript"> 
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
        
        </script>


@endsection