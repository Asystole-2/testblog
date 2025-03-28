@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <div class="relative h-screen flex items-center justify-center text-center text-white hero-bg">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-6 w-4/5">
            <h1 class="text-6xl font-bold uppercase font-fredoka drop-shadow-lg">
                Welcome to Bible Doodle!
            </h1>
            <p class="mt-5 text-lg text-yellow-300">
                Explore the Bible in a fun and creative way!
            </p>
            <a href="{{ route('study.index') }}"
               class="mt-6 inline-block doodle-button text-lg font-bold py-3 px-8">
                Start Exploring
            </a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container mx-auto py-8 px-6 sm:px-8 about-bg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Image Container -->
            <div class="rounded-lg shadow-lg overflow-hidden">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs03M5bp7Ghk1kDljnzkt5A7abaVFrM5uWlA&s"
                     class="w-[735px] h-[735px] object-cover" alt="Ancient Bible">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800 font-fredoka">
                    What is Bible Doodle?
                </h2>
                <p class="mt-4 text-gray-600 text-base leading-relaxed">
                    Bible Doodle is a fun and interactive way to learn about the Bible. With colorful designs, engaging stories, and creative activities, we make Bible study exciting for everyone!
                </p>
                <a href="{{ route('about') }}"
                   class="mt-6 inline-block doodle-button text-lg font-semibold py-3 px-8">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- Study Categories -->
    <div class="bg-yellow-300 text-gray-800 text-center py-12">
        <h2 class="text-3xl font-bold font-fredoka">What We Offer</h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6 sm:px-12">
            <!-- Devotions Card -->
            <div class="p-6 bg-white hover:bg-yellow-100 transition duration-300 rounded-lg doodle-card">
                <h3 class="text-2xl font-semibold">Devotions</h3>
                <p class="mt-2 text-sm">Daily Bible reflections</p>
            </div>

            <!-- Studies Card -->
            <div class="p-6 bg-white hover:bg-yellow-100 transition duration-300 rounded-lg doodle-card">
                <h3 class="text-2xl font-semibold">Studies</h3>
                <p class="mt-2 text-sm">In-depth Bible topics</p>
            </div>

            <!-- Community Card -->
            <div class="p-6 bg-white hover:bg-yellow-100 transition duration-300 rounded-lg doodle-card">
                <h3 class="text-2xl font-semibold">Community</h3>
                <p class="mt-2 text-sm">A blog section for everyone to communicate lessons, share confusions, or simply connect!</p>
            </div>

            <!-- Activities Card (Optional) -->
            <div class="p-6 bg-white hover:bg-yellow-100 transition duration-300 rounded-lg doodle-card">
                <h3 class="text-2xl font-semibold">Kid Friendly Space</h3>
                <p class="mt-2 text-sm">Fun and colourful to encourage the younger audience to engage in the word through a vibrant medium</p>
            </div>
        </div>
    </div>
@endsection
