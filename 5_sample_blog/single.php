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