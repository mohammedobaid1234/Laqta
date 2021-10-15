require('./bootstrap');

require('alpinejs');

window.Echo.private('contacts')
.listen('.contact.created', function(event) {
        alert('new message');
    });
