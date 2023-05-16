<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3>From Data Kesehatan</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal pemeriksaan</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lahir" class="col-4 col-form-label">Tanggal Lahir/Usaha</label>
                                    <div class="col-8">
                                        <input id="lahir" name="lahir" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Jenis" class="col-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <select id="Jenis" name="Jenis" class="custom-select">
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-success">Simpan Data</button>
                                        <button name="submit" type="submit" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">

                    <table class="table mt-4" border="2" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">Jenis Tes</th>
                                <th scope="col">Halis pemeriksaan</th>
                                <th scope="col">Normal</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Tekanan Darah</th>
                                <td></td>
                                <td>120/80 mmhg</td>

                            </tr>
                            <tr>
                                <th scope="row">Asam Urat</th>
                                <td></td>
                                <td>pria:<7mg /di|wanita: <6m</td>

                            </tr>
                            <tr>
                                <th scope="row">Kolestriol</th>
                                <td></td>
                                <td>
                                    <200 mg/dl</td>

                            </tr>
                            <tr>
                                <th scope="row">Gula Dara</th>
                                <td></td>
                                <td>the BirdPuasa: 70-110 mg/dl <hr>
                                  2 jam setelah makan: 100-150 mg/dl <hr> 
                                   Sewaktu/acak : 70-125 mg/dl</td>

                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>



</body>

</html><?php /**PATH C:\Users\user\Desktop\belajar-laravel\resources\views/kodisi.blade.php ENDPATH**/ ?>