<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f9;
    }

    form {
        width: 350px;
        margin: 40px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    input {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        width: 100%;
        padding: 8px;
        background-color: #28a745;
        border: none;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.9;
    }

    a {
        display: block;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        color: #007bff;
    }

    h1 {
        text-align: center;
    }
</style>

<h1>Tambah Siswa</h1>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    <label>Nama:</label>
    <input type="text" name="nama" required>
    <br>

    <label>Umur:</label>
    <input type="text" name="umur" required>
    <br>

    <label>Nilai:</label>
    <input type="number" name="nilai" required>
    <br>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('siswa.index') }}">Kembali</a>