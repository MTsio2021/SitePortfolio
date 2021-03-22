@extends('layouts/layoutWebsite')

@section('title')
Accueil
@endsection

@section('content')


<!-- First section (Accueil) -->

<section>
    <div
        class="transition duration-500 relative min-h-screen flex items-center justify-center bg-gray-400 dark:bg-gray-900 overflow-hidden border-b-4 border-gray-700 dark:border-gray-500">

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
                    mon <span class="transition duration-500 text-indigo-600 dark:text-yellow-500">Portfolio.</span>
                </h2>
                <p class=" transition duration-500 text-3xl text-gray-700 dark:text-gray-200 py-3 font-bold">
                    Vous y trouverez mes <span
                        class="transition duration-500 text-indigo-600 dark:text-yellow-500">projets réalisés</span>,
                    mon
                    <span class="transition duration-500 text-indigo-600 dark:text-yellow-500">CV</span>, mes<span
                        class="transition duration-500 text-indigo-600 dark:text-yellow-500"> veilles</span> et plus
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

    <!-- Script background -->

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

<!-- End First section (Accueil) -->

<!-- Second section (A propos) -->

<section id="apropos">

    <div
        class="grid grid-cols-6 transition duration-500 py-20  bg-gray-400 dark:bg-gray-900 border-b-4 border-gray-500 dark:border-gray-700">
        <!-- Global div -->

        <div data-aos="flip-up" class="col-start-2 col-span-4 mx-auto py-10 flex justify-center">

            <!--  Info Div -->

            <div
                class=" transition duration-500 grid lg:grid-cols-2 py-3 bg-gray-200 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw border-2 rounded-xl border-gray-700 dark:border-gray-300">





                <!-- Photo -->

                <div class="grid grid-flow-row items-center px-2">
                    <div data-aos="flip-left" class="flex justify-center">
                        <img class="transition duration-500 border-4 rounded-lg border-indigo-600 dark:border-yellow-500  h-48 w-auto lg:h-64 xl:h-80"
                            src="{{ asset('images/icon-logo/moi.jpg') }}" alt="">
                    </div>
                </div>

                <!-- End Photo -->

                <!-- Grid Info -->
                <div class="grid grid-flow-row px-3">

                    <!-- Info Data -->

                    <div class="">
                        <!-- Title 1  -->
                        <div data-aos="fade-down">
                            <h5 class="transition duration-500 text-2xl text-indigo-600 dark:text-yellow-500 font-bold">
                                Qui suis-je ?
                            </h5>
                        </div>
                        <!-- End Title 1  -->

                        <!-- Paragraph 1 -->
                        <div data-aos="fade-right" class="py-6">
                            <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">
                                Je m'appel
                                <span class="transition duration-500 text-indigo-600 dark:text-yellow-400">Mathieu
                                    Tillier</span>,
                                étudiant en
                                deuxième
                                année de <span class="transition duration-500 text-indigo-600 dark:text-yellow-400">BTS
                                    SIO</span> (Servies Informatiques aux Organisations), option <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">SLAM</span>
                                (Solutions
                                Logicielles et Application Métier), l'option spécialisée dans le développement. J'ai
                                effectué ce BTS au <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">Lycée
                                    Polyvalent
                                    de
                                    Cachan</span> (94230).
                            </p>
                        </div>
                        <!-- End Paragraph 1  -->

                        <!-- Title 2  -->
                        <div data-aos="fade-down">
                            <h5
                                class=" text-2xl transition duration-500 text-indigo-600 dark:text-yellow-500 font-bold">
                                Mon projet ?
                            </h5>
                        </div>
                        <!-- End Title 2  -->

                        <!-- Paragraph 2  -->
                        <div data-aos="fade-right" class="py-6">
                            <p class="transition duration-500 text-justify text-gray-800 dark:text-gray-200">Je compte
                                poursuivre
                                mes études après mon BTS, en alternance, en développement dans le domaine du <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">web.</span>
                                J'aimerai à terme devenir un <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">développeur web
                                    full-stack</span> ou <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">front-end.</span>
                            </p>
                        </div>
                        <!-- End Paragraph 2  -->
                    </div>

                    <!-- End Info -->
                </div>

                <!-- End Grid Info -->



            </div>
            <!--  Info Div -->
        </div>

        <!-- End Global div -->

    </div>

