<?php 
/* Template Name: Plan Your Visit */
get_header();
?>

<body class="bg-khaki dark:bg-yellow-900 dark:text-white">
 
        <div class="bg-green-900 dark:bg-gray-900">
            <!-- Slide -->
            <div
                class="slide-container flex justify-center items-center max-w-4xl m-auto relative rounded-lg border-2 border-green-300 dark:border-yellow-300">
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


    <main>
        <section>
            <div class="text-center p-5 pt-0">
            <?php $offer = get_field('heading');?>
                <span class="text-3xl border-b-4 border-green-900 dark:border-gray-300"><?php echo $offer['text']; ?></span>
            </div>
            <?php $card = get_field('cards');
                 $card1 = $card['card1'];
                 $card2 = $card['card2'];
                 $card3 = $card['card3'];
                 $card4 = $card['card4'];?>
            <div
                class="grid grid-cols-1 gap-4 md:p-20 md:pt-0 md:pb-0 sm:grid-cols-2 md:grid-cols-2 lg:gap-0 lg:grid-cols-4 max-w-full">
                <div class="bg-gray-200 dark:bg-gray-500 pt-2 pl-2 pr-2">
                    <h3 class="text-center text-lg font-bold"><?php echo $card1['title'];?></h3>
                    <img src="<?php echo $card1['image']; ?>" alt="JEM ZOO tickets">
                    <p><?php echo $card1['text']; ?></p>
                    <div class="pb-2">
                        <a href="<?php echo $card1['link']; ?>"
                            class="block m-auto w-32 text-center hover:bg-gray-700 rounded-full py-2 px-1 font-semibold hover:text-white bg-green-900 text-gray-100"><?php echo $card1['link_text']; ?></a>
                    </div>
                </div>
                <div class="bg-gray-400 p-2">
                    <h3 class="text-center text-lg font-bold"><?php echo $card2['title']; ?></h3>
                    <img src="<?php echo $card2['image']; ?>" alt="JEM ZOO brochure">
                    <p><?php echo $card2['text']; ?>
                </div>

                <div class="bg-gray-600 p-2 text-white">
                    <h3 class="text-center text-lg font-bold"><?php echo $card3['title']; ?></h3>
                    <img src="<?php echo $card3['image']; ?>" alt="Map of JEM ZOO">
                    <p><?php echo $card3['text']; ?></p>
                </div>
                <div class="bg-gray-800 p-2 text-white">
                    <h3 class="text-center text-lg font-bold"><?php echo $card4['title']; ?></h3>
                    <img src="<?php echo $card4['image']; ?>" alt="JEM ZOO tickets">
                    <p><?php echo $card4['text']; ?>
                    </p>
                </div>
            </div>
        </section>
        <?php $started = get_field('heading2');?>
        <section class="flex-grow max-w-screen-lg m-auto my-5 px-4 sm:px-6 lg:px-8 font-opensans">
            <div class="text-center pb-10">
                <span class="text-3xl border-b-4 border-green-900 dark:border-gray-300"><?php echo $started['text']; ?></span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-5">
            <?php $cardX2 = get_field('cards2');
                 $visitCard1 = $cardX2['card1'];
                 $visitCard2 = $cardX2['card2'];?>

                <div class="flex w-full bg-white dark:bg-gray-600 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                    <picture class="w-full h-52">
                        <img alt="Lemurs enjoying playing with pumpkins on halloween"
                            src="<?php echo $visitCard1['image']; ?>" class="w-full h-full object-cover">
                    </picture>
                    <div class="flex flex-col p-4 flex-grow">
                        <h3 class="font-medium text-xl font-poppins text-center"><?php echo $visitCard1['title']; ?>
                        </h3>
                        <div class="py-2 text-lg">
                            <p><?php echo $visitCard1['text']; ?>.</p>
                        </div>
                        <a class="font-poppins px-4 py-2 text-xl w-auto rounded-lg bg-khaki text-black font-medium hover:bg-yellow-900 hover:text-white transition-colors duration-200 mt-auto ml-auto"
                            href="<?php echo $visitCard1['link']; ?>">
                            <?php echo $visitCard1['link_text']; ?>
                        </a>
                    </div>
                </div>

                <div class="flex w-full bg-white dark:bg-gray-700 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                    <picture class="w-full h-52">
                        <img src="<?php echo $visitCard2['image']; ?>" alt="JEM ZOO gardens" class="w-full h-full object-cover">
                    </picture>
                    <div class="flex flex-col p-4 flex-grow">
                        <h3 class="font-medium text-xl font-poppins text-center"><?php echo $visitCard2['title']; ?>
                        </h3>
                        <div class="py-2 text-lg">
                            <p><?php echo $visitCard2['text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $cards3 = get_field('cards3');
                  $cardX3 = $cards3['card3'];
                  $table = $cardX3['table'];
                  $glowCard1 = $cards3['card1'];
                  $glowCard2 = $cards3['card2'];?>
        <div class="container-glow gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="neon_card">
                <h2 class="p-2 text-center">
            
                    <p class="text-center text-xl"><?php echo $glowCard1['text']; ?></p><?php echo $glowCard1['text2']; ?>
                    <div class="text-bg-yellow-100 flex m-auto justify-center"> <img src="<?php echo $glowCard1['image']; ?>" alt="open book icon"
                            class="bg-yellow-100"></div><?php echo $glowCard1['text3']; ?>
                </h2>
            </div>
            <div class="neon_card second">
                <h2 class="p-2 text-center">
                    <p class="text-center text-xl"> <?php echo $glowCard2['text']; ?></p> <?php echo $glowCard2['text2']; ?><div
                        class="text-bg-yellow-100 flex m-auto justify-center"> <img src=" <?php echo $glowCard2['image']; ?>" alt=""
                            class="bg-yellow-100"></div>
                            <?php echo $glowCard2['text3']; ?>
                </h2>
            </div>
            <div class="neon_card third">

                    <?php if (!empty($table)) {
    echo '<table class="table-auto border w-72 h-96">';

    if (!empty($table['caption'])) {
        echo '<caption>' . $table['caption'] . '</caption>';
    }

    if (!empty($table['header'])) {
        echo '<thead class="border text-left">';
        echo '<tr class="border-none text-center">';

        foreach ($table['header'] as $th) {
            echo '<th class="text-left text-xl">';
            echo $th['c'];
            echo '</th>';
        }

        echo '</tr>';

        echo '</thead>';
    }

    echo '<tbody class="border">';

    foreach ($table['body'] as $tr) {
        echo '<tr>';

        foreach ($tr as $td) {
            echo '<td class="border text-center">';
            echo $td['c'];
            echo '</td>';
        }

        echo '</tr>';
    }

    echo '</tbody>';

    echo '</table>';
}?>
                
            </div>
        </div>
        <?php $cardX4 = get_field('cards4');
                 $visitCard3 = $cardX4['card1'];
                 $visitCard4 = $cardX4['card2'];?>
        <section class="flex-grow max-w-screen-lg m-auto my-5 px-4 sm:px-6 lg:px-8 font-opensans">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-5">

                <div class="flex w-full bg-white dark:bg-gray-800 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                    <picture class="w-full h-52">
                        <img src="<?php echo $visitCard3['image']; ?>" alt="child looking through binoculars in grass with explore text" class="w-full h-full object-cover">
                    </picture>
                    <div class="flex flex-col p-4 flex-grow">
                        <h3 class="font-medium text-xl font-poppins text-center"><?php echo $visitCard3['title']; ?>
                        </h3>
                        <div class="py-2 text-lg">
                            <p><?php echo $visitCard3['text']; ?>.</p>
                        </div>
                    </div>
                </div>

                <div class="flex w-full bg-white dark:bg-gray-900 dark:text-white rounded-xl shadow overflow-hidden flex-col">
                    <picture class="w-full h-52">
                        <img src="<?php echo $visitCard4['image']; ?>" alt="pastries at JEM ZOO" class="w-full h-full object-cover">
                    </picture>
                    <div class="flex flex-col p-4 flex-grow">
                        <h3 class="font-medium text-xl font-poppins text-center"><?php echo $visitCard4['title']; ?>
                        </h3>
                        <div class="py-2 text-lg">
                            <p><?php echo $visitCard4['text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

  <?php get_footer();?>