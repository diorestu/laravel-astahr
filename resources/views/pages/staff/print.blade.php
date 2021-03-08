<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <style>
    table, td, th {
    border: 1px solid black;
    }
    

    table {
    width: 100%;
    border-radius: 10px;
    }
    </style> --}}
</head>
<body>
<img src="{{ asset('assets/media/logos/logo-astapijar.png') }}" width="40px" alt=""> 
<h2>Laporan Keuangan</h2>
<div>
    <table class="table table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
      @php
          $no = 1;
      @endphp
    @foreach ($data as $d)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $d->name }}</td>
      <td>{{ $d->alamat }}</td>
      <td>{{ $d->lahir }}</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>
</table>
</div>

</body>
</html>



