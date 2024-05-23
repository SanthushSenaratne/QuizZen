<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation Results</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Your Quiz Result</h5>
                <p class="display-1"><?php echo $score; ?>/<?php echo $total_questions; ?></p>
                <p class="card-text">You got <?php echo $score; ?> out of <?php echo $total_questions; ?> correct!</p>
                <a href="<?php echo base_url('index.php/quizzes'); ?>" class="btn btn-primary">Take Another Quiz</a>
            </div>
        </div>
    </div>
</body>
</html>
