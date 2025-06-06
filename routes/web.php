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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect('/dashboard');
});

// Tugas
Route::get('/shift', [ShiftController::class, 'index']);
Route::post('/shift', [ShiftController::class, 'calculate']);

// Start routes 
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');;
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('history', HistoryController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware(['auth', 'admin']);
Route::resource('tenant', TenantController::class)->middleware(['auth', 'admin']);
// Route::get('/dashboard', [HistoryController::class, 'index'])->name('dashboard');



Route::get('/tes', [MainController::class, 'tespage'])->name('tespage');

Route::get('/email/inbox', 'MainController@emailInbox')->name('email-inbox');
Route::get('/email/compose', 'MainController@emailCompose')->name('email-compose');
Route::get('/email/detail', 'MainController@emailDetail')->name('email-detail');

Route::get('/widget', 'MainController@widget')->name('widget');

Route::get('/ui/general', 'MainController@uiGeneral')->name('ui-general');
Route::get('/ui/typography', 'MainController@uiTypography')->name('ui-typography');
Route::get('/ui/tabs-accordions', 'MainController@uiTabsAccordions')->name('ui-tabs-accordions');
Route::get('/ui/unlimited-nav-tabs', 'MainController@uiUnlimitedNavTabs')->name('ui-unlimited-nav-tabs');
Route::get('/ui/modal-notification', 'MainController@uiModalNotification')->name('ui-modal-notification');
Route::get('/ui/widget-boxes', 'MainController@uiWidgetBoxes')->name('ui-widget-boxes');
Route::get('/ui/media-object', 'MainController@uiMediaObject')->name('ui-media-object');
Route::get('/ui/buttons', 'MainController@uiButtons')->name('ui-buttons');
Route::get('/ui/icon-fontawesome', 'MainController@uiIconFontAwesome')->name('ui-icon-fontawesome');
Route::get('/ui/icon-bootstrap-icons', 'MainController@uiIconBootstrapIcons')->name('ui-icon-bootstrap-icons');
Route::get('/ui/icon-duotone', 'MainController@uiIconDuotone')->name('ui-icon-duotone');
Route::get('/ui/icon-simple-line-icons', 'MainController@uiIconSimpleLineIcons')->name('ui-icon-simple-line-icons');
Route::get('/ui/icon-ionicons', 'MainController@uiIconIonicons')->name('ui-icon-ionicons');
Route::get('/ui/tree-view', 'MainController@uiTreeView')->name('ui-tree-view');
Route::get('/ui/language-bar-icon', 'MainController@uiLanguageBarIcon')->name('ui-language-bar-icon');
Route::get('/ui/social-buttons', 'MainController@uiSocialButtons')->name('ui-social-buttons');
Route::get('/ui/intro-js', 'MainController@uiIntroJs')->name('ui-intro-js');
Route::get('/ui/offcanvas-toasts', 'MainController@uiOffcanvasToasts')->name('ui-offcanvas-toasts');

Route::get('/bootstrap-5', 'MainController@bootstrap5')->name('bootstrap-5');

Route::get('/form/elements', 'MainController@formElements')->name('form-elements');
Route::get('/form/plugins', 'MainController@formPlugins')->name('form-plugins');
Route::get('/form/slider-switcher', 'MainController@formSliderSwitcher')->name('form-slider-switcher');
Route::get('/form/validation', 'MainController@formValidation')->name('form-validation');
Route::get('/form/wizards', 'MainController@formWizards')->name('form-wizards');
Route::get('/form/wysiwyg', 'MainController@formWysiwyg')->name('form-wysiwyg');
Route::get('/form/x-editable', 'MainController@formXEditable')->name('form-x-editable');
Route::get('/form/multiple-file-upload', 'MainController@formMultipleFileUpload')->name('form-multiple-file-upload');
Route::get('/form/summernote', 'MainController@formSummernote')->name('form-summernote');
Route::get('/form/dropzone', 'MainController@formDropzone')->name('form-dropzone');

Route::get('/table/basic', 'MainController@tableBasic')->name('table-basic');
Route::get('/table/manage/default', 'MainController@tableManageDefault')->name('table-manage-default');
Route::get('/table/manage/buttons', 'MainController@tableManageButtons')->name('table-manage-buttons');
Route::get('/table/manage/colreorder', 'MainController@tableManageColreorder')->name('table-manage-colreorder');
Route::get('/table/manage/fixed-column', 'MainController@tableManageFixedColumn')->name('table-manage-fixed-column');
Route::get('/table/manage/fixed-header', 'MainController@tableManageFixedHeader')->name('table-manage-fixed-header');
Route::get('/table/manage/keytable', 'MainController@tableManageKeytable')->name('table-manage-keytable');
Route::get('/table/manage/responsive', 'MainController@tableManageResponsive')->name('table-manage-responsive');
Route::get('/table/manage/rowreorder', 'MainController@tableManageRowreorder')->name('table-manage-rowreorder');
Route::get('/table/manage/scroller', 'MainController@tableManageScroller')->name('table-manage-scroller');
Route::get('/table/manage/select', 'MainController@tableManageSelect')->name('table-manage-select');
Route::get('/table/manage/combine', 'MainController@tableManageCombine')->name('table-manage-combine');

Route::get('/pos/customer-order', 'MainController@posCustomerOrder')->name('pos-customer-order');
Route::get('/pos/kitchen-order', 'MainController@posKitchenOrder')->name('pos-kitchen-order');
Route::get('/pos/counter-checkout', 'MainController@posCounterCheckout')->name('pos-counter-checkout');
Route::get('/pos/table-booking', 'MainController@posTableBooking')->name('pos-table-booking');
Route::get('/pos/menu-stock', 'MainController@posMenuStock')->name('pos-menu-stock');

Route::get('/email-template/system', 'MainController@emailTemplateSystem')->name('email-template-system');
Route::get('/email-template/newsletter', 'MainController@emailTemplateNewsletter')->name('email-template-newsletter');

Route::get('/chart/flot', 'MainController@chartFlot')->name('chart-flot');
Route::get('/chart/js', 'MainController@chartJs')->name('chart-js');
Route::get('/chart/d3', 'MainController@chartD3')->name('chart-d3');
Route::get('/chart/apex', 'MainController@chartApex')->name('chart-apex');

Route::get('/calendar', 'MainController@calendar')->name('calendar');

Route::get('/map/vector', 'MainController@mapVector')->name('map-vector');
Route::get('/map/google', 'MainController@mapGoogle')->name('map-google');

Route::get('/gallery/v1', 'MainController@galleryV1')->name('gallery-v1');
Route::get('/gallery/v2', 'MainController@galleryV2')->name('gallery-v2');

Route::get('/page-option/page-blank', 'MainController@pageBlank')->name('page-blank');
Route::get('/page-option/page-with-footer', 'MainController@pageWithFooter')->name('page-with-footer');
Route::get('/page-option/page-with-fixed-footer', 'MainController@pageWithFixedFooter')->name('page-with-fixed-footer');
Route::get('/page-option/page-without-sidebar', 'MainController@pageWithoutSidebar')->name('page-without-sidebar');
Route::get('/page-option/page-with-right-sidebar', 'MainController@pageWithRightSidebar')->name('page-with-right-sidebar');
Route::get('/page-option/page-with-minified-sidebar', 'MainController@pageWithMinifiedSidebar')->name('page-with-minified-sidebar');
Route::get('/page-option/page-with-two-sidebar', 'MainController@pageWithTwoSidebar')->name('page-with-two-sidebar');
Route::get('/page-option/page-full-height', 'MainController@pageFullHeight')->name('page-full-height');
Route::get('/page-option/page-with-wide-sidebar', 'MainController@pageWithWideSidebar')->name('page-with-wide-sidebar');
Route::get('/page-option/page-with-light-sidebar', 'MainController@pageWithLightSidebar')->name('page-with-light-sidebar');
Route::get('/page-option/page-with-mega-menu', 'MainController@pageWithMegaMenu')->name('page-with-mega-menu');
Route::get('/page-option/page-with-top-menu', 'MainController@pageWithTopMenu')->name('page-with-top-menu');
Route::get('/page-option/page-with-boxed-layout', 'MainController@pageWithBoxedLayout')->name('page-with-boxed-layout');
Route::get('/page-option/page-with-mixed-menu', 'MainController@pageWithMixedMenu')->name('page-with-mixed-menu');
Route::get('/page-option/boxed-layout-with-mixed-menu', 'MainController@boxedLayoutWithMixedMenu')->name('boxed-layout-with-mixed-menu');
Route::get('/page-option/page-with-transparent-sidebar', 'MainController@pageWithTransparentSidebar')->name('page-with-transparent-sidebar');
Route::get('/page-option/page-with-search-sidebar', 'MainController@pageWithSearchSidebar')->name('page-with-search-sidebar');
Route::get('/page-option/page-with-hover-sidebar', 'MainController@pageWithHoverSidebar')->name('page-with-hover-sidebar');

Route::get('/extra/timeline', 'MainController@extraTimeline')->name('extra-timeline');
Route::get('/extra/coming-soon', 'MainController@extraComingSoon')->name('extra-coming-soon');
Route::get('/extra/search-result', 'MainController@extraSearchResult')->name('extra-search-result');
Route::get('/extra/invoice', 'MainController@extraInvoice')->name('extra-invoice');
Route::get('/extra/error-page', 'MainController@extraErrorPage')->name('extra-error-page');
Route::get('/extra/profile', 'MainController@extraProfile')->name('extra-profile');
Route::get('/extra/scrum-board', 'MainController@extraScrumBoard')->name('extra-scrum-board');
Route::get('/extra/cookie-acceptance-banner', 'MainController@extraCookieAcceptanceBanner')->name('extra-cookie-acceptance-banner');
Route::get('/extra/orders', 'MainController@extraOrders')->name('extra-orders');
Route::get('/extra/order-details', 'MainController@extraOrderDetails')->name('extra-order-details');
Route::get('/extra/products', 'MainController@extraProducts')->name('extra-products');
Route::get('/extra/product-details', 'MainController@extraProductDetails')->name('extra-product-details');
Route::get('/extra/file-manager', 'MainController@extraFileManager')->name('extra-file-manager');
Route::get('/extra/pricing-page', 'MainController@extraPricingPage')->name('extra-pricing-page');
Route::get('/extra/messenger-page', 'MainController@extraMessengerPage')->name('extra-messenger-page');
Route::get('/extra/data-management', 'MainController@extraDataManagement')->name('extra-data-management');
Route::get('/extra/settings-page', 'MainController@extraSettingsPage')->name('extra-settings-page');

Route::get('/login/v1', 'MainController@loginV1')->name('login-v1');
Route::get('/login/v2', 'MainController@loginV2')->name('login-v2');
Route::get('/login/v3', 'MainController@loginV3')->name('login-v3');
Route::get('/register/v3', 'MainController@registerV3')->name('register-v3');

Route::get('/helper/css', 'MainController@helperCSS')->name('helper-css');