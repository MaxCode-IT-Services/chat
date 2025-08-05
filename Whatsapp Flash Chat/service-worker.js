self.addEventListener('install', event => {
    event.waitUntil(
        caches.open('flashchat-v1').then(cache => {
            return cache.addAll([
                '/',
                '/public/images/favicon/website/favicon-96x96-.png',
                '/css/app.css',
                '/js/app.js',
                // Add other required assets here
            ]);
        })
    );
});

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request);
        })
    );
});
