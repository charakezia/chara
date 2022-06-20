<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-dark bg-primary rounded-bottom">
                <a class="navbar-brand" href="#"><i class="bi bi-house-fill"></i></a>
                </nav>
            </div>
        </div>
    </div>
            
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-4 col-12">
                    <div class="nav flex-column nav-pills" role="tablist" ariaorientation="vertical">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="/dosen">Dosen</a>
                        <a class="nav-link bg-primary text-white rounded-0 p-2 border active" href="/mahasiswa">Mahasiswa</a>
                        <a class="nav-link" href="/skripsi">Skripsi</a>
                    </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">

        <div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/updatemahasiswa/{{$mahasiswa-> id}}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group w-25">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>
            <label>Gender</label>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Laki-laki" {{ $mahasiswa->gender = 'Laki-laki' ? 'checked':'' }} 
                class="form-check-input">
                <label>Laki-laki</label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Wanita" {{ $mahasiswa->gender = 'Wanita' ? 'checked':'' }} 
                class="form-check-input">
                <label>Wanita</label>
            </div>
            <div class="form-group w-25">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="Sistem Informasi" {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
                    <option value="Informatika" {{ $mahasiswa->jurusan == 'Informatika' ? 'selected':'' }}>Informatika</option>
                    <option value="Management" {{ $mahasiswa->jurusan == 'Management' ? 'selected':'' }}>Management</option>
                    <option value="Desain Produk" {{ $mahasiswa->jurusan == 'Desain Produk' ? 'selected':'' }}>Desain Produk</option>
                    <option value="Teologi" {{ $mahasiswa->jurusan == 'Teologi' ? 'selected':'' }}>Teologi</option>
                    <option value="Kedokteran" {{ $mahasiswa->jurusan == 'Kedokteran' ? 'selected':'' }}>Kedokteran</option>
                    <option value="Bioteknologi" {{ $mahasiswa->jurusan == 'Bioteknologi' ? 'selected':'' }}>Bioteknologi</option>
                </select>
                @php
                    $minat = explode(',', $mahasiswa->minat);
                @endphp
                <label>Bidang Minat</label>
                <div class="form-check w-25">
                    <input type="checkbox" {{ in_array('Web Engineer', $minat) ? 'checked' : '' }} name="minat[]" value="Web Engineer" 
                    class="form-check-input">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Artifical Intelligence" {{ in_array('Artificial Intelligence', $minat) ? 'checked' : '' }} 
                    class="form-check-input">
                    <label>Artical Inteligence</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="DB Engineer" {{ in_array('DB Engineer', $minat) ? 'checked' : '' }} 
                    class="form-check-input">
                    <label>DB Engineer</label>
                </div>
                <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>