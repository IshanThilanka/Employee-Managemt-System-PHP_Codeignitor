<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card mx-auto" style="width: 50rem">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="padding-left:300px;">Edit</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger">BACK</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('employee/update/'.$employee->id)?>" method="post">

                        <div class="form-group">
                            <label for="first_name"> First Name </label>
                            <input type="text" class="form-control" name="fname" value="<?= $employee->first_name ?>">
                            <small>
                                <?php echo form_error('fname'); ?>
                           </small>
                        </div>

                        <div class="form-group">
                            <label for="last_name"> Last Name </label>
                            <input type="text" class="form-control" name="lname" value="<?= $employee->last_name ?>">
                            <?php echo form_error('lname'); ?>
                        </div>

                        <div class="form-group">
                            <label for="phone"> Phone Number </label>
                            <input type="text" class="form-control" name="phoneNo" value="<?= $employee->phone ?>">
                            <?php echo form_error('phoneNo'); ?>
                        </div>

                        <div class="form-group">
                            <label for="email"> Email ID </label>
                            <input type="text" class="form-control" name="Email" value="<?= $employee->email ?>">
                            <?php echo form_error('Email'); ?>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
