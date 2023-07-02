<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

    <h1>FORM</h1>


    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">
                <form method="post">
                <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">nama</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text1" class="col-4 col-form-label">tanggal pemeriksaan</label>
                        <div class="col-8">
                            <input id="text1" name="text1" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text2" class="col-4 col-form-label">tanggal lahir/usia</label>
                        <div class="col-8">
                            <input id="text2" name="text2" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-4">jenis kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="L">
                                <label for="radio_0" class="custom-control-label">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="P">
                                <label for="radio_1" class="custom-control-label">P</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Tes</th>
                            <th scope="col">Hasil Pemeriksaan</th>
                            <th scope="col">Normal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Tekanan Darah</td>
                            <td></td>
                            <td>120/80 mmhg</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Asam Urat</td>
                            <td></td>
                            <td>pria : < 7 mg/dl | wanita : < 6 md/dl</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Kolesterol Tontal</td>
                            <td></td>
                            <td>
                                < 200 md/dl</td>
                        </tr>
                        <tr>
                            <td scope="row" rowspan="3">4</td>
                            <td>Gula Darah</td>
                            <td></td>
                            <td> Puasa 70-110 mg/dl</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> 2 jam setelah makan: 100-150 mg/dl </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> Sewaktu/acak : 70-125 mg/dl</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>



    </div>

</body>

</html>