<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laguna Open University Portal</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans text-gray-800">

    <!-- Navbar -->
    <nav class="bg-maroon text-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold">LOU Portal</a>
            <div>
                <a href="{{ url('/login') }}" class="px-4 py-2 bg-white text-maroon rounded hover:bg-gray-100">Login</a>
                <a href="{{ url('/register') }}" class="px-4 py-2 ml-2 bg-maroon text-white rounded hover:bg-maroon-dark">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-white py-36 text-center text-maroon">
        <h1 class="text-4xl font-bold mb-4">Welcome to Our Laguna Open University</h1>
        <p class="py-10 text-xl italic">"Empowering Students, Shaping the Future."</p>

    </section>

   

    <!-- About Section -->
    <section class="py-16 bg-white text-center">
        <hr>
        <h2 class="text-3xl font-bold my-6 text-maroon">About Our University</h2>
        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p class="text-gray-600">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>

    <!-- Programs Section -->
    <section class="py-16 bg-maroon-light text-center">
        <h2 class="text-3xl font-bold mb-6 text-white">Our Programs</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded shadow border-t-4 border-maroon">Program 1</div>
            <div class="bg-white p-6 rounded shadow border-t-4 border-maroon">Program 2</div>
            <div class="bg-white p-6 rounded shadow border-t-4 border-maroon">Program 3</div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white text-center">
        <h2 class="text-3xl font-bold mb-6 text-maroon">Contact Us</h2>
        <p class="text-gray-600 mb-4">Email: info@university.com | Phone: +123 456 7890</p>
        <p class="text-gray-600">Address: 123 University St, City, Country</p>
    </section>

    <!-- Footer -->
    <footer class="bg-maroon text-white py-6 text-center">
        &copy; {{ date('Y') }} Laguna Open University. All rights reserved.
    </footer>

</body>
</html>
