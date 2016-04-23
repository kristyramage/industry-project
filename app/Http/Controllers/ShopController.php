<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

use App\Prints as Prints;
use App\User as User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
	public function index(){
		$allPrints = Prints::all();
		return view('shop.index', compact('allPrints'));
	}

    public function create()
    {
        // return view('{{viewPath}}{{crudName}}.create');
    }

    public function show($id)
    {
       // ${{crudNameSingular}} = {{modelName}}::findOrFail($id);

       // return view('{{viewPath}}{{crudName}}.show', compact('{{crudNameSingular}}'));
    }

    public function store(Request $request)
    {
        // validationRules

        Prints::create($request->all());

        // Create Instance of Image Intervention
        $manager = new ImageManager();
        $productImage = $manager->make($request->selectImage);
        $productImage->resize(300, 400);
        $productImage->save('img/products/'.$newFilename.'.jpg', 60);

        //Session::flash('flash_message', 'Print added!');

        return redirect('print.{title}');
    }

    public function edit($id)
    {
       // ${{crudNameSingular}} = {{modelName}}::findOrFail($id);

       // return view('{{viewPath}}{{crudName}}.edit', compact('{{crudNameSingular}}'));
    }

    public function update($id, Request $request)
    {
        // {{validationRules}}
       //  ${{crudNameSingular}} = {{modelName}}::findOrFail($id);
       // ${{crudNameSingular}}->update($request->all());

        // Session::flash('flash_message', '{{modelName}} updated!');

       // return redirect('{{routeGroup}}{{crudName}}');
    }

    public function destroy($id)
    {
        Prints::destroy($id);

       // Session::flash('flash_message', '{{modelName}} deleted!');

        return redirect('shop.index');
    }


	public function custom(){
		return view('shop.custom');
	}

	public function cart(){
		return view('shop.cart');
	}
} 