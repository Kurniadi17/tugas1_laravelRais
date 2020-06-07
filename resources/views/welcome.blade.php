<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body> 
    <form action="{{route('tugas.store')}}" method="POST">
        @csrf
       <div class="form-group">
         <label for="formGroupExampleInput">Nama</label>
         <input name="nama" type="text" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput2">Nomor Urut</label>
        <input name="nomor_urut" type="text" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Kelas</label>
          <input name="kelas" type="text" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Nomor HP</label>
          <input name="no_hp" type="text" class="form-control" id="formGroupExampleInput2">
        </div>
        <button type="submit">Submit</button>
      </form> 
</body>
</html>