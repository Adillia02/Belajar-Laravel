<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>
    <div class="container flex-grow-1 container-p-y mt-4">
        <div class="row mb-4">
            <div class="col-4">
                <input type="text" class="form-control form-control-sm" id="cari" name="cari">
            </div>
            <div class="col-2">
                <button class="btn btn-outline-warning btn-sm" onclick="MyCari()">Cari</button>
            </div>
        </div>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <div class="col-xxl">
                <div class="card shadow mb-5">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="mb-2 mt-2 text-dark mr-4 ">
                                    Daftar Data Barang
                                </h5>
                            </div>
                            <div class="col-4">
                                <div class="d-sm-flex float-end">
                                    <button id="tambah" class="d-none d-sm-inline-block btn btn-sm btn-brand shadow-sm " onclick="window.location.href='{{ url()->current()}}/tambah';">Tambah</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Satuan</th>
                                        <th>Beli</th>
                                        <th>Jual</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $row)
                                    <tr>
                                        <td>{{$row->kodebrg}}</td>
                                        <td>{{$row->namabrg}}</td>
                                        <td>{{$row->satuan}}</td>
                                        <td>{{$row->hargabeli}}</td>
                                        <td>{{$row->hargajual}}</td>
                                        <td>
                                            <a href="{{ url()->current() }}/edit/{{$row->kodebrg}}" class="btn-warning btn-sm text-decoration-none">Edit</a> |
                                            <a href="{{ url()->current() }}/hapus/{{$row->kodebrg}}" class="btn-danger btn-sm text-decoration-none">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    function MyCari() {
        var x = document.getElementById("cari").value;
        window.location.href = "{{ url()->current() }}/cari/" + x + "";
    }
</script>

</html>