<?php

/*
|--------------------------------------------------------------------------
| CUSTOM Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/


Route::group(array('prefix' => LaravelLocalization::getCurrentLocale()), function () {

    //  Route::group(array('prefix' => '/shop'), function () {

    //         Route::get('/', array('as' => 'shop', 'uses' => 'ShopController@index'));
    //         Route::get('/{slug}', array('as' => 'shop.product', 'uses' => 'ShopController@single'));
    //         Route::get('/cart', array('as' => 'cart', 'uses' => 'ShopController@getCart'));
    //         Route::get('/cart/checkout', array('as' => 'checkout', 'uses' => 'ShopController@startCheckout'));

    // });

     //QNIQUE
    Route::group(array('prefix' => '/sewing-machines/qnique'), function () {
        Route::get('comparison', array('as' => 'sewing-machines.qnique.comparison', 'uses' => 'PageController@comparison'));
        Route::get('/', array('as' => 'sewing-machines', 'uses' => 'PageController@qnique'));
        Route::get('/features', array('as' => 'sewing-machines.qnique.features', 'uses' => 'PageController@qniquefeatures'));
        Route::get('/specs', array('as' => 'sewing-machines.qnique.specs', 'uses' => 'PageController@qniquespecs'));
        Route::get('/accessories', array('as' => 'sewing-machines.qnique.accessories', 'uses' => 'PageController@qniqueaccessories'));

    });

    //AUTOMATED QCT
    Route::group(array('prefix' => '/automated/qct'), function () {
        Route::get('/', ['as' => 'automated', 'uses' => 'PageController@qct']);
        Route::get('/features', array('as' => 'automated.features', 'uses' => 'PageController@qctfeatures'));
        Route::get('/specs', array('as' => 'automated.specs', 'uses' => 'PageController@qctspecs'));
        Route::get('/purchase', array('as' => 'automated.purchase', 'uses' => 'PageController@qctpurchase'));
        Route::get('/support', array('as' => 'automated.support', 'uses' => 'PageController@qctsupport'));
        Route::get('/tutorials', array('as' => 'automated.tutorials', 'uses' => 'PageController@qcttutorials'));
    });

    //MACHINE FRAMES
    Route::group(array('prefix' => '/machine-frames'), function () {
        Route::get('/', array('as' => 'machine-frames', 'uses' => 'PageController@machine'));
        Route::get('/gq-frame', array('as' => 'machine-frames.gq-frame', 'uses' => 'PageController@gqframe'));
        Route::get('/compare-machine-frames', array('as' => 'machine-frames.compare-machine-frames', 'uses' => 'PageController@compareMachineFrames'));
        Route::get('/accessories', array('as' => 'machine-frames.accessories', 'uses' => 'PageController@accessories'));
        Route::get('/gracie-kq', array('as' => 'machine-frames.gracie-kq', 'uses' => 'PageController@graciekq'));
        Route::get('/sr-2-frame', array('as' => 'machine-frames.sr-2-frame', 'uses' => 'PageController@sr2frame'));
    });

    //HAND FRAMES AND HOOPS
    Route::group(array('prefix' => '/hand-quilting'), function () {
        Route::get('/', array('as' => 'hand-quilting', 'uses' => 'PageController@handquilting'));
        Route::get('/z44-frame', array('as' => 'z44-frame', 'uses' => 'PageController@z44frame'));
        Route::get('/start-right-ez3', array('as' => 'start-right-ez3', 'uses' => 'PageController@startrightez3'));
        Route::get('/grace-hoop-2', array('as' => 'grace-hoop-2', 'uses' => 'PageController@gracehoop2'));
        Route::get('/grace-lap-hoops', array('as' => 'grace-lap-hoops', 'uses' => 'PageController@gracelaphoops'));
        Route::get('/graciebee', array('as' => 'graciebee', 'uses' => 'PageController@graciebee'));
        Route::get('/accessories', array('as' => 'hand-quilting.accessories', 'uses' => 'PageController@handaccessories'));
        Route::get('/compare-frames', array('as' => 'hand-quilting.compare-frames', 'uses' => 'PageController@comparehandframes'));
    });

    // TRUECUT
    Route::group(array('prefix' => '/truecut'), function () {
        Route::get('/', ['as' => 'truecut', 'uses' => 'PageController@truecut']);
        Route::get('/comfort-cutter', array('as' => 'comfort-cutter', 'uses' => 'PageController@comfort'));
        Route::get('/cutting-mats', ['as' => 'cutting-mats', 'uses' => 'PageController@cuttingMats']);
        Route::get('/cutting-table', ['as' => 'cutting-table', 'uses' => 'PageController@cuttingTable']);
        Route::get('/linear-sharpener', ['as' => 'linear-sharpener', 'uses' => 'PageController@linearSharpener']);
        Route::get('/rotary-cutting-accessories', ['as' => 'accessories', 'uses' => 'PageController@rotaryCuttingAccessories']);
        Route::get('/rulers', ['as' => 'rulers', 'uses' => 'PageController@rulers']);
        Route::get('/truesharp', ['as' => 'truesharp', 'uses' => 'PageController@truesharp']);
        Route::get('/truecut360', ['as' => 'truecut360', 'uses' => 'PageController@truecut360']);
    });


  //  Route::get('sitemap', ['as' => 'sitemap', 'uses' => 'PageController@htmlsitemap']);

});