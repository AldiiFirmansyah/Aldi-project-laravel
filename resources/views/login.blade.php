<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - Kamera</title>
</head>
<body class="bg-gray-800 flex justify-center items-center h-screen">
    <div class="bg-gray-700 rounded-lg shadow-lg p-8 w-full max-w-md">
        <form id="loginform" class="space-y-4">
            <div>
                <label for="username" class="block text-gray-300 font-medium mb-2">Username:</label>
                <input type="text" name="username" id="username" class="bg-gray-800 border-gray-600 rounded-md px-3 py-2 w-full text-gray-300 focus:outline-none focus:border-primary" required>
            </div>

            <div>
                <label for="password" class="block text-gray-300 font-medium mb-2">Password:</label>
                <input type="password" name="password" id="password" class="bg-gray-800 border-gray-600 rounded-md px-3 py-2 w-full text-gray-300 focus:outline-none focus:border-primary" required>
            </div>

            <button type="submit" class="bg-primary hover:bg-primary-dark text-white font-medium py-2 px-4 rounded-md w-full">Login</button>
        </form>
    </div>

    <script src="/Asset/script.js"></script>
</body>
</html>