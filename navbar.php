<!--                    header-->
<div class="header d-flex justify-content-between align-content-center mt-5">
    <div class="">
        <h1>Today</h1>
        <p id="date"></p>
    </div>
    <div class="py-2">
        <i class="feather-calendar" style="font-size: 40px"></i>
    </div>
</div>
<!--                    header-->
<!--                    search bar-->
<div class="col-12 mb-4">
    <form action="#" class="search-form">
        <div class="row bg-blue hidden-form hide">
            <div class="col-10">
                <input type="text" class="form-control me-2" name="search">
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
        <p class="d-inline mb-2 text-white">Search</p>
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
            <a href="index.php?catId=<?php echo $cat['id']; ?>" class="active">
                <p><?php echo $cat['category_name']; ?></p>
            </a>
        <?php
            }
        ?>
    </div>
</div>
<!--                    navigations-->