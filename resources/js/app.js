
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('fullcalendar');
require('datatables.net');
require('datatables.net-buttons');
require('datatables.net-bs4');
require('datatables.net-responsive')
require('datatables.net-responsive-bs4');
require('datatables.net-buttons/js/buttons.colVis.js');
require('datatables.net-buttons/js/buttons.html5.js');
require('datatables.net-buttons/js/buttons.flash.js');
require('datatables.net-buttons/js/buttons.print.js');

//import Tooltip from "tooltip.js"

var thehours = new Date().getHours();
var message;

if (thehours >= 0 && thehours < 6) {
    message = "Goedenacht, ";
} else if (thehours >= 6 && thehours < 12) {
    message = "Goedemorgen, ";

} else if (thehours >= 12 && thehours < 18) {
    message = "Goedemiddag, ";

} else if (thehours >= 18 && thehours < 24) {
    message = "Goedenavond, ";
}

$('#tMessage').append(message);


function refreshCal() {
    calendar.rerenderEvents()
}