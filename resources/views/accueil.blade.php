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
                <h2
                    class=" transition duration-500 text-xl lg:text-4xl text-gray-700 dark:text-gray-200 font-extrabold">
                    Bienvenue
                    sur
                    mon <span class="transition duration-500 text-indigo-600 dark:text-yellow-500">Portfolio.</span>
                </h2>
                <p class=" transition duration-500 text-lg lg:text-2xl text-gray-700 dark:text-gray-200 py-3 font-bold">
                    Vous y trouverez mes <span
                        class="transition duration-500 text-indigo-600 dark:text-yellow-500">projets r??alis??s</span>,
                    mon
                    <span class="transition duration-500 text-indigo-600 dark:text-yellow-500">CV</span>, mes<span
                        class="transition duration-500 text-indigo-600 dark:text-yellow-500"> veilles</span> et plus
                    encore !
                </p>
            </div>

            <div class="relative  col-span-2 flex justify-center">
                <svg class="transition duration-500 h-14 lg:h-28 w-auto text-gray-700 dark:text-gray-200 animate-bounce"
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
                            <h5
                                class="transition duration-500 lg:text-2xl text-indigo-600 dark:text-yellow-500 font-bold">
                                Qui suis-je ?
                            </h5>
                        </div>
                        <!-- End Title 1  -->

                        <!-- Paragraph 1 -->
                        <div data-aos="fade-right" class="py-6">
                            <p
                                class="transition duration-500 text-justify text-gray-800 dark:text-gray-200 text-sm lg:text-base">
                                Je m'appel
                                <span class="transition duration-500 text-indigo-600 dark:text-yellow-400">Mathieu
                                    Tillier</span>,
                                ??tudiant en
                                deuxi??me
                                ann??e de <span class="transition duration-500 text-indigo-600 dark:text-yellow-400">BTS
                                    SIO</span> (Servies Informatiques aux Organisations), option <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">SLAM</span>
                                (Solutions
                                Logicielles et Application M??tier), l'option sp??cialis??e dans le d??veloppement. J'ai
                                effectu?? ce BTS au <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">Lyc??e
                                    Polyvalent
                                    de
                                    Cachan</span> (94230).
                            </p>
                        </div>
                        <!-- End Paragraph 1  -->

                        <!-- Title 2  -->
                        <div data-aos="fade-down">
                            <h5
                                class="lg:text-2xl transition duration-500 text-indigo-600 dark:text-yellow-500 font-bold">
                                Mon projet ?
                            </h5>
                        </div>
                        <!-- End Title 2  -->

                        <!-- Paragraph 2  -->
                        <div data-aos="fade-right" class="py-6">
                            <p
                                class="transition duration-500 text-justify text-gray-800 dark:text-gray-200 text-sm lg:text-base">
                                Je compte
                                poursuivre
                                mes ??tudes apr??s mon BTS, en alternance, en d??veloppement dans le domaine du <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">web.</span>
                                J'aimerai ?? terme devenir un <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">d??veloppeur web
                                    full-stack</span> ou <span
                                    class="transition duration-500 text-indigo-600 dark:text-yellow-400">front-end.</span>
                            </p>
                            <div class="flex justify-center mt-5">

                                <a class="transition duration-500 w-full text-gray-200"
                                    href="{{ asset('images/cv/cvmat.pdf') }}" target="blank">

                                    <button
                                        class="transition duration-500 w-1/2 transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:translate-x-2 p-2 dark:hover:bg-yellow-700 hover:bg-indigo-700">
                                        Consulter mon CV
                                    </button>

                                </a>

                            </div>
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
                        <span class="hidden 2xl:inline">?????? Mon parcours ??????</span><span
                            class="inline 2xl:hidden">Parcours</span>
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

                            <p class="transition duration-500 text-gray-800 dark:text-gray-200">
                                <span class="text-sm lg:text-xl font-bold">
                                    -
                                    {{ $formation->name }} |
                                    {{ $formation->etablishment }} |
                                    {{ $formation->city }}</span></p>

                            <p class="transition duration-500 text-gray-700 dark:text-gray-200 text-sm">
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
                                <span class="hidden 2xl:inline">Exp??riences professionnelles</span><span
                                    class="inline 2xl:hidden">Exp??riences pros</span></h5>

                        </div>
                    </div>

                    <!-- End Row 1 -->

                    <!-- Row 2 -->

                    <div class="ml-10 py-3">
                        @foreach ($experiences as $experience)
                        <div data-aos="fade-left" class="pb-2">
                            <p class="transition duration-500 text-gray-800 dark:text-gray-200">
                                <span class="text-sm lg:text-xl font-bold">
                                    -
                                    {{ $experience->name }} |
                                    {{ $experience->city }}
                                </span>
                            </p>
                            <p class="transition duration-500 text-gray-700 dark:text-gray-200 text-sm">
                                {{ $experience->date }}</p>

                            <p
                                class="mt-4 transition duration-500 text-gray-700 dark:text-gray-200 text-justify mr-10 text-sm lg:text-xl">
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

