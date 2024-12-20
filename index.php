<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $grade = $_POST['grade'];

    if (!is_numeric($grade) || $grade < 0 || $grade > 100) {
        $message = "<div class='alert alert-danger mt-3'>ERROR: Invalid Grade. Please enter a grade between 0 and 100.</div>";
    } else {
        if ($grade >= 96 && $grade <= 100) {
            $universityGrade = "1.0. Excellent Job!";
        } elseif ($grade >= 94 && $grade <= 95) {
            $universityGrade = "1.25. Very Good!";
        } elseif ($grade >= 91 && $grade <= 93) {
            $universityGrade = "1.5. Very Good!";
        } elseif ($grade >= 88 && $grade <= 90) {
            $universityGrade = "1.75. Good Job!";
        } elseif ($grade >= 85 && $grade <= 87) {
            $universityGrade = "2.0. Good Job!";
        } elseif ($grade >= 83 && $grade <= 84) {
            $universityGrade = "2.25. Good Job!";
        } elseif ($grade >= 80 && $grade <= 82) {
            $universityGrade = "2.5. Fair.";
        } elseif ($grade >= 78 && $grade <= 79) {
            $universityGrade = "2.75. Fair.";
        } elseif ($grade >= 75) {
            $universityGrade = "3.0. Pass.";
        } else {
            $universityGrade = "5.0. Failed.";
        }

        $message = "<div class='alert alert-success mt-3'>The grade is <strong>$grade</strong>, and the university grade is <strong>$universityGrade</strong></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Grading System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body class="bg-dark text-light d-flex justify-content-center align-items-center vh-100">
    <div class="form-container bg-secondary text-light rounded shadow p-4">
        <h1 class="text-center mb-4">Grading System II</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <input type="number" name="grade" class="form-control bg-dark text-light border-light" placeholder="Enter your grade (0-100)" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Calculate Grade</button>
        </form>

        <?php if (isset($message)) echo $message; ?>
    </div>
    <div class="dropdown position-absolute" style="right: 20px; top: 20px;">
        <button class="btn btn-info dropdown-toggle" type="button" id="gradingInfoDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            University Grading Info
        </button>
        <ul class="dropdown-menu dropdown-menu-end bg-dark text-light py-2" aria-labelledby="gradingInfoDropdown">
            <li class="dropdown-item bg-dark text-light py-2"><strong>1.0</strong>: 96 - 100 (Excellent)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>1.25</strong>: 94 - 95 (Very Good)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>1.5</strong>: 91 - 93 (Very Good)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>1.75</strong>: 88 - 90 (Good)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>2.0</strong>: 85 - 87 (Good)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>2.25</strong>: 83 - 84 (Fair)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>2.5</strong>: 80 - 82 (Fair)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>2.75</strong>: 78 - 79 (Fair)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>3.0</strong>: 75 - 77 (Pass)</li>
            <li class="dropdown-item bg-dark text-light py-2"><strong>5.0</strong>: Below 75 (Fail)</li>
        </ul>
    </div>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
