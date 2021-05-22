<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Cart;



use App\Http\Requests\Admin\Product\storeRequest;
use App\Models\SalePrice;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Select Product.*,PriceSale.Price, PriceSale.Amout
        // //      From dbo.Product Inner Join dbo.PriceSale
        // //          On Product.id = PriceSale.productId
        //$product = Product::all();
        $product =
            Product::where('product_is_disable','><',0)
            ->leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
            ->get();
        return view('admin.product.index',compact('product'));
    }
    public function indexClient()
    {

        // Select Product.*,PriceSale.Price, PriceSale.Amout
        // //      From dbo.Product Inner Join dbo.PriceSale
        // //          On Product.id = PriceSale.productId
        //$product = Product::all();
        $product =
            Product::where('product_is_disable','><',0)
            ->leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')

            ->get();
        $cate = Category::join('Products','categories.id','=','Products.categories_id')
                        ->select('categories.id','categories.categories_name',DB::raw('count(*) as amountProduct'))
                        ->groupBy('categories.id','categories.categories_name')
                        ->orderBy('amountProduct', 'DESC')
                        ->get();
        //$cate2 = $cate[0]->categorie;
        //dd($cate);
        return view('client.sites.index',compact('product','cate'));

    }
    public function menu()
    {

        // Select Product.*,PriceSale.Price, PriceSale.Amout
        // //      From dbo.Product Inner Join dbo.PriceSale
        // //          On Product.id = PriceSale.productId
        //$product = Product::all();
        $product =
            Product::where('product_is_disable','><',0)
            ->leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')

            ->get();
        $cate = Category::join('Products','categories.id','=','Products.categories_id')
                        ->select('categories.id','categories.categories_name','categories.categories_images',DB::raw('count(*) as amountProduct'))
                        ->groupBy('categories.id','categories.categories_name','categories.categories_images')
                        ->orderBy('amountProduct', 'DESC')
                        ->get();
        //$cate2 = $cate[0]->categorie;
        //dd($cate);
        return view('client.menu.index',compact('product','cate'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cate = Category::where('categories_is_disable','><',0)->get();
        return view('admin.product.create',compact('cate'));
    }
    public function renametoSlug(){
        $product = Product::all()->count();
        //dd($product);
         for ($i=1; $i <= Product::all()->count(); $i++) {
             $product = product::where('id','=',$i)->get();
             //dd($product);
             $productname = $product[0]->product_name;
             //dd($productname);
             // $productName = $product->categories_name;/
             $productname = Str::slug($productname,'-');
             Product::where('id','=',$i)->update([
                  'product_slug'=>$productname
             ]);
         }
    }
    public function doCreate(Request $request)
    {
        // str::slug(#val)
        function convert_name($str) {
            $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
            $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
            $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
            $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
            $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
            $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
            $str = preg_replace("/(đ)/", 'd', $str);
            $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
            $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
            $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
            $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
            $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
            $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
            $str = preg_replace("/(Đ)/", 'D', $str);
            $str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
            $str = preg_replace("/( )/", '-', $str);
            return strtolower($str);
        }
        // cần thêm ảnh
        $product_slug = convert_name($request->product_name);
        // $slug = explode(" ",$request->product_name);
        // $product_slug = "";
        //   foreach ($slug as $s) {
        //     $product_slug.=$s.="-";
        // }
        // $request->validate([

        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);
        $imageName = $product_slug.'.'.$request->file('image')->extension();
        $request->image->move(public_path('uploads/image/products'), $imageName);
        $imageName = 'uploads/image/products/'.$imageName;

        $query=Product::insert(
            [
               'categories_id' =>$request->categories_id,#mail
               'product_name' =>$request->product_name,//hash để mã hoá mật khẩu
               'product_description' =>$request->product_description,
               'product_slug'=>$product_slug,
               'product_image'=>$imageName,
               'product_unit'=>$request->product_unit,
               'product_amout_imports'=>$request->product_imports,
            ]
        );
        $product_id = Product::orderBy('id','desc')->get()
        ->first();
        SalePrice::insert(
            [
            "sale_price_date_import" =>date("Y-m-d H:i:s"),
            "sale_price_date_start" =>date("Y-m-d H:i:s"),
            "product_id"=>$product_id->id,
            "sale_price_values"=>$request->product_sale_price
            ]
        );
        return  redirect()->route('create-product');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeRequest $request)
    {
        //Product::create($request->all());
        return response($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cate = Category::all();
        $products =
            Product::leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->where('Products.id',$id)
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
            ->get();
        $product = $products[0];
        //echo $request->id;
        //dd($products);
        //echo $product[0]->product_name;
        return view('admin.product.update',compact('product','cate'));
    }
    public function doUpdate(Request $request, $id)
    {
        $cate = Category::all();
        $products =
            Product::leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->where('Products.id',$id)
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
            ->get();
        Product::where('id',$id)
                    ->update(['product_name'=>$request->product_name,
                            'product_unit'=>$request->product_unit,
                            'product_amout_imports'=>$request->product_imports,
                            'categories_id'=>$request->categories_id,
                            'product_description'=>$request->product_description]);
        $saleUpdate = SalePrice::where('product_id',$id)
            ->orderByDesc('id')
            ->first();
            $saleUpdate->update(
                [
                    "sale_price_date_end"=>date("Y-m-d H:i:s")
                ]);

        SalePrice::insert(
            [
            "sale_price_date_import" =>date("Y-m-d H:i:s"),
            "sale_price_date_start" =>date("Y-m-d H:i:s"),
            "product_id"=>$id,
            "sale_price_values"=>$request->product_sale_price
            ]
        );

        $product = $products[0];
        //dd($request);
        //echo('Thêm thành công');
        return view('admin.product.update',compact('product','cate'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete(Request $request)
    {
        //
        Product::where('id','=',$request->id)
                ->update(['product_is_disable'=>1]);

        // //dd($category);
        // //$data = ["category"=>Category::all()];
        // return view('admin.categories.index', compact('category'));
    }
    public function destroy($id)
    {
        //
    }
    public function cart(){
        return view('client.customer.cart');
    }
    // Hàm dùng laravel thuần để gọi thì tham số truyền vào sẽ là id được lấy từ bên html
    // public function addToCart($id){
    //     $cart = session()->get('cart');
    //     if(!$cart){
    //         $products =
    //         Product::leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
    //         ->where('Products.id',$id)
    //         ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
    //         ->get();
    //         $product = $products[0];

    //         $cart = [

    //         ]
    //     }
    // }
    // public function UpdateCart($id)
    // {

    //     $product=Product::find($id);
    //     $qty=1;
    //     Cart::add([
    //         'id' => $id,
    //         'name' => $product->product_name,
    //         'qty' => $qty,
    //         'price' =>$product->getSalePrices[0]->sale_price_values,
    //         'weight' => 0,
    //         'options' => ['img' => $product->product_image]
    //     ]);
    //     return redirect()->back();
    // }
    // Khi dùng ajax thì nó sẽ post lên và gửi về cho mình 1 cái request
    // Thay vì lấy trực tiếp bên laravel thì mình lấy thông qua request
    public function UpdateCart(Request $id)
    {

        $product=Product::find($id->id);
        $qty=1;
        Cart::add([
            'id' => $id->id,
            'name' => $product->product_name,
            'qty' => $qty,
            'price' =>$product->getSalePrices[0]->sale_price_values,
            'weight' => 0,
            'options' => ['img' => $product->product_image]
        ]);
        return $id;
    }
    public function UpdateCartDetail(Request $request)
    {

        $product=Product::find($request->id);

        Cart::add([
            'id' => $request->id,
            'name' => $product->product_name,
            'qty' => $request->product_quantity,
            'price' =>$product->getSalePrices[0]->sale_price_values,
            'weight' => 0,
            'options' => ['img' => $product->product_image]
        ]);
        return $request;
    }
    public function UpdateCartCheckOut(Request $request)
    {
        // return $request;
        $arrayDel = $request->arrayList;
        $arrayUpdate = $request->dataform;
        $token = $request->_token;
        // // num['id]['qty]

        // $num = 1;
        $var = json_decode($request);

        //return $request;
        // for ($i=0; $i < count($request->dataform); $i++) {
        //     return "Hay";
        // }
        // $num = 1;
        if($arrayUpdate!=null){
            foreach ($arrayUpdate as $key ) {
                if ($key[0]=='_token') {
                    // $num++;
                    continue;# code...
                }
                Cart::update($key[0], $key[1]);
                // return $key[1];
            }
        }
        
        if($arrayDel!=null){
            foreach ($arrayDel as $key ) {
                if ($key[0]=='_token') {
                    // $num++;
                    continue;# code...
                }
                Cart::remove($key[0]);
                // return $key[1];
            }
        }
        
        // return redirect()->back();
    }
    public function deleteProductInCart($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function productDetail(Request $request,$slug, $id){
        $cate = Category::all();
        $products =
            Product::leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->where('Products.id',$id)
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
            ->get();
        $product = $products[0];
        //echo $request->id;
        //dd($products);
        //echo $product[0]->product_name;
        return view('client.product.detail',compact('product','cate'));
    }
    public function test(Request $request, $slug){
        $cate = Category::all();
        $productSlugID = Product::where('product_slug','=',$slug)->get()[0]->id;
        //dd($productSlugID);
        $products =
            Product::leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->where('Products.id',$productSlugID)
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
            ->get();
        $productList =
            Product::where('product_is_disable','><',0)
            ->leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
            ->get();
        // $productLists = $productList[0];
        // dd($productLists);
        $product = $products[0];
        $cate = Category::where('id','=',$product->categories_id)->get()[0];
        //dd($cate);
        return view('client.product.prodcut-detail',compact('product','cate','productList'));
    }
}
