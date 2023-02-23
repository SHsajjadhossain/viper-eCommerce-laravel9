<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Product_thumbnail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Image;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Single;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkrole');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Product::all()->id()->get();
        return view('product.index', [
            'products' => Product::where('user_id', auth()->id())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create', [
            'active_categories' => Category::where('status', 'show')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_long_description = $request->product_long_description;

        $dom = new \DomDocument();

        $dom->loadHtml($product_long_description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) {


            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            $image_name = "/upload/long_description_photoes" . time() . $k . '.png';

            $path = public_path() . $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', $image_name);
        }


        $description = $dom->saveHTML();

        $slug = Str::slug($request->product_name).'-'.Str::random(5).auth()->id();
        $request->validate([
            'category_id' => 'required'
        ]);
        // photo upload start
            $new_product_photo_name = time().'_'.Str::random(5).'_'.Auth::id().'.'.$request->file('product_photo')->getClientOriginalExtension();
            Image::make($request->file('product_photo'))->resize(270, 310)->save(base_path('public/uploads/product_photoes/'.$new_product_photo_name));
        // photo upload end
        $product_id = Product::insertGetId([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_code' => $request->product_code,
            'product_short_description' => $request->product_short_description,
            'product_long_description' => $description,
            'product_photo' => $new_product_photo_name,
            'product_slug' => $slug,
            'product_quantity' => $request->product_quantity,
            'created_at' => Carbon::now()
        ]);

        foreach ($request->file('product_thumbnails') as  $product_thumbnail) {
            // photo upload start
            $new_product_photo_name = time() . '_' . Str::random(5) . '_' . $product_id . '.' . $product_thumbnail->getClientOriginalExtension();
            Image::make($product_thumbnail)->resize(800, 800)->save(base_path('public/uploads/product_thumbnails/' . $new_product_photo_name));
            // photo upload end
            Product_thumbnail::insert([
                'product_id' => $product_id,
                'product_thumbnail_name' => $new_product_photo_name,
                'created_at' => Carbon::now()
            ]);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        return view('product.show',[
            'single_productinfo' => Product::find($product_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        return view('product.edit',[
            'edit_productinfo' => Product::find($product_id),
            'active_categories' => Category::where('status', 'show')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $slug = Str::slug($request->product_name).'-'.Str::random(5).auth()->id();

        // Product::findOrFail($id)->update([
        //     'category_id' => $request->category_id,
        //     'product_name' => $request->product_name,
        //     'product_price' => $request->product_price,
        //     'product_code' => $request->product_code,
        //     'product_quantity' => $request->product_quantity,
        //     'product_short_description' => $request->product_short_description,
        //     'product_long_description	' => $request->product_long_description,
        //     'product_slug' => $slug
        // ]);



        // if ($request->hasFile('new_product_photo')) {

        //     //Create photo name
        //     $new_product_photo_name = time().'_'.Str::random(5).'_'.Auth::id().'.'.$request->file('new_product_photo')->getClientOriginalExtension();

        //     // delete old photo
        //     unlink(base_path('public/uploads/product_photoes/'.Product::find($id)->product_photo));

        //     // upload new photo
        //     Image::make($request->file('new_product_photo'))->resize(270, 310)->save(base_path('public/uploads/product_photoes/'.$new_product_photo_name));

        //     // update to database
        //     Product::find($id)->update([
        //         'product_photo' =>  $new_product_photo_name
        //     ]);

        // }



        // if ($request->hasFile('new_product_thumbnails')) {
        //     foreach ($request->file('new_product_thumbnails') as  $product_thumbnail) {

        //         //Create thumbnail name
        //         $new_product_photo_name = time() . '_' . Str::random(5) . '_' . $id . '.' . $product_thumbnail->getClientOriginalExtension();

        //         // delete old photo
        //         // foreach (Product_thumbnail::where('product_id', $id)->get('product_thumbnail_name') as $data) {
        //         //     unlink(base_path('public/uploads/product_thumbnails/'.$data));
        //         // }

        //         // photo upload start
        //         Image::make($product_thumbnail)->resize(800, 800)->save(base_path('public/uploads/product_thumbnails/' . $new_product_photo_name));
        //         // photo upload end


        //         Product_thumbnail::where('product_id', $id)->update([
        //             'product_thumbnail_name' => $new_product_photo_name,
        //         ]);
        //     }
        // }

        return back()->with('success', 'Product Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
