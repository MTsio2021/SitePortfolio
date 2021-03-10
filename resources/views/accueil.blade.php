@extends('layouts/layoutWebsite')

@section('title')
Accueil
@endsection

@section('content')


<!-- First section -->

<section>
    <div
        class="transition duration-500 relative min-h-screen flex items-center justify-center bg-gray-400 dark:bg-gray-900 overflow-hidden border-b-4 border-gray-700">

        <!-- grid background -->
        <div class="grid-background absolute inset-0 p-2 grid grid-cols-12 gap-2 transform -skew-y-12 scale-125">

            <!-- row 1 -->
            <div class="transition duration-500 col-span-2 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-5 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-1 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-4 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>

            <!-- row 2 -->
            <div class="transition duration-500 col-span-5 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-3 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-2 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-2 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>

            <!-- row 3 -->
            <div class="transition duration-500 col-span-4 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-7 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-1 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>

            <!-- row 4 -->
            <div class="transition duration-500 col-span-2 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-4 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-6 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>

            <!-- row 5 -->
            <div class="transition duration-500 col-span-5 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-5 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-2 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>

            <!-- row 6 -->
            <div class="transition duration-500 col-span-4 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-7 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-1 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>

            <!-- row 6 -->
            <div class="transition duration-500 col-span-4 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-7 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
            <div class="transition duration-500 col-span-1 bg-gray-300 dark:bg-gray-800 rounded animate-pulse"></div>
        </div>

        <!-- content -->
        <div class="grid grid-rows-4 grid-cols-2">
            <div class="relative row-span-3 col-span-2 text-center">
                <h2 class=" transition duration-500 text-4xl text-gray-700 dark:text-gray-200 font-extrabold">Bienvenue
                    sur
                    mon <span class="transition duration-500 text-green-500 dark:text-yellow-500">Portfolio.</span></h2>
                <p class=" transition duration-500 text-3xl text-gray-700 dark:text-gray-200 py-3 font-bold">
                    Vous y trouverez mes <span
                        class="transition duration-500 text-green-500 dark:text-yellow-500">projets réalisés</span>, mon
                    <span class="transition duration-500 text-green-500 dark:text-yellow-500">CV</span>, mes<span
                        class="transition duration-500 text-green-500 dark:text-yellow-500"> veilles</span> et plus
                    encore !
                </p>
            </div>

            <div class="relative  col-span-2 flex justify-center">
                <svg class="transition duration-500 h-28 w-auto text-gray-700 dark:text-gray-200 animate-bounce"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </div>

    <script>
        // grab everything we need
        const gridItems = document.querySelectorAll(".grid-background > div");
        
        // loop over grid items and create a random duration + delay for each
        gridItems.forEach((item) => {
        // calculate random number for delay
        const delay = getRandomInt(0, 5);
        
        // calculate random number for duration
        const duration = getRandomInt(3, 6);
        
        // set both
        item.style.animationDelay = `${delay}s`;
        item.style.animationDuration = `${duration}s`;
        });
        
        function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    </script>

</section>

<!-- Second section -->

