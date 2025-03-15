@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-screen flex items-center justify-center text-center text-gray-100 bg-cover bg-center"
         style="background-image: url('https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 w-4/5">
            <h1 class="text-5xl font-extrabold uppercase leading-tight drop-shadow-lg">
                Discover the Depths of God’s Word
            </h1>
            <p class="mt-5 text-lg text-gray-300">
                Study the Scriptures, grow in faith, and deepen your walk with Christ.
            </p>
            <a href="/blog"
               class="mt-6 inline-block bg-amber-600 hover:bg-amber-700 text-white text-lg font-bold py-3 px-6 rounded-lg transition duration-300">
                Start Studying
            </a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container mx-auto py-16 px-6 sm:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd"
                     class="w-full h-full object-cover" alt="Ancient Bible">
            </div>
            <div>
                <h2 class="text-4xl font-bold text-gray-800">
                    Unlocking Biblical Truths
                </h2>
                <p class="mt-4 text-gray-600 text-lg leading-relaxed">
                    Our mission is to guide you through in-depth Bible study, uncovering historical context, spiritual depth, and life-changing wisdom from God’s Word.
                </p>
                <a href="/study"
                   class="mt-6 inline-block bg-amber-600 hover:bg-amber-700 text-white text-lg font-semibold py-3 px-8 rounded-lg transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- Study Categories -->
    <div class="bg-slate-800 text-white text-center py-16">
        <h2 class="text-3xl font-bold">Study Focus Areas</h2>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-6 px-6 sm:px-12">
            <div class="p-6 bg-slate-700 hover:bg-slate-600 transition duration-300 rounded-lg">
                <h3 class="text-2xl font-semibold">Biblical Exegesis</h3>
                <p class="mt-2 text-sm">Deep dive into Scripture interpretation</p>
            </div>
            <div class="p-6 bg-slate-700 hover:bg-slate-600 transition duration-300 rounded-lg">
                <h3 class="text-2xl font-semibold">Historical Context</h3>
                <p class="mt-2 text-sm">Exploring the cultural & historical backdrop</p>
            </div>
            <div class="p-6 bg-slate-700 hover:bg-slate-600 transition duration-300 rounded-lg">
                <h3 class="text-2xl font-semibold">Devotional Guides</h3>
                <p class="mt-2 text-sm">Daily encouragement & reflections</p>
            </div>
            <div class="p-6 bg-slate-700 hover:bg-slate-600 transition duration-300 rounded-lg">
                <h3 class="text-2xl font-semibold">Theological Studies</h3>
                <p class="mt-2 text-sm">Understanding key doctrines of faith</p>
            </div>
        </div>
    </div>

    <!-- Latest Devotions -->
    <div class="bg-white text-center py-16">
        <div class="w-4/5 mx-auto">
            <span class="uppercase text-sm text-amber-600 font-bold">
                Recent Studies
            </span>
            <h2 class="text-4xl font-bold py-5 text-gray-800">
                Latest Devotionals
            </h2>
            <p class="m-auto text-gray-600 text-lg leading-relaxed w-3/4">
                Stay up-to-date with our latest biblical reflections, scriptural insights, and devotional readings to enrich your faith journey.
            </p>
        </div>
    </div>

    <!-- Featured Study -->
    <div class="sm:grid grid-cols-2 w-4/5 m-auto bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="flex bg-slate-900 text-gray-100 pt-10 px-6">
            <div class="m-auto w-full">
                <span class="uppercase text-xs text-amber-400 font-bold">
                    Genesis Study
                </span>
                <h3 class="text-2xl font-bold py-5">
                    Exploring Creation Narratives: A Comparative Study of Genesis 1-3
                </h3>
                <a href="/study/genesis"
                   class="inline-block border-2 border-amber-400 hover:bg-amber-400 text-amber-400 hover:text-white text-xs font-bold py-3 px-6 rounded-lg transition duration-300">
                    Read Study
                </a>
            </div>
        </div>
        <div class="h-96 bg-cover bg-center"
             style="background-image: url('https://images.unsplash.com/photo-1554693189-9d9a6cd4f251')">
        </div>
    </div>

@endsection
