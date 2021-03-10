<!-- navbar -->
<nav
    class=" z-50 sticky top-0 transition duration-500 bg-gray-300 dark:bg-gray-900 border-b-2 border-gray-800 dark:border-gray-500 opacity-75">

    <div class="max-w-screen-2xl mx-auto px-4">

        <div class="flex justify-between">

            <!-- logo -->

            <div>
                <a href="/#" class="flex items-center py-1 px-2">
                    <img class="h-16 w-auto mr-2 transform" src="{{ asset('images/icon-logo/logo.png') }}" alt="Logo">
                    <span class="transition duration-500 font-bold text-gray-800 dark:text-gray-200">Mathieu
                        Tillier</span>
                </a>
            </div>

            <div class="flex space-x-4 ">



                <!-- primary nav -->

                <div class="hidden lg:flex items-center p-auto">
                    <a href="/#apropos"
                        class="transition duration-500  mx-2 rounded-xl py-2 px-3 text-gray-800 hover:bounceOrig dark:text-gray-200 hover:text-green-500 dark:hover:text-yellow-400">A
                        propos de
                        moi</a>
                    <p class="transition duration-500 text-gray-600 font-bold dark:text-gray-200">|</p>
                    <a href="#"
                        class="transition duration-500  mx-2 rounded-xl py-2 px-3 text-gray-800 hover:bounceOrig dark:text-gray-200 hover:text-green-500 dark:hover:text-yellow-400">Parcours</a>
                    <p class="transition duration-500 text-gray-600 font-bold dark:text-gray-200">|</p>
                    <a href="#"
                        class="transition duration-500  mx-2 rounded-xl py-2 px-3 text-gray-800 hover:bounceOrig dark:text-gray-200 hover:text-green-500 dark:hover:text-yellow-400">Réalisations</a>
                    <p class="transition duration-500 text-gray-600 font-bold dark:text-gray-200">|</p>
                    <a href="#"
                        class="transition duration-500  mx-2 rounded-xl py-2 px-3 text-gray-800 hover:bounceOrig dark:text-gray-200 hover:text-green-500 dark:hover:text-yellow-400">Veilles</a>
                    <p class="transition duration-500 text-gray-600 font-bold dark:text-gray-200">|</p>
                    <a href="/contact"
                        class="transition duration-500  mx-2 rounded-xl py-2 px-3 text-gray-800 hover:bounceOrig dark:text-gray-200 hover:text-green-500 dark:hover:text-yellow-400">Contact</a>
                </div>



            </div>



            <!--mobile button -->
            <div class="lg:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="h-6 w-6 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg></button>
            </div>


            <!-- Dark mode toggle -->
            <div class="flex items-center space-x-2">

                <svg class="transition duration-500 h-7 w-auto text-gray-800 dark:text-gray-200"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>


                <div class="toggle">
                    <input id="toggle" class="toggle-checkbox hidden" type="checkbox">
                    <label for="toggle"
                        class="transition duration-500 cursor-pointer toggle-label block w-12 h-6 bg-gray-800 rounded-full transition-color duration-300 ease-out dark:bg-gray-400"></label>
                </div>




                <svg class="transition duration-500 h-6 w-auto text-gray-800 dark:text-gray-200"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>

            </div>
        </div>



    </div>
    <!-- mobile menu-->
    <div class="mobile-menu hidden lg:hidden">
        <a href="#apropos" class="block transition duration-500 py-2 px-4 text-gray-800 dark:text-gray-200">A propos de
            moi</a>

        <a href="#" class="block transition duration-500 py-2 px-4 text-gray-800 dark:text-gray-200 ">Parcours</a>
        <a href="#" class="block transition duration-500 py-2 px-4 text-gray-800 dark:text-gray-200">Réalisations</a>

        <a href="#" class="block transition duration-500 py-2 px-4 text-gray-800 dark:text-gray-200">Veilles</a>
        <a href="#" class="block transition duration-500 py-2 px-4 text-gray-800 dark:text-gray-200">Contact</a>

    </div>
</nav>

<script>
    //navbar mobile menu


    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    });
</script>


<script>
    // dark mode toggle 

    const toggleSwitch = document.querySelector('#toggle');

    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {

    
    document.querySelector('html').classList.add('dark');
    toggleSwitch.checked = true;

    } else {

    document.querySelector('html').classList.remove('dark');

    }

    function switchTheme(e){
        if(e.target.checked){
            localStorage.setItem('theme', 'dark');
            document.querySelector('html').classList.add('dark');
        }else{
            localStorage.setItem('theme', 'light');
            document.querySelector('html').classList.remove('dark');
        }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);
   
</script>

<script>

</script>