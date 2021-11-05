<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="page_lesson.css">
</head>

<body>
    <div class="nut">
        <button class=" btn btn-warning pd-left " ><a href="http://localhost/congngheweb/admin/#" > trở về </a></button> 
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form id="form_update_lesson" enctype="multipart/form-data">
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputEmail3" name="txtname" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tên bài giảng</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPassword3" name="txtchv" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tải tài liệu buổi học</label>
                        <div class="col-sm-5 img-fluid box ">
                            <div class="mt-3">
                                <input id='empty_res' class="form-control" type="file" id="fileToUpload" name="fileToUpload">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label"> Bài tập</label>
                        <div class="col-sm-5">
                            <div class="mt-3">
                                <input id='empty_res' class="form-control" type="file" id="fileToUpload" name="fileToUpload">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">ghi chú</label>
                        <div class="col-sm-7">
                            <input type="tel" class="form-control " id="inputPassword3" name="txt_sodd" value="">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Môn học</label>
                        <div class="col-sm-3">
                            <select name="sltmadv" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Hệ điều hành</option>
                                <option value="1">Công nghệ web</option>
                                <option value="2">Trí tuệ nhân tạo</option>
                                <option value="3">C++</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </form>
                <div id="succ"></div>
                <div id="err"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<head>
    <meta charset="utf-8" />
    <title></title>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="StyleSheet.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="color-md-12">
                         <!-- Footer -->
                        <footer class="page-footer font-small special-color-dark pt-4">

                        <!-- Footer Elements -->
                        <div class="container">

                        <!-- Social buttons -->
                        <ul class="list-unstyled list-inline text-center">
                            <li class="list-inline-item">
                            <a class="btn-floating btn-fb mx-1">
                                <i class="fab fa-facebook-f"> </i>
                            </a>
                            </li>
                            <li class="list-inline-item">
                            <a class="btn-floating btn-tw mx-1">
                                <i class="fab fa-twitter"> </i>
                            </a>
                            </li>
                            <li class="list-inline-item">
                            <a class="btn-floating btn-gplus mx-1">
                                <i class="fab fa-google-plus-g"> </i>
                            </a>
                            </li>
                            <li class="list-inline-item">
                            <a class="btn-floating btn-li mx-1">
                                <i class="fab fa-linkedin-in"> </i>
                            </a>
                            </li>
                            <li class="list-inline-item">
                            <a class="btn-floating btn-dribbble mx-1">
                                <i class="fab fa-dribbble"> </i>
                            </a>
                            </li>
                        </ul>
                        <!-- Social buttons -->

                        </div>
                        <!-- Footer Elements -->

                        <!-- Copyright -->
                        <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                        </div>
                        <!-- Copyright -->

                        </footer>
                        <!-- Footer -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                    <div class="second2">
                        <a href="https://codepen.io/AndreeaBunget" target="_blank"> <i class="fab fa-codepen fa-2x margin"></i></a>
                        <a href="https://github.com/WebDeveloperCodeRep" target="_blank"> <i class="fab fa-github fa-2x margin"></i></a>
                        <a href="https://www.linkedin.com/in/andreea-mihaela-bunget-a4248812b/" target="_blank"> <i class="fab fa-linkedin fa-2x margin"></i></a>
                        <a href="https://www.youtube.com/channel/UCX674BUbomzBCakbb75lhfA?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x margin" ></i></a>

                    </div>

                </div>
            </div>
            </div>
    </div>
   


</body>
</html>