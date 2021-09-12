<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .mau{
            background-color: lightseagreen;
          }
          .table1{
                width: 20%;
                height: 40%;
                margin-left: 20px;
                float: left;
                text-indent: 20px;
          }
          .td1:hover{
              background: lightskyblue;
          }
          .th1{
              background-color: lightseagreen;
              border: 1px solid lightslategray;
          }
          td{
            text-indent: 20px;
            border: 1px solid lightslategray;
          }
          .con{
              float: right;
              margin-right: 20px;
          }
          .table2{
                float: right;
                margin-right: 20px;
                width: 76%;
          }
          .th2{
              font-size: 21px;
          }
          .th3{
              float: right;
          }
          .table3{
            border: 1px solid lightslategray;
              margin-top: 20px;
                float: right;
                padding: 20px;
                margin-right: 20px;
                width: 76%;
                height: 75%;

          }
        </style>
    </head>
    <body>
        <div class="mau">
          <div class="container">
            <div class="row m-0">
              <div class="col-md-2 col-sm-2 my-2" style="text-align: center;">
                <i class="fa fa-phone" style="font-size:24px"></i> 0280712340
              </div>
              <div class="col-md-2 col-sm-2 my-2" style="text-align: center;">
                <i class="fa fa-user" style="font-size:23px"></i> Tuyển dụng
              </div>
              <div class="col-md-2 col-sm-2 my-2" style="text-align: center;">
                <i class="fa fa-facebook-square" style="font-size:23px; color:blue"></i> Facebook
              </div>
              <div class="col-md-4 col-sm-4"></div>
              <div class="col-md-1 col-sm-1">
                
              </div>
              <div class="col-md-1 col-sm-1">
              </div>

            </div>
          </div>
        </div>
        <br>
        <table class="table1">
            <tr>
                <th class="th1">Menu</th>
            </tr>
            <tr>
                <td class="td1"><a href="/quanlysp" style="text-decoration: none; color: black;">Sản phẩm</a></td>
            </tr>
            <tr>
                <td class="td1"><a href="/quanlydanhmuc" style="text-decoration: none; color: black;">Danh mục</a></td>
            </tr>
            <tr>
                <td class="td1"><a href="/qltaikhoan" style="text-decoration: none; color: black;">Người dùng</a></td>
            </tr>
            <tr>
                <td class="td1">Trả hàng</td>
            </tr>
            <tr>
                <td class="td1">Lịch sử hóa đơn</td>
            </tr>
            <tr>
                <td class="td1">Đăng xuất</td>
            </tr>
        </table>
        <table class="table2">
            <tr>
                <th class="th2">QUẢN LÝ SẢN PHẨM</th>
                <th class="th3"><button class="btn btn-outline-info mt-1 mr-1" style="width:150px; height: 40px;"><a href="/taosp" style=" text-decoration: none; font-size: 15px;">Tạo sản phẩm</a></button></th>
            </tr>
        </table>
        <div class="table3">
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            Danh mục sản phẩm
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <select id="sanpham1" class="form-control" name="sanpham">
                                <option value="set">Set đồ</option>
                                <option value="quan">Quần</option>
                                <option value="ao">Áo</option>
                                <option value="vay">Váy</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            Tên sản phẩm
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            Mã sản phẩm
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="ma" id="masp" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            Giá sản phẩm
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="gia" id="giasp" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            Hình sản phẩm
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="file" class="form-control" name="ten" id="tensp" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            Mô tả sản phẩm
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <textarea class="form-control" id="bio" rows="5" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <button class="btn btn-outline mt-1 mr-1" style="width:90px; height: 40px; float: left; background-color: lightpink;"><a href="./quanlysp" style="text-decoration: none; font-size: 15px; color: white;">Quay lại</a></button>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <button class="btn btn-outline mt-1 mr-1" style="width:120px; height: 40px; float: right; background-color: cornflowerblue;"><a href="#" style="text-decoration: none; font-size: 15px; color: white;">Lưu  sản phẩm</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>  
    </body>
</html>