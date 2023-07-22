<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/',  'ViewController@index')->name('home');

/////////////////  CONTENT  /////////////////

Route::group(['prefix' => 'content'], function () {
    Route::get('/index', 'ViewController@index')->name('main');

    Route::get('/index2',  'ViewController@index2')->name('main2');

    Route::get('/index3',  'ViewController@index3')->name('main3');

    Route::get('/analysis', 'ViewController@analysis')->name('analysis');
});

/////////////////  ORDER  /////////////////

Route::group(['prefix' => 'orders'], function () {

    Route::get('/order_list', 'ViewController@orderList')->name('order.list');

    Route::get('/order_details','ViewController@orderDetails')->name('order.details');
});

/////////////////  MENUS  /////////////////

Route::group(['prefix' => 'menu'], function () {

    Route::get('/menu_add', 'ViewController@menuAdd')->name('menu.add');

    Route::get('/menu_list', 'ViewController@menuList')->name('menu.list');

    Route::get('/menu_categories','ViewController@menuCategories')->name('menu.categories');
});

/////////////////  CUSTOMER  /////////////////

Route::group(['prefix' => 'customer'], function () {

    Route::get('/customer_list', 'ViewController@customerList')->name('customer.list');

    Route::get('/members', 'ViewController@customerMembers')->name('customer.members');
});

/////////////////  E-COMMERCE  /////////////////

Route::group(['prefix' => 'ecommerce'], function () {

    Route::get('/cart', 'ViewController@ecommerceCart')->name('ecommerce.cart');

    Route::get('/checkout', 'ViewController@ecommerceCheckout')->name('ecommerce.checkout');

    Route::get('/details', [ViewController::class, 'ecommerceDetails'])->name('ecommerce.details');

    Route::get('/orders', [ViewController::class, 'ecommerceOrders'])->name('ecommerce.orders');

    Route::get('/invoice_list', [ViewController::class, 'ecommerceInvoiceList'])->name('ecommerce.invoice_list');

    Route::get('/invoice', [ViewController::class, 'ecommerceInvoice'])->name('ecommerce.invoice');

    Route::get('/products', [ViewController::class, 'ecommerceProducts'])->name('ecommerce.products');

    Route::get('/products_edit', [ViewController::class, 'ecommerceProductsEdit'])->name('ecommerce.products_edit');
});

/////////////////  APP  /////////////////

////////  APPS  ////////

Route::group(['prefix' => 'app'], function () {

    Route::get('/mailbox', [ViewController::class, 'appMailbox'])->name('app.mailbox');

    Route::get('/contact', [ViewController::class, 'appContact'])->name('app.contact');

    Route::get('/contactChat', [ViewController::class, 'appContactChat'])->name('app.contact_chat');

    Route::get('/extra_calendar', [ViewController::class, 'appExtraCalendar'])->name('app.extra_calendar');

    Route::get('/extra_taskboard', [ViewController::class, 'appExtraTaskboard'])->name('app.extra_taskboard');

});

////////  WIDGETS  ////////

Route::group(['prefix' => 'widgets'], function () {

    Route::get('/blog', [ViewController::class, 'widgetBlog'])->name('widgets.blog');

    Route::get('/chart', [ViewController::class, 'widgetChart'])->name('widgets.chart');

    ///////EMAILSS///////

    Route::get('/email', [ViewController::class, 'widgetEmails'])->name('widgets.emails');

    Route::group(['prefix' => 'email'], function () {

        Route::get('/welcome', [ViewController::class, 'emailWelcome'])->name('email.welcome');

        Route::get('/changePass', [ViewController::class, 'emailChangePass'])->name('email.changePass');

        Route::get('/closedAccount', [ViewController::class, 'emailClosedAccount'])->name('email.closedAccount');

        Route::get('/expiredCard', [ViewController::class, 'emailExpiredCard'])->name('email.expiredCard');

        Route::get('/update', [ViewController::class, 'emailUpdate'])->name('email.update');

        Route::get('/verify', [ViewController::class, 'emailVerify'])->name('email.verify');

        
    });

    ///////////////////////

    Route::get('/list', [ViewController::class, 'widgetList'])->name('widgets.list');

    Route::get('/statistic', [ViewController::class, 'widgetStatistic'])->name('widgets.statistic');

    Route::get('/weather', [ViewController::class, 'widgetWeather'])->name('widgets.weather');

    Route::get('/widgets', [ViewController::class, 'widgetCwidgetWidgetshart'])->name('widgets.widgets');

    Route::get('/social', [ViewController::class, 'widgetSocial'])->name('widgets.social');
});

////////  MAPS  ////////

Route::group(['prefix' => 'maps'], function () {

    Route::get('/google', [ViewController::class, 'mapGoogle'])->name('maps.google');

    Route::get('/vector', [ViewController::class, 'mapVector'])->name('maps.vector');
});

/////////////////  PAGES  /////////////////

