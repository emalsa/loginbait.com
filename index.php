<?php

/**
 * @file
 */
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
  <?php if ($_SERVER['HTTP_HOST'] === 'www.loginbait.com' || $_SERVER['HTTP_HOST'] == 'loginbait.com') : ?>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-KB4CGV7KP4"></script>
      <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
              dataLayer.push(arguments);
          }

          gtag('js', new Date());
          gtag('config', 'G-KB4CGV7KP4');
      </script>
  <?php else : ?>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-L3B1HD2GP6"></script>
      <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
              dataLayer.push(arguments);
          }

          gtag('js', new Date());
          gtag('config', 'G-L3B1HD2GP6');

      </script>
  <?php endif; ?>
    <title>Loginbait.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700&display=swap">-->
    <link rel="stylesheet" href="font1.css">

    <!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">-->
    <link rel="stylesheet" href="font2.css">

    <link rel="stylesheet" href="public/css/tailwind/tailwind.min.css">


    <link rel="icon" type="image/png" sizes="32x32" href="assets/logos/favicon.ico">
</head>
<body class="antialiased bg-body text-body font-body">

<!-- Navigation/Hero -->
<div>
    <section class="overflow-hidden" style="background: url(assets/images/hero/bg_compressed.jpg) no-repeat; background-size: cover;">
        <!-- Navigation -->
        <section>
            <div class="flex items-center justify-between px-8 py-5">
                <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto mr-14">
                            <div>
                                <ul class="flex items-center mr-10">
                                    <li class="font-heading text-5xl text-white font-bold font-heading mr-9 text-white hover:text-gray-200"><a class="close-menu" href="/">Loginbait</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto hidden lg:block">
                            <ul class="flex items-center mr-10">
                                <li class="close-menu font-heading mr-9 text-white hover:text-gray-200 text-lg"><a href="#how-it-works" class="close-menu">How it works</a></li>
                                <li class="close-menu font-heading mr-9 text-white hover:text-gray-200 text-lg"><a href="#faq" class="close-menu">FAQ</a></li>
                                <li class="close-menu font-heading mr-9 text-white hover:text-gray-200 text-lg"><a href="#pricing" class="close-menu">Pricing</a></li>

                                <!--                                <li class="font-heading text-white hover:text-gray-200 text-lg"><a href="#">Pricing</a></li>-->
                            </ul>
                        </div>
                        <div class="w-auto hidden lg:block">
                            <a href="#pricing" class="close-menu">
                                <button class="close-menu group relative font-heading block py-2 px-5 text-lg text-white border-2 border-white overflow-hidden rounded-10">
                                    <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-white transition ease-in-out duration-500"></div>
                                    <p class="relative z-10 group-hover:text-gray-800">Buy now</p>
                                </button>
                            </a>

                        </div>
                        <div class="w-auto lg:hidden">
                            <a href="#">
                                <svg class="navbar-burger text-gray-800" width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                                    <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
                <nav class="relative z-10 px-9 py-8 bg-white h-full">
                    <div class="flex flex-wrap justify-between h-full">
                        <div class="w-full">
                            <div class="flex items-center justify-between -m-2">
                                <div class="w-auto p-2">
                                    <div>
                                        <ul class="flex items-center mr-10">
                                            <li class="font-heading text-4xl  font-bold font-heading mr-9"><a class="close-menu" href="/">Loginbait</a></li>
                                        </ul>
                                    </div>
                                    <!--                                        <img loading="lazy"  src="assets/logos/gradia-name-black.svg" alt="">-->
                                </div>
                                <div class="w-auto p-2">
                                    <a class="navbar-burger" href="#">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center py-8 w-full">
                            <ul>
                                <li class="mb-12"><a class="close-menu font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#how-it-works">How it works</a></li>
                                <li class="mb-12"><a class="close-menu font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#faq">FAQ</a></li>
                                <li class="mb-12"><a class="close-menu font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#pricing">Pricing</a></li>
                                <!--                                <li><a class="font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#">Pricing</a></li>-->
                            </ul>
                        </div>
                        <div class="flex flex-col justify-end w-full">
                            <div class="flex flex-wrap">
                                <!--                                <div class="w-full">-->
                                <!--                                    <button class="p-0.5 font-heading block w-full text-lg text-gray-900 font-medium rounded-10">-->
                                <!--                                        <div class="py-2 px-5 rounded-10">-->
                                <!--                                            <p>Login</p>-->
                                <!--                                        </div>-->
                                <!--                                    </button>-->
                                <!--                                </div>-->
                                <div class="w-6/12 text-center">
                                    <a href="#pricing" class="close-menu group relative p-0.5 font-heading block w-full text-lg text-gray-900 font-medium bg-gradient-cyan overflow-hidden rounded-10">
                                        <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-gradient-cyan transition ease-in-out duration-500"></div>
                                        <div class="py-2 px-5 bg-white rounded-lg">
                                            <p class="relative z-10">Buy now</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <!-- Hero -->
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between -m-6 pt-32 pb-40">
                <div class="w-full lg:w-5/12 xl:w-1/2 p-6">
                    <p class="mb-5 font-heading text-gray-400 font-medium text-xl">Protect your data with alerts and know when someone tries to access your privacy</p>
                    <h1 class="mb-14 font-heading text-7xl md:text-9xl xl:text-11xl text-white font-bold">Protect your privacy with honeypots.</h1>
                    <div class="flex flex-wrap -m-3 mb-20">
                        <div class="w-6/12 lg:w-auto p-3">
                            <a href="#pricing" class="close-menu">
                                <button class="font-heading w-full px-6 py-4 text-base text-gray-900 bg-white hover:bg-gray-100 rounded-md">Buy now</button>
                            </a>
                        </div>
                        <div class="w-6/12 lg:w-auto p-3">
                            <a href="#how-it-works" class="close-menu">
                                <button class="font-heading w-full px-6 py-4 text-base text-white bg-transparent border border-gray-500 hover:border-gray-600 rounded-md">How it works</button>
                            </a>
                        </div>
                    </div>
                    <div class="lg:max-w-md">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-auto p-3">
                                <img loading="lazy" class="w-14 h-14 rounded-md" src="assets/images/hero/red_quote.png" alt="">
                            </div>
                            <div class="flex-1 p-3">
                                <p class="mb-4 text-gray-300 text-base">“Thank you for making it so easy. In my ongoing divorce, I had put the bait in my documents folder on my computer. After a week,
                                    I had proof that my now ex-partner had been snooping around on my computer.”</p>
                                <p class="font-heading text-white text-base">Victoria from Portland</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-7/12 xl:w-1/2 p-6">
                    <div class="max-w-max mx-auto pt-14">
                        <div class="flex flex-wrap justify-center -m-3 mb-12">
                            <div class="w-full p-3">
                                <!-- Get-->
                                <div class="mb-4 mx-auto w-80 p-5 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img class="rounded-full" loading="lazy" src="assets/images/hero/green_circle.png" alt="">
                                        </div>
                                        <div class="w-auto p-2 mb-auto mt-auto">
                                            <p class="font-heading text-base text-gray-900">Get the bait</p>
                                        </div>
                                    </div>
                                    <div class="w-auto p-2">
                                        <p class="pt-4 text-sm text-gray-500">Gain access to the bait website and secure login details.</p>

                                    </div>
                                </div>

                                <!-- Place-->
                                <div class="mb-4 mx-auto w-80 p-5 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img class="rounded-full" loading="lazy" src="assets/images/hero/yellow_circle.png" alt="">
                                        </div>
                                        <div class="w-auto p-2 mb-auto mt-auto">
                                            <p class="font-heading text-base text-gray-900">Place the baits</p>
                                        </div>
                                    </div>
                                    <div class="w-auto p-2">
                                        <p class="pt-4 text-sm text-gray-500">Plant digital traps on your computer or write them physically in your personal diary.</p>

                                    </div>
                                </div>

                                <!-- Get Notified-->
                                <div class="mb-4 mx-auto w-80 p-5 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img class="rounded-full" loading="lazy" src="assets/images/hero/red_circle.png" alt="">
                                        </div>
                                        <div class="w-auto p-2 mb-auto mt-auto">
                                            <p class="font-heading text-base text-gray-900">Be alerted</p>
                                        </div>
                                    </div>
                                    <div class="w-auto p-2">
                                        <p class="pt-4 text-sm text-gray-500">The lure website is designed to appear as a platform for managing cryptocurrency, making it a tempting target for
                                            potential thieves. Once they log in, attempting to access your money, you will receive an email alert with some user data.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- How it works -->
