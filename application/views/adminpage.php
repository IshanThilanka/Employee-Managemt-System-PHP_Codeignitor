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
                        <h5>Admin Page</h5>
                    </div>
                    <div class="card-body">
                        <h6>you are in Admin - Dashboard</h6>
                        <h5>first name</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>