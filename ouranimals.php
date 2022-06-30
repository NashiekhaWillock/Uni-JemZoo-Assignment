<?php 
/* Template Name: Our Animals */
get_header();
?>

<body class="bg-gray-300 dark:bg-gray-700">

 
        <div class="bg-green-900 dark:bg-gray-900">
            <!-- Slide -->
            <div
                class="slide-container flex justify-center items-center max-w-4xl m-auto relative rounded-lg border-2 border-green-300">
                <div class="slide fade">
                    <img src="<?php bloginfo('template_directory');?>/images/story.jpeg"
                        alt="picture of caterpillar reading a book advertising JEM ZOO story time for children"
                        class=" w-full rounded-lg">
                </div>
                <div class="slide fade">
                    <img src="<?php bloginfo('template_directory');?>/images/nature_banner.jpg" alt="picture advertising JEM ZOO nature reserve"
                        class="w-full rounded-lg">
                </div>
                <div class="slide fade">
                    <img src="<?php bloginfo('template_directory');?>/images/adult_event_banner.jpg"
                        alt="picture advertising JEM ZOO night at the zoo for adults 21 plus" class="w-full rounded-lg">
                </div>
                <a href="#"
                    class="prev cursor-pointer absolute top-1/2 w-auto -mt-5 p-3 text-white text-xl transition-all ease-in rounded-xl select-none hover:bg-green-900 left-1"
                    title="Previous">&#10094</a>
                <a href="#"
                    class="next cursor-pointer absolute top-1/2 w-auto -mt-5 p-3 text-white text-xl transition-all ease-in rounded-xl select-none hover:bg-green-900 right-1"
                    title="Next">&#10095</a>
            </div>
            <!-- Slide-buttons -->
            <div class="dots-container flex justify-center items-center p-2 cursor-pointer bg-green-900 dark:bg-gray-900"
                style="text-align:center">
                <span class="dot cursor-pointer m-1 w-5 h-5 bg-white rounded-2xl"></span>
                <span class="dot cursor-pointer m-1 w-5 h-5 bg-white rounded-2xl"></span>
                <span class="dot cursor-pointer m-1 w-5 h-5 bg-white rounded-2xl"></span>
            </div>
        </div>


    <main class="flex-grow max-w-screen-lg m-auto my-5 px-4 sm:px-6 lg:px-8 font-opensans">

        <section class="bg-gray-500 dark:bg-gray-200 h-50 p-2 pb-6 md:text-base lg:text-lg md:p-8 mb-10">
            <div class="container mx-auto py-8">
                <input
                    class=" searchBar w-full h-16 rounded mb-8 focus:outline-none focus:shadow-outline text-xl px-8 shadow-lg border dark:border-4 dark:border-black"
                    id="searchBar" type="search" placeholder="Search...">
                <nav class="flex items-center justify-items-center m-auto text-sm md:text-lg">
                    <a class="no-underline text-white py-1 px-1 font-medium bg-gray-700  hover:bg-gray-800"
                        href="#">Mammals</a>
                    <a class="no-underline text-white py-1 px-1 font-medium mx-1 bg-gray-700  hover:bg-gray-800"
                        href="#">Amphibians</a>
                    <a class="no-underline text-white py-1 px-1 font-medium mx-1 bg-gray-700 hover:bg-gray-800"
                        href="#">Reptiles</a>
                    <a class="no-underline text-white py-1 px-1 font-medium mx-1 bg-gray-700  hover:bg-gray-800"
                        href="#">Birds</a>
                </nav>
                <div class="mt-5 float-right">
                    <a href="animals.html"
                        class="hover:bg-green-900 rounded-full py-2 px-3 font-semibold hover:text-white bg-gray-900 text-gray-100">Search</a>
                </div>
            </div>
        </section>
        <?php 
                $animal = get_field('animals'); // access parent group
                $animal1 = $animal['animal1']; // access child group 1
                $animal2 = $animal['animal2']; // access child group 2
                $animal3 = $animal['animal3']; // access child group 3
                $animal4 = $animal['animal4']; // access child group 4
                $animal5 = $animal['animal5']; // access child group 5
                $animal6 = $animal['animal6']; // access child group 6
                $animal7 = $animal['animal7']; // access child group 7
                $animal8 = $animal['animal8']; // access child group 8
                $animal9 = $animal['animal9']; // access child group 9
                ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <div
                class="flex w-full bg-white dark:bg-indigo-800 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="Aardvark" src="<?php echo $animal1['image']; ?>" class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal1['title']; ?>
                       
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal1['text1']; ?>
                    </h3>

                    <p class="text-xs p-1">
                    <?php echo $animal1['text2']; ?>
                    </p>
                </div>
            </div>

            <div
                class="flex w-full bg-white dark:bg-indigo-800  dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="Armadillo" src="<?php echo $animal2['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal2['title']; ?>
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal2['text1']; ?>
                    </h3>
                </div>
            </div>

            <div
                class="flex w-full bg-white dark:bg-indigo-800  dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="JEM ZOO aquarium" src="<?php echo $animal3['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal3['title']; ?>
                      
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal3['text1']; ?>
                    </h3>
                </div>
            </div>

            <div
                class="flex w-full bg-white dark:bg-indigo-800  dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="asian_elephant" src="<?php echo $animal4['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal4['title']; ?>
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal4['text1']; ?>
                    </h3>
                    <p class="text-xs p-1">
                    <?php echo $animal4['text2']; ?>
                    </p>
                </div>
            </div>

            <div
                class="flex w-full bg-white dark:bg-indigo-800  dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="Bornean-Orangutan" src=" <?php echo $animal5['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal5['title']; ?>
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal5['text1']; ?>
                    </h3>
                    <p class="text-xs p-1">
                    <?php echo $animal5['text2']; ?>
                    </p>
                </div>
            </div>

            <div
                class="flex w-full bg-white dark:bg-indigo-800  dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="Black Rhino" src="<?php echo $animal6['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal6['title']; ?>
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal6['text1']; ?>
                    </h3>
                </div>
            </div>
            <div
                class="flex w-full bg-white dark:bg-indigo-800 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="Black Lemur" src=" <?php echo $animal7['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal7['title']; ?>
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal7['text1']; ?>
                    </h3>
                    <p class="text-xs p-1"> <?php echo $animal7['text2']; ?></p>
                </div>
            </div>
            <div
                class="flex w-full bg-white dark:bg-indigo-800 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="picture of some flamingos" src="<?php echo $animal8['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal8['title']; ?>
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal8['text1']; ?>
                    </h3>
                    <p class="text-xs p-1">
                    <?php echo $animal8['text2']; ?>
                      
                    </p>
                </div>
            </div>
            <div
                class="flex w-full bg-white dark:bg-indigo-800  dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <picture class="w-full h-52">
                    <img alt="picture of a chimpanzee" src="<?php echo $animal9['image']; ?>"
                        class="w-full h-full object-cover" />
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-2xl font-poppins p-2 text-center">
                    <?php echo $animal9['title']; ?>                      
                    </h3>
                    <h3 class="text-lg font-poppins">
                    <?php echo $animal9['text1']; ?>
                    </h3>
                    <p class="text-xs p-1">
                    <?php echo $animal9['text2']; ?>
                    </p>
                </div>
            </div>
        </div>

    </main>

  <?php get_footer();?>