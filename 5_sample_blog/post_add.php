<?php include "core/auth.php"?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/post_list.php">Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Post</li>
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
                        <i class="feather-plus-circle text-primary"></i> Add Post
                    </h4>
                    <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>
                <?php

                    if(isset($_POST['addPost'])){
                        postAdd();
                    }

                ?>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="">Post Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Select Category</label>
                        <select name="category_id" id="" class="custom-select">
                            <?php foreach (categories() as $c){ ?>
                                <option value="<?php echo $c['id']; ?>"><?php echo $c['title']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Post Description</label>
                        <textarea type="text" name="description" rows="15" class="form-control" required></textarea>
                    </div>
                    <hr>
                    <button class="btn btn-primary" name="addPost">Add Post</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>