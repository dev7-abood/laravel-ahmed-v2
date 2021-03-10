<?php


use Tabuna\Breadcrumbs\Trail;

Breadcrumbs::for('super-dashboard.index', function(Trail $trail) {
    $trail->push(__('breadcrumbs.dashboard'), route('super-dashboard.index'));
});

// sliders
Breadcrumbs::for('super-dashboard.slider.show', function(Trail $trail) {
    $trail->parent('super-dashboard.index')
    ->push(__('breadcrumbs.slider'), route('super-dashboard.slider.show'));
});

Breadcrumbs::for('super-dashboard.slider.create', function(Trail $trail) {
    $trail->parent('super-dashboard.slider.show')
        ->push(__('breadcrumbs.slider.create'), route('super-dashboard.slider.create'));
});

Breadcrumbs::for('super-dashboard.slider.edit', function(Trail $trail) {
    $trail->parent('super-dashboard.slider.show')
        ->push(__('breadcrumbs.slider.edit'));
});
// end sliders



// start about ahmed
Breadcrumbs::for('super-dashboard.aboutAhmed.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
    ->push(__('keywords.about.ahmad'), route('super-dashboard.aboutAhmed.show'));
});


Breadcrumbs::for('super-dashboard.aboutAhmed.edit', function (Trail $trail){
    $trail->parent('super-dashboard.aboutAhmed.show')
        ->push(__('breadcrumbs.edit'));
});
// end about ahmed

// about foundation

Breadcrumbs::for('super-dashboard.aboutFoundation.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.about.foundation'), route('super-dashboard.aboutFoundation.show'));
});

Breadcrumbs::for('super-dashboard.aboutFoundation.edit', function (Trail $trail){
    $trail->parent('super-dashboard.aboutFoundation.show')
        ->push(__('breadcrumbs.edit'));
});


// end about foundation

// start memory old
Breadcrumbs::for('super-dashboard.oldManMemoryVideos.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.old.man.memory.videos'), route('super-dashboard.oldManMemoryVideos.show'));
});

Breadcrumbs::for('super-dashboard.oldManMemoryVideos.edit', function (Trail $trail){
    $trail->parent('super-dashboard.oldManMemoryVideos.show')
        ->push(__('breadcrumbs.edit'));
});

// end memory old


// start old man stuff
Breadcrumbs::for('super-dashboard.oldManStuff.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.old.stuff'), route('super-dashboard.oldManStuff.show'));
});

Breadcrumbs::for('super-dashboard.oldManMemoryVideos.edit', function (Trail $trail){
    $trail->parent('super-dashboard.oldManMemoryVideos.show')
        ->push(__('breadcrumbs.edit'));
});

// end old man stuff
