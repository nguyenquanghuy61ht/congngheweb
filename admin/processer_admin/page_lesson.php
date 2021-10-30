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
    <div class="contener-fluid">
        <div class="contener">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
<<<<<<< HEAD
                                            <a class="navbar-brand" href="#">Thêm </a>
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Features</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Pricing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                                </ul>
                                            </div>
                            </nav>
=======
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
>>>>>>> 512ad794acf35299413dbdb45856e17c14da7966

                </div>
            </div>
        </div>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form id="form_update" enctype="multipart/form-data">
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
                <div class="col-md-4 col-xs-12">
                    <div class="first">
                        <h4>My Skills</h4>
                       
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="second">
                        <h4> Navigate</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="third">
                        <h4> Contact</h4>
                        <ul>
                            <li>Andreea Mihaela Bunget </li>
                           
                        </ul>
                    </div>
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