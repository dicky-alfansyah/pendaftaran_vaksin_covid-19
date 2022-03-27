<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

        <div class="card border-success mb-3">
            <div class="card-body">
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" class="form-control border-success" id="nik" name="nik">
                    </div>
                    <div class="mb-3">
                        <label for="inputnama" class="form-label ">Nama Lengkap</label>
                        <input type="text" class="form-control border-success" id="nama_lengkap" name="nama_lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="inputTglLahir" class="form-label ">Tanggal Lahir</label>
                        <input type="date" class="form-control border-success" id="tanggal_lahir" name="tanggal_lahir">
                    </div>

                    <div class="mb-3">
                        <label for="inputNoHp" class="form-label ">No Hp Penerima Sertifikat Vaksin</label>
                        <input type="number" class="form-control border-success" id="no_hp" name="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="inputAlamat" class="form-label ">Alamat</label>
                        <input type="text" class="form-control border-success" id="alamat" name="alamat">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div><br>
    @yield('form')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>