Route::group(['prefix' => 'pages'], function () {

    Route::get('/blank', [ViewController::class, 'pageBlank'])->name('pages.blank');

    Route::get('/contactUserlist', [ViewController::class, 'pageContactUserlist'])->name('pages.contactUserlist');
    
    Route::get('/customScroll', [ViewController::class, 'pageCustomScroll'])->name('pages.customScroll');

    Route::get('/FAQS', [ViewController::class, 'pageFAQS'])->name('pages.FAQS');

    Route::get('/gallery', [ViewController::class, 'pageGallery'])->name('pages.gallery');

    Route::get('/lightbox', [ViewController::class, 'pageLightbox'])->name('pages.lightbox');

    Route::get('/pricing', [ViewController::class, 'pagePricing'])->name('pages.pricing');

    Route::get('/comingSoon', [ViewController::class, 'pageComingSoon'])->name('pages.coming_soon');

    Route::group(['prefix' => 'comingSoon'], function () {
        Route::get('/1', [ViewController::class, 'pageComingSoon1'])->name('coming_soon.1');
        Route::get('/2', [ViewController::class, 'pageComingSoon2'])->name('coming_soon.2');
        Route::get('/3', [ViewController::class, 'pageComingSoon3'])->name('coming_soon.3');

    });


});

////////  AUTH  ////////

Route::group(['prefix' => 'auth'], function () {

    Route::get('/lockscreen', [ViewController::class, 'authLockscreen'])->name('auth.lockscreen');
    Route::get('/login', [ViewController::class, 'authLogin'])->name('auth.login');
    Route::get('/register', [ViewController::class, 'authRegister'])->name('auth.register');
    Route::get('/userPass', [ViewController::class, 'authUserPass'])->name('auth.userPass');

});

////////  COMING SOON  ////////

Route::group(['prefix' => 'comingSoon'], function () {

    Route::get('/', [ViewController::class, ''])->name('coming_soon.');

});

////////  MISCELLANEOUS  ////////

Route::group(['prefix' => 'errors'], function () {

    Route::get('/error_404', [ViewController::class, 'error404'])->name('miscellaneous.error_404');

    Route::get('/error_500', [ViewController::class, 'error500'])->name('miscellaneous.error_500');

    Route::get('/maintenance', [ViewController::class, 'maintenance'])->name('miscellaneous.maintenance');

});

/////////////////  UI-ELEMENTS  /////////////////

////////  UTILITIES  ////////

Route::group(['prefix' => 'utilities'], function () {

    Route::get('/badges', [ViewController::class, 'utilitiesBadges'])->name('utilities.badges');

    Route::get('/border', [ViewController::class, 'utilitiesBorder'])->name('utilities.border');

    Route::get('/buttons', [ViewController::class, 'utilitiesButtons'])->name('utilities.buttons');

    Route::get('/color', [ViewController::class, 'utilitiesColor'])->name('utilities.color');

    Route::get('/dropdown', [ViewController::class, 'utilitiesDropdown'])->name('utilities.dropdown');

    Route::get('/dropdownGrid', [ViewController::class, 'utilitiesDropdownGrid'])->name('utilities.dropdownGrid');

    Route::get('/grid', [ViewController::class, 'utilitiesGrid'])->name('utilities.grid');

    Route::get('/progress', [ViewController::class, 'utilitiesProgress'])->name('utilities.progress');

    Route::get('/ribbons', [ViewController::class, 'utilitiesRibbons'])->name('utilities.ribbons');

    Route::get('/sliders', [ViewController::class, 'utilitiesSliders'])->name('utilities.sliders');

    Route::get('/tabs', [ViewController::class, 'utilitiesTabs'])->name('utilities.tabs');

    Route::get('/timeline', [ViewController::class, 'utilitiesTimeline'])->name('utilities.timeline');

    Route::get('/timelineHorizontal', [ViewController::class, 'utilitiesTimelineHorizontal'])->name('utilities.timelineHorizontal');

    Route::get('/typography', [ViewController::class, 'utilitiesTypography'])->name('utilities.typography');

});

////////  CARD  ////////

Route::group(['prefix' => 'card'], function () {

    Route::get('/advanced', [ViewController::class, 'cardAdvanced'])->name('card.advanced');

    Route::get('/basic', [ViewController::class, 'cardBasic'])->name('card.basic');

    Route::get('/color', [ViewController::class, 'cardColor'])->name('card.color');

    Route::get('/group', [ViewController::class, 'cardGroup'])->name('card.group');

    Route::get('/user', [ViewController::class, 'cardUser'])->name('card.user');

    
});

////////  ICONS  ////////

Route::group(['prefix' => 'icons'], function () {

    Route::get('/cryptocoin', [ViewController::class, 'iconCryptocoin'])->name('icons.cryptocoin');

    Route::get('/flag', [ViewController::class, 'iconFlag'])->name('icons.flag');

    Route::get('/fontawesome', [ViewController::class, 'iconFontawesome'])->name('icons.fontawesome');

    Route::get('/glyphicons', [ViewController::class, 'iconGlyphicons'])->name('icons.glyphicons');

    Route::get('/material', [ViewController::class, 'iconMaterial'])->name('icons.material');

    Route::get('/simpleline', [ViewController::class, 'iconSimpleline'])->name('icons.simpleline');

    Route::get('/themify', [ViewController::class, 'iconThemify'])->name('icons.themify');

    Route::get('/weather', [ViewController::class, 'iconWeather'])->name('icons.weather');

    
});

