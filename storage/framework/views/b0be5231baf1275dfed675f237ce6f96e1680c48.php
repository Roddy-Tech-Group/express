

<?php $__env->startSection('title', $settings->site_title); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section Wrapper -->
<div class="bg-white p-2 pt-3 md:p-4 lg:p-6">
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] md:min-h-screen rounded-[2rem] md:rounded-[40px] flex items-end justify-start overflow-hidden bg-gray-900 pb-16 md:pb-20 shadow-2xl">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo e(asset('storage/photos/realtime_hero_2.jpg')); ?>');"></div>
            <!-- Modern gradient overlay for text readability on left/bottom -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 w-full max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 text-left text-white mt-32 md:mt-0">
            
            <!-- Error Message for Tracking -->
            <?php if(Session::has('error')): ?>
            <div class="mb-6 bg-red-500/20 border border-red-500/50 p-4 rounded-xl max-w-xl backdrop-blur-sm shadow-xl mx-2 md:mx-0">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-circle text-red-400 text-xl"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-100 font-medium">
                            <strong>Error!</strong> You have entered an incorrect tracking number.
                        </p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="max-w-2xl animate-fade-in relative pb-4 z-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight tracking-tight px-2 md:px-0">
                    Logistics you can <br class="hidden md:block"/>count on, <span class="text-primary-400">from start to finish</span>
                </h1>
                
                <!-- Integrated Tracking Form -->
                <div class="bg-[#1a1a1a]/80 backdrop-blur-xl p-3 md:p-4 rounded-[24px] border border-white/10 shadow-2xl mx-2 md:mx-0 max-w-lg">
                    <form method="POST" action="<?php echo e(route('trackingresult')); ?>" class="flex flex-col gap-3">
                        <?php echo csrf_field(); ?>
                        
                        <div class="flex items-center px-4 py-2 border-b border-white/10">
                            <i class="fas fa-box text-gray-400 mr-3"></i>
                            <input type="text" 
                                   name="trackingnumber" 
                                   placeholder="Enter your tracking number" 
                                   class="flex-1 bg-transparent border-none text-white text-sm md:text-base focus:outline-none focus:ring-0 placeholder-gray-400 w-full" 
                                   required>
                        </div>
                        
                        <button type="submit" 
                                class="bg-primary-400 text-gray-900 p-1 pl-6 rounded-[16px] hover:bg-primary-300 transition-all font-bold flex items-center justify-between w-full shadow-lg">
                            <span class="text-sm md:text-base">Track package</span>
                            <div class="bg-gray-900 text-primary-400 w-10 h-10 flex items-center justify-center rounded-xl shadow-inner">
                                <i class="fas fa-arrow-right text-sm"></i>
                            </div>
                        </button>
                    </form>
                </div>
                
                <!-- Checkmarks below the form -->
                <div class="flex flex-wrap gap-x-4 gap-y-2 mt-6 px-2 md:px-0">
                    <div class="flex items-center text-xs md:text-sm text-gray-200">
                        <i class="fas fa-check text-primary-400 mr-1.5"></i> No account needed
                    </div>
                    <div class="flex items-center text-xs md:text-sm text-gray-200">
                        <i class="fas fa-check text-primary-400 mr-1.5"></i> Live map and timeline
                    </div>
                    <div class="flex items-center text-xs md:text-sm text-gray-200">
                        <i class="fas fa-check text-primary-400 mr-1.5"></i> Email updates at every step
                    </div>
                </div>
            </div>
        
        <!-- Floating Card (Bottom Right) -->
        <div class="absolute bottom-4 right-4 lg:bottom-12 lg:right-8 bg-gray-900/80 backdrop-blur-xl rounded-2xl p-5 flex items-center gap-6 shadow-2xl border border-gray-700/50 hidden md:flex transform translate-y-8 lg:translate-y-0">
            <div class="pl-2">
                <h4 class="text-xl font-bold text-white mb-2 leading-tight max-w-[140px]">See how we <br>move it</h4>
                <a href="#services" class="text-primary-400 text-sm font-semibold hover:text-primary-300 flex items-center">Our services <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
            </div>
            <div class="relative w-40 h-28 rounded-xl overflow-hidden bg-gray-800 flex items-center justify-center shadow-inner">
                <img src="<?php echo e(asset('temp/custom/images/slider/trucks.jpg')); ?>" alt="Service" class="absolute inset-0 w-full h-full object-cover opacity-70">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center z-10 cursor-pointer shadow-xl hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-play text-gray-900 ml-1"></i>
                </div>
            </div>
        </div>
        
    </div>
