<?php
/* Template Name: Our ZOO */
get_header();
?>
<body class="dark:bg-gray-900">
    <!-- main-content -->
    <main class="flex-grow max-w-screen-lg m-auto my-5 px-4 sm:px-6 lg:px-8 font-opensans">
        <!-- current fundraiser card -->
        <div class="block p-10 grid-cols-1 md:grid-cols-3 lg:grid-cols-1 gap-4 mb-10">
            <div
                class="block md:flex w-full bg-white dark:bg-gray-800 dark:text-white rounded-xl shadow overflow-hidden flex-row md:flex-col lg:flex-row dark:border-4 dark:border-white">
                <?php 
                $fund = get_field('fundraiser_banner'); // access parent group
                $fundCard1 = $fund['card1']; // access child group 1
                $fundCard2 = $fund['card2']; // access child group 2
                ?>
                <picture class="w-52 md:w-full lg:w-52 aspect-w-1 min-w-1/2">
                    <source srcset="<?php echo $fundCard1['image']; ?>" />
                    <img class="w-full h-full object-cover border-4 md:border-2 border-black dark:border-white"
                        src="<?php echo $fundCard1['image']; ?>" alt="JEM ZOO monkey" width="1000px" height="678px" />
                </picture>
                <div
                    class="p-4 flex flex-col flex-grow max-w-1/2 border-4 md:border-2 border-red-500 dark:border-white">
                    <h2 class="font-medium font-poppins text-2xl"><?php echo $fundCard1['card_title']; ?></h2>
                    <h3 class="text-lg font-poppins font-medium">
                    <?php echo $fundCard1['sub_title']; ?>
                    </h3>
                    <div class="py-4">
                        <p>
                        <?php echo $fundCard1['text']; ?>
                        </p>
                    </div>
                </div>
            </div>   
        </div>

        <?php 
                $cardX4 = get_field('cards1'); // access parent group
                $card1 = $cardX4['card1']; // access child group 1
                $card2 = $cardX4['card2']; // access child group 2
                $card3 = $cardX4['card3']; // access child group 3
                $card4 = $cardX4['card4']; // access child group 4
                ?>
 
        <!-- card 1 -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-20">
            <div
                class="flex w-full  border-4 border-green-400 dark:border-red-700 bg-white dark:bg-truegray-800 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <h2 class="text-2xl font-medium text-center bg-yellow-600 dark:bg-white dark:text-black p-2 text-white">
                <?php echo $card1['title']; ?>
            
                </h2>
                <picture class="w-full h-52">
                    <img alt="Tree growing in broken glass container" src="  <?php echo $card1['image']; ?>"
                        class="w-full h-full object-cover" width="200px" height="200px" />
                </picture>
                <div class="flex flex-col p-4 flex-grow bg-gray-200 dark:bg-gray-600">
                    <p>
                    <?php echo $card1['text1']; ?>
                    </p>
                    <p class="pt-2">
                    <?php echo $card1['text2']; ?>
                    </p>
                </div>
            </div>
            <!-- card 2 -->
            <div
                class="flex w-full  border-4 border-indigo-900 dark:border-white bg-white dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <h2 class="text-2xl font-medium text-center bg-blue-600 p-2 text-white">
                <?php echo $card2['title']; ?>
                </h2>
                <picture class="w-full h-52">
                    <img alt="Cake sale fundraiser" src="  <?php echo $card2['image']; ?>"
                        class="w-full h-full object-cover bg-gray-400" width="200px" height="200px" />
                </picture>
                <div class="flex flex-col p-4 flex-grow bg-gray-200 dark:bg-gray-800">
                    <p id="job" class="text-gray-800 mt-2 dark:text-white">
                    <?php echo $card2['text1']; ?>
                        <b>  <?php echo $card2['text2']; ?></b>
                    </p>
                    <p class="text-gray-800 mt-2 dark:text-white">
                    <?php echo $card2['text3']; ?>
                    </p>
                    <p class="text-gray-800 mt-2 dark:text-white">
                    <?php echo $card2['text4']; ?> <b>  <?php echo $card2['text5']; ?></b>
                    </p>
                    <p class="pt-2 text-base italic text-center font-medium">
                    <?php echo $card2['text6']; ?> 
                    </p>
                </div>
            </div>
            <!-- card 3 -->
            <div
                class="flex w-full  border-4 border-green-500 bg-white dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <h2 class="text-2xl font-medium text-center bg-gray-600 dark:bg-yellow-900 p-2 text-white">
                <?php echo $card3['title']; ?>
                </h2>
                <picture class="w-full h-52">
                    <img alt="JEM ZOO tigers Gianno & Georgia" src="<?php echo $card3['image']; ?>"
                        class="w-full h-full object-cover" width="200px" height="200px" />
                </picture>
                <div class="flex flex-col p-4 flex-grow bg-gray-200 dark:bg-red-900">
                    <p>
                    <?php echo $card3['text1']; ?>
                    </p>
                    <p class="pt-2"><b><?php echo $card3['text2']; ?></b></p>
                </div>
            </div>
            <!-- card 4 -->
            <div
                class="flex w-full border-4 border-yellow-300 bg-white dark:bg-truegray-800 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                <h2 class="text-2xl font-medium text-center bg-green-600 dark:bg-yellow-600 p-2 text-white">
                    <?php echo $card4['title']; ?>
                </h2>
                <picture class="w-full h-52">
                    <img alt="Jem ZOO Gardens"
                        src="<?php echo $card4['image']; ?>" class="w-full h-full object-cover bg-gray-400" width="1000px"
                        height="584px" />
                </picture>
                <div class="flex flex-col p-4 flex-grow bg-gray-200 dark:bg-gray-700">
                    <p>
                    <?php echo $card4['text1']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <!-- Header Text-->
            <?php $showcase = get_field('showcase_banner');?>
            <h1
                class="text-center text-2xl font-bold  border-2 border-black dark:border-white p-4 bg-blue-100 dark:bg-green-900 text-black dark:text-gray-200">
                <?php echo $showcase['text']; ?>
            </h1>

            <?php $cardX3 = get_field('cards2'); // access parent group
                $eCard1 = $cardX3['card1']; // access child group 1
                $eCard2 = $cardX3['card2']; // access child group 2
                $eCard3 = $cardX3['card3']; // access child group 3
                ?>

            <div class="relative items-center justify-center pb-2">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-5 mt-5 pt-5 pb-5">
                    <!-- Card-1 -->
                    <div
                        class="flex w-full border-2 border-black dark:border-white bg-white dark:bg-blue-900 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                        <h2 class="text-lg font-medium text-center p-2 text-black dark:text-white">
                        <?php echo $eCard1['title']; ?>
                          
                        </h2>
                        <picture class="w-full h-52">
                            <img src="  <?php echo $eCard1['image']; ?>" alt="Hedgehog at JEM ZOO nature reserve" class="overflow-hidden"
                                class="w-full h-full object-cover" />
                        </picture>
                        <div class="flex flex-col p-4 pt-0 flex-grow">
                            <p>
                            <?php echo $eCard1['text1']; ?>
                            </p>
                            <p class="pt-2 text-center font-medium">
                            <?php echo $eCard1['text2']; ?>
                            </p>
                            <p class="pt-2 text-center font-medium"><?php echo $eCard1['text3']; ?></p>
                            <p class="pt-2 text-center font-medium">
                            <?php echo $eCard1['text4']; ?>
                            </p>
                        </div>
                    </div>
                    <!-- card 2 -->
                    <div
                        class="flex w-full bg-white border-2 border-black dark:bg-yellow-800 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                        <h2
                            class="text-lg font-medium text-center bg-yellow-100 dark:bg-gray-700 dark:text-white p-2 text-black">
                            <?php echo $eCard2['title']; ?>
                          
                        </h2>
                        <picture class="w-full h-52">
                            <img alt="Cake sale fundraiser" src="  <?php echo $eCard2['image']; ?>"
                                class="w-full h-full object-cover bg-gray-400" width="200px" height="200px" />
                        </picture>
                        <div class="flex flex-col p-4 flex-grow">
                            <p>
                            <?php echo $eCard2['text1']; ?>
                            </p>
                            <p class="pt-2 text-center font-medium">
                            <?php echo $eCard2['text2']; ?>  
                            </p>
                            <p class="pt-2 text-center font-medium"><?php echo $eCard2['text3']; ?></p>
                            <p class="pt-2 text-center font-medium">
                            <?php echo $eCard2['text4']; ?>
                            </p>
                        </div>
                    </div>
                    <!-- card 3 -->
                    <div
                        class="flex w-full border-2 border-black dark:border-yellow-200  bg-white dark:bg-gray-700 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                        <h2 class="text-lg font-medium text-center bg-indigo-600 dark:bg-indigo-900 p-2 text-white">
                        <?php echo $eCard3['title']; ?>
                        </h2>
                        <picture class="w-full h-52">
                            <img src="<?php echo $eCard3['image']; ?>" alt="Animated camera" class="overflow-hidden" />
                        </picture>
                        <div class="flex flex-col p-4 pt-0 flex-grow">
                            <p>
                            <?php echo $eCard3['text1']; ?>
                            </p>
                            <p class="pt-2 text-center font-medium">
                            <?php echo $eCard3['text2']; ?>
                            </p>
                            <p class="pt-2 text-center font-medium"><?php echo $eCard3['text3']; ?></p>
                            <p class="pt-2 text-center font-medium">
                            <?php echo $eCard3['text4']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block md:grid grid-cols lg:grid-cols-1 gap-4 mb-10 mt-10">
            <!-- next fundraiser card -->
            <div
                class="block md:flex w-full bg-white dark:bg-gray-800 dark:text-white rounded-xl shadow overflow-hidden flex-row md:flex-col lg:flex-row">
                <picture class="w-52 md:w-full lg:w-52 aspect-w-1 min-w-1/2">
                    <source srcset="<?php echo $fundCard2['image']; ?>" />
                    <img class="w-full h-full object-cover  border-4 md:border-2 border-black dark:border-white"
                        src="<?php echo $fundCard2['image']; ?>" alt="people dressed in animal costumes" width="200px"
                        height="200px" />
                </picture>
                <div
                    class="p-4 flex flex-col flex-grow max-w-1/3 md:w-full border-4 md:border-2 border-red-500 dark:border-white">
                    <h2 class="font-medium font-poppins text-2xl"><?php echo $fundCard2['card_title']; ?></h2>
                    <h3 class="text-lg font-poppins font-medium">
                    <?php echo $fundCard2['sub_title']; ?>
                    </h3>
                    <div class="py-4">
                        <p>
                        <?php echo $fundCard2['text']; ?> <a
                                href="<?php echo $fundCard2['link']; ?>" class="font-medium"><?php echo $fundCard2['link_text']; ?></a>.
                        </p>
                        <p class="pt-2 text-1xl text-center font-medium">
                        <?php echo $fundCard2['price']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

  <?php get_footer();?>