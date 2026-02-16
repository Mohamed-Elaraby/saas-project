<?php


use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RoleElementController;
use App\Http\Controllers\Admin\RolesManagerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PagesController as template_PagesController;
use App\Http\Controllers\UielementsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\IconsController;

use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CarDevelopmentCodeController;
use App\Http\Controllers\Admin\CarEngineController;
use App\Http\Controllers\Admin\CarModelController;
use App\Http\Controllers\Admin\CarSizeController;
use App\Http\Controllers\Admin\CarTypeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CheckController;
use App\Http\Controllers\Admin\CheckStatusController;
use App\Http\Controllers\Admin\ClientCollectingController;
use App\Http\Controllers\Admin\ClientPaymentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EngineerController;
use App\Http\Controllers\Admin\ExpensesController;
use App\Http\Controllers\Admin\ExpensesTypeController;
use App\Http\Controllers\Admin\InternalTransferController;
use App\Http\Controllers\Admin\JobTitleController;
use App\Http\Controllers\Admin\MoneySafeController;
use App\Http\Controllers\Admin\PriceListController;
use App\Http\Controllers\Admin\ProductCodeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PurchaseOrderController;
use App\Http\Controllers\Admin\PurchaseOrderReturnController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\SaleOrderController;
use App\Http\Controllers\Admin\SaleOrderReturnController;
use App\Http\Controllers\Admin\StatementController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SupplierCollectingController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\SupplierPaymentController;
use App\Http\Controllers\Admin\TechnicalController;

