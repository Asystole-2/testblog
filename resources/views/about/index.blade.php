@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12 px-6 sm:px-12">
        <h1 class="text-5xl font-bold text-gray-800 font-fredoka text-center mb-8">
            About Us
        </h1>

        <!-- Mission Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg doodle-card mb-12">
            <h2 class="text-3xl font-bold text-gray-800 font-fredoka mb-6">
                Our Mission
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                At Bible Doodle, our mission is to <span class="font-semibold text-purple-600">spread the word of God</span> through creative and engaging methods. We believe that everyone, from children to adults, can connect with the Bible in a fun and meaningful way. Our goal is to make Bible study accessible, interactive, and inspiring for all.
            </p>
        </div>

        <!-- Missionary Work Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg doodle-card mb-12">
            <h2 class="text-3xl font-bold text-gray-800 font-fredoka mb-6">
                Missionary Work
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                We are committed to supporting <span class="font-semibold text-purple-600">missionary work</span> around the world. Through partnerships with global organizations, we help bring the Gospel to underserved communities. Our efforts include:
            </p>
            <ul class="list-disc list-inside mt-4 text-gray-600 text-lg leading-relaxed">
                <li>Providing Bibles and educational materials to remote areas.</li>
                <li>Training local leaders to share the message of Christ.</li>
                <li>Supporting community development projects that reflect God's love.</li>
            </ul>
        </div>

        <!-- Donations Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg doodle-card mb-12">
            <h2 class="text-3xl font-bold text-gray-800 font-fredoka mb-6">
                Donations
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Your <span class="font-semibold text-purple-600">donations</span> make a difference! By contributing to Bible Doodle, you help us:
            </p>
            <ul class="list-disc list-inside mt-4 text-gray-600 text-lg leading-relaxed">
                <li>Create free Bible resources for children and families.</li>
                <li>Fund missionary trips and outreach programs.</li>
                <li>Develop interactive tools and apps for Bible study.</li>
            </ul>
            <!-- PayPal Button Container -->
            <div id="donate-button-container" class="mt-6 flex justify-center">
                <div id="donate-button" class="custom-paypal-button"></div>
            </div>
            <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
            <script>
                PayPal.Donation.Button({
                    env:'production',
                    hosted_button_id:'UMAAEW6SHQAC8',
                    image: {
                        alt:'Donate with PayPal button',
                        title:'PayPal - The safer, easier way to pay online!',
                    }
                }).render('#donate-button');
            </script>
        </div>

        <!-- Educating Kids Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg doodle-card mb-12">
            <h2 class="text-3xl font-bold text-gray-800 font-fredoka mb-6">
                Educating Kids
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                We believe that <span class="font-semibold text-purple-600">educating kids</span> about the Bible is one of the most important things we can do. Our programs include:
            </p>
            <ul class="list-disc list-inside mt-4 text-gray-600 text-lg leading-relaxed">
                <li>Interactive Bible stories and activities for children.</li>
                <li>Sunday school resources for teachers and parents.</li>
                <li>Fun and engaging apps that teach biblical principles.</li>
            </ul>
        </div>

        <!-- The Mission of God Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg doodle-card mb-12">
            <h2 class="text-3xl font-bold text-gray-800 font-fredoka mb-6">
                The Mission of God
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                The <span class="font-semibold text-purple-600">mission of God</span> is at the heart of everything we do. We strive to:
            </p>
            <ul class="list-disc list-inside mt-4 text-gray-600 text-lg leading-relaxed">
                <li>Share the love of Christ with everyone we meet.</li>
                <li>Empower believers to live out their faith in their communities.</li>
                <li>Inspire the next generation to follow God's calling.</li>
            </ul>
        </div>

        <!-- Call to Action -->
        <!-- Call to Action -->
        <div class="text-center mt-12">
            <h2 class="text-4xl font-bold text-gray-800 font-fredoka mb-6">
                Join Us in Our Mission!
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-8">
                Whether through prayer, donations, or volunteering, you can be a part of spreading God's word to the world.
            </p>

            <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg doodle-card" style="border: 3px solid #2d3748;">
                <form method="POST" action="{{ route('signup.store') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block text-gray-700 text-lg font-semibold mb-2" style="font-family: 'Comic Neue', cursive;">
                            Your Name:
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               class="w-full px-4 py-2 rounded-lg border-2 border-gray-300 focus:outline-none focus:border-purple-600"
                               style="font-family: 'Comic Neue', cursive;">
                        @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-lg font-semibold mb-2" style="font-family: 'Comic Neue', cursive;">
                            Your Email:
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-2 rounded-lg border-2 border-gray-300 focus:outline-none focus:border-purple-600"
                               style="font-family: 'Comic Neue', cursive;">
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full py-3 px-6 bg-purple-600 hover:bg-purple-700 text-white text-lg font-bold rounded-lg transition-all duration-300 transform hover:scale-105"
                            style="font-family: 'Comic Neue', cursive; box-shadow: 4px 4px 0 #2d3748;">
                        Join Now! 🎨
                    </button>
                </form>
            </div>

            <p class="mt-6 text-gray-600 text-sm" style="font-family: 'Comic Neue', cursive;">
                "Each of you should use whatever gift you have received to serve others..." - 1 Peter 4:10
            </p>
        </div>

    <!-- Custom CSS for PayPal Button -->
    <style>
        .custom-paypal-button {
            background-color: #ffcc00; /* Yellow background */
            border: 2px solid #333; /* Dark border */
            border-radius: 15px; /* Rounded corners */
            padding: 10px 20px; /* Padding for better spacing */
            box-shadow: 5px 5px 0 #333; /* Doodle-style shadow */
            transition: all 0.3s ease; /* Smooth hover effect */
        }

        .custom-paypal-button:hover {
            background-color: #ff6f61; /* Change color on hover */
            transform: translateY(-2px); /* Slight lift on hover */
            box-shadow: 7px 7px 0 #333; /* Enhanced shadow on hover */
        }

        .custom-paypal-button img {
            display: block; /* Ensure the image is centered */
            margin: 0 auto; /* Center the image horizontally */
        }
    </style>
@endsection
