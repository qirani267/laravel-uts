<span class="d-block p-2 bg-dark text-white">
  <h3 style="text-align: center">Daftar Hp</h3>
</span><br>
<div class="container">
  <a class="btn btn-primary" href="/tambah-hp"> ADD NEW</a>
</div><br>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      text-align: center;
    }
    /* h1 {
      font-family: arial, sans-serif;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    } */
    </style>
<div class="container">
  <div class="card border-dark mb-3">
<table class="table">
  <thead class="thead-dark">
    <tr>
    <th>Merk Hp</th>
    <th>Tipe Hp</th>
    <th>Tahun</th>
    <th>Action</th>
    </tr>
  </thead>
    @if (empty($data))
        <tr >
            <td class="alert alert-danger" role="alert" colspan="4">hp kosong</td>
        </tr>
    @endif
        @foreach($data as $j)
        <tbody>
        <tr>
            <td>{{ $j->merk_hp}}</td> 
            <td>{{ $j->type_hp}}</td> 
            <td>{{ $j->tahun}}</td>
            <td>
                <a class="btn btn-warning" href="/ubah-hp/{{$j->id}}">Edit</a>
                <a class="btn btn-danger" href="/hapus-hp/{{$j->id}}"> Hapus</a>
            </td>
        </tr>
        </tbody>
        @endforeach
  </table>
  </div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  