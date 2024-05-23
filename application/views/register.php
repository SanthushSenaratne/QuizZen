<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   
</head>
<body>
<!-- Header Section -->


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <!-- Registration Form -->
                    <form action="<?php echo base_url('index.php/register'); ?>" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
							<small><?php echo form_error('name');?></small>
                        </div>
						<div class="form-group">
							<br>
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
							<small><?php echo form_error('username');?></small>
                        </div>
                        <div class="form-group">
							<br>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
							<small><?php echo form_error('email');?></small>
                        </div>
                        <div class="form-group">
							<br>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
							<small><?php echo form_error('password');?></small>
                        </div>
						<br>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    <!-- End Registration Form -->
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
