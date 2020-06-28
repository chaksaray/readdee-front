require('./bootstrap');
require('./vue');

window.jQuery = window.$ = require('jquery');

require('popper.js');
require('bootstrap');
// require('jquery.nicescroll');
// require('moment/moment');

// Utilities
require('./utilities/fixed_scrool');
require('./utilities/popover');


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}