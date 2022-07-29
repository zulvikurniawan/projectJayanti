<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="container containerlogin bg-white shadow">
        <div class="row text-center">
            <div class="col">
                <h3>LOGIN</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mt-2">
                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="row mt-3">
                    <div class="col text-end">
                        <a href="/home" type="button" class="btn btn-secondary btnLogin">LOGIN</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4 style="margin-left:60px;">PT. PANARUB</h4>
                <img src="/img/logoPanarub.jpg" alt="logoPanarub" style="width: 200px; margin-left:2rem;">
            </div>
        </div>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>