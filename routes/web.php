<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Appointment', 'PageController@appointment');
Route::get('/', 'HomeController@index');
Route::get('Home', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('category/{url}', 'CategoryController@index');
Route::get('/Our-Services', 'ServiceController@all_services');
Route::get('subcategory/{url}', 'CategoryController@subcategory');
Route::get('trade/view/{url}', 'ServiceController@subservice');
Route::get('service/{url}', 'ServiceController@index');
Route::get('subservice/{url}', 'ServiceController@subservice');
Route::get('/Office-Dismantling-Buyer', 'BlogController@office_dismantling');
Route::get('/Packages', 'PackageController@index');
Route::get('/Pay-Now', 'PaymentController@index');
Route::get('/project/{url}', 'ProjectController@index');
Route::get('/Blogs', 'BlogController@index');
Route::get('/blog/{url}', 'BlogController@view');
Route::post('/submit-blog-comment', 'BlogController@submit_comment');
Route::get('Gallery', 'GalleryController@index');
Route::get('/{url}', 'PageController@index');
Route::get('product/{url}', 'ProductController@index');
Route::post('send-mail', 'MailController@index');
Route::get('/seoranking/all', 'PageController@all_seoranking');







  



Route::group(['middleware' => ['auth','user']], function () {
       Route::get('/user/dashboard', 'DashboardController@index');
       Route::get('/user/edit/{id}', 'DashboardController@edit_user');
       Route::post('/user/update/{id}', 'DashboardController@update_user');
       Route::get('/user/change-password', 'DashboardController@password');
       Route::post('user/update-password/{id}', 'DashboardController@update_password');
});


Route::group(['middleware' => ['auth','admin']], function () {
      Route::get('/admin/dashboard', 'Admin\DashboardController@index');
      Route::get('/myadmins/new ', 'Admin\DashboardController@index');
     
       /* user related routes */
      Route::resource('/admin/users', 'Admin\UserController');
      Route::get('/admin/user/{id}', 'Admin\UserController@destroy');
      Route::post('admin/user/deleteAll', 'Admin\UserController@deleteall');
      /* admin related routes */
      Route::resource('/admin/admins', 'Admin\AdminController');
      Route::get('/admin/admin/{id}', 'Admin\AdminController@destroy');
      Route::post('admin/admins/deleteAll', 'Admin\AdminController@deleteall');
   
     /* Company details related routes */
      Route::resource('/admin/companies', 'Admin\CompanyController');
      Route::get('/admin/company/{id}', 'Admin\CompanyController@destroy');
      Route::post('admin/company/deleteAll', 'Admin\CompanyController@deleteall');
    
    /* Company details related routes */
      Route::resource('/admin/cmspages', 'Admin\CmsController');
      Route::get('/admin/cmspage/{id}', 'Admin\CmsController@destroy');
      Route::post('admin/cmspage/deleteAll', 'Admin\CmsController@deleteAll');
      Route::post('admin/cmspage/disableAll', 'Admin\CmsController@disableAll');
      Route::post('admin/cmspage/enableAll', 'Admin\CmsController@enableAll');
    
     /* Seoranking details related routes */
     Route::resource('/admin/seorankings', 'Admin\SEORankingController');
      Route::get('/admin/seoranking/{id}', 'Admin\SEORankingController@destroy');
      Route::post('admin/seoranking/deleteAll', 'Admin\SEORankingController@deleteAll');
      Route::post('admin/seoranking/disableAll', 'Admin\SEORankingController@disableAll');
      Route::post('admin/seoranking/enableAll', 'Admin\SEORankingController@enableAll');
    
    
     /* Category details related routes */
      Route::resource('/admin/categories', 'Admin\CategoryController');
      Route::get('/admin/category/{id}', 'Admin\CategoryController@destroy');
      Route::post('admin/category/deleteAll', 'Admin\CategoryController@deleteAll');
      Route::post('admin/category/disableAll', 'Admin\CategoryController@disableAll');
      Route::post('admin/category/enableAll', 'Admin\CategoryController@enableAll');
      Route::post('admin/category/setPopularAll', 'Admin\CategoryController@setPopularAll');
      Route::post('admin/category/setFeatureAll', 'Admin\CategoryController@setFeatureAll');
      Route::post('admin/category/setHotAll', 'Admin\CategoryController@setHotAll');
      Route::post('admin/category/setBestAll', 'Admin\CategoryController@setBestAll');
      Route::post('admin/category/setNewAll', 'Admin\CategoryController@setNewAll');
      Route::post('admin/category/setOfferAll', 'Admin\CategoryController@setOfferAll');
      Route::post('admin/category/setHomeAll', 'Admin\CategoryController@setHomeAll');
    
     /* SubCategory details related routes */
      Route::resource('/admin/subcategories', 'Admin\SubcategoryController');
      Route::get('/admin/subcategory/{id}', 'Admin\SubcategoryController@destroy');
      Route::get('/admin/delete_image_subcat/{id}', 'Admin\SubcategoryController@destroy_subcat_image');
      Route::post('admin/subcategory/deleteAll', 'Admin\SubcategoryController@deleteAll');
      Route::post('admin/subcategory/disableAll', 'Admin\SubcategoryController@disableAll');
      Route::post('admin/subcategory/enableAll', 'Admin\SubcategoryController@enableAll');
      Route::post('admin/subcategory/setPopularAll', 'Admin\SubcategoryController@setPopularAll');
      Route::post('admin/subcategory/setFeatureAll', 'Admin\SubcategoryController@setFeatureAll');
      Route::post('admin/subcategory/setHotAll', 'Admin\SubcategoryController@setHotAll');
      Route::post('admin/subcategory/setBestAll', 'Admin\SubcategoryController@setBestAll');
      Route::post('admin/subcategory/setNewAll', 'Admin\SubcategoryController@setNewAll');
      Route::post('admin/subcategory/setOfferAll', 'Admin\SubcategoryController@setOfferAll');
      Route::post('admin/subcategory/setHomeAll', 'Admin\SubcategoryController@setHomeAll');
    
    
     /* Products details related routes */
      Route::resource('/admin/products', 'Admin\ProductController');
      Route::get('/admin/product/{id}', 'Admin\ProductController@destroy');
      Route::get('/admin/delete_image_pro/{id}', 'Admin\ProductController@destroy_pro_image');
      Route::post('admin/product/deleteAll', 'Admin\ProductController@deleteAll');
      Route::post('admin/product/disableAll', 'Admin\ProductController@disableAll');
      Route::post('admin/product/enableAll', 'Admin\ProductController@enableAll');
      Route::post('admin/product/setPopularAll', 'Admin\ProductController@setPopularAll');
      Route::post('admin/product/setFeatureAll', 'Admin\ProductController@setFeatureAll');
      Route::post('admin/product/setHotAll', 'Admin\ProductController@setHotAll');
      Route::post('admin/product/setBestAll', 'Admin\ProductController@setBestAll');
      Route::post('admin/product/setNewAll', 'Admin\ProductController@setNewAll');
      Route::post('admin/product/setOfferAll', 'Admin\ProductController@setOfferAll');
      Route::post('admin/product/setHomeAll', 'Admin\ProductController@setHomeAll');
    
     /* Products Comment details related routes */
      Route::resource('/admin/product-comments', 'Admin\CommentController');
      Route::get('/admin/product-comment/{id}', 'Admin\CommentController@destroy');
    /* blogs  details related routes */
      Route::resource('/admin/blogs', 'Admin\BlogController');
      Route::get('/admin/blog/{id}', 'Admin\BlogController@destroy');
      Route::post('admin/blog/deleteAll', 'Admin\BlogController@deleteAll');
      Route::post('admin/blog/disableAll', 'Admin\BlogController@disableAll');
      Route::post('admin/blog/enableAll', 'Admin\BlogController@enableAll');
      Route::post('admin/blog/setHomeAll', 'Admin\BlogController@setHomeAll');
    /* blogs  comment related routes */
      Route::resource('/admin/blog-comments', 'Admin\BlogCommentController');
      Route::get('/admin/blog-comment/{id}', 'Admin\BlogCommentController@destroy');
      Route::post('admin/blog-comment/deleteAll', 'Admin\BlogCommentController@deleteAll');
      Route::post('admin/blog-comment/disableAll', 'Admin\BlogCommentController@disableAll');
      Route::post('admin/blog-comment/enableAll', 'Admin\BlogCommentController@enableAll');
    /* Service  details related routes */
      Route::resource('/admin/services', 'Admin\ServiceController');
      Route::get('/admin/service/{id}', 'Admin\ServiceController@destroy');
      Route::post('admin/service/deleteAll', 'Admin\ServiceController@deleteAll');
      Route::post('admin/service/disableAll', 'Admin\ServiceController@disableAll');
      Route::post('admin/service/enableAll', 'Admin\ServiceController@enableAll');
      Route::post('admin/service/setPopularAll', 'Admin\ServiceController@setPopularAll');
      Route::post('admin/service/setFeatureAll', 'Admin\ServiceController@setFeatureAll');
      Route::post('admin/service/setHotAll', 'Admin\ServiceController@setHotAll');
      Route::post('admin/service/setBestAll', 'Admin\ServiceController@setBestAll');
      Route::post('admin/service/setNewAll', 'Admin\ServiceController@setNewAll');
      Route::post('admin/service/setOfferAll', 'Admin\ServiceController@setOfferAll');
      Route::post('admin/service/setHomeAll', 'Admin\ServiceController@setHomeAll');
    /* Service  details related routes */
      Route::resource('/admin/subservices', 'Admin\SubserviceController');
      Route::get('/admin/subservice/{id}', 'Admin\SubserviceController@destroy');
      Route::post('admin/subservice/deleteAll', 'Admin\SubserviceController@deleteAll');
      Route::post('admin/subservice/disableAll', 'Admin\SubserviceController@disableAll');
      Route::post('admin/subservice/enableAll', 'Admin\SubserviceController@enableAll');
      Route::post('admin/subservice/setPopularAll', 'Admin\SubserviceController@setPopularAll');
      Route::post('admin/subservice/setFeatureAll', 'Admin\SubserviceController@setFeatureAll');
      Route::post('admin/subservice/setHotAll', 'Admin\SubserviceController@setHotAll');
      Route::post('admin/subservice/setBestAll', 'Admin\SubserviceController@setBestAll');
      Route::post('admin/subservice/setNewAll', 'Admin\SubserviceController@setNewAll');
      Route::post('admin/subservice/setOfferAll', 'Admin\SubserviceController@setOfferAll');
      Route::post('admin/subservice/setHomeAll', 'Admin\SubserviceController@setHomeAll');
    
    
     /* services  comment related routes */
      Route::resource('/admin/service-comments', 'Admin\ServiceCommentController');
      Route::get('/admin/service-comment/{id}', 'Admin\ServiceCommentController@destroy');
    
     /* blogs  details related routes */
      Route::resource('/admin/offers', 'Admin\OfferController');
      Route::get('/admin/offer/{id}', 'Admin\OfferController@destroy');
      Route::post('admin/offer/deleteAll', 'Admin\OfferController@deleteAll');
      Route::post('admin/offer/disableAll', 'Admin\OfferController@disableAll');
      Route::post('admin/offer/enableAll', 'Admin\OfferController@enableAll');
      Route::post('admin/offer/setHomeAll', 'Admin\OfferController@setHomeAll');
      
    /* gallery category  comment related routes */
      Route::resource('/admin/gcategories', 'Admin\GCategoryController');
      Route::get('/admin/gcategory/{id}', 'Admin\GCategoryController@destroy');
      Route::post('admin/gcategory/deleteAll', 'Admin\GCategoryController@deleteAll');
      Route::post('admin/gcategory/disableAll', 'Admin\GCategoryController@disableAll');
      Route::post('admin/gcategory/enableAll', 'Admin\GCategoryController@enableAll');
      /* gallery category  comment related routes */
      Route::resource('/admin/galleries', 'Admin\ImageController');
      Route::get('/admin/gallery/{id}', 'Admin\ImageController@destroy');
      Route::post('admin/gallery/deleteAll', 'Admin\ImageController@deleteAll');
      Route::post('admin/gallery/disableAll', 'Admin\ImageController@disableAll');
      Route::post('admin/gallery/enableAll', 'Admin\ImageController@enableAll');
   /* Logo related routes */
      Route::resource('/admin/logos', 'Admin\LogoController');
      Route::get('/admin/logo/{id}', 'Admin\LogoController@destroy'); 
      Route::post('admin/logo/deleteAll', 'Admin\LogoController@deleteAll');
      Route::post('admin/logo/disableAll', 'Admin\LogoController@disableAll');
      Route::post('admin/logo/enableAll', 'Admin\LogoController@enableAll');
    
      /* Logo related routes */
      Route::resource('/admin/icons', 'Admin\IconController');
      Route::get('/admin/icon/{id}', 'Admin\IconController@destroy'); 
      Route::post('admin/icon/deleteAll', 'Admin\IconController@deleteAll');
      Route::post('admin/icon/disableAll', 'Admin\IconController@disableAll');
      Route::post('admin/icon/enableAll', 'Admin\IconController@enableAll');
    
    
     /* Banners related routes */
      Route::resource('/admin/banners', 'Admin\BannerController');
      Route::get('/admin/banner/{id}', 'Admin\BannerController@destroy');
      Route::post('admin/banner/deleteAll', 'Admin\BannerController@deleteAll');
      Route::post('admin/banner/disableAll', 'Admin\BannerController@disableAll');
      Route::post('admin/banner/enableAll', 'Admin\BannerController@enableAll');
      /* hows related routes */
      Route::resource('/admin/hows', 'Admin\HowController');
      Route::get('/admin/how/{id}', 'Admin\HowController@destroy');
      Route::post('admin/how/deleteAll', 'Admin\HowController@deleteAll');
      Route::post('admin/how/disableAll', 'Admin\HowController@disableAll');
      Route::post('admin/how/enableAll', 'Admin\HowController@enableAll');
      
    /* whys related routes */
      Route::resource('/admin/whys', 'Admin\WhyController');
      Route::get('/admin/why/{id}', 'Admin\WhyController@destroy');
      Route::post('admin/why/deleteAll', 'Admin\WhyController@deleteAll');
      Route::post('admin/why/disableAll', 'Admin\WhyController@disableAll');
      Route::post('admin/why/enableAll', 'Admin\WhyController@enableAll');
    
     /* Stories related routes */
      Route::resource('/admin/stories', 'Admin\StoryController');
      Route::get('/admin/story/{id}', 'Admin\StoryController@destroy');
      Route::post('admin/story/deleteAll', 'Admin\StoryController@deleteAll');
      Route::post('admin/story/disableAll', 'Admin\StoryController@disableAll');
      Route::post('admin/story/enableAll', 'Admin\StoryController@enableAll');
    
     /* Projects category related routes */
      Route::resource('/admin/ProjectCategories', 'Admin\ProjectCategoryController');
      Route::get('/admin/ProjectCategory/{id}', 'Admin\ProjectCategoryController@destroy');
      Route::post('admin/ProjectCategory/deleteAll', 'Admin\ProjectCategoryController@deleteAll');
      Route::post('admin/ProjectCategory/disableAll', 'Admin\ProjectCategoryController@disableAll');
      Route::post('admin/ProjectCategory/enableAll', 'Admin\ProjectCategoryController@enableAll');
     /* Projects related routes */
      Route::resource('/admin/all_projects', 'Admin\ProjectController');
      Route::get('/admin/project/{id}', 'Admin\ProjectController@destroy');
      Route::post('admin/projects/deleteAll', 'Admin\ProjectController@deleteAll');
      Route::post('admin/projects/disableAll', 'Admin\ProjectController@disableAll');
      Route::post('admin/projects/enableAll', 'Admin\ProjectController@enableAll');
      Route::post('admin/projects/setPopularAll', 'Admin\ProjectController@setPopularAll');
      Route::post('admin/projects/setFeatureAll', 'Admin\ProjectController@setFeatureAll');
      Route::post('admin/projects/setHotAll', 'Admin\ProjectController@setHotAll');
      Route::post('admin/projects/setBestAll', 'Admin\ProjectController@setBestAll');
      Route::post('admin/projects/setNewAll', 'Admin\ProjectController@setNewAll');
      Route::post('admin/projects/setOfferAll', 'Admin\ProjectController@setOfferAll');
      Route::post('admin/projects/setHomeAll', 'Admin\ProjectController@setHomeAll');
    /* Testimonials related routes */
      Route::resource('/admin/testimonials', 'Admin\TestimonialController');
      Route::get('/admin/testimonial/{id}', 'Admin\TestimonialController@destroy');
      Route::post('admin/testimonial/deleteAll', 'Admin\TestimonialController@deleteAll');
      Route::post('admin/testimonial/disableAll', 'Admin\TestimonialController@disableAll');
      Route::post('admin/testimonial/enableAll', 'Admin\TestimonialController@enableAll');
     /* clients related routes */
      Route::resource('/admin/clients', 'Admin\ClientController');
      Route::get('/admin/client/{id}', 'Admin\ClientController@destroy');
      Route::post('admin/client/deleteAll', 'Admin\ClientController@deleteAll');
      Route::post('admin/client/disableAll', 'Admin\ClientController@disableAll');
      Route::post('admin/client/enableAll', 'Admin\ClientController@enableAll');
     /* packages related routes */
      Route::resource('/admin/packages', 'Admin\PackageController');
      Route::get('/admin/package/{id}', 'Admin\PackageController@destroy');
      Route::post('admin/package/deleteAll', 'Admin\PackageController@deleteAll');
      Route::post('admin/package/disableAll', 'Admin\PackageController@disableAll');
      Route::post('admin/package/enableAll', 'Admin\PackageController@enableAll');
    
    /* teams related routes */
      Route::resource('/admin/teams', 'Admin\TeamController');
      Route::get('/admin/team/{id}', 'Admin\TeamController@destroy');
      Route::post('admin/team/deleteAll', 'Admin\TeamController@deleteAll');
      Route::post('admin/team/disableAll', 'Admin\TeamController@disableAll');
      Route::post('admin/team/enableAll', 'Admin\TeamController@enableAll');
    
    /* Country details related routes */
      Route::resource('/admin/countries', 'Admin\CountryController');
      Route::get('/admin/country/{id}', 'Admin\CountryController@destroy');
      Route::post('admin/country/deleteAll', 'Admin\CountryController@deleteAll');
     /* queires details related routes */
      Route::resource('/admin/queries', 'Admin\QueryController');
      Route::get('/admin/query/{id}', 'Admin\QueryController@destroy');
     /* Video related routes */
      Route::resource('/admin/videos', 'Admin\VideoController');
      Route::get('/admin/video/{id}', 'Admin\VideoController@destroy');
      Route::post('admin/video/deleteAll', 'Admin\VideoController@deleteAll');
      Route::post('admin/video/disableAll', 'Admin\VideoController@disableAll');
      Route::post('admin/video/enableAll', 'Admin\VideoController@enableAll');
     /* queires details related routes */
      Route::resource('admin/measurements', 'Admin\MeasureController');
      Route::post('admin/measure/update_status', 'Admin\MeasureController@update_status');
      Route::get('admin/measure/{id}', 'Admin\MeasureController@destroy');
      Route::post('admin/measure/deleteAll', 'Admin\MeasureController@deleteAll');
    
    
     /* office dismaltng details related routes */
      Route::get('/admin/office_dismantling', 'Admin\DismaltingController@index');
      Route::get('/admin/office_dismantling/edit/{id}', 'Admin\DismaltingController@edit');
      Route::post('/admin/office_dismantling/update/{id}', 'Admin\DismaltingController@update');
     
});