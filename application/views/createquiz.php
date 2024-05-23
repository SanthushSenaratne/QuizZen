<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .form-container {
            max-width: 75%;
            margin: 50px auto;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

		.question-container {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .remove-question {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h1 class="text-center">Create Quiz</h1>
        <form action="<?php echo base_url('index.php/quiz/create'); ?>" method="post">
            <div class="mb-3">
                <label for="quizname" class="form-label">Quiz Name</label>
                <input type="text" class="form-control" id="quizname" name="quizname" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>
			<br><hr>

            <!-- Questions -->

			 <div id="questions-container">
                <div class="question-container">
                    <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" class="form-control" name="question[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="option1" class="form-label">Option 1</label>
                        <input type="text" class="form-control" name="option1[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="option2" class="form-label">Option 2</label>
                        <input type="text" class="form-control" name="option2[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="option3" class="form-label">Option 3</label>
                        <input type="text" class="form-control" name="option3[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="option4" class="form-label">Option 4</label>
                        <input type="text" class="form-control" name="option4[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">Answer</label>
                        <select class="form-select" name="answer[]" required>
                            <option value="A">Option 1</option>
                            <option value="B">Option 2</option>
                            <option value="C">Option 3</option>
                            <option value="D">Option 4</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-danger remove-question">Remove Question</button>
                </div>
            </div>
            <button type="button" class="btn btn-primary" id="add-question">Add Question</button>
            <button type="submit" class="btn btn-primary">Create Quiz</button>		            
        </form>
		</div>

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add question
            $('#add-question').click(function() {
                var questionHtml = `
                    <div class="question-container">
                        <div class="mb-3">
                            <label for="question" class="form-label">Question</label>
                            <input type="text" class="form-control" name="question[]" required>
                        </div>
                        <div class="mb-3">
                            <label for="option1" class="form-label">Option 1</label>
                            <input type="text" class="form-control" name="option1[]" required>
                        </div>
                        <div class="mb-3">
                            <label for="option2" class="form-label">Option 2</label>
                            <input type="text" class="form-control" name="option2[]" required>
                        </div>
                        <div class="mb-3">
                            <label for="option3" class="form-label">Option 3</label>
                            <input type="text" class="form-control" name="option3[]" required>
                        </div>
                        <div class="mb-3">
                            <label for="option4" class="form-label">Option 4</label>
                            <input type="text" class="form-control" name="option4[]" required>
                        </div>
                        <div class="mb-3">
                            <label for="answer" class="form-label">Answer</label>
                            <select class="form-select" name="answer[]" required>
                                <option value="A">Option 1</option>
                                <option value="B">Option 2</option>
                                <option value="C">Option 3</option>
                                <option value="D">Option 4</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-danger remove-question">Remove Question</button>
                    </div>
                `;
                $('#questions-container').append(questionHtml);
            });

            // Remove question
            $(document).on('click', '.remove-question', function() {
                $(this).closest('.question-container').remove();
            });
        });
    </script>
</body>
</html>