<section class="pt-24 pb-28 bg-gradient-gray2 overflow-hidden">
    <div id="how-it-works" class="container px-4 mx-auto">
        <div class="max-w-2xl mb-28 mx-auto text-center">
            <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">How it works</h2>
            <p class="max-w-lg mx-auto text-xl text-gray-500">See how easy everything is for you. You don't have to set up anything complicated.</p>
        </div>
        <div class="flex flex-wrap -mx-3 -mb-10 lg:-mb-16">
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10 lg:mb-16">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <span class="absolute top-0 inset-x-0 -mt-6 flex justify-center items-center w-16 h-16 mx-auto rounded-full bg-blue-400 text-white">1</span>
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">Get the bait</h3>
                    <p class="text-gray-500">After purchase you will get the domain to the bait website and the generated username and password. You will get also some textfile with the website and
                        the credentials. You can also save it in your Password Manager, on a server and on your smartphone.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10 lg:mb-16">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <span class="absolute top-0 inset-x-0 -mt-6 flex justify-center items-center w-16 h-16 mx-auto rounded-full bg-yellow-300 text-white">2</span>
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">Place the baits</h3>
                    <p class="text-gray-500">Start to store it on your computer like in the document folder, in folders where some of your critical data are stored or simply as shortcut in the start
                        menu.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10 lg:mb-16">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <span class="absolute top-0 inset-x-0 -mt-6 flex justify-center items-center w-16 h-16 mx-auto rounded-full bg-gray-500 text-white">3</span>
                    <h3 class="mb-6 text-2xl font-semibold font-heading  text-center">Maybe print it out</h3>
                    <p class="text-gray-500">Yeah, why not. You can write the login data and the decoy website on the first or last page of your diary, put it in your filing cabinet, in a drawer or
                        somewhere where you think another person should not have access to it.</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <span class="absolute top-0 inset-x-0 -mt-6 flex justify-center items-center w-16 h-16 mx-auto rounded-full bg-red-400 text-white">4</span>
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">A person is snooping around</h3>
                    <p class="text-gray-500">Suppose a hacker or a person close to you somehow has access to your computer. Naturally, he rummages through your computer. He quickly comes
                        across a file with credentials and an associated domain that you have distributed as bait. Of course, he will not miss the opportunity to see what kind of website it is.
                        Actually, the domain already reveals that it is a cryptocurrency
                        site.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <span class="absolute top-0 inset-x-0 -mt-6 flex justify-center items-center w-16 h-16 mx-auto rounded-full bg-red-500 text-white">5</span>
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">The thief's fatal mistake</h3>
                    <p class="text-gray-500">He visits the website and finds valuable information that it is about cryptocurrency. He quickly finds the login button and logs in with the username and
                        password he found. This website is operated by us, and we have already collected some data about the
                        user that his web browser can reveal, such as his IP, location, browser, and operating system.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <span class="absolute top-0 inset-x-0 -mt-6 flex justify-center items-center w-16 h-16 mx-auto rounded-full bg-red-500 text-white">6</span>
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">Be alerted</h3>
                    <p class="text-gray-500">As soon as the person has logged in, you will receive an email with the data mentioned above. Now you have on the one hand a proof that someone has access
                        where he should not, and also it gives you the possibility to react like blocking accesses or changing passwords. At the moment the thief still believes that you don't know
                        anything about it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More info -->
