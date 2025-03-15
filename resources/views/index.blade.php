@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto" style="background-image: url('https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'); background-size: cover; background-position: center;">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Sacred Scripture Archive
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-amber-600 hover:bg-amber-700 text-white py-2 px-4 font-bold text-xl uppercase rounded-lg transition duration-300">
                    Explore Devotionals
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd" width="700" alt="Ancient Bible" class="w-full h-full object-cover">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-6">
                Discovering Biblical Truths
            </h2>

            <p class="py-8 text-gray-600 text-lg leading-relaxed">
                Dive deep into Scripture with our comprehensive study guides and devotional materials. Uncover the historical context and spiritual significance of key biblical passages.
            </p>

            <a
                href="/blog"
                class="uppercase bg-amber-600 hover:bg-amber-700 text-white text-lg font-semibold py-3 px-8 rounded-lg transition duration-300">
                Start Your Journey
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-slate-800 text-white">
        <h2 class="text-2xl pb-5 text-l">
            Study Focus Areas
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="p-4 hover:bg-slate-700 transition duration-300 rounded-lg">
                <span class="font-semibold block text-2xl py-1">
                    Biblical Exegesis
                </span>
                <p class="text-sm mt-2">In-depth scripture analysis</p>
            </div>
            <div class="p-4 hover:bg-slate-700 transition duration-300 rounded-lg">
                <span class="font-semibold block text-2xl py-1">
                    Historical Context
                </span>
                <p class="text-sm mt-2">Ancient Near East studies</p>
            </div>
            <div class="p-4 hover:bg-slate-700 transition duration-300 rounded-lg">
                <span class="font-semibold block text-2xl py-1">
                    Devotional Guides
                </span>
                <p class="text-sm mt-2">Daily spiritual nourishment</p>
            </div>
            <div class="p-4 hover:bg-slate-700 transition duration-300 rounded-lg">
                <span class="font-semibold block text-2xl py-1">
                    Theological Studies
                </span>
                <p class="text-sm mt-2">Doctrinal explorations</p>
            </div>
        </div>
    </div>

    <div class="text-center py-15 bg-white">
        <div class="w-4/5 mx-auto">
            <span class="uppercase text-sm text-amber-600 font-bold">
                Recent Studies
            </span>

            <h2 class="text-4xl font-bold py-10 text-gray-800">
                Latest Devotionals
            </h2>

            <p class="m-auto text-gray-600 text-lg leading-relaxed w-3/4">
                Explore our most recent in-depth biblical studies and spiritual reflections to deepen your understanding of Scripture.
            </p>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="flex bg-slate-800 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs text-amber-400 font-bold">
                    Genesis Study
                </span>

                <h3 class="text-xl font-bold py-10">
                    Exploring Creation Narratives: A Comparative Analysis of Genesis 1-3
                </h3>

                <a
                    href=""
                    class="uppercase border-2 border-amber-400 hover:bg-amber-400 text-amber-400 hover:text-white text-xs font-bold py-3 px-5 rounded-lg transition duration-300">
                    Read Study
                </a>
            </div>
        </div>
        <div class="h-96 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1554693189-9d9a6cd4f251')"></div>
    </div>
@endsection