<!-- Fourth section (R??alisations) -->

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
                        <span class="hidden 2xl:inline">?????? Mes r??alisations ??????</span><span
                            class="inline 2xl:hidden">R??alisations</span>
                    </h5>
                    <!-- End Title -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Projet -->

            <div class="grid lg:grid-flow-rows 2xl:grid-cols-2 gap-10 pt-10">


                @foreach ($realisations as $realisation)

                <div data-aos="fade-up">
                    <div
                        class="transition duration-500 bg-gray-200 py-2 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw rounded-lg h-full">

                        <div class="m-5">

                            <!-- 1 -->
                            <div data-aos="zoom-in" class="flex justify-center py-2">
                                <img class="h-52 w-auto" src=" {{ asset('images/projet/'.$realisation->image)}}"
                                    alt="Image">
                            </div>

                            <!-- 2 -->
                            <div data-aos="fade-down">
                                <div class="transition duration-500 py-2 flex justify-center">
                                    <p class="transition duration-500  text-gray-800 dark:text-gray-200">
                                        {{ $realisation->title}}</p>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div data-aos="fade-up" class="transition duration-500 py-2 text-justify">
                                <p class="transition duration-500 text-indigo-600 dark:text-yellow-500">
                                    {{ $realisation->tech}}</p>
                            </div>

                            <!-- 4 -->
                            <div data-aos="fade-up" class="transition duration-500 py-2 text-justify">
                                <p class="transition duration-500  text-gray-800 dark:text-gray-200">
                                    {{ $realisation->body}}</p>
                            </div>

                            <!-- 5 -->
                            <div class="grid gap-2 py-2">

                                <!-- 1 -->
                                <div data-aos="fade-right" class="flex justify-center">
                                    @if ($realisation->link)

                                    <a class="transition duration-500 text-gray-200 w-full"
                                        href="{{ $realisation->link}}" target="blank">
                                        <button
                                            class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:translate-x-2 p-2">

                                            Lien

                                        </button>
                                    </a>
                                    @else

                                    @endif
                                </div>

                                <!-- 2 -->
                                <div data-aos="fade-up" class="flex justify-center">
                                    @if ($realisation->linkgithub)

                                    <a class="transition duration-500 text-gray-200 w-full inline"
                                        href="{{ $realisation->linkgithub}}" target="blank">
                                        <button
                                            class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:translate-x-2 p-2">
                                            <img class="h-5 w-auto inline mr-0.5"
                                                src="{{ asset('images/icon-logo/gitl.png')}}" alt="">
                                            <span class="hidden 2xl:inline">Github</span><span
                                                class="2xl:hidden">Git</span>

                                        </button>
                                    </a>
                                    @else

                                    @endif
                                </div>

                                <!-- 3 -->
                                <div data-aos="fade-left" class="flex justify-center">
                                    @if ($realisation->pdfmission)
                                    <a class="transition duration-500 w-full text-gray-200"
                                        href="{{ asset('images/projet/'.$realisation->pdfmission)}}" target="blank">
                                        <button
                                            class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:translate-x-2 p-2">

                                            Rapport

                                        </button>
                                    </a>
                                    @else



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

<!-- End Fourth section (R??alisations) -->


<!-- Fifth section (Veilles) -->