// use App\Http\Controllers\Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


    Auth::routes(
        [
            'register' => false, // Registration Routes...
            'reset' => false,   // Password Reset Routes...
            'verify' => false, // Email Verification Routes...
        ]
    );

    Route::prefix('admin')
        ->name('admin.')
        ->middleware('auth')
        ->group(function (){

            Route::get('setting', [SettingController::class, 'index'])                                                  ->name('setting.index');
            Route::post('setting/update', [SettingController::class, 'update'])                                         ->name('setting.update');
            Route::post('setting/remove_company_logo', [SettingController::class, 'remove_company_logo'])               ->name('setting.remove.company_logo');
            Route::get('load_roles_list', [RolesManagerController::class, 'load_roles_list'])                           ->name('rolesManager.load_roles_list');
            Route::get('getRolePermissions', [RolesManagerController::class, 'getRolePermissions'])                     ->name('rolesManager.getRolePermissions');
            Route::get('syncPermissions', [RolesManagerController::class, 'syncPermissions'])                           ->name('rolesManager.syncPermissions');
            Route::get('sync_select_all_permissions', [RolesManagerController::class, 'sync_select_all_permissions'])   ->name('rolesManager.sync_select_all_permissions');
            Route::get('sync_group_permissions', [RolesManagerController::class, 'sync_group_permissions'])             ->name('rolesManager.sync_group_permissions');
            Route::get('delete_role', [RolesManagerController::class, 'delete_role'])                                   ->name('rolesManager.delete_role');
            Route::get('delete_permission', [RolesManagerController::class, 'delete_permission'])                       ->name('rolesManager.delete_permission');
            Route::get('load_elements', [RoleElementController::class, 'load_elements'])                                ->name('roleElement.load_elements');
            Route::get('delete_element', [RoleElementController::class, 'delete_element'])                              ->name('roleElement.delete_element');

            Route::get('clientTransactions/{client_id}', [ClientController::class, 'clientTransactions'])->name('clientTransactions');
            Route::get('clientTransactionsPrint/{client_id}', [ClientController::class, 'clientTransactionsPrint'])->name('clientTransactions.print');

            Route::get('supplierTransactions/{supplier_id}', [SupplierController::class, 'supplierTransactions'])->name('supplierTransactions');
            Route::get('supplierTransactionsPrint/{supplier_id}', [SupplierController::class, 'supplierTransactionsPrint'])->name('supplierTransactions.print');

            Route::get('internalTransfer', [InternalTransferController::class, 'index'])->name('product.transfer.index');
            Route::get('transfer_product/{product_id}', [InternalTransferController::class, 'transfer_product'])->name('product.transfer');
            Route::post('transfer_product_store', [InternalTransferController::class, 'transfer_product_store'])->name('product.transfer.store');
            Route::get('change_product_status', [InternalTransferController::class, 'change_product_status'])->name('product.transfer.status.change');

            Route::get('statement_print', [StatementController::class, 'statement_print'])->name('statement.print');
            Route::get('get_tables_of_statement', [StatementController::class, 'get_tables_of_statement'])->name('statement.table');

            Route::get('moneySafeOperations/{branch_id}', [MoneySafeController::class, 'operations'])->name('moneySafe.operations');
            Route::post('moneySafeOperationStore', [MoneySafeController::class, 'store'])->name('moneySafe.store');

            Route::get('bankOperations/{branch_id}', [BankController::class, 'operations'])->name('bank.operations');
            Route::post('bankOperationStore', [BankController::class, 'store'])->name('bank.store');

            Route::get('purchaseOrderProducts/{purchase_order_id}', [PurchaseOrderController::class,'purchaseOrderProducts'])->name('purchaseOrderProducts');
            Route::get('purchaseOrder/tax_invoice', [PurchaseOrderController::class, 'tax_invoice'])->name('purchaseOrder.tax_invoice');
            Route::get('search_product_code', [PurchaseOrderController::class, 'search_product_code'])->name('search_product_code');
            Route::get('check_amount_from_moneySafe_and_bank', [PurchaseOrderController::class, 'check_amount_from_moneySafe_and_bank'])->name('purchaseOrder.check_amount_from_moneySafe_and_bank');


//            Route::get('images/{check_id}/{type}', [CheckController::class, 'images'])->name('check.images');
//            Route::get('createDeviceReport/{check_id}/{check_number}', [CheckController::class, 'create_device_report'])->name('check.createDeviceReport');
//            Route::post('storeDeviceReport', [CheckController::class, 'store_device_report'])->name('check.storeDeviceReport');
//            Route::post('signature', [CheckController::class, 'signature'])->name('check.signature');
//            Route::get('client_signature/{check_id}/{check_number}', [CheckController::class, 'client_signature'])->name('check.clientSignature');
//            Route::post('editCheckStatus', [CheckController::class, 'onlyEditCheckStatus'])->name('check.onlyEditCheckStatus');
//            Route::get('receipt/{check_id}', [CheckController::class, 'receipt'])->name('check.receipt');
//            Route::get('receipt_print', [CheckController::class, 'receipt_print'])->name('check.receipt_print');
//            Route::get('receipt_download', [CheckController::class, 'receipt_download_without_last_page'])->name('check.receipt_download');
//            Route::post('getCarSizesByAjax', [CarController::class, 'getCarSizesByAjax'])->name('car.getCarSizesByAjax');
//            Route::post('getCarDevCodeAndEnginesByAjax', [CarController::class, 'getCarDevCodeAndEnginesByAjax'])->name('car.getCarDevCodeAndEnginesByAjax');
//            Route::get('managementNotes/{check_id}', [CheckController::class, 'managementNotes'])->name('check.managementNotes');
//            Route::post('managementNotesUpdate/{check_id}', [CheckController::class, 'managementNotesUpdate'])->name('check.managementNotesUpdate');
//            Route::get('selectBranch', [CheckController::class, 'selectBranch'])->name('selectBranch');
//            Route::get('generate_pdf/{check_id}', [CheckController::class, 'generate_pdf'])->name('check.generate_pdf');
//            Route::get('transfer_car_ownership_view/{car_id}', [CarController::class, 'transfer_car_ownership_view'])->name('car.transfer_car_ownership_view');
//            Route::get('select2-autocomplete-ajax', [CarController::class, 'dataAjax'])->name('car.dataAjax');
//            Route::post('transfer_car_ownership/{car_id}', [CarController::class, 'transfer_car_ownership'])->name('car.transfer_car_ownership');


//            Route::get('get_all_products_in_branch', [SaleOrderController::class, 'get_all_products_in_branch'])->name('get_all_products_in_branch');
//            Route::get('get_all_products_in_branch_edit', [SaleOrderController::class, 'get_all_products_in_branch_edit'])->name('get_all_products_in_branch_edit');
//

//            Route::get('saleOrderProducts/{sale_order_id}', [SaleOrderController::class, 'saleOrderProducts'])->name('saleOrderProducts');
//
//
//            Route::get('saleOrderReturnProducts/{sale_order_return_id}', [SaleOrderReturnController::class,'saleOrderReturnProducts'])->name('saleOrderReturnProducts');
//            Route::get('purchaseOrderReturnProducts/{purchase_order_return_id}', [PurchaseOrderReturnController::class,'purchaseOrderReturnProducts'])->name('purchaseOrderReturnProducts');


//            Route::get('tax_invoice', [SaleOrderController::class, 'tax_invoice'])->name('tax_invoice');
//            Route::get('simplified_tax_invoice', [SaleOrderController::class, 'simplified_tax_invoice'])->name('simplified_tax_invoice');
//            Route::get('getClientBalance', [SaleOrderController::class, 'getClientBalance'])->name('getClientBalance');
//            Route::get('reports', [ReportsController::class, 'index'])->name('reports');
//            Route::get('getDataSearch', [ReportsController::class, 'getDataSearch'])->name('getDataSearch');
//            Route::get('technical_productivity', [TechnicalController::class, 'technical_productivity'])->name('technical_productivity');
//            Route::get('get_technical_productivity_by_ajax', [TechnicalController::class, 'get_technical_productivity_by_ajax'])->name('get_technical_productivity_by_ajax');
//            Route::get('get_all_clients_by_ajax', [ClientController::class, 'get_all_clients_by_ajax'])->name('get_all_clients_by_ajax');
//            Route::get('priceListProducts/{price_list_id}', [PriceListController::class, 'priceListProducts'])->name('priceListProducts');
//            Route::get('download_price_list', [PriceListController::class, 'download_price_list'])->name('download_price_list');
//            Route::get('download_work_order', [PriceListController::class, 'download_work_order'])->name('download_work_order');




            Route::get('myLogout', function (){

                return '<a onclick="event.preventDefault(); document.getElementById(\'logout-form\').submit();" href="'.route('logout').'">LOGOUT</a><form id="logout-form" action="'.route('logout').'" method="POST" class="d-none"><input type="hidden" name="_token" value="'.csrf_token().'"></form>';
            });
//    Route::resource('users', UsersController::class)->except('show');
            Route::resources([
                'users'                     => UserController::class,
                'rolesManager'              => RolesManagerController::class,
                'roleElements'              => RoleElementController::class,
                'profiles'                  => ProfileController::class,
                'clients'                   => ClientController::class,
                'clientPayments'            => ClientPaymentController::class,
                'clientCollecting'          => ClientCollectingController::class,
                'suppliers'                 => SupplierController::class,
                'supplierPayments'          => SupplierPaymentController::class,
                'supplierCollecting'        => SupplierCollectingController::class,
                'branches'                  => BranchController::class,
                'expenses'                  => ExpensesController::class,
                'expensesTypes'             => ExpensesTypeController::class,
                'statement'                 => StatementController::class,
                'categories'                => CategoryController::class,
                'subCategories'             => SubCategoryController::class,
                'products'                  => ProductController::class,
                'productCodes'              => ProductCodeController::class,
                'purchaseOrders'            => PurchaseOrderController::class,
                'purchaseOrderReturns'      => PurchaseOrderReturnController::class,

                'cars'                      => CarController::class,
                'carType'                   => CarTypeController::class,
                'carSize'                   => CarSizeController::class,
                'carEngine'                 => CarEngineController::class,
                'carDevelopmentCode'        => CarDevelopmentCodeController::class,



//                'check'                     => CheckController::class,
//                'checkStatus'               => CheckStatusController::class,
//                'technicals'                => TechnicalController::class,
//                'engineers'                 => EngineerController::class,
//                'jobTitle'                  => JobTitleController::class,
//                'carModel'                  => CarModelController::class,
//                'saleOrders'                => SaleOrderController::class,
//                'saleOrderReturns'          => SaleOrderReturnController::class,
//                'priceList'                 => PriceListController::class,

            ]);
        });



});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::get('services/web-development', [PagesController::class, 'index'])->name('services.webDevelopment');
    Route::get('services/software-solutions', [PagesController::class, 'index'])->name('services.softwareSolutions');
    Route::get('services/ui-ux-design', [PagesController::class, 'index'])->name('services.UIUXDesign');
    Route::get('services/digital-transformation', [PagesController::class, 'index'])->name('services.digitalTransformation');
    Route::get('products/spare-parts-management-system', [PagesController::class, 'index'])->name('products.sparePartsManagementSystem');
    Route::get('products/automotive-service-center-management-system', [PagesController::class, 'index'])->name('products.automotiveServiceCenterManagementSystem');

