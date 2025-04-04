<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Resource Guides</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white font-sans text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-500 py-4 px-6">
        <div class="flex items-center justify-between">
            <div class="text-white text-lg font-semibold">Local Resource Guides</div>
            <div class="flex space-x-4">
                <a href="#" class="text-white">Advertise</a>
                <a href="#" class="text-white">Host a Display</a>
                <a href="#" class="text-white">Pay Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-[50vh] flex items-center justify-center text-white text-center"
        style="background-image: url('your-image-url.jpg')">
        <h1 class="text-3xl md:text-4xl font-bold">Your Trusted Partner for Local Resource Guides</h1>
        <p class="mt-4 text-sm md:text-lg">Helping communities explore dining, event, and activity guides, plus brochure
            distribution.</p>
    </section>

    <!-- Main Content -->
    <section class="py-8 px-6 space-y-8">
        <div class="text-center">
            <h2 class="text-2xl font-semibold">We Are LRG</h2>
            <p class="mt-4 text-sm md:text-base">Your trusted partner in creating, printing, and distributing local
                resource guides for your community.</p>
        </div>

        <!-- Services -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="text-center">
                <h3 class="font-semibold">Local Guides</h3>
                <p class="mt-2 text-sm">Professionally designed and printed guides featuring local dining, events, and
                    more.</p>
            </div>
            <div class="text-center">
                <h3 class="font-semibold">LRG Maps</h3>
                <p class="mt-2 text-sm">Maps highlighting key attractions, restaurants, hotels, and events.</p>
            </div>
            <div class="text-center">
                <h3 class="font-semibold">Brochure Distribution</h3>
                <p class="mt-2 text-sm">Strategic distribution through an extensive network of high-traffic locations.
                </p>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="text-center">
            <h2 class="text-2xl font-semibold">Why Choose Us?</h2>
            <div class="mt-4 flex flex-wrap justify-center gap-8">
                <div class="flex flex-col items-center space-y-2">
                    <span class="bg-yellow-500 text-white p-2 rounded-full">Icon</span>
                    <p class="text-sm">Visually appealing and expertly crafted local guides</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <span class="bg-yellow-500 text-white p-2 rounded-full">Icon</span>
                    <p class="text-sm">Wide distribution network ensuring maximum visibility</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <span class="bg-yellow-500 text-white p-2 rounded-full">Icon</span>
                    <p class="text-sm">Affordable advertising options for businesses</p>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="text-center">
            <h2 class="text-2xl font-semibold">Happy Entrepreneurs</h2>
            <p class="mt-4 text-sm">"It changed my business. The exposure we received helped us gain new customers!"</p>
            <p class="mt-2 text-xs text-gray-600">- Sarah T., Local Restaurant Owner</p>
        </div>

        <!-- Call to Action -->
        <div class="bg-blue-500 text-white text-center py-8">
            <h3 class="text-xl font-semibold">Join us in making local exploration easier and more enjoyable.</h3>
            <p class="mt-4 text-sm">Contact us today to learn more about how we can help grow your business.</p>
            <a href="#" class="mt-4 inline-block bg-yellow-500 text-white py-2 px-4 rounded-full">Join Us and Grow Your
                Business</a>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-gray-100 py-8">
        <div class="text-center">
            <h2 class="text-2xl font-semibold">Join Our Newsletter</h2>
            <form class="mt-4 flex justify-center">
                <input type="email" class="px-4 py-2 rounded-l-lg border-2 border-gray-300" placeholder="Enter email">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-r-lg">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="text-center">
            <p class="text-xs">&copy; 2025 Local Resource Guides. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>


<?php get_footer() ?>
