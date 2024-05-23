<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Questions</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br><h1>Quiz Questions</h1>
        <hr>
        <form action="<?php echo base_url('index.php/quiz/evaluate'); ?>" method="post">
        <!-- Hidden input field to hold the quizId -->
            <input type="hidden" name="quizId" value="<?php echo $quizId; ?>">   
		<?php foreach ($quizQuestions as $question): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $question['question']; ?></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo $question['qid']; ?>" id="optionA<?php echo $question['qid']; ?>" value="A" required>
                            <label class="form-check-label" for="optionA<?php echo $question['qid']; ?>">A) <?php echo $question['option1']; ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo $question['qid']; ?>" id="optionB<?php echo $question['qid']; ?>" value="B" required>
                            <label class="form-check-label" for="optionB<?php echo $question['qid']; ?>">B) <?php echo $question['option2']; ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo $question['qid']; ?>" id="optionC<?php echo $question['qid']; ?>" value="C" required>
                            <label class="form-check-label" for="optionC<?php echo $question['qid']; ?>">C) <?php echo $question['option3']; ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo $question['qid']; ?>" id="optionD<?php echo $question['qid']; ?>" value="D" required>
                            <label class="form-check-label" for="optionD<?php echo $question['qid']; ?>">D) <?php echo $question['option4']; ?></label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
