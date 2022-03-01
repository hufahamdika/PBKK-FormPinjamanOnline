
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                        <h3>Form Pinjaman Online</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td>No Handphone</td>
                                <td>{{ $data->phonenumber }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $data->address }}</td>
                            </tr>
                            <tr>
                                <td>Nominal Pinjaman (Dalam USD)</td>
                                <td>{{ $data->amount }}</td>
                            </tr>
                            <tr>
                                <td>Alasan Peminjaman</td>
                                <td>{{ $data->reason }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Foto KTP</td>
                                <td><img src="{{ $data->ktp }}" alt="Foto KTP" width="150px"></td>
                            </tr>
                        </table>

                        <a href="/formulir" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 
