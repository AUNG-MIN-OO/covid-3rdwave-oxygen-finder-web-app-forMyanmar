<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<!--                    main-content-->
<div class="main-contents">
    <?php
        $text="";
        $sign="";
        $result = "";
        $searchKey = "";
//        $notFound = null;
        if (isset($_GET['search'])){
            $searchKey = $_GET['search'];
            $stmt = $pdo->prepare("SELECT * FROM posts WHERE division LIKE '%$searchKey%' ORDER BY id DESC");
            $stmt->execute();
            $result = $stmt->fetchAll();
            if (empty($result)){?>
                <h4 class="text-center text-danger fw-bolder">တိုင်းနှင့်ပြည်နယ်အားရှာမတွေ့ပါ</h4>
        <?php
            }
        }elseif (isset($_GET['catId'])) {
            $catId = $_GET['catId'];
            $stmt = $pdo->prepare("SELECT * FROM posts WHERE category_id=:catId ORDER BY id DESC ");
            $stmt->execute([':catId' => $catId]);
            $result = $stmt->fetchAll();
        }else{
            $sign = "feather-arrow-up";
            $text = "အမျိုးအစားရွေးချယ်ပါ";
        }

        if (isset($_GET['search']) && !empty($result)){ ?>
            <p>ရှာဖွေသောစကားလုံး : " <?php echo $searchKey;?> "</p>
        <?php } ?>
    <?php
            foreach ($result as $post){
    ?>
    <a href="detail.php?postId=<?php echo $post['id']; ?>">
        <div class="card content-card mb-2">
            <div class="card-body">
                <ul class="mb-0">
                    <li><?php echo $post['title']; ?></li>
                    <p class="text-white-50 mt-2 mb-2">
                        <?php echo $post['division']; ?>
                    </p>
                    <p class="mb-0">
                        <span><i class="feather-phone me-2"></i></span>
                        <?php echo $post['ph_num']; ?>
                    </p>
                </ul>
            </div>
        </div>
    </a>

    <?php
            }

        ?>
    <span class="text-center"></span>
    <h5 class="text-center">
        <i class="<?php echo $sign; ?>"></i>
        <?php echo $text; ?>
        <i class="<?php echo $sign; ?>"></i>
    </h5>
</div>
<!--                    main-content-->
<?php include "footer.php"; ?>