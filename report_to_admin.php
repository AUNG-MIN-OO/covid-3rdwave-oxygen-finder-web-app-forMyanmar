<?php include "header.php"; ?>
<?php

if ($_POST){
    if (empty($_POST['name']) || empty($_POST['description'])){
        if (empty($_POST['name'])){
            $nameErr = "Name is required";
        }
        if (empty($_POST['description'])){
            $descErr = "Description is required";
        }
    }else{
            $name = $_POST['name'];
            $description = $_POST['description'];

            $stmt = $pdo->prepare("INSERT INTO reports(name,description) VALUES (:name ,:description)");

            $result = $stmt->execute(
                array(':name'=>$name,':description'=>$description)
            );
            if ($result){
                $reportMsg = "Adminဆီသို့ reportတင်ပီးပါပီ";
            }
    }
}
?>
<?php
if (!empty($reportMsg)){
    ?>
    <div aria-live="polite" aria-atomic="true" style="position: fixed;z-index: 2010;right: 10px;top: 20px;" >
        <div class="toast animate__animated  animate__bounceInDown bg-button" role="alert" aria-atomic="true">
            <div class="toast-header bg-button text-white">
                <strong class="me-auto">New Notification!</strong>
                <small>Just now!</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-white">
                <h5><?php echo $reportMsg; ?></h5>
            </div>
        </div>
    </div>
    <?php
}
?>
    <div class="title align-items-center d-flex justify-content-between">
        <a href="javascript:history.go(-1)"><span><i class="feather-arrow-left" style="font-size: 25px"></i></span></a>
        <div class="">
            <h3>Report to admin</h3>
        </div>
    </div>
    <hr>
    <form action="report_to_admin.php" method="post">
        <div class="mb-4">
            <label for="name" class="mb-2">နာမည်</label>
            <input type="text" id="name" name="name" class="form-control">
            <small class="fw-bold text-danger"><?php echo (!empty($nameErr))?"*$nameErr":""; ?></small>
        </div>
        <div class="mb-4">
            <label for="desc" class="mb-2">အကြောင်းအရာ</label>
            <textarea id="description" class="textarea w-100 p-2" name="description" rows="10" placeholder="Something else here"></textarea>
            <small class="fw-bold text-danger"><?php echo (!empty($dErr))?"*$dErr":""; ?></small>
        </div>
        <button class="btn bg-button float-end w-100">Send</button>
    </form>
<?php include "footer.php"; ?>