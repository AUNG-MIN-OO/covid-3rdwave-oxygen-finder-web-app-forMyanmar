<!--                    header-->
<div class="header d-flex justify-content-between align-content-center mt-5 mb-4">
    <div class="">
        <h2>Covid 3rd wave helper</h2>
        <p id="date"></p>
    </div>
    <div class="py-2">
        <a href="report_to_admin.php" class="">
            <i class="feather-message-circle" style="font-size: 40px;color: var(--background-blue)"></i>
        </a>
    </div>
</div>
<!--                    header-->
<!--                    search bar-->
<div class="col-12 mb-4">
    <form action="index.php" class="search-form">
        <div class="row bg-blue hidden-form hide">
            <div class="col-10">
                <input type="text" class="form-control me-2" name="search" placeholder="ရန်ကုန်">
            </div>
            <div class="col-2">
                <button class="btn bg-button">
                    <i class="feather-search"></i>
                </button>
            </div>
        </div>
    </form>
    <button class="btn bg-button w-100 search-btn" >
        <i class="feather-search text-white"></i>
        <p class="d-inline mb-2 text-white">တိုင်းနှင့်ပြည်နယ်အလိုက်ရှာမည်</p>
    </button>
</div>
<!--                    search bar-->
<!--                    navigations-->
<div class="navigations mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM categories");
        $stmt->execute();
        $catResult = $stmt->fetchAll();
        foreach($catResult as $cat){
        ?>
            <a href="index.php?catId=<?php echo $cat['id']; ?>" class="<?php echo isset($_GET['catId'])? $_GET[catId]==$cat['id']?'active':'':'' ?>">
                <p><?php echo $cat['category_name']; ?></p>
            </a>
        <?php
            }
        ?>
    </div>
</div>
<!--                    navigations-->