Route::get('go-to-spareparts', function () {
    // Redirect للرابط القديم على HTTP
    return redirect()->away('http://spareparts.seven-scapital.com');
})->name('spareparts.redirect');


Auth::routes(
//        [
//            'register' => false, // Registration Routes...
//            'reset' => false,   // Password Reset Routes...
//            'verify' => false, // Email Verification Routes...
//        ]
    );

// DASHBOARDS //
//Route::get('', [DashboardsController::class, 'index']);
// Route::get('index', [DashboardsController::class, 'index']);
// Route::get('index2', [DashboardsController::class, 'index2']);
// Route::get('index3', [DashboardsController::class, 'index3']);
// Route::get('index4', [DashboardsController::class, 'index4']);
// Route::get('index5', [DashboardsController::class, 'index5']);
// Route::get('index6', [DashboardsController::class, 'index6']);
// Route::get('index7', [DashboardsController::class, 'index7']);
// Route::get('index8', [DashboardsController::class, 'index8']);
// Route::get('index9', [DashboardsController::class, 'index9']);
// Route::get('index10', [DashboardsController::class, 'index10']);
// Route::get('index11', [DashboardsController::class, 'index11']);
// Route::get('index12', [DashboardsController::class, 'index12']);


// // PAGES //

// Route::get('blog', [template_PagesController::class, 'blog']);
// Route::get('blog-create', [template_PagesController::class, 'blog_create']);
// Route::get('blog-details', [template_PagesController::class, 'blog_details']);
// Route::get('chat', [template_PagesController::class, 'chat']);
// Route::get('contact-us', [template_PagesController::class, 'contact_us']);
// Route::get('contacts', [template_PagesController::class, 'contacts']);
// Route::get('empty-page', [template_PagesController::class, 'empty_page']);
// Route::get('faqs', [template_PagesController::class, 'faqs']);
// Route::get('invoice-create', [template_PagesController::class, 'invoice_create']);
// Route::get('invoice-details', [template_PagesController::class, 'invoice_details']);
// Route::get('invoice-list', [template_PagesController::class, 'invoice_list']);
// Route::get('landing-jobs', [template_PagesController::class, 'landing_jobs']);
// Route::get('landing', [template_PagesController::class, 'landing']);
// Route::get('mail-settings', [template_PagesController::class, 'mail_settings']);
// Route::get('mail', [template_PagesController::class, 'mail']);
// Route::get('notifications', [template_PagesController::class, 'notifications']);
// Route::get('pricing', [template_PagesController::class, 'pricing']);
// Route::get('profile-settings', [template_PagesController::class, 'profile_settings']);
// Route::get('profile', [template_PagesController::class, 'profile']);
// Route::get('reviews', [template_PagesController::class, 'reviews']);
// Route::get('search-page', [template_PagesController::class, 'search_page']);
// Route::get('team', [template_PagesController::class, 'team']);
// Route::get('terms-conditions', [template_PagesController::class, 'terms_conditions']);
// Route::get('timeline', [template_PagesController::class, 'timeline']);
// Route::get('todo-list', [template_PagesController::class, 'todo_list']);



