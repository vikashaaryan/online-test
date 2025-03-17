<?php
include_once("config/connect.php");

// Set default values if session variables are not set
$total_questions = isset($_SESSION['question_index']) ? $_SESSION['question_index'] : 0;
$correct_answers = isset($_SESSION['correct_answers']) ? $_SESSION['correct_answers'] : 0;
$wrong_answers = isset($_SESSION['wrong_answers']) ? $_SESSION['wrong_answers'] : 0;

// Destroy session to restart quiz
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-r from-indigo-100 via-purple-100 to-pink-100">
    <div class="bg-white p-10 rounded-2xl shadow-2xl w-[400px] text-center">
        <h1 class="text-3xl font-extrabold text-indigo-700 mb-6">Quiz Completed</h1>

        <div class="flex flex-col gap-4 text-lg font-medium text-gray-700">
            <div class="flex justify-between">
                <span>Total Questions</span>
                <span class="font-bold"><?= $total_questions ?></span>
            </div>
            <div class="flex justify-between text-green-600">
                <span>Right Answers</span>
                <span class="font-bold"><?= $correct_answers ?></span>
            </div>
            <div class="flex justify-between text-red-600">
                <span>Wrong Answers</span>
                <span class="font-bold"><?= $wrong_answers ?></span>
            </div>
        </div>

        <a href="starttest.php" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white text-lg px-6 py-2 rounded-lg shadow-md transition duration-300">
           Try Again
        </a>
    </div>
</body>

</html>