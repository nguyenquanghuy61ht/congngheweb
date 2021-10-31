<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tất cả</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Công nghệ web</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ngôn ngữ lập trình</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">PHP</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">hệ điều hành</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <a href="processer_admin/page_add_lesson.php"><button type="button" class="btn btn-primary mt-3 ">Thêm bài giảng</button></a>
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Tên chương </th>
                    <th scope="col">Bài giảng</th>
                    <th scope="col">Bài tập</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
            <?php
                include("../config/db_conect.php");
                $sql="SELECT * From baigiang";
                $result=(mysqli_query($conn,$sql));
                // Bước 3 trả về két quả 
                if(mysqli_num_rows($result)>0){
                    $i=1;
                    
                    while($row=mysqli_fetch_assoc($result)){
            ?>          
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['ngay'];  ?></td>
                            <td><?php echo $row['ten_bg'];   ?></td>
                            <td><?php echo $row['slide'];  ?></td>
                            <td><?php echo $row['bai_tap'];   ?></td>
                            <td><?php echo $row['ghichu'];  ?></td>
                            
                        </tr>
            <?php 
                        
                        $i++;
                        
                    }
                }

            ?>

            </tbody>
        </table>
        <a href="processer_admin/page_noti.php"><button type="button" class="btn btn-success" style="margin-top:10%">Viết thông báo</button></a>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Tên chương </th>
                    <th scope="col">Bài giảng</th>
                    <th scope="col">Bài tập</th>
                    <th scope="col">Ghi chú</th>
                   

                </tr>
            </thead>
            <tbody>
            <?php
                
                $sql="SELECT * From baigiang where mamh=13";
                $result=(mysqli_query($conn,$sql));
                // Bước 3 trả về két quả 
                if(mysqli_num_rows($result)>0){
                    $i=1;
                    
                    while($row=mysqli_fetch_assoc($result)){
            ?>          
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['ngay'];  ?></td>
                            <td><?php echo $row['ten_bg'];   ?></td>
                            <td><?php echo $row['slide'];  ?></td>
                            <td><?php echo $row['bai_tap'];   ?></td>
                            <td><?php echo $row['ghichu'];  ?></td>
                            
                        </tr>
            <?php 
                        
                        $i++;
                        
                    }
                }

            ?>

            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Tên chương </th>
                    <th scope="col">Bài giảng</th>
                    <th scope="col">Bài tập</th>
                    <th scope="col">Ghi chú</th>
                  

                </tr>
            </thead>
            <tbody>
            <?php
                
                $sql="SELECT * From baigiang where mamh=14";
                $result=(mysqli_query($conn,$sql));
                // Bước 3 trả về két quả 
                if(mysqli_num_rows($result)>0){
                    $i=1;
                    
                    while($row=mysqli_fetch_assoc($result)){
            ?>          
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['ngay'];  ?></td>
                            <td><?php echo $row['ten_bg'];   ?></td>
                            <td><?php echo $row['slide'];  ?></td>
                            <td><?php echo $row['bai_tap'];   ?></td>
                            <td><?php echo $row['ghichu'];  ?></td>
                            
                        </tr>
            <?php 
                        
                        $i++;
                        
                    }
                }

            ?>

            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Tên chương </th>
                    <th scope="col">Bài giảng</th>
                    <th scope="col">Bài tập</th>
                    <th scope="col">Ghi chú</th>
                  

                </tr>
            </thead>
            <tbody>
            <?php
                
                $sql="SELECT * From baigiang where mamh=15";
                $result=(mysqli_query($conn,$sql));
                // Bước 3 trả về két quả 
                if(mysqli_num_rows($result)>0){
                    $i=1;
                    
                    while($row=mysqli_fetch_assoc($result)){
            ?>          
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['ngay'];  ?></td>
                            <td><?php echo $row['ten_bg'];   ?></td>
                            <td><?php echo $row['slide'];  ?></td>
                            <td><?php echo $row['bai_tap'];   ?></td>
                            <td><?php echo $row['ghichu'];  ?></td>
                            
                        </tr>
            <?php 
                        
                        $i++;
                        
                    }
                }

            ?>

            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Tên chương </th>
                    <th scope="col">Bài giảng</th>
                    <th scope="col">Bài tập</th>
                    <th scope="col">Ghi chú</th>
                  

                </tr>
            </thead>
            <tbody>
            <?php
                
                $sql="SELECT * From baigiang where mamh=16";
                $result=(mysqli_query($conn,$sql));
                // Bước 3 trả về két quả 
                if(mysqli_num_rows($result)>0){
                    $i=1;
                    
                    while($row=mysqli_fetch_assoc($result)){
            ?>          
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['ngay'];  ?></td>
                            <td><?php echo $row['ten_bg'];   ?></td>
                            <td><?php echo $row['slide'];  ?></td>
                            <td><?php echo $row['bai_tap'];   ?></td>
                            <td><?php echo $row['ghichu'];  ?></td>
                            
                        </tr>
            <?php 
                        
                        $i++;
                        
                    }
                }

            ?>

            </tbody>
        </table>
    </div>
</div>