// // UI ELEMENTS //
// Route::get('alerts', [UielementsController::class, 'alerts']);
// Route::get('badges', [UielementsController::class, 'badges']);
// Route::get('breadcrumbs', [UielementsController::class, 'breadcrumbs']);
// Route::get('buttongroups', [UielementsController::class, 'buttongroups']);
// Route::get('buttons', [UielementsController::class, 'buttons']);
// Route::get('cards', [UielementsController::class, 'cards']);
// Route::get('dropdowns', [UielementsController::class, 'dropdowns']);
// Route::get('images-figures', [UielementsController::class, 'images_figures']);
// Route::get('links-interactions', [UielementsController::class, 'links_interactions']);
// Route::get('listgroups', [UielementsController::class, 'listgroups']);
// Route::get('navs-tabs', [UielementsController::class, 'navs_tabs']);
// Route::get('object-fit', [UielementsController::class, 'object_fit']);
// Route::get('paginations', [UielementsController::class, 'paginations']);
// Route::get('popovers', [UielementsController::class, 'popovers']);
// Route::get('progress', [UielementsController::class, 'progress']);
// Route::get('spinners', [UielementsController::class, 'spinners']);
// Route::get('toasts', [UielementsController::class, 'toasts']);
// Route::get('tooltips', [UielementsController::class, 'tooltips']);
// Route::get('typography', [UielementsController::class, 'typography']);


