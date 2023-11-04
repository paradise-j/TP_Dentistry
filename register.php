<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ลงทะเบียนเข้าใข้งานระบบ</title>

    <link rel="icon" type="image/png" href="img/login2.png">

    <!-- Custom fonts for this template-->
    <link href="./bootrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./bootrap/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-2"></div> -->
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h3 text-gray-900 mb-4">ลงทะเบียนเข้าใข้งานระบบ</h1>
                                </div>
                                <form class="user" name="regiter" action="Check_regit.php" method="POST" enctype="multipart/form-data">
                                    <!-- <div class="row mb-4">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-1 text-center">
                                            <img loading="lazy" width="120px" style="border-radius: 200px;" id="previewImg" alt="">
                                        </div>
                                        <div class="col-md-5 ml-5">
                                            <label for="img" class="form-label">อัปโหลดรูปภาพ</label>
                                            <input type="file" class="form-control" id="imgInput" style="border-radius: 30px;" name="img" required>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <div class="col-md-3 mb-3 mb-sm-0">
                                            <label class="form-label">คำนำหน้าชื่อ</label><br>
                                            <select class="form-control" aria-label="Default select example" name="prename" style="border-radius: 25px;" required>
                                                <option value="1">นาย</option>
                                                <option value="2">นาง</option>
                                                <option value="3">นางสาว</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-sm-0">
                                            <label class="form-label">ชื่อ</label><br>
                                            <input type="text" class="form-control" style="border-radius: 25px;" name="Fname" >
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-label">นามสกุล</label><br>
                                            <input type="text" class="form-control" style="border-radius: 25px;" name="Lname" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-8 mb-3 mb-sm-0">
                                            <label class="form-label">อีเมล</label><br>
                                            <input type="email" class="form-control" style="border-radius: 25px;" name="email" >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">เบอร์โทรศัพท์</label><br>
                                            <input type="tel" class="form-control" style="border-radius: 25px;" minlength="10" maxlength="10" name="tel" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-7 mb-3 mb-sm-0">
                                            <label class="form-label">วัน/เดือน/ปี ที่เกิด</label><br>
                                            <input type="date" class="form-control" style="border-radius: 25px;" name="Bdate">
                                        </div>
                                        <div class="col-md-5 mb-3 mb-sm-0">
                                            <label class="form-label">เลขบัตรประจำตัวประชาชน</label><br>
                                            <input type="text" class="form-control" style="border-radius: 25px;" minlength="13" maxlength="13" name="personid" >
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary btn-user btn-block" type="submit" name="btn_login">ลงทะเบียน</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./bootrap/vendor/jquery/jquery.min.js"></script>
    <script src="./bootrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./bootrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./bootrap/js/sb-admin-2.min.js"></script>
    <!-- <script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
                if (file) {
                    previewImg.src = URL.createObjectURL(file)
            }
        }
    </script> -->
</body>

</html>