<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('banner', 'BannerCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('coaching', 'CoachingCrudController');
    Route::crud('event', 'EventCrudController');
    Route::crud('event-detail', 'EventDetailCrudController');
    Route::crud('faq', 'FaqCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('service-content', 'ServiceContentCrudController');
    Route::crud('setting', 'SettingCrudController');
    Route::crud('testimony', 'TestimonyCrudController');
    Route::crud('trainer', 'TrainerCrudController');
    Route::crud('training', 'TrainingCrudController');
    Route::crud('training-group', 'TrainingGroupCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('article', 'ArticleCrudController');
    Route::crud('about', 'AboutCrudController');
}); // this should be the absolute last line of this file