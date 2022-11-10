<?php include "includes/header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Student</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row mt-2">
                                    <label class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" class="form-control">
                                            <option value="">Select a category</option>
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category['id'] ?>" ><?php echo $category['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <textarea name="address" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" value="Add Student" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "includes/footer.php"; ?>
