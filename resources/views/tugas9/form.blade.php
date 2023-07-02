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

    


    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1>FORM</h1>
                <form method="post" action="{{route('tugas9/selesai')}}">
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
                        <label for="tgl" class="col-4 col-form-label">tanggal pemeriksaan</label>
                        <div class="col-8">
                            <input id="tgl" name="tgl" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usia" class="col-4 col-form-label">usia</label>
                        <div class="col-8">
                            <input id="usia" name="usia" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-4">jenis kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk1" type="radio" class="custom-control-input" value="L">
                                <label for="jk1" class="custom-control-label">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk2" type="radio" class="custom-control-input" value="P">
                                <label for="jk2" class="custom-control-label">P</label>
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
            <div class="col-lg-3"></div>
    </div>

</body>

</html>