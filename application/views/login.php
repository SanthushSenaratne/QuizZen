<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
	 <style>
            
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <!-- Login Form -->
                    <form action="<?php echo base_url('index.php/login'); ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
							<small><?php echo form_error('username');?></small>
                        </div>
                        <div class="form-group">					
                            <br><label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
							<small><?php echo form_error('password');?></small>
                        </div>						
                        <br><button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <!-- End Login Form -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
