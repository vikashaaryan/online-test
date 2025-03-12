<?php include_once "config/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body> 

    <!-- Navbar -->
    <div class="bg-white">
        <div class="bg-black  py-6 mt-1">
            <div class="flex justify-between mx-10">
                <a href="" class="py-2 px-4 border text-yellow-500 hover:border-yellow-500 rounded font-semibold">About Us</a>
                <div class="">
                    <button class="py-2 px-4 text-yellow-500 border hover:border-yellow-500 rounded font-semibold" type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example" data-drawer-placement="top" aria-controls="drawer-top-example">
                        Admin Login
                    </button>
                    <div id="drawer-top-example"
                        class="fixed top-0 left-0 right-0 mt-6 z-40 max-w-3xl mx-auto p-8 transition-transform -translate-y-full bg-white shadow-md rounded-md"
                        tabindex="-1" aria-labelledby="drawer-top-label">
                        <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
                            class="text-gray-400 hover:text-gray-900 absolute top-3 right-3">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <div class="">
                            <h2 class="text-2xl text-red-600 font-semibold">Login</h2>
                            <div class="flex justify-center items-center">
                                <form action="" method="post">
                                    <div class="flex flex-col gap-4">
                                        <input type="text" name="admin" placeholder="Enter Admin User Id . . . . . ." class="py-2 px-4 border border-gray-600 w-[50vh] rounded">
                                        <input type="text" name="password" placeholder="Password . . . . . ." class="py-2 px-4 border border-gray-600 w-[50vh] rounded">
                                        <input type="submit" name="submit" value="login" class="py-2 bg-blue-600 text-white font-semibold px-4 border border-gray-600 w-[20vh] text-center rounded">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <!-- Developer Button -->
                    <button class="py-2 px-4 text-yellow-500 border hover:border-yellow-500 rounded font-semibold"
                        type="button"
                        data-drawer-target="developer-drawer"
                        data-drawer-show="developer-drawer"
                        data-drawer-placement="top"
                        aria-controls="developer-drawer">
                        Developer
                    </button>

                    <!-- Developer Drawer -->
                    <div id="developer-drawer"
                        class="fixed top-0 left-0 right-0 mt-6 z-40 max-w-2xl mx-auto p-8 transition-transform -translate-y-full bg-white shadow-md rounded-md"
                        tabindex="-1" aria-labelledby="developer-drawer-label">

                        <button type="button" data-drawer-hide="developer-drawer" aria-controls="developer-drawer"
                            class="text-gray-400 hover:text-gray-900 absolute top-3 right-3">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>

                        <div class="p-6 bg-white rounded-md shadow-md">
                            <h2 class="text-2xl text-red-600 font-semibold mb-4 border-b pb-2">Developer</h2>

                            <div class="flex items-center space-x-6 mt-4">
                                <!-- Profile Image -->
                                <img src="https://bairesdev.mo.cloudinary.net/blog/2022/08/portrait-of-a-man-using-a-computer-in-a-modern-office-picture-id1344688156-1.jpg?tx=w_1920,q_auto"
                                    class="h-32 w-32 object-cover rounded-full shadow-md border-2 border-gray-200" alt="Profile Image" />

                                <!-- Info -->
                                <div class="text-gray-800 space-y-1">
                                    <p class="text-lg font-semibold">Vikash Kumar</p>
                                    <p class="text-sm">📞 +91 7250407215</p>
                                    <p class="text-sm">✉️ vikashaaryan23@gmail.com</p>
                                    <p class="text-sm">🎓 Purnea College, Purnea</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Feedback Button -->
                <a data-modal-target="feedbackModal" data-modal-toggle="feedbackModal"
                    class="py-2 px-4 border text-yellow-500 hover:border-yellow-500 rounded font-semibold">
                    Feedback
                </a>

                <div id="feedbackModal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full h-screen p-4 overflow-x-hidden overflow-y-auto flex items-center justify-center">

                    <div class="relative bg-cover bg-center rounded-lg shadow-md max-w-xl w-[80vw] p-8 flex items-center justify-center"
                        style="background-image: url('https://img.freepik.com/free-vector/messages-light-colour-background_78370-2586.jpg'); min-height: 450px;">

                        <div class="absolute inset-0 bg-black bg-opacity-60 rounded-lg"></div>

                        <!-- Close Button -->
                        <button type="button" class="absolute top-3 right-3 text-white z-10"
                            data-modal-hide="feedbackModal">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                            </svg>
                        </button>

                        <!-- Modal Content -->
                        <div class="relative z-10 text-white w-full">
                            <h3 class="text-2xl font-semibold text-yellow-500 text-center mb-3">FEEDBACK / REPORT A PROBLEM</h3>
                            <p class="text-center mb-4 text-sm leading-relaxed">
                                You can send us your feedback through email on the following email ID:
                                <span class="text-yellow-400">vikash@gmail.com</span><br><br>
                                Or you can directly submit your feedback by filling out the form below:
                            </p>

                            <form action="" method="post" class="space-y-3 text-sm">
                                <div>
                                    <label for="name" class="block font-medium">Your Name</label>
                                    <input type="text" name="name" id="name"
                                        class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                        placeholder="John Doe">
                                </div>
                                <div>
                                    <label for="subject" class="block font-medium">Subject</label>
                                    <input type="text" name="subject" id="subject"
                                        class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                        placeholder="Subject">
                                </div>
                                <div>
                                    <label for="email" class="block font-medium">E-mail Address</label>
                                    <input type="email" name="email" id="email"
                                        class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                        placeholder="you@example.com">
                                </div>
                                <div>
                                    <label for="feedback" class="block font-medium">Your Feedback</label>
                                    <textarea id="feedback" name="feedback" rows="3"
                                        class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                        placeholder="Write something..."></textarea>
                                </div>
                                <button type="submit" name="submit"
                                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
                                    Submit Feedback
                                </button>
                            </form>
                            <?php
                            if (isset($_POST['submit'])) {
                                $name = $_POST['name'];
                                $subject = $_POST['subject'];
                                $email = $_POST['email'];
                                $feedback = $_POST['feedback'];

                                $query = $connect->query("insert into feedback (name,subject,email,feedback) value('$name','$subject','$email','$feedback')");

                                if ($query) {
                                    msg('feedback send sucessfull');
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>

                <!-- Flowbite Script (required for modal toggle) -->
                <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>