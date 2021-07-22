<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<!--                    main-content-->
<div class="main-contents">
    <?php
        $text="";
        $sign="";
        if (isset($_GET['catId'])) {
            $catId = $_GET['catId'];
            $stmt = $pdo->prepare("SELECT * FROM posts WHERE category_id=:catId ORDER BY id DESC ");
            $stmt->execute([':catId'=>$catId]);
            $result = $stmt->fetchAll();
            foreach ($result as $post){
    ?>
    <a href="detail.php?postId=<?php echo $post['id']; ?>">
        <div class="card content-card mb-4">
            <div class="card-body">
                <ul class="mb-0">
                    <li><?php echo $post['title']; ?></li>
                    <p class="text-white-50 mt-2 mb-0">
                        <?php echo $post['description']; ?>
                    </p>
                </ul>
            </div>
        </div>
    </a>
    <?php
            }
            }else{
            $sign = "feather-arrow-up";
            $text = "အမျိုးအစားရွေးချယ်ပါ";
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