<section class="pt-24 pb-28 bg-gray-100 overflow-hidden">
    <div class="container px-4 mx-auto">
        <!--        <div class="max-w-2xl mb-28 mx-auto text-center">-->
        <!--            <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">How it works</h2>-->
        <!--            <p class="max-w-lg mx-auto text-xl text-gray-500">See how easy everything is for you. You don't have to set up anything complicated.</p>-->
        <!--        </div>-->
        <div class="flex flex-wrap -mx-3 -mb-10 lg:-mb-16">
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10 lg:mb-16 text-gray-700">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">Adds a layer of security for your data and privacy. Even in the physical world.</h3>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10 lg:mb-16 text-gray-700">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">How can you tell if someone has secretly searched your computer or documents?</h3>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-10 lg:mb-16 text-gray-700">
                <div class="relative pt-16 pb-12 px-8 bg-gray-50 rounded-lg hover:bg-white hover:shadow-2xl">
                    <h3 class="mb-6 text-2xl font-semibold font-heading text-center">Once placed, the situation will be monitored without requiring any further attention.</h3>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ -->
<section class="pt-24 pb-28 bg-gradient-gray2 overflow-hidden">
    <div id="faq" class="container px-4 mx-auto">
        <div class="max-w-md mx-auto mb-20">
            <h2 class="mb-7 font-heading font-semibold text-center text-4xl text-gray-900">Got questions?</h2>
            <p class="text-lg text-gray-600 text-center">Discover essential information and answers to frequently asked questions in our FAQ section.</p>
        </div>
        <div class="max-w-4xl mx-auto mb-24">
            <ul class="space-y-4">
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold">
                        <span class="text-xl font-semibold font-heading">Why is there no trial version?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class=" max-w-3xl mt-4 text-base text-gray-700">In this instance, we have decided against making the "bait website" public. The reason for this is to reduce the risk of the
                            attacker becoming aware of the website and choosing not to log in. By limiting public knowledge of the website, we aim to maintain its effectiveness as a "bait". However,
                            we do offer a 14-day money-back guarantee, so you can test the service risk-free and receive a full refund if you are not satisfied.</p>
                    </div>
                </li>
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold">
                        <span class="text-xl font-semibold font-heading">How can I test and verify the effectiveness of the bait?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">You can easily test the service. After you receive the credentials and URL, simply log in to the "bait website." Once you log
                            in, you will receive an alert email. You can repeat this process as many times as you like to test the service.</p>
                    </div>
                </li>
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">
                        <span class="text-xl font-semibold font-heading">Will the service continue once someone has logged in?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">Yes, the service will continue. To ensure that you are not overwhelmed with notifications, we limit email alerts to a maximum
                            of 10 per month. This means that even if an attacker or thief tries to log in multiple times, you will not receive more than 10 emails in that month. The following month,
                            your quota will reset to 10 emails once again.
                </li>
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">
                        <span class="text-xl font-semibold font-heading">What exactly do I receive?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">With the first email, you will receive your credentials and instructions for use, along with an attachment
                            containing the credentials and URL for saving on your computer or server. Additionally, you will receive a styled email from the "bait website" that resembles a
                            registration confirmation and includes the URL and login details (Oops!). If you want to set up your first "bait," simply leave the second email in your inbox. An
                            unauthorized user accessing your mailbox is likely to come across it.</p>
                    </div>
                </li>
                <!--                <li class=" px-6 py-8 bg-gray-50 rounded-xl">-->
                <!--                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">-->
                <!--                        <span class="text-xl font-semibold font-heading">Do you have some examples of where and how to best set the bait?</span>-->
                <!--                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                            <path fill-rule="evenodd"-->
                <!--                                  clip-rule="evenodd"-->
                <!--                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"-->
                <!--                                  stroke="#838EA4"-->
                <!--                                  stroke-width="1.5"-->
                <!--                                  stroke-linecap="round"-->
                <!--                                  stroke-linejoin="round"></path>-->
                <!--                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>-->
                <!--                        </svg>-->
                <!--                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                            <path fill-rule="evenodd"-->
                <!--                                  clip-rule="evenodd"-->
                <!--                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"-->
                <!--                                  stroke="#45C1FF"-->
                <!--                                  stroke-width="1.5"-->
                <!--                                  stroke-linecap="round"-->
                <!--                                  stroke-linejoin="round"></path>-->
                <!--                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>-->
                <!--                        </svg>-->
                <!--                    </button>-->
                <!--                    <div class="panel">-->
                <!--                        <p class="max-w-3xl mt-4 text-base text-gray-700">There are plenty of good places and examples. You can place it on the computer or server as in most cases. However, also-->
                <!--                            physically there are also some examples below</p>-->
                <!--                        <p class="mt-2">On your computer </p>-->
                <!--                        <p class="mt-2">Physically </p>-->
                <!--                    </div>-->
                <!--                </li>-->
                <li id="faq-lifetime" class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">
                        <span class="text-xl font-semibold font-heading">What exactly do I get in the lifetime plan?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">As stated in the "Pricing" section, the mentioned price is a one-time payment and valid for lifetime, as long as our
                            service remains available. New features will typically be included in this plan, but we reserve the right to deviate from this policy in exceptional circumstances. In such
                            cases, we will offer a fair pricing plan for those who wish to take advantage of the new feature.
                        </p>
                    </div>
                </li>
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">
                        <span class="text-xl font-semibold font-heading">What happent if the Bait website becomes publicly known?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">We are planning to launch a new, redesigned website with a new domain, and we will keep you informed. The service will
                            continue under the new URL.</p>
                    </div>
                </li>
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">
                        <span class="text-xl font-semibold font-heading">Is there a refund?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">You have a 14-day period after your purchase to request a refund. Additionally, if we fail to notify you of a login, we will
                            also refund your money.</p>
                    </div>
                </li>
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">
                        <span class="text-xl font-semibold font-heading">What Information is included in the Alert email regarding the suspected thief?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">We sen</p>
                    </div>
                </li>
                <li class=" px-6 py-8 bg-gray-50 rounded-xl">
                    <button class="accordion w-full flex justify-between items-center text-left font-semibold font-heading">
                        <span class="text-xl font-semibold font-heading">What Actions are Taken After Receiving an Alert? Will You Pursue the Attacker or Thief?</span>
                        <svg class="closed flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.750214 10C0.750214 15.108 4.89121 19.25 10.0002 19.25C15.1082 19.25 19.2502 15.108 19.2502 10C19.2502 4.892 15.1082 0.75 10.0002 0.75C4.89121 0.75 0.750214 4.892 0.750214 10Z"
                                  stroke="#838EA4"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M6.52902 8.55774L10 12.0437L13.471 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="opened hidden flex-shrink-0" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M19.2498 10C19.2498 4.892 15.1088 0.75 9.99979 0.75C4.89179 0.75 0.749786 4.892 0.749786 10C0.749786 15.108 4.89179 19.25 9.99979 19.25C15.1088 19.25 19.2498 15.108 19.2498 10Z"
                                  stroke="#45C1FF"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M13.471 11.4423L9.99998 7.95626L6.52898 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="panel">
                        <p class="max-w-3xl mt-4 text-base text-gray-700">In the event of unauthorized access, you will be promptly notified so that you can take necessary measures such as changing
                            your passwords. The alert email will provide information, such as IP address and browser used, about the login attempt. Please note that some of this information may not be
                            available if the browser blocks it. If necessary, you can forward the information to the authorities for further investigation.</p>
                    </div>
                </li>
            </ul>
        </div>
        <a class="close-menu group block max-w-max mx-auto font-heading font-medium text-gray-900 hover:text-gray-800 text-base overflow-hidden" href="#contact">
            <p class="mb-1">Didn’t find the answer? Contact us here</p>
            <div class="w-full transform -translate-x-0 group-hover:translate-x-full h-px bg-gradient-cyan transition ease-in-out duration-500"></div>
        </a>
    </div>
