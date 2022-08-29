<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use App\Models\Tbproduct;
use App\Models\Tbcategory;
use App\Models\Tbcustomer;
use App\Models\Tbadmin;
use App\Models\Tbreview;
use livewire\Component;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

// class index extends Component {
//     public $priceInput;

//     protected $queryString = [
//         'priceInput' => ['except' => '', 'as' => price]
//     ];

//     public function render()
//     {

//         $this->products = Tbproduct::where('categoryID', $this->category->id)
//             // ->when($this->brandInputs, function ($q) {
//             //     $q->whereIn('brand', $this->brandInputs);
//             // })
//             ->when($this->priceInput, function ($q) {
//                 $q->when($this->priceInput == 'high-to-low', function ($q2) {
//                     $q2->orderBy('productPrice', 'DESC');
//                 })
//                     ->when($this->priceInput == 'low-to-high', function ($q2) {
//                         $q2->orderBy('productPrice', 'ASC');
//                     });
//             })
//             ->get();
//         $products = Tbproduct::orderBy('productID', 'DESC')->paginate(5);
//         return view('livewire.Frontend.product', [
//             'products' => $this->tbproducts,
//             'category' => $this->category,
//             'products' => $products
//         ]);
//     }
// }
