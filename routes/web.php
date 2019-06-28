<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pricing', 'HomeController@pricingIndex')->name('pricing.index');

// Managing Google accounts and webhooks.
Route::name('google.index')->get('google', 'GoogleAccountController@index');
Route::name('google.store')->get('google/oauth', 'GoogleAccountController@store');
Route::name('google.destroy')->delete('google/{googleAccount}', 'GoogleAccountController@destroy');
Route::name('google.webhook')->post('google/webhook', 'GoogleWebhookController');
Route::name('events.json')->get('json/events', 'HomeController@getEvents');

// Viewing events.
// Route::name('event.index')->get('event', 'EventController@index');
// Viewing calendars.
Route::name('calendars.index')->get('calendars', 'EventController@calendars');



/***
 *    __________     ___.                                      /\ __                     .___
 *    \______   \__ _\_ |__   ____   ____     ____ _____    ___)//  |_    ____  ____   __| _/____
 *     |       _/  |  \ __ \_/ __ \ /    \  _/ ___\\__  \  /    \   __\ _/ ___\/  _ \ / __ |/ __ \
 *     |    |   \  |  / \_\ \  ___/|   |  \ \  \___ / __ \|   |  \  |   \  \__(  <_> ) /_/ \  ___/
 *     |____|_  /____/|___  /\___  >___|  /  \___  >____  /___|  /__|    \___  >____/\____ |\___  > /\
 *            \/          \/     \/     \/       \/     \/     \/            \/           \/    \/  \/
 */


// Contacts
Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::get('/contacts/new', 'ContactController@create')->name('contacts.create');
Route::post('/contacts/store', 'ContactController@store')->name('contacts.store');
Route::get('/contacts/{id}', 'ContactController@show')->name('contacts.show');
Route::get('/contacts/{id}/edit', 'ContactController@edit')->name('contacts.edit');
Route::patch('/contacts/{id}', 'ContactController@update')->name('contacts.update');

// Invites
Route::get('invite', 'CalendarInviteController@invite')->name('invite.create');
Route::post('/invite/store', 'InviteController@store')->name('invite.store');
Route::post('invite', 'CalendarInviteController@process')->name('invite.send');
Route::get('invite/{token}/{calendar_id}/', 'CalendarInviteController@accept')->name('invite.accept');

Route::get('invite/list', 'CalendarInviteController@list')->name('invite.list');

// Useraccount
Route::get('/settings', 'UserSettingController@index')->name('setting.index');

