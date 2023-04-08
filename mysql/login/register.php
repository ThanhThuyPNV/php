<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
    <style> 
        body{
            background-image: url(https://kiemtientuweb.com/ckfinder/userfiles/images/background-dep/background-dep-66.jpg);
        }   
        .container{
            width: 550px;
            height: 550px;
            border: none;
            border-radius:10px;
            background: rgba(243, 236, 236, 0.6);
            position: relative;
            top:120px;

        }
        .container .row .form-control{
            background: rgba(243, 236, 236, 0.6);
            color: black;
            border: none;
        }
        .input-group-text{
            width: 40px;
            background: rgba(243, 236, 236, 0.6);
            border: none;
        }
        h4{
            text-align: center;
            color: aliceblue;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        #buttons{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        }

        .btn {
        text-decoration: none;
        display: block;
        padding: 15px;
        border-radius: 20px;
        font-weight: 900;
        text-align: center;
        margin: 10px;
        width: 200px;
        height: 40px;
        transition: all .3s ease;
        }

        .btn-1 {
        flex: 1 1 auto;
        text-align: center;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
        box-shadow: 0 0 20px #eee;
        border-radius: 50px;
        background-image: linear-gradient(130deg, #fc00ff 0%, #00dbde 100%);
        }
        b{
            position: relative;
            bottom: 9px;
        }
        .btn-1:hover {
        background-position: right center; /* change the direction of the change here */
        }
    </style>
    <table>
        <form action="">
        <div class="container">
            <div class="row">
                <h4>ĐĂNG KÝ TÀI KHOẢN</h4>
            </div>
            <div class="row">
                <div class="input-group">
                        <span class="input-group-text">
                            <span class="fa fa-user"></i></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nhập tên">
                </div>
            </div><br>
            <div class="row">
                <div class="input-group">
                        <span class="input-group-text">
                            <span class="fa fa-user"></i></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nhập tên đăng kí">
                </div>
            </div><br>
            <div class="row">
                <div class="input-group">
                        <span class="input-group-text">
                            <span class="fa fa-envelope"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nhập email của bạn">
                </div>
            </div><br>
            <div class="row">
                <div class="input-group">
                        <span class="input-group-text">
                            <span class="fa fa-phone"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nhập số điện thoại của bạn">
                </div>
            </div><br>
            <div class="row">
                <div class="input-group">
                        <span class="input-group-text">
                            <span class="fa fa-address-book"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ của bạn">
                </div>
            </div><br>
            <div class="row">
                <div class="input-group">
                        <span class="input-group-text">
                            <span class="fa fa-lock"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nhập mật khẩu của bạn">
                </div>
            </div><br>
            <div id="buttons">
                <a href="#" class="btn btn-1"><b>Đăng Ký</b></a>
            </div>
        </div>
    </table>
        </form>
</body>
</html>