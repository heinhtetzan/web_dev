<?php require_once "core/auth.php"; ?>
<?php include "template/header.php"; ?>

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            <i class="feather-layers text-primary"></i> Category Manager
                        </h4>
                        <a href="<?php echo $url; ?>/item_list.php" class="btn btn-outline-primary">
                            <i class="feather-list"></i>
                        </a>
                    </div>
                    <hr>
                    <?php

                    $id = $_GET['id'];
                    $current = category($id);

                    if(isset($_POST['updateCat'])){
                        if(categoryUpdate()){
                            linkTo('category_add.php');
                        }
                    }

                    ?>
                    <form method="post">
                        <div class="form-inline">
                            <input type="hidden" value="<?php echo $id; ?>" name="id">
                            <input type="text" class="form-control mr-2" name="title" value="<?php echo $current['title'];?>">
                            <button class="btn btn-primary" name="updateCat">Update Category</button>
                        </div>
                    </form>
                    <?php include 'category_list.php'; ?>
                </div>
            </div>
        </div>
    </div>

<?php include "template/footer.php"; ?>