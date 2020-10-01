<?php include "core/auth.php"?>
<?php include "template/header.php"; ?>

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Post</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            <i class="feather-list text-primary"></i>  Post List
                        </h4>
                        <a href="<?php echo $url; ?>/post_add.php" class="btn btn-outline-primary">
                            <i class="feather-plus-circle"></i>
                        </a>
                    </div>




                    <table class="table table-hover mt-3 mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>User</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach (posts() as $c){
                            ?>
                            <tr>
                                <td><?php echo $c['id']; ?></td>
                                <td><?php echo short($c['title']); ?></td>
                                <td><?php echo short($c['description']); ?></td>
                                <td><?php echo category($c['category_id'])['title']; ?></td>
                                <td><?php echo user($c['user_id'])['name']; ?></td>
                                <td>
                                    <a href="post_delete.php?id=<?php echo $c['id']; ?>"
                                       onclick="return confirm('Are U sure to delete. 😊')"
                                       class="btn btn-outline-danger btn-sm">
                                        <i class="feather-trash-2 fa-fw"></i>
                                    </a>
                                    <a href="post_edit.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-warning btn-sm">
                                        <i class="feather-edit-2 fa-fw"></i>
                                    </a>
                                </td>
                                <td><?php echo showTime($c['created_at']); ?></td>
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

<?php include "template/footer.php"; ?>