// // AUTHENTICATION //
// Route::get('coming-soon', [AuthenticationController::class, 'coming_soon']);
// Route::get('createpassword-basic', [AuthenticationController::class, 'createpassword_basic']);
// Route::get('createpassword-cover', [AuthenticationController::class, 'createpassword_cover']);
// Route::get('lockscreen-basic', [AuthenticationController::class, 'lockscreen_basic']);
// Route::get('lockscreen-cover', [AuthenticationController::class, 'lockscreen_cover']);
// Route::get('resetpassword-basic', [AuthenticationController::class, 'resetpassword_basic']);
// Route::get('resetpassword-cover', [AuthenticationController::class, 'resetpassword_cover']);
// Route::get('signup-basic', [AuthenticationController::class, 'signup_basic']);
// Route::get('signup-cover', [AuthenticationController::class, 'signup_cover']);
// Route::get('signin-basic', [AuthenticationController::class, 'signin_basic']);
// Route::get('signin-cover', [AuthenticationController::class, 'signin_cover']);
// Route::get('twostep-verification-basic', [AuthenticationController::class, 'twostep_verification_basic']);
// Route::get('twostep-verification-cover', [AuthenticationController::class, 'twostep_verification_cover']);
// Route::get('under-maintenance', [AuthenticationController::class, 'under_maintenance']);


// // ERROR //
// Route::get('error401', [ErrorController::class, 'error401']);
// Route::get('error404', [ErrorController::class, 'error404']);
// Route::get('error500', [ErrorController::class, 'error500']);


