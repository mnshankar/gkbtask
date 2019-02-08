@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="table-responsive">
        <table class="table table-dark table-sm table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th>data-1</th>
                        <th>data-2</th>
                        <th>data-3</th>
                        <th>data-4</th>
                        <th>data-5</th>
                        <th>data-6</th>
                        <th>data-7</th>
                        <th>data-8</th>
                        <th>data-9</th>
                        <th>data-10</th>
                        <th>data-11</th>
                        <th>data-12</th>
                        <th>data-13</th>
                        <th>data-14</th>
                        <th>data-15</th>
                        <th>data-16</th>
                        <th>data-17</th>
                        <th>data-18</th>
                        <th>data-19</th>
                        <th>data-20</th>                        
                    </tr>
                </thead>
                <tbody>
        <div class="card-body">
          @foreach ($reportData as $row)
                <tr>               
                    
                      <td scope="row">{{$row->id}}</td>
                      <td>{{$row->{'data-1'} }}</td>
                      <td>{{$row->{'data-2'} }}</td>
                      <td>{{$row->{'data-3'} }}</td>
                      <td>{{$row->{'data-4'} }}</td>
                      <td>{{$row->{'data-5'} }}</td>
                      <td>{{$row->{'data-6'} }}</td>
                      <td>{{$row->{'data-7'} }}</td>
                      <td>{{$row->{'data-8'} }}</td>
                      <td>{{$row->{'data-9'} }}</td>                      
                      <td>{{$row->{'data-10'} }}</td>
                      <td>{{$row->{'data-11'} }}</td>
                      <td>{{$row->{'data-12'} }}</td>
                      <td>{{$row->{'data-13'} }}</td>
                      <td>{{$row->{'data-14'} }}</td>
                      <td>{{$row->{'data-15'} }}</td>
                      <td>{{$row->{'data-16'} }}</td>
                      <td>{{$row->{'data-17'} }}</td>
                      <td>{{$row->{'data-18'} }}</td>
                      <td>{{$row->{'data-19'} }}</td>
                      <td>{{$row->{'data-20'} }}</td>

                </tr>                              
          @endforeach
        </tbody>
    </table>
        </div>
        </div>

        {!!$reportData->links()!!}
      </div>
    
@endsection