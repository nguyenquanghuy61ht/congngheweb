<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background:#58FAD0">
<div class="container " >
    <div class="row " class="boder boder-primary">
        <div class="col-md-6">
            <div class="form-outline">
            <label class="form-label" for="textAreaExample2">Thông Báo </label>    
            <textarea class="form-control" id="textAreaExample2" rows="8"></textarea>
            
            </div>
            <div class="input-group mb-3 mt-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-link"></i></span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
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
            <a href="http://localhost:7855/BTL/admin/"><button type="button" class="btn btn-warning mt-3 ">Thêm thông báo </button></a> 
        </div>
        
    </div>
</div>

</body>
</html>