<?php include_once "config/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

</head>

<body class="bg-[#F6F4F0]">
    <?php include_once "include/header.php"; ?>
    <div class="h-[660px] relative bg-red-400 w-full">
        <img src="https://png.pngtree.com/thumb_back/fh260/background/20240610/pngtree-computer-of-a-programmer-with-lines-code-of-software-image_15746003.jpg" class="w-full h-full object-cover" alt="">

        <!-- Signup Form Container -->
        <div class="absolute flex flex-col justify-center items-center right-10 top-10 bg-[#F6F4F0] p-8 rounded-lg shadow-2xl w-[550px]">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Sign Up</h2>


            <p class="text-green-600 hidden" id="success-message">✔ Registration Successful!</p>


            <form action="" method="post" class="flex flex-col gap-4 w-full">
                <input type="text" name="name" class="border border-gray-400 px-4 py-2 rounded-md focus:ring-2 focus:ring-bg-[#2E5077] w-full" placeholder="Enter your name" required>

                <select name="gender" class="border  border-gray-400 px-4 py-2 rounded-md focus:ring-2 focus:ring-bg-[#2E5077] w-full">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <input type="text" name="college_name" class="border border-gray-400 px-4 py-2 rounded-md focus:ring-2 focus:ring-bg-[#2E5077] w-full" placeholder="Enter your college name" required>

                <input type="email" name="email" class="border border-gray-400 px-4 py-2 rounded-md focus:ring-2 focus:ring-bg-[#2E5077] w-full" placeholder="Enter your email-id" required>

                <input type="number" name="contact" class="border border-gray-400 px-4 py-2 rounded-md focus:ring-2 focus:ring-bg-[#2E5077] w-full" placeholder="Enter your mobile number" required>

                <input type="password" name="password" class="border border-gray-400 px-4 py-2 rounded-md focus:ring-2 focus:ring-bg-[#2E5077] w-full" placeholder="Enter your password" required>

                <input type="password" name="c_password" class="border border-gray-400 px-4 py-2 rounded-md focus:ring-2 focus:ring-bg-[#2E5077] w-full" placeholder="Confirm password" required>

                <!-- Submit Button -->
                <button type="submit" name="submit" class="bg-[#172e47] cursor-pointer text-white font-semibold px-4 py-2 rounded-md hover:bg-[#2E5077] transition w-full">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
    <?php include_once "footer.php";?>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $college_name = $_POST['college_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    $c_password = md5($_POST['c_password']);

    $query = $connect->query("insert into users(name,gender,college_name,email,contact,password,c_password)value('$name','$gender','$college_name','$email','$contact','$password','$c_password') ");

    redirect("start_quiz.php");
}
?>