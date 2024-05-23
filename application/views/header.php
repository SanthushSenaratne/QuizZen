<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   
</head>
<body>
<!-- Header Section -->
<header class="container-fluid bg-primary text-light py-3">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- Website Name -->
        <a href="<?php echo base_url(); ?>" style="text-decoration: none; color: inherit;">
            <h1 class="m-0">QuizZen</h1>
        </a>

        <!-- Check if user is logged in -->
        <?php if ($this->session->userdata('username')): ?>
            <!-- Display username and logout button -->
           <div class="d-flex align-items-center"> <!-- Use flexbox to align items horizontally -->
			<span class="text-light me-3">Welcome, <?php echo $this->session->userdata('username'); ?></span> <!-- Increased margin -->
			 <a href="<?php echo base_url('index.php/profile'); ?>" class="btn btn-light me-3">Profile</a> <!-- Profile button -->
			<form action="<?php echo base_url('index.php/logout'); ?>" method="post"> <!-- Update the action URL -->
				<button type="submit" class="btn btn-danger">Logout</button>
			</form>
			</div>
        <?php else: ?>
            <!-- Display login and register buttons -->
            <div>
                <a href="<?php echo base_url('index.php/login'); ?>" class="btn btn-light me-2">Login</a>
                <a href="<?php echo base_url('index.php/register'); ?>" class="btn btn-outline-light">Register</a>
            </div>
        <?php endif; ?>
    </div>
</header>

</html>
