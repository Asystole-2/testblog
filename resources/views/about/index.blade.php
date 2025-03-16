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
            <a href="/donate"
               class="mt-6 inline-block doodle-button text-lg font-semibold py-3 px-8">
                Donate Now
            </a>
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
        <div class="text-center mt-12">
            <h2 class="text-4xl font-bold text-gray-800 font-fredoka mb-6">
                Join Us in Our Mission!
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-8">
                Whether through prayer, donations, or volunteering, you can be a part of spreading God's word to the world.
            </p>
            <a href="/get-involved"
               class="inline-block doodle-button text-lg font-semibold py-3 px-8">
                Get Involved
            </a>
        </div>
    </div>
@endsection
