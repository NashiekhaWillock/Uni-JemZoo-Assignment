const cacheName = "cache-v1"
const resourcesToPrecache = [
    "/jemzoo",
    "/index.html",
    "/ourzoo.html",
    "/kids.html",
    "/animals.html",
    "/tickets.html",
    "/visit.html",
    "/style.css",
    "/src/index.js",
    "/ccs/style.css",
    "/src/style.css",
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0",
    "/images/kids_zone.png",
    "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js",
    "/images/zoo.png",
    "/images/adult.jpg",
    "/images/Gorilla-banner.jpg",
    "/src/main.js",
    "/images/jem_zoo_banner.jpg",
    "/icons/favicon-16x16.png",
    "/icons/favicon-32x32.png",
    "/images/photography_kids.jpg",
    "/images/family.jpg",
    "/images/join_us.png",
    "/images/zebra.jpg",
    "/images/Elephant-banner.jpg",
    "/src/menu.js",
    "/images/monkey.jpg",
    "/images/fundraiser.webp",
    "/images/conservation.jpg",
    "/images/tigers.jpg",
    "/images/garden.jpg",
    "/images/cake.jpg",
    "/images/nature_reserve.jpg",
    "/images/camera.jpg",
    "/images/costume.jpg",
    "/images/tickets2.png",
    "/images/adult_event_banner.jpg",
    "/images/nature_banner.jpg",
    "/images/story.jpeg",
    "/images/brochure.jpg",
    "/images/map.png",
    "/images/lemur.jpg",
    "/images/open-book.png",
    "/images/dine.jpg",
    "/images/garden2.jpg",
    "/images/food.jpg",
    "/images/explore.jpg",
    "/images/aquarium.jpg",
    "/images/Aardvark.jpg",
    "/images/armadillo-ninebanded.jpg",
    "/images/asian_elephant.jpg",
    "/images/Bornean-Orangutan.jpg",
    "/images/black_rhino.jpg",
    "/images/black_lemur.jpg",
    "/images/flamingos.jpg",
    "/images/chimpanzee.jpg",
    "/src/tickets.js",
    "/images/scavenger_adults.jpg",
    "/images/bingo.png",
    "/images/scavenger_kids.jpg",
    "/images/bird-feeder.png",
    "/images/tree.png",
    "/images/parrot.jpg",
    "/images/meerkat.jpg",
    "/images/flamingo.jpg",
    "/images/Butterfly-512.webp",
    "/images/komodo_dragon.jpg",
    "/images/orang.png",
    "/images/bird-house.png",
    "/icons/android-chrome-192x192.png",
    "/icons/android-chrome-512x512.png"
];

// Fetching
self.addEventListener("fetch", e => {
    e.respondWith(caches.match(e.request)
        .then(cachedResponse => {
            return cachedResponse || fetch(e.request)
        })
    );
});


// Installing
self.addEventListener("install", e => {
    console.log("Service worker install");
    e.waitUntil(
        caches.open(cacheName)
        .then(cache => {
            return cache.addAll(resourcesToPrecache)
        })
    );
});