<section id="veille">

    <div
        class="grid grid-cols-6 transition duration-500 py-20 lg:px-10 bg-gray-300 dark:bg-gray-800 border-b-4 border-gray-700 dark:border-gray-500">

        <!-- Global div -->

        <div class="mx-auto col-start-2 col-span-4 lg:max-w-screen-lg xl:max-w-screen-xl">

            <!-- Header -->
            <div data-aos="fade-down">
                <div
                    class="transition duration-500 border-b-2 flex justify-center border-indigo-600 dark:border-yellow-500">
                    <!-- Title -->
                    <h5
                        class="py-5 text-2xl lg:text-4xl font-bold transition duration-500 text-indigo-600 dark:text-yellow-500">
                        <span class="hidden 2xl:inline">?????? Ma veille technologique ??????</span><span
                            class="inline 2xl:hidden">Veille technologique</span>
                    </h5>
                    <!-- End Title -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Presentation -->

            <div data-aos="fade-up">
                <div>
                    <p class="transition duration-500 text-gray-800 dark:text-gray-200 lg:text-xl py-3">
                        Une veille technologique consiste ?? se renseigner de <span
                            class="transition duration-500 text-indigo-600 dark:text-yellow-400">fa??on continue</span>
                        sur un <span class="transition duration-500 text-indigo-600 dark:text-yellow-400">sujet
                            technologique</span> sp??cifique.
                        Pour ma part j'ai choisi comme sujet le <span
                            class="transition duration-500 text-indigo-600 dark:text-yellow-400">langage PHP</span>
                        et tout ce qui est en rapport avec ce dernier comme ses frameworks, mises ?? jour, IDE, etc...
                    </p>
                    <p class="transition duration-500 text-gray-800 dark:text-gray-200 lg:text-xl py-3">
                        Pour organiser ma veille, j'ai utilis?? l'outil <span
                            class="transition duration-500 text-indigo-600 dark:text-yellow-400">PearlTrees</span>,
                        afin de regrouper tout les articles que j'ai trouv?? int??ressant. Pour chercher ces articles,
                        j'ai proc??d?? ?? des recherches sur PHP un week-end par mois,
                        tout en triant sur mon moteur de recherche que les r??sultats datant de moins d'un mois ( Pour ne
                        pas ??tre pollu?? par les anciens d??j?? vus ).
                        Voici le lien de mon <a
                            class="transition duration-500 underline text-indigo-600 dark:text-yellow-400 hover:text-indigo-800 dark:hover:text-yellow-500"
                            href="https://www.pearltrees.com/mtsio2021/php/id39693297" target="blank">PearlTrees</a>.
                    </p>

                    <!-- Articles -->

                    <div class="grid lg:grid-flow-rows lg:grid-cols-2 2xl:grid-cols-3 gap-10 pt-5">


                        @foreach ($veilles as $veille)

                        <div data-aos="fade-up">
                            <div
                                class="transition duration-500 bg-gray-200 py-2 shadow-lightSw dark:bg-gray-600 dark:shadow-darkSw rounded-lg h-full">

                                <div class="m-5">

                                    <!-- 1 -->
                                    <div data-aos="fade-down">
                                        <div
                                            class="transition duration-500 py-2 flex justify-center text-gray-800 dark:text-gray-200">
                                            <p class="font-bold lg:text-xl">{{ $veille->title}}</p>
                                        </div>
                                    </div>

                                    <!-- 2 -->
                                    <div data-aos="fade-up"
                                        class="transition duration-500 py-2 text-justify text-gray-800 dark:text-gray-200">
                                        <p class="transition duration-500">{{ $veille->body}}</p>
                                    </div>

                                    <!-- 3 -->
                                    <div data-aos="fade-right" class="flex justify-center">
                                        @if ($veille->link)
                                        <a class="transition duration-500 w-full text-gray-200"
                                            href="{{ $veille->link }}" target="blank">
                                            <button
                                                class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 hover:bg-indigo-800 dark:hover:bg-yellow-500 p-2">
                                                Lien
                                            </button>
                                        </a>
                                        @else
                                        <button
                                            class="transition duration-500 w-full transform rounded-xl bg-indigo-600 dark:bg-yellow-600 p-2 hover:bg-red-500 dark:hover:bg-red-500">

                                            <a class="transition duration-500 text-gray-200 inline" target="blank">Lien
                                            </a>

                                        </button>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    <!-- End Articles -->

                    <br>

                    <p class="transition duration-500 text-gray-800 dark:text-gray-200 lg:text-xl py-3">
                        Lors de mon stage de deuxi??me ann??e, au sein de l'association Budokan Thiais, j'ai du
                        m'auto-former sur le framework PHP <span
                            class="transition duration-500 text-indigo-600 dark:text-yellow-400">Laravel</span>, et donc
                        faire une veille sur ce dernier.
                        Pour apprendre ce framework j'ai utilis?? le site web <a
                            class="transition duration-500 underline text-indigo-600 dark:text-yellow-400 hover:text-indigo-800 dark:hover:text-yellow-500"
                            href="https://laracasts.com/" target="blank">Laracasts</a>. Ce site web propose ??norm??ment
                        de vid??os
                        explicatives concernant le d??veloppement web. Notamment sur Laravel, avec plus de
                        611 vid??os r??parties en 54 s??ries ?? la date du 01 mai 2021. La s??rie dont je me suis le plus
                        aid?? tout au long du stage pour apprendre est <a
                            class="transition duration-500 underline text-indigo-600 dark:text-yellow-400 hover:text-indigo-800 dark:hover:text-yellow-500"
                            href="https://laracasts.com/series/laravel-6-from-scratch" target="blank">celle-ci</a>.
                    </p>
                    <p class="transition duration-500 text-gray-800 dark:text-gray-200 lg:text-xl py-3">
                        Tout au long du second semestre de deuxi??me ann??e, je me suis aussi auto-form?? sur le framework
                        CSS
                        <span class="transition duration-500 text-indigo-600 dark:text-yellow-400">Tailwind CSS</span>.
                        En savoir plus sur
                        <a class="transition duration-500 underline text-indigo-600 dark:text-yellow-400 hover:text-indigo-800 dark:hover:text-yellow-500"
                            href="https://tailwindcss.com/" target="blank">Tailwind CSS</a>.
                    </p>
                </div>
            </div>
            <!-- End Presentation -->

        </div>

        <!-- End Global div -->
    </div>

</section>

<!-- End Fifth section (Veilles) -->
@endsection