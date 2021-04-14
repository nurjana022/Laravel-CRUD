<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Rubik', sans-serif;
            font-weight: 100;
        }

        html{
            scroll-behavior: smooth;
        }

        .warna-judul{
            color:#f53855;
            font-weight: bold;
        }

        .btn-custom{
            background-color: #f53855;
            color: white;
            border-radius: 25px;
            font-weight: 100;
        }

        .warna-bg{
            background-color: #f5f5f5;
        }
        section{
            padding-top: 25px;
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->  
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container" >
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#gallery">Doctor</a>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pasien
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Pendaftaran Pasien</a>
                        <a class="dropdown-item" href="/pasien_terdaftar">Pasien Terdaftar</a>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
        </div>
    </nav>
    </section>
    
    <!--MODAL-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Pasien</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action = "/home" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pasien</label>
                <input name="nama_pasien" type="text" class="form-control @error('nama_pasien') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nama Pasien" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="exampleFormControlSelect1">
                <option Value = "L">Laki - Laki</option>
                <option Value = "P">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Pekerjaan</label>
                <input name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Keluhan</label>
                <input  name="keluhan" type="text" class="form-control @error('keluhan') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Dokter yang dituju</label>
                <select name="nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror" id="exampleFormControlSelect1">
                <option Value = "Dokter A">Dokter A</option>
                <option Value = "Dokter B">Dokter B</option>
                <option Value = "Dokter C">Dokter C</option>
                <option Value = "Dokter D">Dokter D</option>
                </select>
            </div>

            
        </div>
        <div class="modal-footer" >
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
        </div>
        </div>
    </div>
    </div>                  
    <!--End Modal-->

    <!--End Navbar-->

    <!-- Home -->
    <section id="home">
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
        <div class="container pt-4">
            <div class="row pb-5 pt-5">
                <div class="col-lg-7 align-self-center">
                    <h1>Test Project IT Software Audy Dental <strong class="warna-judul">Laravel 8</strong></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, fugit. Deserunt veniam quasi magni ea nihil sit, impedit excepturi magnam, sequi harum, dolores maiores odio ab? Eveniet sapiente illo nulla.</p>
                    <button class="btn btn-lg btn-custom">Discover me</button>
                </div>
                <div class="col-lg-5">
                    <img src="/img/2.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End Home -->

    <!-- About -->
    <section id="about">
        <div class="warna-bg">
            <div class="container ">
                <div class="text-center pt-5 pb-4">
                    <h2 class="warna-judul">About</h2>
                </div>
                <div class="row text-center pb-5">
                    <div class="col-lg-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aliquid impedit, doloribus velit repellendus vero hic. Nostrum, accusamus. Molestiae dignissimos iusto dolores qui natus ad nesciunt? Repellendus non quaerat numquam.
                    </div>
                    <div class="col-lg-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aliquid impedit, doloribus velit repellendus vero hic. Nostrum, accusamus. Molestiae dignissimos iusto dolores qui natus ad nesciunt? Repellendus non quaerat numquam.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Abotut -->

    <!-- Portfolio -->
    <section id="portfolio">
        <div class="container">
            <div class="text-center pt-5 pb-4">
                <h2 class="warna-judul">Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0 shadow">
                        <img src="/img/p1.jpg" class="img-fluid">
                        <div class="card-body text-center">
                            <strong>Project 1</strong>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quis minima voluptatum quod sapiente distinctio a aperiam consectetur praesentium enim!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow">
                        <img src="/img/p2.png" class="img-fluid">
                        <div class="card-body text-center">
                            <strong>Project 2</strong>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quis minima voluptatum quod sapiente distinctio a aperiam consectetur praesentium enim!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow">
                        <img src="/img/p3.png" class="img-fluid">
                        <div class="card-body text-center">
                            <strong>Project 3</strong>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quis minima voluptatum quod sapiente distinctio a aperiam consectetur praesentium enim!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio -->

    <!-- Gallery -->
    <section id="gallery">
        <div class="warna-bg">
            <div class="container">
                <div class="text-center pt-5 pb-4">
                    <h2 class="warna-judul">Gallery Doctor</h2>
                </div>   
                <div class="row">
                    <div class="col-lg-4 pt-4 col-6">
                        <img src="/img/team-1.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-4 pt-4 col-6">
                        <img src="/img/team-2.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-4 pt-4 col-6">
                        <img src="/img/team-3.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-4 pt-4 col-6">
                        <img src="/img/team-4.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-4 pt-4 col-6">
                        <img src="/img/team-3.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-4 pt-4 col-6">
                        <img src="/img/team-1.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Galerry -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="text-center pt-5 pb-4">
                <h2 class="warna-judul">Contact</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0 shadow">
                        <div class="card-body text-center">
                            <button class="btn btn-custom">Whatsapp</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow">
                        <div class="card-body text-center">
                            <button class="btn btn-custom">Telegram</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow">
                        <div class="card-body text-center">
                            <button class="btn btn-custom">Instagram</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" placeholder="Nurjana Ariffilah" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="nama">Email</label>
                                <input type="text" name="email" placeholder="mail@mail.com" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="nama">Telepon</label>
                                <input type="number" name="telepon" placeholder="123456789" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" placeholder="pesan anda disini.!"></textarea>
                        </div>
                        <button class="btn btn-custom">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- END Contact -->

    <!-- Footer -->
    <footer class="warna-bg">
        <div class="text-center pb-2 pt-2">
            <h4>Powered By <strong class="warna-judul">Nurjana Ariffilah Idris</strong></h4>
        </div>
    </footer>
    <!-- END Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>