</section>

<!-- End Second section (A propos) -->

<!-- Third section (Parcours) -->

<section id="parcours">

    <div
        class="grid grid-cols-6 transition duration-500 bg-gray-300 py-20 dark:bg-gray-800 border-b-4 border-gray-700 dark:border-gray-500 lg:px-10">

        <!-- Global Div -->
        <div class="mx-auto col-start-2 col-span-4 lg:max-w-screen-lg xl:max-w-screen-xl">

            <!-- Header -->
            <div data-aos="fade-down">
                <div
                    class="transition duration-500 border-b-2 flex justify-center border-indigo-600 dark:border-yellow-500">
                    <!-- Title -->
                    <h5
                        class="py-5 text-2xl lg:text-4xl font-bold transition duration-500 text-indigo-600 dark:text-yellow-500">
                        ══ Mon parcours ══
                    </h5>
                    <!-- End Title -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Infos -->

            <div class="grid lg:grid-cols-2 py-5 gap-5">

                <!-- Col 1 -->

                <div>

                    <!-- Row 1 -->
                    <div data-aos="fade-right">
                        <div
                            class="transition duration-500 flex justify-center border-b-2 py-5 border-indigo-600 dark:border-yellow-500 mx-10">
                            <h5
                                class="my-auto lg:text-2xl font-bold transition duration-500 text-indigo-600 dark:text-yellow-500">
                                Formations
                            </h5>
                        </div>
                    </div>

                    <!-- End Row 1 -->

                    <!-- Row 2 -->

                    <div data-aos="fade-right" class="ml-10 py-3">

                        @foreach ($formations as $formation)

                        <div data-aos="fade-right" class="pb-2">

                            <p class="transition duration-500 font-bold text-gray-700 lg:text-xl dark:text-gray-200">
                                -
                                {{ $formation->name }} |
                                {{ $formation->etablishment }} |
                                {{ $formation->city }}</p>

                            <p class="ml-3 transition duration-500 text-gray-700 dark:text-gray-200">
                                {{ $formation->date }}</p>

                        </div>

                        @endforeach

                    </div>

                    <!-- End Row 2 -->

                </div>

                <!-- End Col 1 -->

                <!-- Col 2 -->

                <div>

                    <!-- Row 1 -->
                    <div data-aos="fade-left">
                        <div
                            class="transition duration-500 flex justify-center border-b-2 py-5 border-indigo-600 dark:border-yellow-500 mx-10">

                            <h5
                                class="my-auto lg:text-2xl font-bold transition duration-500 text-indigo-600 dark:text-yellow-500">
                                Expériences Professionnelles</h5>

                        </div>
                    </div>

                    <!-- End Row 1 -->

                    <!-- Row 2 -->

                    <div class="ml-10 py-3">
                        @foreach ($experiences as $experience)
                        <div data-aos="fade-left" class="pb-2">
                            <p class="transition duration-500 text-gray-800 dark:text-gray-200">
                                <span class="lg:text-xl font-bold">
                                    -
                                    {{ $experience->name }} |
                                    {{ $experience->city }} |
                                </span>
                                {{ $experience->date }}</p>

                            <p class="mt-4 transition duration-500 text-gray-700 dark:text-gray-200 text-justify mr-10">
                                {{ $experience->body }}
                            </p>
                        </div>
                        @endforeach
                    </div>

                    <!-- End Row 2 -->

                </div>

                <!-- End Col 2 -->

            </div>
            <!-- End Infos -->
        </div>

    </div>

</section>

<!-- End Third section (Parcours) -->

<!-- Fourth section (Réalisations) -->

