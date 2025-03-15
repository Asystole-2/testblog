@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-amber-700 border-amber-600 bg-amber-100 px-3 py-4 mb-4 font-script" role="alert">
                    ✝️ {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" opacity=\"0.1\"><text x=\"50%\" y=\"55%\" dominant-baseline=\"middle\" text-anchor=\"middle\" font-size=\"40\">✟</text></svg>')">

            <header class="font-semibold bg-indigo-800 text-gold py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md border-b-4 border-gold">
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3zm0 15.08c-2.21 0-4-1.78-4-3.97 0-1.04.81-2.3 2.01-3.51L12 8.86l1.99 1.74c1.2 1.21 2.01 2.47 2.01 3.51 0 2.19-1.79 3.97-4 3.97z"/>
                    </svg>
                    <h1 class="text-2xl font-bold font-serif">Faith Journey Dashboard</h1>
                </div>
                <p class="mt-2 text-sm font-normal">"I can do all things through Christ who strengthens me" - Philippians 4:13</p>
            </header>

            <div class="w-full p-6 bg-parchment">
                <div class="max-w-2xl mx-auto text-center">
                    <p class="text-lg text-charcoal font-serif mb-4">
                        🙏 Welcome, faithful servant! May your day be blessed with wisdom and grace.
                    </p>
                    <div class="mt-6 p-4 bg-eggshell rounded-lg shadow-inner border border-gray-200">
                        <h3 class="font-bold text-maroon mb-2">Today's Scripture</h3>
                        <p class="italic text-gray-700">"Your word is a lamp for my feet, a light on my path."</p>
                        <p class="text-right text-gray-600 mt-2">- Psalm 119:105 (NIV)</p>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('bible.study') }}" class="bg-indigo-700 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300">
                            📖 Begin Daily Study
                        </a>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </main>
@endsection

@push('styles')
    <style>
        .font-script { font-family: 'Cinzel Decorative', 'Times New Roman', serif; }
        .font-serif { font-family: 'Merriweather', 'Times New Roman', serif; }
        .bg-parchment { background-color: #faf4e1; }
        .text-gold { color: #c5a047; }
        .text-maroon { color: #800000; }
        .bg-eggshell { background-color: #f0ead6; }
        .text-charcoal { color: #36454f; }
    </style>
@endpush
