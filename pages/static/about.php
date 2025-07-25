<?php

// 1. Load system configuration (paths, constants, routes, etc.)
require_once __DIR__ . "/../../backend/config/path.php";

// 2. Load user session context (sets $isLoggedIn, $userName, $userEmail, $userProfileImage, $userAddress, $userCity)
require_once __DIR__ . "/../../backend/middleware/session-context.php";

// 3. Include avatar helper
require_once __DIR__ . "/../../backend/helpers/avatar-helper.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Lucide Icons -->
    <?php require_once __DIR__ . '/../../backend/config/apis.php'; ?>
    <script src="<?= LUCIDE_CDN_URL ?>"></script>
    
    <!-- Base Styles -->
    <link rel="stylesheet" href="/mediconnect/assets/css/base/base.css" />
    <link rel="stylesheet" href="/mediconnect/assets/css/base/typography.css" />
    
    <!-- Design System -->
    <link rel="stylesheet" href="/mediconnect/assets/css/utils/colors.css" />
    <link rel="stylesheet" href="/mediconnect/assets/css/utils/spacing.min.css" />
    <link rel="stylesheet" href="/mediconnect/assets/css/utils/sizing.min.css" />
    <link rel="stylesheet" href="/mediconnect/assets/css/utils/borders.css" />
    
    <!-- Layout & Components -->
    <link rel="stylesheet" href="/mediconnect/assets/css/layout/layout.css" />
    <link rel="stylesheet" href="/mediconnect/assets/css/components/animations.css" />
    <link rel="stylesheet" href="/mediconnect/assets/css/components/components.css" />
    
    <!-- Custom Styles (Overrides) -->
    <link rel="stylesheet" href="/mediconnect/assets/css/base/style.css" />
    
    <!-- Responsive Design -->
    <link rel="stylesheet" href="/mediconnect/assets/css/layout/responsive.css" />

    <!-- Page Title -->
    <title>MediConnect - Bridging Healthcare & Technology</title>

</head>