</section>
<script>
    let acc = document.getElementsByClassName('accordion');
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener('click', function () {
            this.classList.toggle('active');
            let svgOpened = this.querySelector('svg.opened');
            let svgClosed = this.querySelector('svg.closed');
            svgOpened.classList.toggle('hidden');
            svgClosed.classList.toggle('hidden');
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }
        });
    }
</script>
<style>
    .accordion {
        cursor: pointer;
        transition: 0.4s;
    }

    .panel {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>


<!-- Pricing -->
<section class="pt-24 pb-28 bg-gray-100 overflow-hidden">
    <div id="pricing" class="container mx-auto px-4">
        <div class="max-w-md mx-auto mb-20">
            <h2 class="mb-7 font-heading font-semibold text-center text-4xl text-gray-900" contenteditable="false">Our Pricing</h2>
            <p class="mb-18 text-gray-600 text-center">Select the duration of Your bait, no surprises included. You will get all the details via email after purchase.</p>

        </div>
        <div class="flex flex-wrap items-center justify-center">
            <div class=" flex flex-wrap justify-between m-10 p-px bg-gradient-cyan rounded-10 shadow-7xl">
                <div class="px-20 py-18 md:px-26 md:py-24 text-center rounded-10 bg-white">
                    <p class="mb-7 font-heading text-xs font-semibold text-gray-900 uppercase tracking-px" contenteditable="false">Yearly</p>
                    <h3 class="mb-4 font-heading font-semibold text-5xl text-gray-900" contenteditable="false">$14 per year</h3>
                    <p class="mb-10 text-xl text-gray-600" contenteditable="false">Standard</p>

                    <a href="https://buy.stripe.com/9AQbM1dde6hhgq47ss" target="_blank">
                        <button class="close-menu group relative mb-6 px-16 py-3.5 font-heading bg-gray-800 text-base font-bold text-white overflow-hidden rounded-md">
                            <div class="absolute top-0 left-0 transform -translate-x-full group-hover:-translate-x-0 h-full w-full transition ease-in-out duration-500 bg-gradient-cyan"></div>
                            <p class="relative z-10" contenteditable="false">Buy now</p>
                        </button>
                    </a>
                    <p class="text-gray-500" contenteditable="false">See FAQ for more information.</p>

                </div>
            </div>
            <div class=" flex flex-wrap justify-between m-10 p-px bg-gradient-cyan rounded-10 shadow-7xl">
                <div class="px-20 py-18 md:px-26 md:py-24 text-center rounded-10 bg-white">
                    <p class="mb-7 font-heading text-xs font-semibold text-gray-900 uppercase tracking-px" contenteditable="false">LIFETIME</p>
                    <h3 class="mb-4 font-heading font-semibold text-5xl text-gray-900" contenteditable="false">$69 forever</h3>
                    <p class="mb-10 text-xl text-gray-600" contenteditable="false">Pay once for a lifetime.</p>
                    <a href="https://buy.stripe.com/eVa17n4GI5ddgq4dQR" target="_blank">
                        <button class="close-menu group relative mb-6 px-16 py-3.5 font-heading bg-gray-800 text-base font-bold text-white overflow-hidden rounded-md">
                            <div class="absolute top-0 left-0 transform -translate-x-full group-hover:-translate-x-0 h-full w-full transition ease-in-out duration-500 bg-gradient-cyan"></div>
                            <p class="relative z-10" contenteditable="false">Buy now</p>
                        </button>
                    </a>
                    <p class="text-gray-500" contenteditable="false">See <a class="hover:text-gray-800 text-base underline" href="#faq-lifetime">here</a> for more information.</p>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<?php if (0) : ?>
    <section class="py-28 overflow-hidden bg-gradient-gray2">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center -m-6">
                <div class="w-full md:w-1/2 p-6">
                    <div class="max-w-md">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-auto p-3">
                                <div class="flex items-center justify-center w-12 h-12 bg-gradient-green rounded-full">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.25 20.5833V10.9095C3.25 10.1851 3.61205 9.50861 4.21482 9.10676L11.7982 4.05121C12.5259 3.56602 13.4741 3.56602 14.2019 4.05121L21.7852 9.10676C22.3879 9.50861 22.75 10.1851 22.75 10.9095V20.5833M3.25 20.5833C3.25 21.7799 4.22005 22.75 5.41667 22.75H20.5833C21.78 22.75 22.75 21.7799 22.75 20.5833M3.25 20.5833L10.5625 15.7083M22.75 20.5833L15.4375 15.7083M3.25 10.8333L10.5625 15.7083M22.75 10.8333L15.4375 15.7083M15.4375 15.7083L14.2019 16.5321C13.4741 17.0173 12.5259 17.0173 11.7982 16.5321L10.5625 15.7083"
                                              stroke="#18181B"
                                              stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 p-3">
                                <h2 class="mb-3.5 font-heading font-semibold text-4xl text-gray-900">Join our newsletter</h2>
                                <p class="text-gray-600 text-base">Get some news about new features, success stories or similar stuff.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-6">
                    <div class="md:max-w-xl">
                        <div class="mb-5 p-1 flex flex-col md:flex-row bg-white overflow-hidden focus-within:ring-4 focus-within:ring-indigo-500 border border-gray-200 rounded-10">
                            <input class="w-full flex-1 px-5 py-3.5 text-base text-gray-500 bg-transparent outline-none placeholder-gray-500 rounded-tl-md rounded-bl-md"
                                   type="text"
                                   placeholder="Your email address">
                            <div class="group relative">
                                <div class="absolute top-0 left-0 w-full h-full bg-gradient-orange opacity-0 group-hover:opacity-50 rounded-lg transition ease-out duration-300"></div>
                                <button class="p-1 w-full font-heading font-semibold text-xs text-white uppercase tracking-px overflow-hidden rounded-md">
                                    <div class="relative py-4 px-8 bg-gradient-orange overflow-hidden rounded-md">
                                        <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-gray-900 transition ease-in-out duration-500"></div>
                                        <p class="relative z-10">Subscribe now</p>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm">We respect your privacy and do not tolerate spam and will never sell your information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Contact -->
<section class="pt-24 pb-28 bg-gradient-gray2 overflow-hidden">
    <div id="contact" class="container mx-auto px-4">
        <div class="max-w-lg mx-auto text-center mb-14">
            <h2 class="text-gray-800 mb-5 font-heading font-semibold text-6xl sm:text-7xl">Get in touch</h2>
            <p class="text-gray-600 text-lg">How can we help you? Whether you are a new or existing customer, you can contact us at any time.</p>
        </div>
        <form action="contact.php" method="post" id="contact-child" accept-charset="UTF-8" class="flex flex-wrap max-w-xl mx-auto -m-2.5">
            <div class="w-full p-2.5">
                <input class="w-full px-5 py-4 text-gray-700 text-base bg-transparent border border-gray-800 outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-500 rounded"
                       type="text"
                       name="firstname"
                       placeholder="Your name">
            </div>
            <!--             -->
            <div class="w-full p-2.5">
                <!--                <label style="display: none" for="lastname">Lastname</label>-->
                <input style="position: absolute; left: -9999px"
                       class="w-full px-5 py-4 text-gray-700 text-base bg-transparent border border-gray-800 outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-500 rounded"
                       type="text"
                       name="lastname"
                       tabindex="-1"
                       autocomplete="off"/>
            </div>
            <div class="w-full p-2.5">
                <input class="w-full px-5 py-4 text-gray-700 text-base bg-transparent border border-gray-800 outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-500 rounded"
                       type="email"
                       name="email"
                       placeholder="Your email address">
            </div>
            <div class="w-full p-2.5">
                <textarea class="w-full h-40 px-5 py-4 text-gray-700 text-base bg-transparent border border-gray-800 outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-500 resize-none rounded"
                          type="text"
                          name="message"
                          placeholder="Write a message"></textarea>
            </div>
            <div class="w-full p-2.5">
                <div class="group relative">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-green opacity-0 group-hover:opacity-50 rounded-lg transition ease-out duration-300"></div>
                    <button type="submit" class="p-1 w-full font-heading font-semibold text-xs text-gray-900 uppercase tracking-px overflow-hidden rounded-md">
                        <div class="relative p-5 px-11 bg-gradient-green overflow-hidden rounded-md">
                            <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-white transition ease-in-out duration-500"></div>
                            <p class="relative z-10">Send message</p>
                        </div>
                    </button>
                </div>
            </div>
            <!--            <div class="w-full p-2.5">-->
            <!--                <p class="text-sm text-gray-500 text-center">-->
            <!--                    <span>By clicking the send button, you agree with our</span>-->
            <!--                    <a class="pb-1 hover:text-gray-400 border-b border-gray-500" href="#">Terms &amp; Conditions</a>-->
            <!--                </p>-->
            <!--            </div>-->
        </form>
    </div>
</section>


<!-- Footer -->
<section class="pt-24 pb-8 bg-gray-100 overflow-hidden">
    <div class="container mx-auto px-4">
        <ul class="flex flex-wrap justify-center text-center mb-10 font-heading text-5xl font-bold font-heading">
            <li><a class="close-menu  hover:text-gray-200" href="/">Loginbait</a></li>
        </ul>
        <ul class="flex flex-wrap justify-center -m-5 pb-8">
            <li class="p-5"><a class="close-menu font-heading text-base text-gray-900 hover:text-gray-700" href="#how-it-works">How it works</a></li>
            <li class="p-5"><a class="close-menu font-heading text-base text-gray-900 hover:text-gray-700" href="#pricing">Pricing</a></li>
            <li class="p-5"><a class="close-menu font-heading text-base text-gray-900 hover:text-gray-700" href="#faq">FAQ</a></li>
            <!--                <li class = "p-5"><a class="close-menu font-heading text-base text-gray-900 hover:text-gray-700" href = "#">Terms &amp;
           Rights</a></li>-->
        </ul>
        <div class="border-b border-gray-100"></div>
    </div>
    <p class="px-10 text-gray-600 text-center py-8 text-sm">© Copyright <span id="current-year">2022</span>. All Rights Reserved by loginbait.com.</p>

</section>

<script defer src="js/main.js"></script>
</body>
</html>
