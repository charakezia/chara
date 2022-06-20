<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>HELLO WORLD</title>
  </head>
  <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-dark bg-primary rounded-bottom">
                        <a class="navbar-brand" href="#"><i class="bi bi-house-fill"></i></a>
                        <div class="dropdown float-right">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User 
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/mahasiswa">{{Auth::user()->name ?? ''}}</a>
                            <a class="dropdown-item" href="/user">Data User</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div> 
                        </div>    
                    </nav>
                </div>  
            </div>
        </div>
        <div class="container-fluid py-2">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-4 col-12">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" href="#">Home</a>
                            <a class="nav-link" href="/dosen">Dosen</a>
                            <a class="nav-link bg-primary active" href="/mahasiswa">Mahasiswa</a>
                            <a class="nav-link" href="/skripsi">Skripsi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
        <div class="card-header">
                <a name="" class="btn btn-primary" href="/mahasiswa/formulirmahasiswa" role="button">ADD</a> 
                <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
                @if (session('alert'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('alert') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Bidang Minat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $no => $d)
                        <tr>
                            <th scope="row">{{ $mahasiswa->firstItem() + $no }}</th>
                            <td>{{ $d->nim }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->gender }}</td>
                            <td>{{ $d->jurusan }}</td>
                            <td>{{ $d->bidang_minat }}</td>
                            <td>
                                <a href="/mahasiswa/editmahasiswa/{{ $d->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/mahasiswa/hapusmahasiswa/{{ $d->id }}" class="btn btn-outline-primary"
                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')"><i class="bi bi-x-square"></i></a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$mahasiswa->total()}}
            <span class="float-right">{{ $mahasiswa->links() }}</span>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>