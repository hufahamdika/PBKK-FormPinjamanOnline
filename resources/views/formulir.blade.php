
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Pinjaman Online</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="card-title text-center mt-5">
                        Form Pinjaman Online
                    </h3>
                    <div class="card-body">
                        <form action="/proses" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value = "{{ old('name') }}" class="@error('name') is-invalid @enderror">
                                @error('name')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phonenumber">Nomor Handphone</label>
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" value = "{{ old('phonenumber') }}" class="@error('phonenumber') is-invalid @enderror">
                                @error('phonenumber')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address" value = "{{ old('address') }}" class="@error('address') is-invalid @enderror">
                                @error('address')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="amount">Nominal Pinjaman (Dalam USD)</label>
                                <input type="text" class="form-control" id="amount" name="amount" value = "{{ old('amount') }}" class="@error('amount') is-invalid @enderror">
                                @error('amount')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reason">Alasan Peminjaman</label>
                                <input type="text" class="form-control" id="reason" name="reason" value = "{{ old('reason') }}" class="@error('reason') is-invalid @enderror">
                                @error('reason')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ktp">Foto KTP</label>
                                <input type="file" class="form-control-file" id="ktp" name="ktp" value = "{{ old('ktp') }}" class="@error('ktp') is-invalid @enderror">
                                @error('ktp')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary" value = "proses">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>