// // CHARTS //
// Route::get('apex-area-charts', [ChartsController::class, 'apex_area_charts']);
// Route::get('apex-bar-charts', [ChartsController::class, 'apex_bar_charts']);
// Route::get('apex-boxplot-charts', [ChartsController::class, 'apex_boxplot_charts']);
// Route::get('apex-bubble-charts', [ChartsController::class, 'apex_bubble_charts']);
// Route::get('apex-candlestick-charts', [ChartsController::class, 'apex_candlestick_charts']);
// Route::get('apex-column-charts', [ChartsController::class, 'apex_column_charts']);
// Route::get('apex-funnel-charts', [ChartsController::class, 'apex_funnel_charts']);
// Route::get('apex-heatmap-charts', [ChartsController::class, 'apex_heatmap_charts']);
// Route::get('apex-line-charts', [ChartsController::class, 'apex_line_charts']);
// Route::get('apex-mixed-charts', [ChartsController::class, 'apex_mixed_charts']);
// Route::get('apex-pie-charts', [ChartsController::class, 'apex_pie_charts']);
// Route::get('apex-polararea-charts', [ChartsController::class, 'apex_polararea_charts']);
// Route::get('apex-radar-charts', [ChartsController::class, 'apex_radar_charts']);
// Route::get('apex-radialbar-charts', [ChartsController::class, 'apex_radialbar_charts']);
// Route::get('apex-rangearea-charts', [ChartsController::class, 'apex_rangearea_charts']);
// Route::get('apex-scatter-charts', [ChartsController::class, 'apex_scatter_charts']);
// Route::get('apex-timeline-charts', [ChartsController::class, 'apex_timeline_charts']);
// Route::get('apex-treemap-charts', [ChartsController::class, 'apex_treemap_charts']);
// Route::get('chartjs-charts', [ChartsController::class, 'chartjs_charts']);
// Route::get('echarts', [ChartsController::class, 'echarts']);


// // APPS //
// Route::get('add-products', [AppsController::class, 'add_products']);
// Route::get('cart', [AppsController::class, 'cart']);
// Route::get('checkout', [AppsController::class, 'checkout']);
// Route::get('edit-products', [AppsController::class, 'edit_products']);
// Route::get('file-manager', [AppsController::class, 'file_manager']);
// Route::get('order-details', [AppsController::class, 'order_details']);
// Route::get('orders', [AppsController::class, 'orders']);
// Route::get('product-details', [AppsController::class, 'product_details']);
// Route::get('product-list', [AppsController::class, 'product_list']);
// Route::get('products', [AppsController::class, 'products']);
// Route::get('wishlist', [AppsController::class, 'wishlist']);
// Route::get('crm-companies', [AppsController::class, 'crm_companies']);
// Route::get('crm-contacts', [AppsController::class, 'crm_contacts']);
// Route::get('crm-deals', [AppsController::class, 'crm_deals']);
// Route::get('crm-leads', [AppsController::class, 'crm_leads']);
// Route::get('crypto-buy-sell', [AppsController::class, 'crypto_buy_sell']);
// Route::get('crypto-currency-exchange', [AppsController::class, 'crypto_currency_exchange']);
// Route::get('crypto-marketcap', [AppsController::class, 'crypto_marketcap']);
// Route::get('crypto-transactions', [AppsController::class, 'crypto_transactions']);
// Route::get('crypto-wallet', [AppsController::class, 'crypto_wallet']);
// Route::get('full-calendar', [AppsController::class, 'full_calendar']);
// Route::get('gallery', [AppsController::class, 'gallery']);
// Route::get('job-candidate-details', [AppsController::class, 'job_candidate_details']);
// Route::get('job-candidate-search', [AppsController::class, 'job_candidate_search']);
// Route::get('job-company-search', [AppsController::class, 'job_company_search']);
// Route::get('job-details', [AppsController::class, 'job_details']);
// Route::get('job-post', [AppsController::class, 'job_post']);
// Route::get('job-search', [AppsController::class, 'job_search']);
// Route::get('job-list', [AppsController::class, 'job_list']);
// Route::get('nft-create', [AppsController::class, 'nft_create']);
// Route::get('nft-details', [AppsController::class, 'nft_details']);
// Route::get('nft-live-auction', [AppsController::class, 'nft_live_auction']);
// Route::get('nft-marketplace', [AppsController::class, 'nft_marketplace']);
// Route::get('nft-wallet-integration', [AppsController::class, 'nft_wallet_integration']);
// Route::get('projects-create', [AppsController::class, 'projects_create']);
// Route::get('projects-list', [AppsController::class, 'projects_list']);
// Route::get('projects-overview', [AppsController::class, 'projects_overview']);
// Route::get('sweet-alerts', [AppsController::class, 'sweet_alerts']);
// Route::get('task-details', [AppsController::class, 'task_details']);
// Route::get('task-kanban-board', [AppsController::class, 'task_kanban_board']);
// Route::get('task-list-view', [AppsController::class, 'task_list_view']);


