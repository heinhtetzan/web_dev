<?php include "core/auth.php"; ?>
<?php include "core/isAdmin.php"; ?>
<?php include "template/header.php"; ?>

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                            <i class="feather-users text-primary"></i>  User List
                        </h4>
                        <a href="#" class="btn btn-outline-secondary full-screen-btn">
                            <i class="feather-maximize-2"></i>
                        </a>
                    </div>


                    <hr>

                    <table class="table table-hover mt-3 mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach (users() as $c){
                            ?>
                            <tr>
                                <td><?php echo $c['id']; ?></td>
                                <td><?php echo $c['name']; ?></td>
                                <td><?php echo $c['email']; ?></td>
                                <td><?php echo $role[$c['role']]; ?></td>
                                <td>

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
<script>
    $(".table").dataTable({
        "order": [[0, "desc" ]]
    });
</script>
