<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><font color="green">Halaman Biodata</font><span><font color="red"> Mahasiswa</span></font></h2>
    


 <form action="biodata" method="POST">
    @csrf
    nama : <br>
        <input type="text" name="nama" value="{{ old('nama') }}"> <br><br>
    @error('nama')
        <label style="color:red">{{ $message}}</label><br>
    @enderror
    Jenis Kelamin <br>
        <select name="gender">
            <option value="">-->Pilih<--</option>
            <option value="laki-laki"{{ old('gender') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="perempuan"{{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select><br>
        @error('gender')
            <label style="color:red">{{ $message }}</label><br>
        @enderror

        Email : <br>
        <input type="text" name="email" value="{{ old('email') }}"> <br><br>
        @error('email')
            <label style="color:red">{{ $message }}</label><br>
        @enderror

        Nomor Ponsel : <br>
        <input type="number" name="ponsel" value="{{ old('ponsel') }}"> <br>
        @error('ponsel')
            <label style="color:red">{{ $message }}</label><br>
        @enderror
        
        <button type="submit">kirim</button>
 </form>

</body>
</html>
