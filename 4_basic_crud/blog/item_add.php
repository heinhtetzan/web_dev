

<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/item_list.php">Item</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Item</li>
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
                        <i class="feather-plus-circle text-primary"></i> Add Item
                    </h4>
                    <a href="<?php echo $url; ?>/item_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="photo">
                                    Photo Upload
                                </label>
                                <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support Jpg, Png"></i>

                                <input type="file" name="photo" id="photo" class="form-control p-1" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Item Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="t">Item Type</label>
                                <select name="type" class="form-control custom-select" id="t">
                                    <option value="0">ကုန်ဆို</option>
                                    <option value="1">ကုန်ခြောက်</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="c">Category</label>
                                <select name="type" class="form-control custom-select" id="c">
                                    <option value="" selected>Select Category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sc">Sub Category</label>
                                <select name="type" class="form-control custom-select" id="sc">
                                    <option value="" selected>Select Sub Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-6">
                                    <label for="q">Item Quantity</label>
                                    <input type="text" name="q" class="form-control" id="q">
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="type">Unit</label>
                                        <select name="type" class="form-control custom-select" id="type">
                                            <option value="0">ကုန်ဆို</option>
                                            <option value="1">ကုန်ခြောက်</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" id="price" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="des">Description</label>
                                <textarea type="text" id="des" name="des" rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary">Add Item</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>