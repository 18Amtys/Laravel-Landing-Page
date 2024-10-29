<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yukiko Amatyas Sahda XI PPLG 4</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white shadow p-4 flex justify-between items-center">
        <div class="text-2xl font-bold">Online Shopping</div>
        <input type="search" placeholder="Search in site" class="border rounded p-2">
    </header>

    <section class="hero text-center py-10">
        <h1 class="text-4xl font-semibold mb-4">Welcome to our Online Store!</h1>
        <p class="mb-6">Discover the latest trends in fashion and shop your favorite styles.</p>
        <input type="text" placeholder="Search for products" class="border rounded p-2 mb-4">
        <div class="mb-4">
            <button class="bg-blue-500 text-white p-2 rounded mr-2">Create an Account</button>
            <button class="bg-blue-500 text-white p-2 rounded">Sign In</button>
        </div>
        <div>
            <button class="bg-gray-300 p-2 rounded mr-2">Men</button>
            <button class="bg-gray-300 p-2 rounded mr-2">Women</button>
            <button class="bg-gray-300 p-2 rounded">Kids</button>
        </div>
    </section>

    <section class="featured-products px-4 py-10">
        <h2 class="text-3xl font-semibold mb-6">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/img/tas.jpg" alt="Product Image" class="w-full h-48 object-cover mb-2">
                <p class="font-semibold">Product Name</p>
                <p>Price: $50</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/img/dompet.jpg" alt="Product Image" class="w-full h-48 object-cover mb-2">
                <p class="font-semibold">Product Name</p>
                <p>Price: $60</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/img/baju.jpg" alt="Product Image" class="w-full h-48 object-cover mb-2">
                <p class="font-semibold">Product Name</p>
                <p>Price: $70</p>
            </div>
        </div>
        <button class="bg-blue-500 text-white p-2 rounded mt-4">View All Products</button>
    </section>

    <section class="daily-deals px-4 py-10">
        <h2 class="text-3xl font-semibold mb-6">Daily Deals</h2>
        <div class="space-y-4">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold">Deal 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button class="bg-red-500 text-white p-2 rounded mt-2">Limited Time Offer</button>
                <p class="mt-2">by John Doe</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold">Deal 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button class="bg-red-500 text-white p-2 rounded mt-2">Limited Time Offer</button>
                <p class="mt-2">by Jane Smith</p>
            </div>
        </div>
    </section>

    <section class="categories-section px-4 py-10">
        <h2 class="text-3xl font-semibold mb-6">Categories</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <p class="font-semibold">Clothing</p>
                <p>Women's, Men's, Kids'</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="font-semibold">Shoes</p>
                <p>Women's, Men's, Kids'</p>
            </div>
        </div>
    </section>

    <section class="latest-posts px-4 py-10">
        <h2 class="text-3xl font-semibold mb-6">Latest Posts</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/img/make-up.jpg" alt="Post Image" class="w-full h-48 object-cover mb-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>by John Doe</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/img/skincare.jpg" alt="Post Image" class="w-full h-48 object-cover mb-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>by Jane Smith</p>
            </div>
        </div>
    </section>

    <section class="contact-us px-4 py-10">
        <h2 class="text-3xl font-semibold mb-6">Contact Us</h2>
        <form class="bg-white p-4 rounded shadow">
            <input type="text" placeholder="Name" required class="border rounded p-2 w-full mb-4">
            <input type="email" placeholder="Email" required class="border rounded p-2 w-full mb-4">
            <textarea placeholder="Message" required class="border rounded p-2 w-full mb-4"></textarea>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Send Message</button>
        </form>
    </section>

    <section class="sales-statistics px-4 py-10">
        <h2 class="text-3xl font-semibold mb-6">Sales Statistics</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <p>Total Revenue</p>
                <p class="font-semibold">$10,000</p>
                <p class="text-green-500">+20%</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p>Orders</p>
                <p class="font-semibold">500</p>
                <p class="text-red-500">-10%</p>
            </div>
        </div>
        <div class="sales-chart mt-4">
            <img src="assets/img/chart.png" alt="Sales Chart" class="w-full">
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-4">
        <div class="flex justify-center space-x-4">
            <a href="#" class="hover:underline">About Us</a>
            <a href="#" class="hover:underline">FAQ</a>
            <a href="#" class="hover:underline">Terms of Service</a>
            <a href="#" class="hover:underline">Privacy Policy</a>
        </div>
    </footer>
</body>
</html>