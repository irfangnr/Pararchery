<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
    	<div class="col-lg-12 d-flex justify-content-between mb-3">
    		<h1 class="h3 text-gray-800"><?= $title; ?></h1>

    		<a href="" class="btn btn-primary" data-toggle="modal" data-target="#newAccountModal">Add New Account</a>
    	</div>


        <div class="col-lg-12">

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    	<th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($athlete as $a) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $a['name']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <td><?= $a['role']; ?></td>
                        <td><?= date("d M Y, h:m:s",$a['date_created']); ?></td>                        
                        <td>
                        	<a href="#" class="badge badge-success">Detail</a>
                        	<a href="#" class="badge badge-warning">Change Password / Role</a>
                        	<a href="#" class="badge badge-danger">Delete</a>
                        </td>

                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?> 
                </tbody>
            </table>    
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 


<!-- Modal -->
<div class="modal fade" id="newAccountModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                	<div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password name">
                    </div>                  
                    <div class="form-group">
	                    <select class="custom-select" id="role" name="role" required>
	                    <option value="2">Coach</option>
	                    <option value="3" selected>Athlete</option>
	                	</select>
                	</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 