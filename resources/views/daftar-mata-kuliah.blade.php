<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Daftar Mata Kuliah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-4">
    <h2 class="mb-4">Daftar Mata Kuliah</h2>

    @if(!empty($mata_kuliah) && count($mata_kuliah) > 0)
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Dosen Pengampu</th>
          </tr>
        </thead>
        <tbody>
          @foreach($mata_kuliah as $i => $mk)
            <tr>
              <td>{{ $i+1 }}</td>
              <td>{{ $mk['kode'] }}</td>
              <td>{{ $mk['nama'] }}</td>
              <td>{{ $mk['sks'] }}</td>
              <td>{{ $mk['dosen'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <div class="alert alert-warning">Belum ada data mata kuliah.</div>
    @endif
  </div>
</body>
</html>