<section id="realisation">

    <div
        class="grid grid-cols-6 transition duration-500 py-20 lg:px-10 bg-gray-400 dark:bg-gray-900 border-b-4 border-gray-500 dark:border-gray-700">

        <!-- Global div -->

        <div class="mx-auto col-start-2 col-span-4 lg:max-w-screen-lg xl:max-w-screen-xl">

            <!-- Header -->
            <div data-aos="fade-down">
                <div
                    class="transition duration-500 border-b-2 flex justify-center border-indigo-600 dark:border-yellow-500">
                    <!-- Title -->
                    <h5
                        class="py-5 text-2xl lg:text-4xl font-bold transition duration-500 text-indigo-600 dark:text-yellow-500">
                        ══ Mes Réalisations ══
                    </h5>
                    <!-- End Title -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Projet -->

            <div class="grid lg:grid-flow-col lg:grid-cols-2 2xl:grid-cols-3 gap-10 pt-10">


                @foreach ($realisations as $realisation)

                <div data-aos="fade-up">
                    <div
                        class="transition duration-500 bg-gray-200 py-2 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw rounded-lg">

                        <div class="m-5">

                            <!-- 1 -->
                            <div data-aos="zoom-in" class="py-2">
                                <img src=" {{ asset('images/projet/'.$realisation->image)}}" alt="">
                            </div>

                            <!-- 2 -->
                            <div data-aos="fade-down"
                                class="transition duration-500 py-2 flex justify-center text-gray-800 dark:text-gray-200">
                                <p class="font-bold lg:text-xl">{{ $realisation->title}}</p>

                            </div>

                            <!-- 3 -->
                            <div data-aos="fade-up"
                                class="transition duration-500 py-2 text-justify text-gray-800 dark:text-gray-200">
                                <p>{{ $realisation->body}}</p>
                            </div>

                            <!-- 4 -->
                            <div class="grid lg:grid-flow-col lg:grid-cols-3 gap-2 py-2">

                                <!-- 1 -->
                                <div data-aos="fade-right" class="flex justify-center">
                                    @if ($realisation->link)
                                    <button
                                        class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:-translate-y-2 p-2">

                                        <a class="transition duration-500 text-gray-200 inline"
                                            href="{{ $realisation->link}}" target="blank"><img class="h-5 w-auto inline"
                                                src="{{ asset('images/icon-logo/gitl.png')}}" alt="">Lien</a>

                                    </button>
                                    @else
                                    <button
                                        class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 p-2 hover:bg-red-500 dark:hover:bg-red-500">

                                        <a class="transition duration-500 text-gray-200 inline" target="blank">Lien
                                        </a>

                                    </button>
                                    @endif
                                </div>

                                <!-- 2 -->
                                <div data-aos="fade-up" class="flex justify-center">
                                    @if ($realisation->linkgithub)
                                    <button
                                        class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:-translate-y-2 p-2">

                                        <a class="transition duration-500 text-gray-200 inline"
                                            href="{{ $realisation->linkgithub}}" target="blank"><img
                                                class="h-5 w-auto inline mr-0.5"
                                                src="{{ asset('images/icon-logo/gitl.png')}}" alt=""><span
                                                class="hidden 2xl:inline">Github</span><span
                                                class="2xl:hidden">Git</span></a>

                                    </button>
                                    @else
                                    <button
                                        class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 p-2 hover:bg-red-500 dark:hover:bg-red-500">

                                        <a class="transition duration-500 text-gray-200 inline" target="blank"><img
                                                class="h-5 w-auto inline mr-0.5"
                                                src="{{ asset('images/icon-logo/gitl.png')}}" alt=""><span
                                                class="hidden 2xl:inline">Github</span><span
                                                class="2xl:hidden">Git</span>

                                        </a>

                                    </button>
                                    @endif
                                </div>

                                <!-- 3 -->
                                <div data-aos="fade-left" class="flex justify-center">
                                    @if ($realisation->pdfmission)

                                    <button
                                        class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:-translate-y-2 p-2">

                                        <a class="transition duration-500 text-gray-200"
                                            href="{{ asset('images/projet/'.$realisation->pdfmission)}}"
                                            target="blank">Rapport</a>

                                    </button>

                                    @else

                                    <button
                                        class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 p-2 hover:bg-red-500 dark:hover:bg-red-500">

                                        <a class="transition duration-500 text-gray-200" target="blank">Rapport
                                        </a>

                                    </button>

                                    @endif
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                @endforeach

            </div>

            <!-- End Projet -->

        </div>

        <!-- End Global div -->
    </div>

</section>

<!-- End Fourth section (Réalisations) -->

@endsection