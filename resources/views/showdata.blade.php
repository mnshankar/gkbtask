@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="table-responsive">
        <table id="table" class="table table-sm table-hover">
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
                
    </table>
        </div>
        </div>

      </div>
     
@endsection

@section('customJS')
{{-- <script>
    $(document).ready(function() {
      $('#table').DataTable(
        {
          "deferLoading": 50
        }
      );
  } );
</script> --}}
<script>
  $(document).ready(function() {
      $('#table').DataTable({
          serverSide: true,
          processing: true,
          responsive: true,
          ajax: "{{ route('data') }}",
          columns: [
              { name: 'id' },
              { name: 'data-1' },
              { name: 'data-2' },
              { name: 'data-3' },
              { name: 'data-4' },
              { name: 'data-5' },
              { name: 'data-6' },
              { name: 'data-7' },
              { name: 'data-8' },
              { name: 'data-9' },
              { name: 'data-10' },
              { name: 'data-11' },
              { name: 'data-12' },
              { name: 'data-13' },
              { name: 'data-14' },
              { name: 'data-15' },
              { name: 'data-16' },
              { name: 'data-17' },
              { name: 'data-18' },
              { name: 'data-19' },
              { name: 'data-20' }             
          ],
      });
  });
</script>
@endsection