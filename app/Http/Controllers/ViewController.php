<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /////////////////  CONTENT  /////////////////
    public function index()
    {
        return view('content.index');
    }
    public function index2()
    {
        return view('content.index2');
    }
    public function index3()
    {
        return view('content.index3');
    }
    public function analysis()
    {
        return view('content.analysis');
    }

    /////////////////  ORDER  /////////////////
    public function orderList()
    {
        return view('orders.order_list');
    }

    public function orderDetails()
    {
        return view('orders.order_details');
    }

    /////////////////  MENUS  /////////////////
    public function menuAdd()
    {
        return view('menu.menu_add');
    }
    public function menuList()
    {
        return view('menu.menu_list');
    }
    public function menuCategories()
    {
        return view('menu.menu_categories');
    }

    /////////////////  CUSTOMER  /////////////////

    public function customerList()
    {
        return view('customer.customer_list');
    }

    public function customerMembers()
    {
        return view('customer.members');
    }
   
    /////////////////  E-COMMERCE  /////////////////
    public function ecommerceCart()
    {
        return view('ecommerce.cart');
    }

    public function ecommerceCheckout()
    {
        return view('ecommerce.checkout');
    }

    public function ecommerceDetails()
    {
        return view('ecommerce.details');
    }

    public function ecommerceOrders()
    {
        return view('ecommerce.orders');
    }

    public function ecommerceInvoiceList()
    {
        return view('ecommerce.invoice_list');
    }

    public function ecommerceInvoice()
    {
        return view('ecommerce.invoice');
    }

    public function ecommerceProducts()
    {
        return view('ecommerce.products');
    }

    public function ecommerceProductsEdit()
    {
        return view('ecommerce.products_edit');
    }


    /////////////////  APP  /////////////////

    ////////  APPS  ////////
    public function appMailbox()
    {
        return view('app&widgets.apps.mailbox');
    }

    public function appContact()
    {
        return view('app&widgets.apps.contact_app');
    }

    public function appContactChat()
    {
        return view('app&widgets.apps.contact_app_chat');
    }
    public function appExtraCalendar()
    {
        return view('app&widgets.apps.extra_calendar');
    }
    public function appExtraTaskboard()
    {
        return view('app&widgets.apps.extra_taskboard');
    }

    ////////  WIDGETS  ////////
    public function widgetBlog()
    {
        return view('app&widgets.widgets.blog');
    }
    
    public function widgetChart()
    {
        return view('app&widgets.widgets.chart');
    }

    public function widgetList()
    {
        return view('app&widgets.widgets.list');
    }

    public function widgetSocial()
    {
        return view('app&widgets.widgets.social');
    }

    public function widgetStatistic()
    {
        return view('app&widgets.widgets.statistic');
    }

    public function widgetWeather()
    {
        return view('app&widgets.widgets.weather');
    }

    public function widgetWidgets()
    {
        return view('app&widgets.widgets.widgets');
    }

    public function widgetEmails()
    {
        return view('app&widgets.widgets.emails');
    }

     //////  EMAIL  //////
    public function emailWelcome()
    {
        return view('app&widgets.widgets.emails.welcome');
    }

    public function emailChangePass()
    {
        return view('app&widgets.widgets.emails.change_pass');
    }

    public function emailClosedAccount()
    {
        return view('app&widgets.widgets.emails.closed_account');
    }

    public function emailExpiredCard()
    {
        return view('app&widgets.widgets.emails.expired_card');
    }

    public function emailUpdate()
    {
        return view('app&widgets.widgets.emails.update');
    }

    public function emailVerify()
    {
        return view('app&widgets.widgets.emails.verify_email');
    }

    ////////  MAPS  ////////

    public function mapGoogle()
    {
        return view('app&widgets.maps.map_google');
    }

    public function mapVector()
    {
        return view('app&widgets.maps.map_vector');
    }

    /////////////////  PAGES  /////////////////
  
    public function pageBlank()
    {
        return view('pages.blank');
    }

    public function pageContactUserlist()
    {
        return view('pages.contact_userlist');
    }
    public function pageCustomScroll()
    {
        return view('pages.custom_scroll');
    }
    public function pageFAQs()
    {
        return view('pages.FAQs');
    }
    public function pageGallery()
    {
        return view('pages.gallery');
    }
    public function pageLightbox()
    {
        return view('pages.lightbox');
    }
    public function pagePricing()
    {
        return view('pages.pricing');
    }

    public function pageComingSoon()
    {
        return view('pages.coming_soon');
    }
    ////////  COMING SOON  ////////
    public function pageComingSoon1()
    {
        return view('pages.coming_soon.1');
    }

    public function pageComingSoon2()
    {
        return view('pages.coming_soon.2');
    }

    public function pageComingSoon3()
    {
        return view('pages.coming_soon.3');
    }



    ////////  AUTH  ////////

    public function authLockscreen()
    {
        return view('pages.auth.lockscreen');
    }
    public function authLogin()
    {
        return view('pages.auth.login');
    }
    public function authRegister()
    {
        return view('pages.auth.register');
    }
    public function authUserPass()
    {
        return view('pages.auth.user_pass');
    }

    ////////  COMING SOON  ////////

    public function comingSoon1()
    {
        return view('pages.coming_soon.1');
    }
    public function comingSoon2()
    {
        return view('pages.coming_soon.2');
    }
    public function comingSoon3()
    {
        return view('pages.coming_soon.3');
    }

    ////////  MISCELLANEOUS  ////////

    public function error404()
    {
        return view('pages.miscellaneous.error_404');
    }
    public function error500()
    {
        return view('pages.miscellaneous.error_500');
    }
    public function maintenance()
    {
        return view('pages.miscellaneous.maintenance');
    }

    /////////////////  UI-ELEMENTS  /////////////////

    ////////  UTILITIES  ////////

    public function utilitiesBadges()
    {
        return view('UI_elements.utilities.badges');
    }

    public function utilitiesBorder()
    {
        return view('UI_elements.utilities.border');
    }

    public function utilitiesButtons()
    {
        return view('UI_elements.utilities.buttons');
    }

    public function utilitiesColor()
    {
        return view('UI_elements.utilities.color');
    }

    public function utilitiesDropdown()
    {
        return view('UI_elements.utilities.dropdown');
    }

    public function utilitiesDropdownGrid()
    {
        return view('UI_elements.utilities.dropdown_grid');
    }

    public function utilitiesgrid()
    {
        return view('UI_elements.utilities.grid');
    }

    public function utilitiesProgress()
    {
        return view('UI_elements.utilities.progress_bars');
    }

    public function utilitiesRibbons()
    {
        return view('UI_elements.utilities.ribbons');
    }

    public function utilitiesSliders()
    {
        return view('UI_elements.utilities.sliders');
    }

    public function utilitiesTabs()
    {
        return view('UI_elements.utilities.tabs');
    }

    public function utilitiesTimeline()
    {
        return view('UI_elements.utilities.timeline');
    }

    public function utilitiesTimelineHorizontal()
    {
        return view('UI_elements.utilities.timeline_horizontal');
    }

    public function utilitiesTypography()
    {
        return view('UI_elements.utilities.typography');
    }

    ////////  CARD  ////////

    public function cardAdvanced()
    {
        return view('UI_elements.card.advanced');
    }

    public function cardBasic()
    {
        return view('UI_elements.card.basic');
    }

    public function cardColor()
    {
        return view('UI_elements.card.color');
    }

    public function cardGroup()
    {
        return view('UI_elements.card.group');
    }

    public function cardUser()
    {
        return view('UI_elements.card.user');
    }

    ////////  ICONS  ////////

    public function iconCryptocoin()
    {
        return view('UI_elements.icons.cryptocion');
    }

    public function iconFlag()
    {
        return view('UI_elements.icons.flag');
    }

    public function iconFontawesome()
    {
        return view('UI_elements.icons.fontawesome');
    }

    public function iconGlyphicons()
    {
        return view('UI_elements.icons.glyphicons');
    }

    public function iconMaterial()
    {
        return view('UI_elements.icons.material');
    }

    public function iconSimpleline()
    {
        return view('UI_elements.icons.simpleline');
    }

    public function iconThemify()
    {
        return view('UI_elements.icons.themify');
    }

    public function iconWeather()
    {
        return view('UI_elements.icons.weather');
    }

    ////////  COMPONENTS  ////////

    public function componentAnimations()
    {
        return view('UI_elements.components.animations');
    }

    public function componentBootstrap()
    {
        return view('UI_elements.components.bootstrap_switch');
    }

    public function componentDatePaginator()
    {
        return view('UI_elements.components.date_paginator');
    }

    public function componentExtFullscreen()
    {
        return view('UI_elements.components.ext_fullscreen');
    }

    public function componentExtPace()
    {
        return view('UI_elements.components.ext_pace');
    }

    public function componentMediaAdvanced()
    {
        return view('UI_elements.components.media_advanced');
    }

    public function componentModals()
    {
        return view('UI_elements.components.modals');
    }

    public function componentNestable()
    {
        return view('UI_elements.components.nestable');
    }

    public function componentNotificacion()
    {
        return view('UI_elements.components.notificacion');
    }

    public function componentPortletDraggable()
    {
        return view('UI_elements.components.Portlet_Draggable');
    }

    public function componentRangeSlide()
    {
        return view('UI_elements.components.rangeslide');
    }

    public function componentRating()
    {
        return view('UI_elements.components.rating');
    }

    public function componentSweetAlert()
    {
        return view('UI_elements.components.sweetalert');
    }

    /////////////////  FORMS & TABLES  /////////////////

    ////////  FORMS  ////////

    public function formAdvanced()
    {
        return view('forms&table.forms.advanced');
    }

    public function formDropzone()
    {
        return view('forms&table.forms.dropzone');
    }

    public function formEditor()
    {
        return view('forms&table.forms.editor');
    }

    public function formEditorCode()
    {
        return view('forms&table.forms.editorCode');
    }

    public function formEditorX()
    {
        return view('forms&table.forms.editorX');
    }

    public function formGeneral()
    {
        return view('forms&table.forms.general');
    }

    public function formMarkdowns()
    {
        return view('forms&table.forms.markdowns');
    }

    public function formMask()
    {
        return view('forms&table.forms.mask');
    }

    public function formValidation()
    {
        return view('forms&table.forms.validation');
    }

    public function formWizard()
    {
        return view('forms&table.forms.wizard');
    }

    ////////  TABLES  ////////

    public function tableColor()
    {
        return view('forms&table.tables.color');
    }

    public function tableData()
    {
        return view('forms&table.tables.data');
    }

    public function tableEditable()
    {
        return view('forms&table.tables.editable');
    }

    public function tableSimple()
    {
        return view('forms&table.tables.simple');
    }

    public function billing(){
        return view('forms&table.tables.billing');
    }

    public function applications(){
        return view('forms&table.tables.applications');
    }

    public function candidates(){
        return view('forms&table.tables.candidates');
    }

    public function extraProfile(){
        return view('forms&table.tables.extra_profile');
    }

    /////////////////  CHARTS  /////////////////

    public function chartC3Axis()
    {
        return view('charts.c3_axis');
    }

    public function chartC3Bar()
    {
        return view('charts.c3_bar');
    }

    public function chartC3Data()
    {
        return view('charts.c3_data');
    }

    public function chartC3Line()
    {
        return view('charts.c3_line');
    }
    
    public function chartIst()
    {
        return view('charts.chartist');
    }

    public function chartJs()
    {
        return view('charts.chartjs');
    }

    public function chartEchartBar()
    {
        return view('charts.echarts_bar');
    }

    public function chartEchartBasic()
    {
        return view('charts.echarts_basic');
    }

    public function chartEchartPieDoughnut()
    {
        return view('charts.echarts_pie&doughnut');
    }

    public function chartFlot()
    {
        return view('charts.flot');
    }

    public function chartInline()
    {
        return view('charts.inline');
    }

    public function chartMorris()
    {
        return view('charts.morris');
    }

    public function chartPeity()
    {
        return view('charts.peity');
    }

    
    
    
}

