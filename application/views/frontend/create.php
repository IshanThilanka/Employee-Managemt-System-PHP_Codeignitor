

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card mx-auto" style="width: 50rem;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Add Employee Details</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?php echo base_url('employee/add'); ?>" class="btn btn-danger">BACK</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('employee/store'); ?>" method="post">

                            <div class="form-group">
                                <label for="first_name"> First Name </label>
                                <input type="text" class="form-control" name="fname">
                                <small>
                                    <?php echo form_error('fname'); ?>
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="last_name"> Last Name </label>
                                <input type="text" class="form-control" name="lname">
                                <?php echo form_error('lname'); ?>
                            </div>

                            <div class="form-group">
                                <label for="phone"> Phone Number </label>
                                <input type="text" class="form-control" name="phoneNo">
                                <?php echo form_error('phoneNo'); ?>
                            </div>

                            <div class="form-group">
                                <label for="email"> Email ID </label>
                                <input type="text" class="form-control" name="Email">
                                <?php echo form_error('Email'); ?>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


