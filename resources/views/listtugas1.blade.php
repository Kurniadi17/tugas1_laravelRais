<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Nomor Urut</th>
                <th>Kelas</th>
                <th>Nomor HP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listtugas1 as $tugas)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$Tugas->Nama}}</td>
                <td>{{$Tugas->Nomor_Urut}}</td>
                <td>{{$Tugas->Kelas}}</td>
                <td>{{$Tugas->No_HP}}</td>
                <td>
                    <form action="{{route('tugas.edit',$Tugas->id)}}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit">Edit</button>
                    </form>
                    
                    <form action="{{route('tugas.delete',$Tugas->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>