<section id="apropos" class="grid grid-cols-6 transition duration-500 py-20 bg-gray-400 dark:bg-gray-900">

    <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto flex justify-center pb-10 ">

        <div
            class=" transition duration-500 grid lg:grid-flow-col lg:grid-cols-3 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">
            <div class="grid grid-flow-row col-span-2 px-3">
                <div class="">
                    <h6 data-aos="fade-down"
                        class="transition duration-500 text-2xl text-green-500 dark:text-yellow-500 font-bold">Qui
                        suis-je ?</h6>
                    <div data-aos="fade-right" class="py-6">
                        <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je m'appel
                            <span class="transition duration-500 text-green-500 dark:text-yellow-400">Mathieu
                                Tillier</span>,
                            étudiant en
                            deuxième
                            année de <span class="transition duration-500 text-green-500 dark:text-yellow-400">BTS
                                SIO</span> (Servies Informatiques aux Organisations), option <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">SLAM</span>
                            (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                            effectué ce BTS au <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">Lycée Polyvalent de
                                Cachan</span> (94230).</p>
                    </div>
                    <div data-aos="fade-right" class="">
                        <p class="transition duration-500 text-gray-800 dark:text-gray-200 ">Je m'appel Mathieu Tillier,
                            étudiant en
                            deuxième
                            année de BTS SIO (Servies Informatiques aux Organisations), option SLAM (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement.</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-flow-row px-2">
                <div data-aos="flip-left" class="flex justify-end items-center py-3 sm:pl-28 lg:pl-0 lg:py-0">
                    <img class="transition duration-500 border-4 rounded-lg border-green-500 dark:border-yellow-500  h-48 w-auto  xl:h-80 "
                        src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

</section>

<section class="grid grid-cols-6 transition duration-500 py-20 bg-gray-400 dark:bg-gray-900">

    <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto flex justify-center pb-10 ">

        <div
            class=" transition duration-500 grid lg:grid-flow-col lg:grid-cols-3 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">
            <div class="grid grid-flow-row col-span-2 px-3">
                <div class="">
                    <h6 class="transition duration-500 text-2xl text-green-500 dark:text-yellow-500 font-bold">Qui
                        suis-je ?</h6>
                    <div class="py-6">
                        <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je m'appel
                            <span class="transition duration-500 text-green-500 dark:text-yellow-400">Mathieu
                                Tillier</span>,
                            étudiant en
                            deuxième
                            année de <span class="transition duration-500 text-green-500 dark:text-yellow-400">BTS
                                SIO</span> (Servies Informatiques aux Organisations), option <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">SLAM</span>
                            (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                            effectué ce BTS au <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">Lycée Polyvalent de
                                Cachan</span> (94230).</p>
                    </div>
                    <div class="">
                        <p class="transition duration-500 text-gray-800 dark:text-gray-200 ">Je m'appel Mathieu Tillier,
                            étudiant en
                            deuxième
                            année de BTS SIO (Servies Informatiques aux Organisations), option SLAM (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement.</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-flow-row px-2">
                <div class="flex justify-end items-center py-3  sm:pl-32 lg:pl-0 lg:py-0">
                    <img class="transition duration-500 border-4 rounded-lg border-green-500 dark:border-yellow-500  h-56 w-auto  xl:h-80 "
                        src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

</section>
<section class="grid grid-cols-6 transition duration-500 py-20 bg-gray-400 dark:bg-gray-900">

    <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto flex justify-center pb-10 ">

        <div
            class=" transition duration-500 grid lg:grid-flow-col lg:grid-cols-3 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">
            <div class="grid grid-flow-row col-span-2 px-3">
                <div class="">
                    <h6 class="transition duration-500 text-2xl text-green-500 dark:text-yellow-500 font-bold">Qui
                        suis-je ?</h6>
                    <div class="py-6">
                        <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je m'appel
                            <span class="transition duration-500 text-green-500 dark:text-yellow-400">Mathieu
                                Tillier</span>,
                            étudiant en
                            deuxième
                            année de <span class="transition duration-500 text-green-500 dark:text-yellow-400">BTS
                                SIO</span> (Servies Informatiques aux Organisations), option <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">SLAM</span>
                            (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                            effectué ce BTS au <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">Lycée Polyvalent de
                                Cachan</span> (94230).</p>
                    </div>
                    <div class="">
                        <p class="transition duration-500 text-gray-800 dark:text-gray-200 ">Je m'appel Mathieu Tillier,
                            étudiant en
                            deuxième
                            année de BTS SIO (Servies Informatiques aux Organisations), option SLAM (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement.</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-flow-row px-2">
                <div class="flex justify-end items-center py-3  sm:pl-32 lg:pl-0 lg:py-0">
                    <img class="transition duration-500 border-4 rounded-lg border-green-500 dark:border-yellow-500  h-56 w-auto  xl:h-80 "
                        src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

</section>
<section class="grid grid-cols-6 transition duration-500 py-20 bg-gray-400 dark:bg-gray-900">

    <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto flex justify-center pb-10 ">

        <div
            class=" transition duration-500 grid lg:grid-flow-col lg:grid-cols-3 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">
            <div class="grid grid-flow-row col-span-2 px-3">
                <div class="">
                    <h6 class="transition duration-500 text-2xl text-green-500 dark:text-yellow-500 font-bold">Qui
                        suis-je ?</h6>
                    <div class="py-6">
                        <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je m'appel
                            <span class="transition duration-500 text-green-500 dark:text-yellow-400">Mathieu
                                Tillier</span>,
                            étudiant en
                            deuxième
                            année de <span class="transition duration-500 text-green-500 dark:text-yellow-400">BTS
                                SIO</span> (Servies Informatiques aux Organisations), option <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">SLAM</span>
                            (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                            effectué ce BTS au <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">Lycée Polyvalent de
                                Cachan</span> (94230).</p>
                    </div>
                    <div class="">
                        <p class="transition duration-500 text-gray-800 dark:text-gray-200 ">Je m'appel Mathieu Tillier,
                            étudiant en
                            deuxième
                            année de BTS SIO (Servies Informatiques aux Organisations), option SLAM (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement.</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-flow-row px-2">
                <div class="flex justify-end items-center py-3  sm:pl-32 lg:pl-0 lg:py-0">
                    <img class="transition duration-500 border-4 rounded-lg border-green-500 dark:border-yellow-500  h-56 w-auto  xl:h-80 "
                        src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

</section>
<section class="grid grid-cols-6 transition duration-500 py-20 bg-gray-400 dark:bg-gray-900">

    <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto flex justify-center pb-10 ">

        <div
            class=" transition duration-500 grid lg:grid-flow-col lg:grid-cols-3 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">
            <div class="grid grid-flow-row col-span-2 px-3">
                <div class="">
                    <h6 class="transition duration-500 text-2xl text-green-500 dark:text-yellow-500 font-bold">Qui
                        suis-je ?</h6>
                    <div class="py-6">
                        <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je m'appel
                            <span class="transition duration-500 text-green-500 dark:text-yellow-400">Mathieu
                                Tillier</span>,
                            étudiant en
                            deuxième
                            année de <span class="transition duration-500 text-green-500 dark:text-yellow-400">BTS
                                SIO</span> (Servies Informatiques aux Organisations), option <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">SLAM</span>
                            (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                            effectué ce BTS au <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">Lycée Polyvalent de
                                Cachan</span> (94230).</p>
                    </div>
                    <div class="">
                        <p class="transition duration-500 text-gray-800 dark:text-gray-200 ">Je m'appel Mathieu Tillier,
                            étudiant en
                            deuxième
                            année de BTS SIO (Servies Informatiques aux Organisations), option SLAM (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement.</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-flow-row px-2">
                <div class="flex justify-end items-center py-3  sm:pl-32 lg:pl-0 lg:py-0">
                    <img class="transition duration-500 border-4 rounded-lg border-green-500 dark:border-yellow-500  h-56 w-auto  xl:h-80 "
                        src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

</section>
<section class="grid grid-cols-6 transition duration-500 py-20 bg-gray-400 dark:bg-gray-900">

    <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto flex justify-center pb-10 ">

        <div
            class=" transition duration-500 grid lg:grid-flow-col lg:grid-cols-3 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">
            <div class="grid grid-flow-row col-span-2 px-3">
                <div class="">
                    <h6 class="transition duration-500 text-2xl text-green-500 dark:text-yellow-500 font-bold">Qui
                        suis-je ?</h6>
                    <div class="py-6">
                        <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je m'appel
                            <span class="transition duration-500 text-green-500 dark:text-yellow-400">Mathieu
                                Tillier</span>,
                            étudiant en
                            deuxième
                            année de <span class="transition duration-500 text-green-500 dark:text-yellow-400">BTS
                                SIO</span> (Servies Informatiques aux Organisations), option <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">SLAM</span>
                            (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                            effectué ce BTS au <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">Lycée Polyvalent de
                                Cachan</span> (94230).</p>
                    </div>
                    <div class="">
                        <p class="transition duration-500 text-gray-800 dark:text-gray-200 ">Je m'appel Mathieu Tillier,
                            étudiant en
                            deuxième
                            année de BTS SIO (Servies Informatiques aux Organisations), option SLAM (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement.</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-flow-row px-2">
                <div class="flex justify-end items-center py-3  sm:pl-32 lg:pl-0 lg:py-0">
                    <img class="transition duration-500 border-4 rounded-lg border-green-500 dark:border-yellow-500  h-56 w-auto  xl:h-80 "
                        src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

</section>
<section class="grid grid-cols-6 transition duration-500 py-20 bg-gray-400 dark:bg-gray-900">

    <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto flex justify-center pb-10 ">

        <div
            class=" transition duration-500 grid lg:grid-flow-col lg:grid-cols-3 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">
            <div class="grid grid-flow-row col-span-2 px-3">
                <div class="">
                    <h6 class="transition duration-500 text-2xl text-green-500 dark:text-yellow-500 font-bold">Qui
                        suis-je ?</h6>
                    <div class="py-6">
                        <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je m'appel
                            <span class="transition duration-500 text-green-500 dark:text-yellow-400">Mathieu
                                Tillier</span>,
                            étudiant en
                            deuxième
                            année de <span class="transition duration-500 text-green-500 dark:text-yellow-400">BTS
                                SIO</span> (Servies Informatiques aux Organisations), option <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">SLAM</span>
                            (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                            effectué ce BTS au <span
                                class="transition duration-500 text-green-500 dark:text-yellow-400">Lycée Polyvalent de
                                Cachan</span> (94230).</p>
                    </div>
                    <div class="">
                        <p class="transition duration-500 text-gray-800 dark:text-gray-200 ">Je m'appel Mathieu Tillier,
                            étudiant en
                            deuxième
                            année de BTS SIO (Servies Informatiques aux Organisations), option SLAM (Solutions
                            Logicielles et Application Métier), l'option spécialisée dans le développement.</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-flow-row px-2">
                <div class="flex justify-end items-center py-3  sm:pl-32 lg:pl-0 lg:py-0">
                    <img class="transition duration-500 border-4 rounded-lg border-green-500 dark:border-yellow-500  h-56 w-auto  xl:h-80 "
                        src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

</section>


@endsection