<body class="bg-background">

    <!-- Header Section -->
    <?php require_once './../../includes/header.php'; ?>

    <!-- Main Content -->
    <main id="about" class="overflow-hidden pt-20 flex-grow min-h-screen pb-16">
        <div class="container mx-auto px-4">

            <!-- 🔹 Intro Section -->
            <div class="py-12">
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <span
                        class="bg-medical-100 text-medical-700 text-sm font-medium px-4 py-1.5 rounded-full inline-block mb-4">
                        About MediConnect
                    </span>
                    <h1 class="text-4xl font-bold mb-6 text-gray-900 tracking-tight">
                        Making Healthcare Accessible to Everyone
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Since 2010, MediConnect has been transforming healthcare delivery through technology and
                        compassion.
                        Our mission is simple: make quality healthcare accessible to all.
                    </p>
                </div>

                <!-- 🔹 Vision Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
                    <!-- Vision Image + Stats -->
                    <div class="order-1 lg:order-2 relative">
                        <div class="glass-card rounded-xl overflow-hidden">
                            <div class="relative w-full max-h-62.5 sm:max-h-125 overflow-hidden">
                                <img id="about-image"
                                    src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=880&auto=format&fit=crop"
                                    alt="Medical team"
                                    class="w-full h-full max-h-62.5 sm:max-h-125 object-cover transition-transform transition-700" />
                            </div>
                        </div>
                        <div id="about-trust"
                            class="absolute bg-white p-6 shadow-xl rounded-xl border border-solid border-input flex items-center">
                            <div class="flex items-center justify-center mr-4 bg-medical-100 rounded-full p-3">
                                <i data-lucide="heart-pulse" class="h-8 w-8 text-medical-700"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Trusted by</p>
                                <p class="text-3xl font-bold text-medical-700">500,000+</p>
                                <p class="text-sm font-medium text-gray-600">patients nationwide</p>
                            </div>
                        </div>
                    </div>

                    <!-- Vision Text & Cards -->
                    <div class="order-2 lg:order-1">
                        <h2 class="text-3xl font-bold mb-6 text-gray-900 tracking-tight">Our Vision</h2>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            We envision a world where quality healthcare is within everyone's reach. Through our
                            innovative digital platform, we're breaking down barriers and creating a healthcare
                            ecosystem that puts patients first.
                        </p>
                        <!-- Vision Cards Placeholder -->
                        <div id="vision-cards-container" class="grid grid-cols-1 sm:grid-cols-2 gap-6"></div>
                    </div>
                </div>

                <!-- 🔹 Journey Section -->
                <div class="mb-24">
                    <div class="text-center mb-12">
                        <h2 class="text-heading text-3xl font-bold mb-4">Our Journey</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                            From our humble beginnings to becoming a leader in digital healthcare, every step of our
                            journey has been driven by our commitment to improving lives.
                        </p>
                    </div>
                    <!-- Journey Cards Placeholder -->
                    <div id="journey-cards-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    </div>
                </div>

                <!-- 🔹 Leadership Section -->
                <div class="mb-24">
                    <div class="max-w-5xl mx-auto">
                        <div class="w-full flex flex-col gap-12">

                            <!-- Section Heading -->
                            <div class="text-center">
                                <h2 class="text-3xl font-bold mb-4 text-gray-900">Visionary Leadership</h2>
                                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                                    Meet the exceptional team guiding MediConnect's mission to transform healthcare
                                    access through innovation, compassion, and expertise.
                                </p>
                            </div>

                            <!-- Leadership Cards Placeholder -->
                            <div id="leadership-cards-container" class="flex flex-col gap-14"></div>

                            <!-- CTA -->
                            <div class="flex justify-center">
                                <a href="coming-soon.php"
                                    id="leadership-cta"
                                    class="inline-flex items-center justify-center gap-2 text-sm font-medium border border-solid border-input bg-background hover:bg-medical-50 text-heading hover:text-medical-500 h-11 rounded-md px-8 transition-colors cursor-pointer">
                                    <span>View Full Leadership Team</span>
                                    <i data-lucide="arrow-right" class="ml-2 h-4 w-4 transition-transform"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- 🔹 CTA Section -->
                <div class="my-24 max-w-6xl m-auto">
                    <div class="relative overflow-hidden rounded-3xl">
                        <div id="background-overlay" class="absolute inset-0 opacity-95"></div>
                        <div id="background-overlay-image" class="absolute inset-0 opacity-10 bg-cover bg-center"></div>

                        <div class="relative px-6 sm:px-8 md:px-16 py-12 sm:py-16 md:py-20">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12 items-center">

                                <!-- Left CTA Text -->
                                <div>
                                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-6">
                                        Join Our Healthcare Community
                                    </h2>
                                    <p class="text-medical-100 text-base sm:text-lg mb-8 leading-relaxed">
                                        At MediConnect, we're not just providing services - we're building a community
                                        dedicated to health and wellbeing. Whether you're a patient, healthcare
                                        provider, or potential partner, we invite you to be part of our journey toward a
                                        healthier tomorrow.
                                    </p>
                                    <div class="flex flex-col sm:flex-row flex-wrap gap-4">
                                        <a href="coming-soon.php"
                                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors outline-none border border-solid border-white h-11 rounded-lg px-8 bg-white text-medical-700 hover:bg-neutral-100 shadow-lg cursor-pointer">
                                            Become a Partner
                                        </a>
                                        <a href="coming-soon.php"
                                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors outline-none border border-solid border-white h-11 rounded-lg px-8 text-white bg-medical-600/30 cursor-pointer">
                                            Learn More About Our Mission
                                        </a>
                                    </div>
                                </div>

                                <!-- Right Features -->
                                <div class="flex flex-col gap-6 w-full max-w-full sm:max-w-md mx-auto lg:mx-0">
                                    <div
                                        class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-solid border-card-light shadow-xl">
                                        <div class="flex items-start">
                                            <div
                                                class="flex items-center justify-center bg-white/20 rounded-full p-3 mr-4">
                                                <i data-lucide="users"
                                                    class="lucide lucide-users h-6 w-6 text-white"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2">
                                                    Patient-Centered Care
                                                </h3>
                                                <p class="text-medical-100">
                                                    Our healthcare approach revolves around your needs, preferences, and
                                                    values, ensuring you receive personalized care.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-solid border-card-light shadow-xl">
                                        <div class="flex items-start">
                                            <div
                                                class="flex items-center justify-center bg-white/20 rounded-full p-3 mr-4">
                                                <i data-lucide="shield"
                                                    class="lucide lucide-shield h-6 w-6 text-white"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2">
                                                    Advanced Protection
                                                </h3>
                                                <p class="text-medical-100">
                                                    Your health data is secured with industry-leading encryption and
                                                    privacy standards that exceed regulatory requirements.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once './../../includes/footer.php'; ?>

    <!-- External JavaScript -->
    <script type="module" src="/mediconnect/assets/js/common/index.js"></script>
    <script type="module" src="/mediconnect/assets/js/about/index.js"></script>

</body>

</html>