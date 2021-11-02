<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container  m-l-6">
		<div class="row">
            <div class="col-md-10 ">
                <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center ">Sửa </h2>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                    <label for="usr">STT:</label>
                    <input required="true" type="text" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                    <label for="email">Anh :</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Tải Lên </span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Chọn File </label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="birthday">Tên tài liệu  :</label>
                    <input type="true" class="form-control" id="birthday">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Môn HỌC:</label>
                    <input required="true" type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                    <label for="confirmation_pwd">tài lệu bdf  :</label>
                    <input required="true" type="password" class="form-control" id="confirmation_pwd">
                    </div>
                    <div class="form-group">
                    <label for="address">Giao Trình :</label>
                    <input type="text" class="form-control" id="address">
                    </div>
                    <button class="btn btn-success">Sửa </button>
                </div>
		</div>
            </div>
        </div>
	</div>
</body>
</html>