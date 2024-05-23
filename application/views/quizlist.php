<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	
    <style>
        .card {
            background: linear-gradient(to right, #c2e0ff, #e1efff); 
        }
    </style>
</head>
<body>
    <div class="container">
		<br>
        <h1 class="text-center">Quiz List</h1>
        <hr>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php foreach ($quizzes as $quiz): ?>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title"><?php echo $quiz['quizname']; ?></h5>
                        <p class="card-text">Category: <?php echo $quiz['category']; ?></p>
                        <p class="card-text">Created by: <?php echo $quiz['createdby']; ?></p>
                        <form action="<?php echo base_url('index.php/quiz/questions/' . $quiz['quizid']); ?>" method="get">
							<button type="submit" class="btn btn-primary mt-auto">Take Quiz</button>
						</form>			
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
