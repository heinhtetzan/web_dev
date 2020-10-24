<?php require_once "core/auth.php"; ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-heart h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('viewers'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Visitor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go('<?php echo $url; ?>/post_list.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-list h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('posts'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Post</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go('<?php echo $url; ?>/category_add.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-layers h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('categories'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go('<?php echo $url; ?>/user_list.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-users h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('users'); ?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-12 col-xl-7">
        <div class="card overflow-hidden shadow mb-4">
            <div class="">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">Visitors</h4>
                    <div class="">
                        <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                    </div>
                </div>


                <canvas id="ov" height="140"></canvas>

            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-5">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">Category / Post</h4>
                    <div class="">
                        <i class="feather-pie-chart h4 mb-0 text-primary"></i>
                    </div>
                </div>



                <canvas id="op" height="200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card overflow-hidden mb-4">
            <div class="">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0 font-weight-bold">Recent Posts</h4>
                    <div class="">
                        <?php

                            $currentUserId = $_SESSION['user']['id'];
                            $postTotal =  countTotal("posts");
                            $currentUserPostTotal =  countTotal("posts","user_id = $currentUserId");
                            $currentUserPostPercentage = ($currentUserPostTotal/$postTotal)*100;

                            $finalPercentage = floor($currentUserPostPercentage);

                        ?>
                        <small>Your Post : <?php echo $currentUserPostTotal; ?></small>
                        <div class="progress" style="width: 300px;height: 8px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $finalPercentage; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <table class="table table-hover table-bordered mb-0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <?php if($_SESSION['user']['role'] == 0){ ?>
                            <th>User</th>
                        <?php } ?>
                        <th>Viewer Count</th>
                        <th>Control</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    foreach (dashboardPosts(5) as $c){
                        ?>
                        <tr>
                            <td><?php echo $c['id']; ?></td>
                            <td><?php echo short($c['title']); ?></td>
                            <td><?php echo short(strip_tags(html_entity_decode($c['description']))); ?></td>
                            <td class="text-nowrap"><?php echo category($c['category_id'])['title']; ?></td>
                            <?php if($_SESSION['user']['role'] == 0){ ?>
                                <td class="text-nowrap"><?php echo user($c['user_id'])['name']; ?></td>
                            <?php } ?>
                            <td>
                                <?php echo count(viewerCountByPost($c['id'])); ?>
                            </td>
                            <td class="text-nowrap">
                                <a href="post_detail.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-info btn-sm">
                                    <i class="feather-info fa-fw"></i>
                                </a>
                                <a href="post_delete.php?id=<?php echo $c['id']; ?>"
                                   onclick="return confirm('Are U sure to delete. 😊')"
                                   class="btn btn-outline-danger btn-sm">
                                    <i class="feather-trash-2 fa-fw"></i>
                                </a>
                                <a href="post_edit.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-warning btn-sm">
                                    <i class="feather-edit-2 fa-fw"></i>
                                </a>
                            </td>
                            <td class="text-nowrap"><?php echo showTime($c['created_at']); ?></td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>
<script src="<?php echo $url; ?>/assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/chart_js/chart.min.js"></script>

<script>
    $('.counter-up').counterUp({
        delay: 10,
        time: 1000
    });

    <?php

    $dateArr = [];
    $visitorRate = [];
    $transitionRate = [];

    $today = date("Y-m-d");

    for($i=0;$i<10;$i++){

        $date=date_create($today);

        date_sub($date,date_interval_create_from_date_string("$i days"));

        $current = date_format($date,"Y-m-d");

        array_push($dateArr,$current);

        $result = countTotal("viewers","CAST(created_at AS DATE) = '$current'");

        array_push($visitorRate,$result);

        $result2 = countTotal("transition","CAST(created_at AS DATE) = '$current'");

        array_push($transitionRate,$result2);

    }

    ?>

    let dateArr = <?php echo json_encode($dateArr); ?>;// date 10 ရပ်စာ ပြောင်ပြန်

    let viewerCountArr = <?php echo json_encode($visitorRate); ?>; // တစ်ရပ်ကို လာကြည့်တဲ့လူ

    let transitionArr = <?php echo json_encode($transitionRate); ?>;

    let ov = document.getElementById('ov').getContext('2d');
    let ovChart = new Chart(ov, {
        type: 'line',
        data: {
            labels: dateArr,
            datasets: [
                {
                    label: 'Viewer Count',
                    data: viewerCountArr,
                    backgroundColor: [
                        '#007bff30',
                    ],
                    borderColor: [
                        '#007bff',
                    ],
                    borderWidth: 1,
                    tension:0
                },
                {
                    label: 'Transition Count',
                    data: transitionArr,
                    backgroundColor: [
                        '#28a74530',
                    ],
                    borderColor: [
                        '#28a745',
                    ],
                    borderWidth: 1,
                    tension:0
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    display:false,
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes:[
                    {
                        display:false,
                        gridLines:[
                            {
                                display:false
                            }
                        ]
                    }
                ]
            },
            legend:{
                display: true,
                shape:"circle",
                position: 'top',
                labels: {
                    fontColor: '#333',
                    usePointStyle:true
                }
            }
        }
    });


    <?php

    $catName = [];
    $countPostByCategory = [];
    foreach(categories() as $c) {

        array_push($catName, $c['title']);
        array_push($countPostByCategory, countTotal('posts', "category_id={$c['id']}"));
    }


    ?>

    let catArr = <?php echo json_encode($catName); ?>;
    let countArr = <?php  echo json_encode($countPostByCategory); ?>;

    let op = document.getElementById('op').getContext('2d');
    let opChart = new Chart(op, {
        type: 'doughnut',
        data: {
            labels:catArr,
            datasets: [{
                label: '# of Votes',
                data:countArr,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    display:false,
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [
                    {
                        display:false
                    }
                ]
            },
            legend:{
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: '#333',
                    usePointStyle:true
                }
            }
        }
    });
</script>

