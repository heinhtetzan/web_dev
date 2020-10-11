<?php session_start(); ?>
<?php require_once "front_panel/head.php"; ?>
<title>Home</title>
<?php require_once "front_panel/side_header.php"; ?>
<?php
$id = $_GET['id'];
$current = post($id);
$currentCat = $current['category_id'];

if(isset($_SESSION['user']['id'])){
    $userId = $_SESSION['user']['id'];
}else{
    $userId = 0;
}

viewerRecord($userId, $id, $_SERVER['HTTP_USER_AGENT']);

?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Post Detail</li>
                </ol>
            </nav>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="">
                        <h4>
                            <?php echo $current['title']; ?>
                        </h4>
                        <div class="my-3">
                            <i class="feather-user text-primary"></i>
                            <?php echo user($current['user_id'])['name']; ?>
                            <i class="feather-layers text-success"></i>
                            <?php echo category($current['category_id'])['title']; ?>
                            <i class="feather-calendar text-danger"></i>
                            <?php echo date("j M Y",strtotime($current['created_at'])); ?>

                        </div>
                        <div class="">
                            <?php echo html_entity_decode($current['description'],ENT_QUOTES); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach (fPostByCat($currentCat,2,$id) as $p){ ?>
                    <div class="col-12 col-md-6">
                        <div class="card shadow-sm mb-4 post">
                            <div class="card-body">
                                <a href="detail.php?id=<?php echo $p['id']; ?>" class="text-primary">
                                    <h4>
                                        <?php echo $p['title']; ?>
                                    </h4>
                                </a>
                                <div class="my-3">
                                    <i class="feather-user text-primary"></i>
                                    <?php echo user($p['user_id'])['name']; ?>
                                    <i class="feather-layers text-success"></i>
                                    <?php echo category($p['category_id'])['title']; ?>
                                    <i class="feather-calendar text-danger"></i>
                                    <?php echo date("j M Y",strtotime($p['created_at'])); ?>
                                </div>
                                <p class="text-black-50">
                                    <?php echo short(strip_tags(html_entity_decode($p['description'])),200); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <?php require_once "right-sidebar.php"; ?>
    </div>
</div>

<?php require_once "front_panel/footer.php"; ?>




