<?php

    session_start();
    require_once "base.php";
    require_once "function.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="my-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight-bold text-uppercase">
                                Register Form
                            </h4>
                            <hr>

                            <?php



                                if(isset($_POST['reg'])){

                                    register();

                                }
                            ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name" class="text-primary font-weight-bold">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo old('name'); ?>">
                                    <?php if(getError('name')) { ?>
                                        <small class="text-danger font-weight-bold"><?php echo getError('name') ?></small>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-primary font-weight-bold">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" value="<?php echo old('email'); ?>">
                                    <?php if(getError('email')) { ?>
                                        <small class="text-danger font-weight-bold"><?php echo getError('email') ?></small>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="text-primary font-weight-bold">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo old('phone'); ?>">
                                    <?php if(getError('phone')) { ?>
                                        <small class="text-danger font-weight-bold"><?php echo getError('phone') ?></small>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="text-primary font-weight-bold">Address</label>
                                    <textarea type="text" id="address" name="address" class="form-control"><?php echo old('address'); ?></textarea>
                                    <?php if(getError('address')) { ?>
                                        <small class="text-danger font-weight-bold"><?php echo getError('address') ?></small>
                                    <?php } ?>
                                </div>


                                <div class="form-group">
                                    <label class="text-primary font-weight-bold">Gender</label>
                                    <div class="border border-faded rounded p-2">
                                        <?php foreach ($genderArr as $g){ ?>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="<?php echo $g; ?>_id" name="gender" class="custom-control-input" <?php echo old('gender') == $g ? 'checked':''; ?>  value="<?php echo $g; ?>">
                                                <label class="custom-control-label text-capitalize" for="<?php echo $g; ?>_id"><?php echo $g; ?></label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <?php if(getError('gender')) { ?>
                                        <small class="text-danger font-weight-bold"><?php echo getError('gender') ?></small>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label class="text-primary font-weight-bold">Your Skill</label>
                                    <div class="border border-faded rounded p-2">
                                        <?php foreach ($skillArr as $s){ ?>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox"
                                                       name="skill[]"
                                                       class="custom-control-input"
                                                       value="<?php echo $s; ?>" id="<?php echo $s; ?>_skill"
                                                       <?php

                                                       if(old('skill')){
                                                           echo in_array($s,old('skill')) ? "checked" : "";
                                                       }

                                                       ?>
                                                >
                                                <label class="custom-control-label" for="<?php echo $s; ?>_skill"><?php echo $s; ?></label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <?php if(getError('skill')) { ?>
                                        <small class="text-danger font-weight-bold"><?php echo getError('skill') ?></small>
                                    <?php } ?>
                                </div>



                                <hr>
                                <div class="form-row justify-content-between align-items-center">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked required id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2">All Correct</label>
                                    </div>
                                    <button name="reg" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php clearError(); ?>
</body>
</html>