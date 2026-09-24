<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="scroll-smooth">
<head>
	<base href="{{ url('/') }}/">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="{{$settings->site_name}} is a global logistics service provider offering premium shipping, courier, and tracking services worldwide." />
    <meta name="keywords" content="logistics, shipping, freight, courier, transport, global delivery, package tracking" />
    <meta name="author" content="{{$settings->site_name}}" />
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="" />

    <!-- Modern Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Heroicons -->
    <script src="https://unpkg.com/heroicons@2.0.16/24/outline/index.js" type="module"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="{{ asset('temp/custom/images/rt-favicon.svg') }}" rel="shortcut icon">
    <title>Welcome to {{$settings->site_name}} - Premium Global Shipping Solutions</title>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out forwards',
                        'bounce-slow': 'bounce 2s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Alpine.js x-cloak directive */
        [x-cloak] {
            display: none !important;
        }


        body {
            top: 0px !important;
        }

        .skiptranslate iframe {
            visibility: hidden !important;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Smooth transitions */
        * {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="font-inter bg-gray-50" x-data="{ mobileMenuOpen: false, searchOpen: false }" x-cloak>
    <!-- iOS-Compatible Preloader -->
    <div id="preloader" class="fixed inset-0 bg-white z-[9999] flex items-center justify-center" style="-webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px);">
        <div class="text-center">
            <!-- Simplified Animated Logo Container -->
            <div class="w-24 h-24 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <!-- Company Initial or Small Logo -->
                <img src="{{ asset('temp/custom/images/rt-favicon.svg') }}" alt="Logo" class="w-12 h-12 object-contain animate-bounce rounded-2xl">
            </div>

            <!-- Simple Loading Spinner (more compatible across devices) -->
            <div class="mt-4 flex items-center justify-center space-x-2">
                <div class="w-3 h-3 bg-primary-600 rounded-full animate-bounce" style="animation-delay: 0s;"></div>
                <div class="w-3 h-3 bg-primary-600 rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
                <div class="w-3 h-3 bg-primary-600 rounded-full animate-bounce" style="animation-delay: 0.4s;"></div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="{{ request()->routeIs('home') ? 'absolute z-50 top-3 md:top-6 left-3 md:left-6 right-3 md:right-6 pt-4 px-2 md:px-4' : 'bg-white shadow-md z-50 relative' }}" style="will-change: transform;">
        <!-- Top Bar for Non-Home pages -->
        @if(!request()->routeIs('home'))
        <div class="bg-primary-700 text-white py-2">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-clock text-primary-200"></i>
                            <span>Open 24/7 for Global Logistics</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-primary-200"></i>
                            <a href="mailto:{{$settings->contact_email}}" class="hover:text-primary-200 transition-colors">
                                {{$settings->contact_email}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 {{ request()->routeIs('home') ? '' : 'bg-white' }}">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex flex-col items-start leading-none mt-1">
                        <div class="text-2xl font-black italic tracking-tighter">
                            <span class="{{ request()->routeIs('home') ? 'text-white' : 'text-gray-900' }}">Real</span><span class="text-primary-400">Time</span>
                        </div>
                        <div class="text-[9px] tracking-[0.4em] {{ request()->routeIs('home') ? 'text-white' : 'text-gray-600' }} font-bold ml-1 mt-1 opacity-90">
                            LOGISTICS
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1 {{ request()->routeIs('home') ? 'bg-white/10 backdrop-blur-md border border-white/20' : 'bg-gray-100 border border-gray-200' }} rounded-xl p-1 shadow-sm">
                    <!-- Home Link -->
                    <a href="/" class="px-5 py-2 text-sm font-semibold rounded-lg transition-all {{ request()->routeIs('home') ? 'bg-white/20 text-white shadow-sm' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-200/60' }}">
                        Home
                    </a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a href="services" class="px-5 py-2 text-sm font-semibold rounded-lg transition-all flex items-center cursor-pointer {{ request()->routeIs('home') ? 'text-gray-200 hover:text-white hover:bg-white/5' : (request()->is('services*') || request()->is('diplomatic*') ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-200/60') }}">
                            Services <i class="fas fa-chevron-down ml-1 text-[10px]"></i>
                        </a>
                        <!-- Dropdown Content Container with padding to bridge the gap -->
                        <div x-show="open" x-cloak class="absolute top-full left-0 pt-3 w-64 z-50">
                            <div class="bg-white rounded-lg shadow-xl border border-gray-200 py-2">
                                <a href="services" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <i class="fas fa-plane mr-3 text-primary-600"></i>Air Freight
                                </a>
                                <a href="services" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <i class="fas fa-ship mr-3 text-primary-600"></i>Sea/Ocean Freight
                                </a>
                                <a href="services" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <i class="fas fa-truck mr-3 text-primary-600"></i>Road Transportation
                                </a>
                                <a href="diplomatic" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <i class="fas fa-shield-alt mr-3 text-primary-600"></i>Diplomatic Services
                                </a>
                                <a href="services" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <i class="fas fa-warehouse mr-3 text-primary-600"></i>Warehousing
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Track Link -->
                    <a href="order" class="px-5 py-2 text-sm font-semibold rounded-lg transition-all {{ request()->routeIs('home') ? 'text-gray-200 hover:text-white hover:bg-white/5' : (request()->is('order*') ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-200/60') }}">
                        Track
                    </a>

                    <!-- About Link -->
                    <a href="about" class="px-5 py-2 text-sm font-semibold rounded-lg transition-all {{ request()->routeIs('home') ? 'text-gray-200 hover:text-white hover:bg-white/5' : (request()->is('about*') ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-200/60') }}">
                        About
                    </a>

                    <!-- FAQ Link -->
                    <a href="faq" class="px-5 py-2 text-sm font-semibold rounded-lg transition-all {{ request()->routeIs('home') ? 'text-gray-200 hover:text-white hover:bg-white/5' : (request()->is('faq*') ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-200/60') }}">
                        FAQ
                    </a>

                    <!-- Contact Link -->
                    <a href="contact" class="px-5 py-2 text-sm font-semibold rounded-lg transition-all {{ request()->routeIs('home') ? 'text-gray-200 hover:text-white hover:bg-white/5' : (request()->is('contact*') ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-200/60') }}">
                        Contact
                    </a>
                </div>

                <!-- CTA & Mobile Menu -->
                <div class="flex items-center space-x-2 md:space-x-3">
                    <!-- Quote Button (Desktop & Mobile) -->
                    <a href="contact" class="flex group items-stretch hover:opacity-90 transition-opacity shadow-lg rounded-xl overflow-hidden">
                        <div class="bg-primary-400 text-gray-900 px-3 md:px-4 py-2 font-bold text-xs md:text-sm flex items-center justify-center">
                            Quote
                        </div>
                        <div class="bg-primary-400 text-gray-900 px-2.5 md:px-3 py-2 font-bold text-xs md:text-sm flex items-center justify-center border-l border-primary-500/30">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>

                    <!-- Mobile Menu Button -->
                    <div class="lg:hidden flex items-center">
                        <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="bg-primary-400 text-gray-900 p-2 md:p-2.5 rounded-xl shadow-lg hover:bg-primary-300 transition-colors">
                            <i class="fas fa-bars text-sm md:text-base w-4 text-center" x-show="!mobileMenuOpen" x-cloak></i>
                            <i class="fas fa-times text-sm md:text-base w-4 text-center" x-show="mobileMenuOpen" x-cloak></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div x-show="mobileMenuOpen" x-cloak class="lg:hidden bg-white border-t border-gray-200 absolute w-full left-0 mt-4 rounded-b-xl shadow-xl z-50">
                <div class="px-4 py-6 space-y-2">
                    <a href="/" class="block px-3 py-2 text-gray-900 font-medium hover:bg-primary-50 rounded-lg">Home</a>
                    <a href="services" class="block px-3 py-2 text-gray-700 font-medium hover:bg-primary-50 rounded-lg">Services</a>
                    <a href="order" class="block px-3 py-2 text-gray-700 font-medium hover:bg-primary-50 rounded-lg">Track Shipment</a>
                    <a href="about" class="block px-3 py-2 text-gray-700 font-medium hover:bg-primary-50 rounded-lg">About</a>
                    <a href="faq" class="block px-3 py-2 text-gray-700 font-medium hover:bg-primary-50 rounded-lg">FAQ</a>
                    <a href="contact" class="block px-3 py-2 text-gray-700 font-medium hover:bg-primary-50 rounded-lg">Contact</a>
                    <a href="contact" class="block w-full text-center bg-primary-400 text-gray-900 py-3 mt-4 rounded-xl font-bold shadow-md">Get a quote</a>
                </div>
            </div>
        </nav>
        
        <!-- Error Message Banner for Non-Home -->
        @if (Session::has('error') && !request()->routeIs('home'))
        <div class="bg-red-50 border-l-4 border-red-400 p-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-triangle text-red-400"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700">
                            <strong>Error!</strong> You have entered an incorrect tracking number.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </header>



        @yield('content')

        <!-- Modern Footer -->
        <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white">
            <!-- Main Footer Content -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div class="lg:col-span-2">
                        <div class="mb-6">
                            <a href="/" class="flex flex-col items-start leading-none inline-block">
                                <div class="text-3xl font-black italic tracking-tighter">
                                    <span class="text-white">Real</span><span class="text-primary-400">Time</span>
                                </div>
                                <div class="text-[10px] tracking-[0.4em] text-gray-400 font-bold ml-1 mt-1 opacity-90">
                                    LOGISTICS
                                </div>
                            </a>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-white">{{$settings->site_name}}</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Providing Smart Logistics Solutions Across The World. We deliver excellence in shipping,
                            courier services, and package tracking with our global network of trusted partners.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center hover:bg-primary-700 transition-colors">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center hover:bg-primary-700 transition-colors">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center hover:bg-primary-700 transition-colors">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center hover:bg-primary-700 transition-colors">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-6 text-white">Quick Links</h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="/" class="text-gray-300 hover:text-primary-400 transition-colors flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="about" class="text-gray-300 hover:text-primary-400 transition-colors flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="services" class="text-gray-300 hover:text-primary-400 transition-colors flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>
                                    Our Services
                                </a>
                            </li>
                            <li>
                                <a href="order" class="text-gray-300 hover:text-primary-400 transition-colors flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>
                                    Track Shipment
                                </a>
                            </li>
                            <li>
                                <a href="contact" class="text-gray-300 hover:text-primary-400 transition-colors flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="diplomatic" class="text-gray-300 hover:text-primary-400 transition-colors flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>
                                    Diplomatic Services
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-lg font-semibold mb-6 text-white">Contact Info</h4>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-envelope text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Email Us</p>
                                    <a href="mailto:{{$settings->contact_email}}" class="text-white hover:text-primary-400 transition-colors">
                                        {{$settings->contact_email}}
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-phone text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Call Us</p>
                                    <p class="text-white">TOLL FREE Support</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-clock text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Working Hours</p>
                                    <p class="text-white">24/7 Global Support</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Track -->
                        <div class="mt-8">
                            <h5 class="text-sm font-semibold mb-3 text-white">Quick Track</h5>
                            <form method="POST" action="{{ route('trackingresult') }}" class="space-y-2">
                                @csrf
                                <input type="text"
                                       name="trackingnumber"
                                       placeholder="Enter tracking number..."
                                       class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all text-sm">
                                <button type="submit"
                                        class="w-full bg-primary-600 text-white py-2 px-3 rounded-lg hover:bg-primary-700 transition-colors text-sm font-medium">
                                    <i class="fas fa-search mr-1"></i>Track
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                        <div class="text-center md:text-left">
                            <p class="text-gray-400 text-sm">
                                Copyright &copy; <span id="currentYear"></span> {{$settings->site_name}}. All rights reserved.
                            </p>
                        </div>
                        <div class="flex items-center space-x-6 text-sm">
                            <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors">Privacy Policy</a>
                            <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors">Terms of Service</a>
                            <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors">Shipping Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- WhatsApp Float Button -->


    <!-- Core Scripts -->
    <script src="{{asset('dash/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Alpine.js with iOS compatibility fixes -->
    <script>
        // Fix for iOS Safari issues with Alpine.js
        document.addEventListener('DOMContentLoaded', function() {
            // Force repaint to help with iOS rendering
            document.body.style.display = 'none';
            document.body.offsetHeight; // Trigger reflow
            document.body.style.display = '';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script>
        // Enhanced preloader functionality for iOS compatibility
        document.addEventListener('DOMContentLoaded', function() {
            // Set a timeout as a fallback in case the load event doesn't fire properly on iOS
            const fallbackTimeout = setTimeout(hidePreloader, 3000); // 3 second fallback

            function hidePreloader() {
                const preloader = document.getElementById('preloader');
                if (preloader) {
                    // Add transition styles programmatically
                    preloader.style.transition = 'opacity 0.5s ease';
                    preloader.style.opacity = '0';

                    // Ensure the preloader is actually hidden
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 500);
                }
                // Clear the fallback timeout if the load event fired properly
                clearTimeout(fallbackTimeout);
            }

            // Try to detect when the page is fully loaded
            window.addEventListener('load', hidePreloader);

            // Set the current year for copyright
            const yearElement = document.getElementById('currentYear');
            if (yearElement) {
                yearElement.textContent = new Date().getFullYear();
            }
        });

        // Google Translate initialization - with iOS compatibility fixes

    </script>

<div class="gtranslate_wrapper"></div>
<script>
    window.gtranslateSettings = {
        default_language: "en",
        alt_flags:{"en":"usa"},
        wrapper_selector: ".gtranslate_wrapper",
        flag_style: "3d",
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>


    <!-- Custom Scripts -->
    @yield('scripts')
</body>
</html>
@include('layouts.livechat')
