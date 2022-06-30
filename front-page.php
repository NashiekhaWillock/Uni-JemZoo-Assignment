<?php get_header();?>

<body>

    <div class="bg-green-900 dark:bg-gray-900">
        <!-- Slide -->
        <div
            class="slide-container flex justify-center items-center max-w-4xl m-auto relative rounded-lg border-2 border-green-300 dark:border-white">
            <div class="slide fade">
                <img src="<?php bloginfo('template_directory');?>/images/jem_zoo_banner.jpg"
                    alt="Leopard with text 'get healthy get outside support the zoo have fun' JEM ZOO"
                    class=" w-full rounded-lg">
            </div>
            <div class="slide fade">
                <img src="<?php bloginfo('template_directory');?>/images/Gorilla-banner.jpg" alt="Gorilla at JEM ZOO"
                    class="w-full rounded-lg">
            </div>
            <div class="slide fade">
                <img src="<?php bloginfo('template_directory');?>/images/Elephant-banner.jpg" alt="Elephants at JEM ZOO"
                    class="w-full rounded-lg">
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

    <div class="relative items-center justify-center">
        <!-- Cards Container -->
        <div>
            <div class="max-w-6xl mx-auto px-8 py-16 pb-0 md:pb-10">
                <div class="relative">
                    <?php $welcome = get_field('welcome');?>
                    <div
                        class="relative lg:flex rounded-lg border-4 border-yellow-900 dark:border-white shadow-2xl overflow-hidden lg:h-72 min-h-full">
                        <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-auto object-cover" src="<?php echo $welcome['image']; ?>"
                                alt="JEM ZOO logo" />
                            <div class="absolute inset-0 bg-brown dark:bg-gray-500 opacity-80 dark:opacity-20"></div>
                        </div>
                        <div class="relative lg:w-7/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor"
                                viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100" />
                            </svg>
                            <div class="relative py-12 lg:py-24 px-8 lg:px-16 text-gray-700 leading-relaxed lg:pt-0">
                                <h1 class=" text-center text-lg md:text-4xl font-bold p-4 text-gray-900 pb-0">
                                    <?php echo $welcome['large_title']; ?></h1>
                                <h2 class="text-lg text-center font-bold pb-2"><?php echo $welcome['location']; ?></h2>
                                <p>
                                    <strong
                                        class="text-gray-900 font-bold text-base md:text-2xl"><?php echo $welcome['medium_title']; ?></strong>
                                </p>
                                <p><?php echo $welcome['small_text']; ?></p>
                                <p class="mt-6">
                                    <a href="<?php echo $welcome['support_link']; ?>"
                                        class="font-medium text-yellow-900 hover:text-gray-700"><?php echo $welcome['link_text']; ?><b><?php echo $welcome['bold_text']; ?></b>
                                        &rarr;</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $kids = get_field('kids_entrance');?>
        <div class="relative items-center justify-center m-auto">
            <!-- Cards Container 2 -->
            <div class="lg:flex items-center container mx-auto my-auto m-auto lg:justify-center">
                <!-- Card 3 -->
                <div
                    class="lg:m-4 shadow-md hover:shadow-lg rounded-lg border-4 border-gray-700 dark:border-white  bg-gray-300 dark:bg-gray-600 my-12 mx-8 pt-0 lg:w-97">
                    <!-- Card Image -->
                    <img src="<?php echo $kids['image']; ?>" alt="Animated kids' zone text" class="overflow-hidden">
                    <!-- Card Content -->
                    <div class="p-4">
                        <h3 class="font-medium text-gray-600 text-lg my-2 uppercase dark:text-white">
                            <?php echo $kids['title']; ?></h3>
                        <p class="text-justify dark:text-white"><?php echo $kids['small_text']; ?></p>
                        <div class="mt-5">
                            <a href="<?php echo $kids['entrance']; ?>"
                                class="block m-auto w-44 rounded-full py-2 px-3 font-semibold bg-gradient-to-tr from-pink-500 via-gray-900 to-yellow-300 text-gray-100 hover:from-yellow-400 hover:via-blue-900 hover:to-blue-400 transition-colors duration-200">
                                <?php echo $kids['entrance_text']; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Price Table -->
                <div class="md:p-2">
                    <h3
                        class="font-extrabold text-gray-600 text-lg md:text-2xl my-2 uppercase text-center dark:text-white">
                        Cost of Entrance
                    </h3>
                    <?php $table = get_field('tickets_table');?>

                    <?php if (!empty($table)) {
    echo '<table class="shadow-lg border-4 border-green-900 dark:border-green-400  bg-white md:text-lg text-sm my-0 md:w-100 w-48 lg:w-full m-auto">';

    if (!empty($table['caption'])) {
        echo '<caption>' . $table['caption'] . '</caption>';
    }

    if (!empty($table['header'])) {
        echo '<thead>';

        echo '<tr class="bg-green-900 border text-left px-4 md:px-8 md:py-4 text-white">';

        foreach ($table['header'] as $th) {
            echo '<th class="bg-green-900 border text-left px-4 md:px-8 md:py-4 text-white">';
            echo $th['c'];
            echo '</th>';
        }

        echo '</tr>';

        echo '</thead>';
    }

    echo '<tbody>';

    foreach ($table['body'] as $tr) {
        echo '<tr>';

        foreach ($tr as $td) {
            echo '<td class="border px-2 md:px-8 md:py-4">';
            echo $td['c'];
            echo '</td>';
        }

        echo '</tr>';
    }

    echo '</tbody>';

    echo '</table>';
}?>

                    <div class="mt-5">
                        <?php $link = get_field('table_link');?>
                        <a href="<?php echo $link['link']; ?>"
                            class="block m-auto w-44 text-center hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-green-900 text-white"><i
                                class="fa fa-ticket"></i><?php echo $link['link_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex container mx-auto my-auto sm:p-4">
            <?php $card = get_field('cards');?>
            <!-- Card 1 -->
            <div
                class="lg:m-4 shadow-md hover:shadow-lg rounded-lg my-12 bg-white border-4 border-black dark:border-white w-full">
                <!-- Card Image -->
                <img src="<?php echo $card['card1_image']; ?>" alt="A family feeding the giraffes at JEM ZOO"
                    class="overflow-hidden">
                <!-- Card Content -->
                <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase"> <?php echo $card['card1_title']; ?>
                    </h3>
                    <p class="text-justify"> <?php echo $card['card1_text']; ?>.</p>
                    <div class="mt-10">
                        <a href="<?php echo $card['card1_link']; ?>"
                            class="block m-auto w-32 text-center hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-green-900 text-gray-100"><?php echo $card['card1_link_text']; ?></a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="lg:m-4 shadow-md hover:shadow-lg rounded-lg my-12 bg-white border-4 border-black dark:border-white w-full">
                <!-- Card Image -->
                <img src=" <?php echo $card['card2_image']; ?>" alt="A zebra at JEM ZOO" class="overflow-hidden">
                <!-- Card Content -->
                <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase"> <?php echo $card['card2_title']; ?>
                    </h3>
                    <p class="text-justify"> <?php echo $card['card2_text']; ?>.</p>
                    <div class="mt-5">
                        <a href="<?php echo $card['card2_link']; ?>"
                            class="block m-auto w-40 text-center rounded-full py-2 px-3 font-semibold bg-gray-700  text-gray-100"><?php echo $card['card2_link_text']; ?></a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="lg:m-4 shadow-md hover:shadow-lg my-12 bg-white border-4 border-black dark:border-white w-full">
                <!-- Card Image -->
                <img src=" <?php echo $card['card3_image']; ?>" alt="Text saying become a member join today"
                    class="overflow-hidden">
                <!-- Card Content -->
                <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase text-center ">
                        <?php echo $card['card3_title']; ?></h3>
                    <p class="text-justify"> <?php echo $card['card3_text']; ?></p>
                    <div class="mt-16 h-6 pb-10">
                        <a href="<?php echo $card['card3_link']; ?>"
                            class="block m-auto w-32 text-center rounded-full py-2 px-3 font-semibold bg-gray-700  text-gray-100"><?php echo $card['card3_link_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $event_card = get_field('event_cards');?>
    <!-- Child event card -->
    <div class=" child-event grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-10">
        <div
            class="flex w-full border-4 border-yellow-900 dark:border-white dark:text-white bg-yellow-200 opacity-80 dark:bg-yellow-800 rounded-xl shadow overflow-hidden flex-col">
            <picture class="w-full h-full p-10">
                <img alt="Animation of a baby holding a camera running from a lion"
                    src="<?php echo $event_card['card1_image']; ?>">
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-xl font-poppins"><?php echo $event_card['card1_title']; ?>
                    </h3>
                    <div class="py-2">
                        <?php echo '<ul class="list-disc p-4">';
                        foreach ($event_card['card1_list'] as $item):
                          echo "<li>$item</li>";
                        endforeach;
                        echo '</ul>'; ?>
                        
                        <p class="text-lg font-medium"><?php echo $event_card['card1_price']; ?></p>
                    </div>
                    <a class="font-poppins px-4 py-2 text-xl w-auto rounded-lg text-white dark:text-black bg-yellow-900 dark:bg-yellow-400
                    border-2 border-white bg-gradient-to-tr hover:from-yellow-400 hover:via-yellow-900 hover:yellow-500
                    hover:text-white hover:border-transparent transition-colors duration-200 mt-auto ml-auto"
                        href="<?php echo $event_card['card1_link']; ?>">
                        <?php echo $event_card['card1_link_text']; ?>
                    </a>
                </div>
        </div>
        <!-- Adult event cards -->
        <div
            class="flex w-full border-4 border-blue-900 dark:border-white bg-white opacity-80 dark:bg-blue-900 dark:text-white rounded-xl shadow overflow-hidden flex-col">
            <picture class="w-full h-full p-10">
                <img alt="3 otters" src="<?php echo $event_card['card2_image']; ?>" class="w-full h-full object-cover">
            </picture>
            <div class="flex flex-col p-4 flex-grow">
                <h3 class="font-medium text-xl font-poppins"><?php echo $event_card['card2_title']; ?>
                </h3>
                <div class="py-2">
                    <?php echo '<ul class="list-disc p-4">';
                    foreach ($event_card['card2_list'] as $item):
                      echo "<li>$item</li>";
                    endforeach;
                    echo '</ul>'; ?>
                    <p class="text-lg font-medium"><?php echo $event_card['card2_price']; ?></p>
                </div>
                <a class="font-poppins px-4 py-2 text-xl w-auto rounded-lg border-2 text-white bg-blue-900 dark:bg-blue-400 border-gray-900 bg-gradient-to-tr hover:from-blue-700 hover:via-blue-500 hover:to-blue-500 hover:text-white hover:border-transparent transition-colors duration-200 mt-auto ml-auto"
                    href="<?php echo $event_card['card2_link']; ?>">
                    <?php echo $event_card['card2_link_text']; ?>
                </a>
            </div>
        </div>
    </div>
    </main>

    <?php get_footer();?>