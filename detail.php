<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
                    <!--                    main-content-->
                    <div class="main-contents">
                        <?php
                            $id = $_GET['postId'];
                            $stmt = $pdo->prepare("SELECT * FROM posts WHERE id=:id ORDER BY id DESC ");
                            $stmt->execute([':id'=>$id]);
                            $result = $stmt->fetchAll();
                            foreach ($result as $detail){
                        ?>
                            <div class="card content-card mb-4">
                                <div class="card-body">
                                    <h3><?php echo $detail['title'] ?></h3>
                                    <span class="badge rounded-pill bg-button mb-4"><?php echo $detail['tag'] ?></span>
                                    <p>
                                        <?php echo $detail['description'] ?>
                                    </p>
                                    <a href="javascript:history.go(-1)" class="btn bg-button btn-sm float-end">နောက်သို့</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!--                    main-content-->
<?php include "footer.php"; ?>