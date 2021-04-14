<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6"> 
                <h1>PASIEN TERDAFTAR</h1>
                </div>
                <div class="col-6 pt-2">
                <a href="/home" class="btn btn-primary btn-sm active float-right" role="button" aria-pressed="true">Kembali</a>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>Nama Pasien</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Keluhan</th>
                        <th>Nama Dokter</th>
                    </tr>
                    @foreach($data_pasien as $pasien)
                    <tr>
                        <td>{{$pasien->nama_pasien}}</td>
                        <td>{{$pasien->tanggal_lahir}}</td>
                        <td>{{$pasien->jenis_kelamin}}</td>
                        <td>{{$pasien->pekerjaan}}</td>
                        <td>{{$pasien->keluhan}}</td>
                        <td>{{$pasien->nama_dokter}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>   
    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>