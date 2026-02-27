<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        button {
            padding: 5px 10px;
            border: none;
            background-color: red;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            opacity: 0.8;
        }

        .btn-tambah {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: green;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Data Siswa</h1>

    <a href="{{ route('siswa.create') }}" class="btn-tambah">Tambah Siswa</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>

        @foreach($siswa as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->umur }}</td>
            <td>{{ $row->nilai }}</td>
            <td>
                <a href="{{ route('siswa.edit', $row->id) }}">Edit</a>

                <form action="{{ route('siswa.destroy', $row->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</div>

</body>
</html>