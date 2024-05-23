<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizZen</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
	 <style>
    
        
    </style>
</head>
<body>

 <!-- Welcome Message -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6">
                <br><h2>Welcome to QuizZen!</h2>
                <br><h3>Empower Your Knowledge, Explore Your Curiosity</h3>
                <br><p>At QuizZen, we believe that learning should be interactive, engaging, and above all, fun! Whether you're a trivia enthusiast, a lifelong learner, or just looking for a new way to challenge yourself, you've come to the right place.</p>
				<br>

				 <!-- Explore Quizzes for logged in users -->
				 <?php if ($this->session->userdata('username')): ?>
				<a href="<?php echo base_url('index.php/quizzes'); ?>" class="btn btn-primary explore-button btn-lg">Explore Quizzes</a>
				<?php endif; ?>

				</div>
            <div class="col-lg-6 text-lg-end">
                <!-- Homepage Image -->
                <img src="<?php echo base_url('hp.png'); ?>" alt="QuizZen Image" class="img-fluid">
            </div>
        </div>
    </div>

    
</body>
</html>
