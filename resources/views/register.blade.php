<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .bg-image{
            background: url('{{ asset('image/hinh2.jpg') }}');     
            background-size: cover;
        }
        form{
            margin-top: 100px;
        }
    </style>
</head>

<body class="bg-image">
    <div class="container">
        <form action="/register" method="POST" class="row">
                <div class="col-md-4 col-sm-2"></div>
                <div class="col-md-4 col-sm-8 py-3" style="background-color: lightblue; border-radius: 10px 10px 10px 10px;">
                    <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-10">
                                <div class="form-group" style="text-align: center; font-size: 20px; color:blue;">
                                    <b>Đăng ký tài khoản</b>
                                </div>
                                <div class="form-group">
                                    <label for="name1">Tên đăng nhập:</label>
                                    <input type="text" class="form-control" id="name" name="name1">
                                </div>
                                <div class="form-group">
                                    <label for="sdt1">Số điện thoại:</label>
                                    <input type="text" class="form-control" id="sdt" name="sdt1" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1">Mật khẩu:</label>
                                    <input type="password" class="form-control" id="password1" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Nhập lại mật khẩu:</label>
                                    <input type="password" class="form-control" id="pass" name="pass1">
                                </div>
                                <input type="submit" value="Đăng ký" class="btn btn-primary float-right">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                    
                </div>
            <div class="col-md-4 col-sm-2"></div>
            
        </form>
    </div>
</body>

</html>