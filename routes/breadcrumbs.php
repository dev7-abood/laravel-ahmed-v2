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

Breadcrumbs::for('super-dashboard.oldManMemoryVideos.create', function (Trail $trail){
    $trail->parent('super-dashboard.oldManMemoryVideos.show')
        ->push(__('keywords.create'));
});

// end memory old


// start old man stuff
Breadcrumbs::for('super-dashboard.oldManStuff.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.old.stuff'), route('super-dashboard.oldManStuff.show'));
});

Breadcrumbs::for('super-dashboard.oldManStuff.create', function (Trail $trail){
    $trail->parent('super-dashboard.oldManStuff.show')
        ->push(__('keywords.create'), route('super-dashboard.oldManStuff.create'));
});


Breadcrumbs::for('super-dashboard.oldManStuff.edit', function (Trail $trail){
    $trail->parent('super-dashboard.oldManStuff.show')
        ->push(__('keywords.edit'));
});


Breadcrumbs::for('super-dashboard.oldManMemoryVideos.edit', function (Trail $trail){
    $trail->parent('super-dashboard.oldManMemoryVideos.show')
        ->push(__('breadcrumbs.edit'));
});

// end old man stuff



// start old man images
Breadcrumbs::for('super-dashboard.oldManImages.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.old.man.images'), route('super-dashboard.oldManImages.show'));
});

Breadcrumbs::for('super-dashboard.oldManImages.create', function (Trail $trail){
    $trail->parent('super-dashboard.oldManImages.show')
        ->push(__('keywords.create'), route('super-dashboard.oldManImages.create'));
});


Breadcrumbs::for('super-dashboard.oldManImages.edit', function (Trail $trail){
    $trail->parent('super-dashboard.oldManImages.show')
        ->push(__('keywords.edit'));
});

Breadcrumbs::for('super-dashboard.oldManImages.edit', function (Trail $trail){
    $trail->parent('super-dashboard.oldManImages.show')
        ->push(__('breadcrumbs.edit'));
});
// end old man images




// start award
Breadcrumbs::for('super-dashboard.awards.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.awards'), route('super-dashboard.awards.show'));
});


Breadcrumbs::for('super-dashboard.awards.editAward', function (Trail $trail){
    $trail->parent('super-dashboard.awards.show')
        ->push(__('keywords.edit'));
});


Breadcrumbs::for('super-dashboard.awards.showSeasons', function (Trail $trail){
    $trail->parent('super-dashboard.awards.show')
        ->push(__('keywords.the.seasons'), route('super-dashboard.awards.showSeasons', ['slug' => request()->route()->parameters()['award_name'] ?? request()->route()->parameters()['award_slug'] ?? '-']));
});

Breadcrumbs::for('super-dashboard.awards.createSeason', function (Trail $trail){
    $trail->parent('super-dashboard.awards.showSeasons')
        ->push(__('keywords.create.new.season'));
});

Breadcrumbs::for('super-dashboard.awards.showApps', function (Trail $trail){
    $trail->parent('super-dashboard.awards.showSeasons')
        ->push(__('keywords.applications'));
});


Breadcrumbs::for('super-dashboard.winner.showWinners', function (Trail $trail){
    $trail->parent('super-dashboard.awards.showSeasons')
        ->push(__('keywords.applications'));
});

// end awards


// start last news
Breadcrumbs::for('super-dashboard.lastNews.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.last.news'), route('super-dashboard.lastNews.show'));
});

Breadcrumbs::for('super-dashboard.lastNews.create', function (Trail $trail){
    $trail->parent('super-dashboard.lastNews.show')
        ->push(__('keywords.create'));
});


Breadcrumbs::for('super-dashboard.lastNews.edit', function (Trail $trail){
    $trail->parent('super-dashboard.lastNews.show')
        ->push(__('keywords.edit'));
});

// end last news

// start ads
Breadcrumbs::for('super-dashboard.lastAds.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.last.ads'), route('super-dashboard.lastAds.show'));
});

Breadcrumbs::for('super-dashboard.lastAds.create', function (Trail $trail){
    $trail->parent('super-dashboard.lastAds.show')
        ->push(__('keywords.create'));
});


Breadcrumbs::for('super-dashboard.lastAds.edit', function (Trail $trail){
    $trail->parent('super-dashboard.lastAds.show')
        ->push(__('keywords.edit'));
});

// end ads

// contact us


Breadcrumbs::for('super-dashboard.contactUs.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.show.messages'));
});

// end contact us


// logo
Breadcrumbs::for('super-dashboard.logoFoundation.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.logo.foundation'), route('super-dashboard.logoFoundation.show'));
});

Breadcrumbs::for('super-dashboard.logoFoundation.edit', function (Trail $trail){
    $trail->parent('super-dashboard.logoFoundation.show')
        ->push(__('keywords.edit'));
});
// end logo


// start they sey about us

Breadcrumbs::for('super-dashboard.theySaidAboutUs.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.they.said.about.us'), route('super-dashboard.theySaidAboutUs.show'));
});

Breadcrumbs::for('super-dashboard.theySaidAboutUs.create', function (Trail $trail){
    $trail->parent('super-dashboard.theySaidAboutUs.show')
        ->push(__('keywords.create'));
});

Breadcrumbs::for('super-dashboard.theySaidAboutUs.edit', function (Trail $trail){
    $trail->parent('super-dashboard.theySaidAboutUs.show')
        ->push(__('keywords.create'));
});

// end they sty say about us


// image show
Breadcrumbs::for('super-dashboard.imagesShow.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.images.show'), route('super-dashboard.imagesShow.show'));
});

Breadcrumbs::for('super-dashboard.imagesShow.create', function (Trail $trail){
    $trail->parent('super-dashboard.imagesShow.show')
        ->push(__('keywords.create'));
});


Breadcrumbs::for('super-dashboard.imagesShow.edit', function (Trail $trail){
    $trail->parent('super-dashboard.imagesShow.show')
        ->push(__('keywords.edit'));
});

// end images show


// videos show
Breadcrumbs::for('super-dashboard.videosShow.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.videos.show'), route('super-dashboard.videosShow.show'));
});

Breadcrumbs::for('super-dashboard.videosShow.create', function (Trail $trail){
    $trail->parent('super-dashboard.videosShow.show')
        ->push(__('keywords.create'));
});


Breadcrumbs::for('super-dashboard.videosShow.edit', function (Trail $trail){
    $trail->parent('super-dashboard.videosShow.show')
        ->push(__('keywords.edit'));
});
// end videos show

Breadcrumbs::for('super-dashboard.UsersPermission.show', function (Trail $trail){
    $trail->parent('super-dashboard.index')
        ->push(__('keywords.permissions'));
});
