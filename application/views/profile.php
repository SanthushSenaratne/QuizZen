<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="card-title text-center mb-0">Your Profile</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Personal Information</h3>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Name:</strong> <?php echo $user['name']; ?></li>
                            <li class="list-group-item"><strong>Email:</strong> <?php echo $user['email']; ?></li>
                            <li class="list-group-item"><strong>Username:</strong> <?php echo $user['username']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title text-center mb-0">Quizzes Created by You</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php if (!empty($quizzes)): ?>
                                <?php foreach ($quizzes as $quiz): ?>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $quiz['quizname']; ?></h5>
                                                <p class="card-text"><strong>Category:</strong> <?php echo $quiz['category']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
								<div class="col-12 mt-3">
									<a href="<?php echo base_url('index.php/createquiz'); ?>" class="btn btn-primary">Create New Quiz</a>
								</div>
                            <?php else: ?>
                                <p class="text-muted">No quizzes created yet.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title text-center mb-0">Quiz Attempts</h3>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($quiz_attempts)): ?>
                            <?php foreach ($quiz_attempts as $attempt): ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Quiz ID: <?php echo $attempt['quizid']; ?></h5>
                                        <p class="card-text"><strong>Score:</strong> <?php echo $attempt['score']; ?>%</p>
                                        <p class="card-text"><strong>Timestamp:</strong> <?php echo $attempt['timestamp']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-muted">No quiz attempts found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