// // ADVANCED UI //
// Route::get('accordions-collapse', [AdvanceduiController::class, 'accordions_collapse']);
// Route::get('carousel', [AdvanceduiController::class, 'carousel']);
// Route::get('draggable-cards', [AdvanceduiController::class, 'draggable_cards']);
// Route::get('modals-closes', [AdvanceduiController::class, 'modals_closes']);
// Route::get('navbars', [AdvanceduiController::class, 'navbars']);
// Route::get('offcanvas', [AdvanceduiController::class, 'offcanvas']);
// Route::get('placeholders', [AdvanceduiController::class, 'placeholders']);
// Route::get('ratings', [AdvanceduiController::class, 'ratings']);
// Route::get('ribbons', [AdvanceduiController::class, 'ribbons']);
// Route::get('scrollspy', [AdvanceduiController::class, 'scrollspy']);
// Route::get('sortable-list', [AdvanceduiController::class, 'sortable_list']);
// Route::get('swiperjs', [AdvanceduiController::class, 'swiperjs']);


// // UTILITIES //
// Route::get('avatars', [UtilitiesController::class, 'avatars']);
// Route::get('borders', [UtilitiesController::class, 'borders']);
// Route::get('breakpoints', [UtilitiesController::class, 'breakpoints']);
// Route::get('colors', [UtilitiesController::class, 'colors']);
// Route::get('columns', [UtilitiesController::class, 'columns']);
// Route::get('flex', [UtilitiesController::class, 'flex']);
// Route::get('gutters', [UtilitiesController::class, 'gutters']);
// Route::get('helpers', [UtilitiesController::class, 'helpers']);
// Route::get('more', [UtilitiesController::class, 'more']);
// Route::get('positions', [UtilitiesController::class, 'positions']);


// // FORMS //
// Route::get('floating-labels', [FormsController::class, 'floating_labels']);
// Route::get('form-advanced', [FormsController::class, 'form_advanced']);
// Route::get('form-check-radios', [FormsController::class, 'form_check_radios']);
// Route::get('form-color-pickers', [FormsController::class, 'form_color_pickers']);
// Route::get('form-datetime-pickers', [FormsController::class, 'form_datetime_pickers']);
// Route::get('form-file-uploads', [FormsController::class, 'form_file_uploads']);
// Route::get('form-input-groups', [FormsController::class, 'form_input_groups']);
// Route::get('form-input-masks', [FormsController::class, 'form_input_masks']);
// Route::get('form-inputs', [FormsController::class, 'form_inputs']);
// Route::get('form-layouts', [FormsController::class, 'form_layouts']);
// Route::get('form-range', [FormsController::class, 'form_range']);
// Route::get('form-select', [FormsController::class, 'form_select']);
// Route::get('form-select2', [FormsController::class, 'form_select2']);
// Route::get('form-validations', [FormsController::class, 'form_validations']);
// Route::get('form-wizards', [FormsController::class, 'form_wizards']);
// Route::get('quill-editor', [FormsController::class, 'quill_editor']);


// // WIDGETS //
// Route::get('widgets', [WidgetsController::class, 'widgets']);


// // TSBLES //
// Route::get('tables', [TablesController::class, 'tables']);
// Route::get('grid-tables', [TablesController::class, 'grid_tables']);
// Route::get('data-tables', [TablesController::class, 'data_tables']);


// // MAPS //
// Route::get('google-maps', [MapsController::class, 'google_maps']);
// Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
// Route::get('vector-maps', [MapsController::class, 'vector_maps']);


// // ICONS //
// Route::get('icons', [IconsController::class, 'icons']);
