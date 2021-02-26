<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nurom&display=swap">
    <!-- css -->
    <link rel="stylesheet" href="{{assets('/customLogin/css/home.css')}}">
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/logo pojokan.svg" alt="" class="sch-logo">
        </div>
    </header>
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5">
                    <img src="images/bg-image.svg" class="bg-img" alt="">
                    <img src="images/ombak.svg" class="bg-ombak">
                </div>

                <div class="col-lg-7 px-5 pt-5">
                    <form>
                        <h5 class="h5">aman integrate school</h5>
                        <h1 class="h1">E-RAPOR PORTAL</h1>

                        <div class="d-flex justify-content-center">
                            <input type="text " placeholder="Username" class="form-control my-2 p-3 user">
                        </div>


                        <div class="d-flex justify-content-center">
                            <input type="text" placeholder="Password" class="form-control my-2 p-3 pass">
                        </div>

                        <div class="d-flex">
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-center">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                                      </div>
                                </div>
                            </div>
                           
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="lupa">Lupa Password</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn1 mt-2 mb-2 ">Login</button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Belum terdaftar? <a href="#">Daftar disini</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>

</body>

</html>