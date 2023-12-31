<div class= "py-5">
    <div class= "container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <?php if ($this->session->flashdata('status')): ?>

                <div class="alert alert-success">
                    <?= $this->session->flashdata('status'); ?>
                    </div>
                    <?php endif; ?>
          
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Login</h5>
                    </div>
                        <div class="card-body">
                        <form action="<?php echo base_url('login')?>" method="POST">
                            <div class = "form-group">
                                <label for="">Email Address</label>
                                <input type="text" name = "email_id" class ="form-control" placeholder="Enter Email Address">
                                <small><?php echo form_error('email_id'); ?></small>
                            </div>
                            <div class = "form-group">
                                <label for="">Password</label>
                                <input type="password" name = "password" class ="form-control" placeholder="Enter Password">
                                <small><?php echo form_error('password'); ?></small>
                            </div>
                            <hr>
                            <div class = "form-group">  
                                <button type="submit" class="btn btn-success btn-block">Login Now</button>
                                
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