////////  COMPONENTS  ////////

Route::group(['prefix' => 'components'], function () {

    Route::get('/animations', [ViewController::class, 'componentAnimations'])->name('components.animations');

    Route::get('/Bootstrap', [ViewController::class, 'componentBootstrap'])->name('components.bootstrap');

    Route::get('/datePaginator', [ViewController::class, 'componentDatePaginator'])->name('components.datePaginator');

    Route::get('/extFullscreen', [ViewController::class, 'componentExtFullscreen'])->name('components.extFullscreen');

    Route::get('/extPace', [ViewController::class, 'componentExtPace'])->name('components.extPace');

    Route::get('/media', [ViewController::class, 'componentMedia'])->name('components.media');

    Route::get('/modals', [ViewController::class, 'componentModals'])->name('components.modals');

    Route::get('/nestable', [ViewController::class, 'componentNestable'])->name('components.nestable');

    Route::get('/notificacion', [ViewController::class, 'componentNotificacion'])->name('components.notificacion');

    Route::get('/portletDraggable', [ViewController::class, 'componentPortletDraggable'])->name('components.portletDraggable');

    Route::get('/rangeslide', [ViewController::class, 'componentRangeslide'])->name('components.rangeslide');

    Route::get('/rating', [ViewController::class, 'componentRating'])->name('components.rating');

    Route::get('/sweetalert', [ViewController::class, 'componentSweetAlert'])->name('components.sweetAlert');

});

/////////////////  FORMS & TABLES  /////////////////

////////  FORMS  ////////
Route::group(['prefix' => 'form'], function () {

    Route::get('/advanced', [ViewController::class, 'formAdvanced'])->name('form.advanced');

    Route::get('/dropzone', [ViewController::class, 'formDropzone'])->name('form.dropzone');

    Route::get('/editor', [ViewController::class, 'formEditor'])->name('form.editor');

    Route::get('/editorCode', [ViewController::class, 'formEditorCode'])->name('form.editorCode');

    Route::get('/general', [ViewController::class, 'formGeneral'])->name('form.general');

    Route::get('/markdowns', [ViewController::class, 'formMarkdowns'])->name('form.markdowns');

    Route::get('/mask', [ViewController::class, 'formMask'])->name('form.mask');

    Route::get('/validation', [ViewController::class, 'formValidation'])->name('form.validation');

    Route::get('/editorX', [ViewController::class, 'formEditorX'])->name('form.editorX');

    Route::get('/wizard', [ViewController::class, 'formWizard'])->name('form.wizard');

    
});
////////  FORMS  ////////
Route::group(['prefix' => 'table'], function () {

    Route::get('/color', [ViewController::class, 'tableColor'])->name('table.color');

    Route::get('/data', [ViewController::class, 'tableData'])->name('table.data');

    Route::get('/editable', [ViewController::class, 'tableEditable'])->name('table.editable');

    Route::get('/simple', [ViewController::class, 'tableSimple'])->name('table.simple');

    Route::get('/billing', [ViewController::class, 'billing'])->name('table.billing');

    Route::get('/applications', [ViewController::class, 'applications'])->name('table.applications');

    Route::get('/candidates', [ViewController::class, 'candidates'])->name('table.candidates');

    Route::get('/extra_profile', [ViewController::class, 'extraProfile'])->name('table.extraProfile');

});

/////////////////  CHARTS  /////////////////

Route::group(['prefix' => 'charts'], function () {

    Route::get('/c3axis', [ViewController::class, 'chartC3Axis'])->name('chart.c3axis');

    Route::get('/c3bar', [ViewController::class, 'chartC3Bar'])->name('chart.c3bar');

    Route::get('/c3data', [ViewController::class, 'chartC3Data'])->name('chart.c3data');

    Route::get('/c3line', [ViewController::class, 'chartC3Line'])->name('chart.c3line');

    Route::get('/echartBar', [ViewController::class, 'chartEchartBar'])->name('chart.echartBar');

    Route::get('/echartBasic', [ViewController::class, 'chartEchartBasic'])->name('chart.echartBasic');

    Route::get('/echartPieDoughnut', [ViewController::class, 'chartEchartPieDoughnut'])->name('chart.echartPieDoughnut');

    Route::get('/ist', [ViewController::class, 'chartIst'])->name('chart.ist');

    Route::get('/js', [ViewController::class, 'chartJs'])->name('chart.js');

    Route::get('/flot', [ViewController::class, 'chartFlot'])->name('chart.flot');

    Route::get('/inline', [ViewController::class, 'chartInline'])->name('chart.inline');

    Route::get('/morris', [ViewController::class, 'chartMorris'])->name('chart.morris');

    Route::get('/peity', [ViewController::class, 'chartPeity'])->name('chart.peity');

    
});