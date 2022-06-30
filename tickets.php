<?php 
/* Template Name: Tickets */
get_header();
?>

<body class="dark:bg-gray-700">

    <main>
        <div class="relative items-center justify-center m-auto">
            <!-- Header Text-->
            <!-- All Cards Container -->
            <div class="lg:flex items-center container mx-auto my-auto m-auto lg:justify-center">

                <!-- Card Content -->
                <div class="md:p-2 md:w-auto">
                    <h3 class="font-extrabold text-gray-600 text-lg md:text-2xl my-2 uppercase text-center dark:text-white">Purchase
                        Tickets</h3>
                    <table
                        class="shadow-lg border-4 border-green-900 dark:border-green-400 bg-white md:text-lg text-xs sm:text-sm my-0 w-full m-auto md:h-97 sm:w-100 lg:w-101">
                        <p class="text-center text-xs md:text-sm dark:text-white">*For more than 6 tickets per group please call or
                            purchase from the ticket office*</p>
                        <tr>
                            <th class="bg-green-900 border text-left md:px-4 md:py-2 text-white">Who</th>
                            <th class="bg-green-900 border text-left md:px-4 md:py-2 text-white">Conditions</th>
                            <th class="bg-green-900 border text-left md:px-4 md:py-2 text-white">No.</th>
                            <th class="bg-green-900 border text-left md:px-4 md:py-2 text-white">Price</th>
                        </tr>
                        <tr>
                            <td class="border text-center">Adult</td>
                            <td class="border text-center">16 Plus</td>
                            <td class="border text-center"><label for="adult" aria-label="adult" target="_blank"></label><input type="number" class="w-20 h-12 text-center" id="adult"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p1">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border text-center">Student</td>
                            <td class="border text-center">*Student ID may be required*</td>
                            <td class="border text-center"><label for="student"  aria-label="student" target="_blank"></label><input type="number" class="w-20 h-12 text-center" id="student"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p2">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border text-center">Child</td>
                            <td class="border text-center">16 & under</td>
                            <td class="border text-center"><label for="child" aria-label="child" target="_blank"></label><input type="number" class="w-20 h-12 text-center" id="child"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p3">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border text-center">Seniors</td>
                            <td class="border text-center">over 65</td>
                            <td class="border text-center"><label for="senior"  aria-label="senior" target="_blank"></label><input type="number" class="w-20 h-12 text-center" id="senior"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p4">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border text-center">Babies</td>
                            <td class="border text-center">2 & Under</td>
                            <td class="border text-center"><label for="baby"  aria-label="baby" target="_blank"></label><input type="number" class="w-20 h-12 text-center" id="baby"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p5">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border text-center">Carers/NHS/Military</td>
                            <td class="border text-center">*ID Required</td>
                            <td class="border text-center"><label for="carer"  aria-label="carer" target="_blank"></label><input type="number" class="w-20 h-12 text-center" id="carer"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p6">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-gray-400 border text-left md:px-4 md:py-2 text-black">Who</th>
                            <th class="bg-gray-400 border text-center md:px-4 md:py-2 text-black">Specialist Event</th>
                            <th class="bg-gray-400 border text-left md:px-4 md:py-2 text-black">No.</th>
                            <th class="bg-gray-400 border text-left md:px-4 md:py-2 text-black">Price</th>
                        </tr>
                        <tr>
                            <td class="border text-center">Adult</td>
                            <td class="border border-none text-center">JEM ZOO Photography Day - Adults</td>
                            <td class="border text-center"><label for="adultEvent" aria-label="adult" target="_blank"></label><input type="number" class="w-20 text-center" id="adultEvent"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p7">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border text-center">Child</td>
                            <td class="border border-none text-center">JEM ZOO Photography Day - Children</td>
                            <td class="border text-center"><label for="childEvent"  aria-label="adultEvent" target="_blank"></label><input type="number" class="w-20 text-center" id="childEvent"
                                    value="0" min="0" max="6" onchange="tickets()"></td>
                            <td class="border text-center">
                                <p id="p8">0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border text-center">Total</td>
                            <td class="border border-none"></td>
                            <td class="border border-none"></td>
                            <td class="border text-center">
                                <p id="p9">0.00</p>
                            </td>
                        </tr>
                    </table>
                    <div class="mt-5">
                        <a href="#"
                            class="block m-auto w-44 text-center hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-green-900 text-white"><i
                                class="fa fa-ticket"></i>Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative items-center justify-center">
            <div class="lg:flex items-center container mx-auto my-auto">
                <!-- Card 1 -->
                <div
                    class="lg:m-4 shadow-md hover:shadow-lg rounded-lg my-12 mx-8 bg-white dark:bg-gray-800 dark:text-white border-4 border-yellow-300">
                    <!-- Card Image -->
                    <img src="<?php bloginfo('template_directory');?>/images/bingo.png" alt="" class="overflow-hidden">
                    <!-- Card Content -->
                    <div class="p-4">
                        <h3 class="font-medium text-gray-600 md:text-xl my-2 uppercase text-sm text-center dark:text-white">Zoo Bingo -
                            *Entire Family*</h3>
                        <p class="text-justify md:text-lg text-sm">Zoo bingo is a carefree fun game for the whole
                            family. It helps
                            enhances everyone’s experience at the zoo. Bingo cards can consist of letters, pictures or
                            words depending on the players level. As you all walk around, cross off the letter that the
                            name of the animal you saw starts with. Bingo cards are available at the ticket office as
                            50p each.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="lg:m-4 shadow-md hover:shadow-lg rounded-lg bg-white my-12 mx-8  border-4 border-black dark:border-white dark:bg-gray-800 dark:text-white">
                    <!-- Card Image -->
                    <img src="<?php bloginfo('template_directory');?>/images/scavenger_adults.jpg" alt="" class="overflow-hidden">
                    <!-- Card Content -->
                    <div class="p-4">
                        <h3 class="font-medium text-gray-600 md:text-xl my-2 uppercase text-sm text-center dark:text-white">Scavenger
                            Hunt - *Adults
                            Only*</h3>
                        <p class="text-justify text-xs md:text-lg">Who said kids should have all the fun. Adults like to
                            play games too so
                            here at JEM ZOO why not try out our Adults Only Scavenger hunt. You can be in a team or on
                            your own. Try to win our special prize! Entry cost only £5 and we also have special
                            scavenger hunt t-shits on sale in a range of colours and sizes. Ask at the ticket office.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="lg:m-4 shadow-md hover:shadow-lg rounded-lg my-12 mx-8 bg-white  border-4 border-blue-300 dark:bg-gray-800 dark:text-white">
                    <!-- Card Image -->
                    <img src="<?php bloginfo('template_directory');?>/images/scavenger_kids.jpg" alt="" class="overflow-hidden">
                    <!-- Card Content -->
                    <div class="p-4">
                        <h3 class="font-medium text-gray-600 md:text-xl my-2 uppercase text-center text-sm dark:text-white">Scavenger
                            hunt - *Kids
                            Only*
                        </h3>
                        <p class="text-justify md:text-lg text-sm">The kid's scavenger hunt happens at set time through
                            out the day. You
                            can be in a group or on
                            your own. Try to win our special prize! Entry cost only £2 and we also have special
                            scavenger hunt t-shits on sale in a range of colours and sizes and stuffed animals wearing
                            scavenger hunt t-shirts that can be purchased. Ask at the ticket office.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
  <?php get_footer();?>