</section>
</div>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive shipping and logistics solutions tailored to your business needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Air Freight -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-64 bg-cover bg-center" style="background-image: url('temp/custom/images/services/service1.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    <div class="absolute top-4 left-4">
                        <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-plane text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Air Freight</h3>
                    <p class="text-gray-600 mb-4">
                        <?php echo e($settings->site_name); ?>, as an IATA-endorsed air forwarder, offers professional and reliable global air-freight solutions.
                    </p>
                    <a href="services" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Sea/Ocean Freight -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-64 bg-cover bg-center" style="background-image: url('temp/custom/images/services/service2.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    <div class="absolute top-4 left-4">
                        <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-ship text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Sea/Ocean Freight</h3>
                    <p class="text-gray-600 mb-4">
                        International ocean freight shipping import and export services. FCL, LCL shipments, port to port or door to door.
                    </p>
                    <a href="services" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Road Transportation -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-64 bg-cover bg-center" style="background-image: url('temp/custom/images/services/service3.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    <div class="absolute top-4 left-4">
                        <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-truck text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Road Transportation</h3>
                    <p class="text-gray-600 mb-4">
                        Highly experienced and dependable, <?php echo e($settings->site_name); ?> is a trusted partner in domestic road transportation.
                    </p>
                    <a href="services" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Diplomatic Services -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-64 bg-cover bg-center" style="background-image: url('temp/custom/images/services/service4.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    <div class="absolute top-4 left-4">
                        <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Diplomatic Bag & Secure Logistics</h3>
                    <p class="text-gray-600 mb-4">
                        Global secure mail and equipment delivery service with complete confidence and security.
                    </p>
                    <a href="diplomatic" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Warehousing -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-64 bg-cover bg-center" style="background-image: url('temp/custom/images/services/service5.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    <div class="absolute top-4 left-4">
                        <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-warehouse text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Warehousing</h3>
                    <p class="text-gray-600 mb-4">
                        Shared and dedicated warehousing solutions supported by state-of-the-art technology and warehouse services.
                    </p>
                    <a href="services" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Packaging & Storage -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-64 bg-cover bg-center" style="background-image: url('temp/custom/images/services/service6.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    <div class="absolute top-4 left-4">
                        <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-box text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Packaging & Storage</h3>
                    <p class="text-gray-600 mb-4">
                        Professional packaging and storage solutions for raw materials, electronics, and finished goods with cargo insurance.
                    </p>
                    <a href="services" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Trusted by thousands of customers worldwide for reliable and professional logistics solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Track & Trace -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-search-location text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Track & Trace</h3>
                <p class="text-gray-600 leading-relaxed">
                    Fast and reliable way to check the real-time status of your shipment with our advanced tracking system.
                </p>
            </div>

            <!-- Secure Warehousing -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Secure Warehousing</h3>
                <p class="text-gray-600 leading-relaxed">
                    We leverage a network of operational warehousing facilities with state-of-the-art security systems.
                </p>
            </div>

            <!-- Express Delivery -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shipping-fast text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Express Delivery</h3>
                <p class="text-gray-600 leading-relaxed">
                    We service your shipments via a diverse operating infrastructure for fastest delivery times.
                </p>
            </div>

            <!-- Domestic Services -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-truck text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Domestic Services</h3>
                <p class="text-gray-600 leading-relaxed">
                    Next business day delivery for time-sensitive parcels with comprehensive domestic coverage.
                </p>
            </div>

            <!-- Global Coverage -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-globe text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Global Coverage</h3>
                <p class="text-gray-600 leading-relaxed">
                    US, Europe & Worldwide coverage by sea & air. We offer a broad range of international freight services.
                </p>
            </div>

            <!-- Dedicated Support -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">24/7 Support</h3>
                <p class="text-gray-600 leading-relaxed">
                    Get excellent 24/7 online support and expert advice from our dedicated customer service team.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats & Achievements Section -->
<section class="py-20 bg-gradient-to-br from-primary-600 to-primary-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Impact & Achievements</h2>
            <p class="text-xl text-primary-200 max-w-2xl mx-auto">Delivering excellence across the globe with industry-leading standards</p>
        </div>

        <!-- Main Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
            <!-- Delivered Packages -->
            <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-xl hover:bg-white/15 transition-all duration-300">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-box text-white text-xl"></i>
                </div>
                <div class="stat-number text-3xl md:text-4xl font-bold mb-2 transform translate-y-4 opacity-0 transition-all duration-700" 
                     style="transition-delay: 200ms;">
                    101,273+
                </div>
                <div class="text-primary-200 text-sm md:text-base font-medium">
                    Delivered Packages
                </div>
            </div>

            <!-- KM Per Year -->
            <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-xl hover:bg-white/15 transition-all duration-300">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-route text-white text-xl"></i>
                </div>
                <div class="stat-number text-3xl md:text-4xl font-bold mb-2 transform translate-y-4 opacity-0 transition-all duration-700" 
                     style="transition-delay: 400ms;">
                    673,754+
                </div>
                <div class="text-primary-200 text-sm md:text-base font-medium">
                    KM Per Year
                </div>
            </div>

            <!-- Happy Clients -->
            <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-xl hover:bg-white/15 transition-all duration-300">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-smile text-white text-xl"></i>
                </div>
                <div class="stat-number text-3xl md:text-4xl font-bold mb-2 transform translate-y-4 opacity-0 transition-all duration-700" 
                     style="transition-delay: 600ms;">
                    16,714+
                </div>
                <div class="text-primary-200 text-sm md:text-base font-medium">
                    Happy Clients
                </div>
            </div>

            <!-- Countries Served -->
            <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-xl hover:bg-white/15 transition-all duration-300">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-globe text-white text-xl"></i>
                </div>
                <div class="stat-number text-3xl md:text-4xl font-bold mb-2 transform translate-y-4 opacity-0 transition-all duration-700" 
                     style="transition-delay: 800ms;">
                    160+
                </div>
                <div class="text-primary-200 text-sm md:text-base font-medium">
                    Countries Served
                </div>
            </div>
        </div>

        <!-- Additional Professional Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Delivery Performance -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/15 transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-shipping-fast text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Delivery Performance</h3>
                </div>
                <div class="flex items-center mb-2">
                    <div class="text-3xl font-bold mr-2">99.8%</div>
                    <div class="text-primary-200">On-Time Delivery</div>
                </div>
                <p class="text-sm text-primary-200">Industry-leading on-time delivery performance across all shipping methods</p>
            </div>

            <!-- Tracking Precision -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/15 transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-search-location text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Tracking Precision</h3>
                </div>
                <div class="flex items-center mb-2">
                    <div class="text-3xl font-bold mr-2">Real-time</div>
                    <div class="text-primary-200">GPS Accuracy</div>
                </div>
                <p class="text-sm text-primary-200">Advanced tracking systems with minute-by-minute updates and GPS precision</p>
            </div>

            <!-- Customer Satisfaction -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/15 transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-star text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Client Satisfaction</h3>
                </div>
                <div class="flex items-center mb-2">
                    <div class="text-3xl font-bold mr-2">4.9/5</div>
                    <div class="text-primary-200">Average Rating</div>
                </div>
                <p class="text-sm text-primary-200">Outstanding client satisfaction across all our logistics services</p>
            </div>
        </div>

        <!-- Industry Recognition Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Experience -->
            <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/15 transition-all duration-300">
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-calendar-check text-white text-xl"></i>
                </div>
                <div>
                    <div class="stat-number text-2xl font-bold transform translate-y-4 opacity-0 transition-all duration-700" style="transition-delay: 1000ms;">
                        11+ Years
                    </div>
                    <div class="text-primary-200 text-sm">Industry Experience</div>
                </div>
            </div>

            <!-- Security Rating -->
            <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/15 transition-all duration-300">
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-shield-alt text-white text-xl"></i>
                </div>
                <div>
                    <div class="stat-number text-2xl font-bold transform translate-y-4 opacity-0 transition-all duration-700" style="transition-delay: 1200ms;">
                        ISO 27001
                    </div>
                    <div class="text-primary-200 text-sm">Security Certification</div>
                </div>
            </div>

            <!-- Awards -->
            <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/15 transition-all duration-300">
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-trophy text-white text-xl"></i>
                </div>
                <div>
                    <div class="stat-number text-2xl font-bold transform translate-y-4 opacity-0 transition-all duration-700" style="transition-delay: 1400ms;">
                        8+ Awards
                    </div>
                    <div class="text-primary-200 text-sm">Industry Recognition</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Pure JavaScript Intersection Observer for stats animation
        document.addEventListener('DOMContentLoaded', function() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('translate-y-4', 'opacity-0');
                        entry.target.classList.add('translate-y-0', 'opacity-100');
                    }
                });
            }, {
                threshold: 0.5,
                rootMargin: '0px 0px -50px 0px'
            });

            statNumbers.forEach(stat => {
                observer.observe(stat);
            });
        });
    </script>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hear from our satisfied customers about their experience with our logistics solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-500 hover:scale-105">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <blockquote class="text-gray-600 mb-6 leading-relaxed">
                    "Given my past experiences with other logistics companies, I can say without exception that the services provided by <?php echo e($settings->site_name); ?> greatly exceed industry standards."
                </blockquote>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                        MP
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Monique Pete</div>
                        <div class="text-sm text-gray-500">Logistics Manager, Martrax Inc.</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-500 hover:scale-105">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <blockquote class="text-gray-600 mb-6 leading-relaxed">
                    "More than once, <?php echo e($settings->site_name); ?> has 'saved the day', delivering our cargo on time with short notice. They have won my gratitude and loyalty with their 'can do' approach."
                </blockquote>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                        SA
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Steve Anderson</div>
                        <div class="text-sm text-gray-500">President/Owner, Duplication Factory</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-500 hover:scale-105">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <blockquote class="text-gray-600 mb-6 leading-relaxed">
                    "I am very pleased with the service provided by <?php echo e($settings->site_name); ?>. They find good carriers and use them regularly so we get a high level of service. Their communication is outstanding."
                </blockquote>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                        CB
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Cathy Beckman</div>
                        <div class="text-sm text-gray-500">Logistics Team, Oxea Chemicals</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Trusted Partners</h2>
            <p class="text-gray-600">Working with industry leaders to provide the best logistics solutions</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center opacity-60 hover:opacity-100 transition-opacity duration-300">
            <div class="flex justify-center">
                <img src="temp/custom/images/content/partner-01.png" alt="Partner Logo" class="h-12 object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
            <div class="flex justify-center">
                <img src="temp/custom/images/content/partner-02.png" alt="Partner Logo" class="h-12 object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
            <div class="flex justify-center">
                <img src="temp/custom/images/content/partner-03.png" alt="Partner Logo" class="h-12 object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
            <div class="flex justify-center">
                <img src="temp/custom/images/content/partner-04.png" alt="Partner Logo" class="h-12 object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
            <div class="flex justify-center">
                <img src="temp/custom/images/content/partner-05.png" alt="Partner Logo" class="h-12 object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-r from-primary-600 to-primary-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Ship with Confidence?
            </h2>
            <p class="text-xl text-primary-100 mb-8 leading-relaxed">
                Get started with our professional logistics services today. Contact us for a free quote and experience the difference.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact" class="bg-white text-primary-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition-all duration-300 font-semibold text-lg shadow-lg">
                    Get Free Quote
                </a>
                <a href="order" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-primary-600 transition-all duration-300 font-semibold text-lg">
                    Track Shipment
                </a>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tim\resources\views/home/index.blade.php ENDPATH**/ ?>