<div class= "py-5">
    <div class= "container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                
            <?php if ($this->session->flashdata('status')): ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('status'); ?>
                </div>
                <?php endif; ?>                 
                <div class="card">
                    <div class="card-header">
                        <h5 style="text-align:center;">User Page</h5>
                    </div>
                    <div class="card-body">
                        <h4>Users on this session</h6>
                        <h6>First Name :<?= $this->session->userdata('auth_user')['first_name'];?></h5>
                        <h6>Last Name :<?= $this->session->userdata('auth_user')['last_name'];?></h5>
                        <h6>Email :<?= $this->session->userdata('auth_user')['email'];?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  