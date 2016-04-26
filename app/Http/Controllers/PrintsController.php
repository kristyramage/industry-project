<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Prints;
// use App\User as User;
use Intervention\Image\ImageManager;

class PrintsController extends Controller
{

	public function show($title) {
        $prints = Prints::where('title', "=", $title)->firstOrFail();
        return view('print.show', compact('prints'));
    }

    public function create()
    {
        mustbeAdmin();
        return view('print.create');
    }

    // store

    public function edit($id)
    {
        mustbeAdmin();
        // $id = $_GET['id'];
        $print = Prints::findOrFail($id);

       return view('print.edit', compact('print'));
    }


     public function store(Request $request)
    {
    	mustbeAdmin();
        // $print = Prints::where('id', '=', $_POST['print_id'])->firstOrFail();
        

        //{{ validationRules }}
        $this->validate($request, [
            'title' => 'required|max:120',
            'price' => 'required|numeric',
            'description' => 'required',
            'poster' => 'required|image',
            'quantity' => 'required|numeric',
            ]);

        // Adds page breaks into textarea
        $description = nl2br(htmlspecialchars($_POST['description']));

        $print = new Prints();

        $print->title = $request->title;
        $print->price = $request->price;
        $print->description = $request->description;
        $print->poster = $request->poster;
        $print->quantity = $request->quantity;

        $newFilename = preg_replace("/[^0-9a-zA-Z]/", "", $request->event_title);
        $print->productImage = $newFilename;

        $print->save();

        // Create Instance of Image Intervention
        $manager = new ImageManager();
		$heroImage = $manager->make($request->image);
		$heroImage->resize(300, 300);
		$heroImage->save('images/poducts/'.$newFilename.'.jpg', 60);
		$heroImage->resize(300, null, function ($constraint) {
		    $constraint->aspectRatio();
		});
		$heroImage->save('images/thumbnails/'.$newFilename.'.jpg', 60);
		$heroImage->resize(100, null, function ($constraint) {
		    $constraint->aspectRatio();
		});
		$heroImage->save('images/100w/'.$newFilename.'.jpg', 60);
    }

    

    public function update($id, Request $request)
    {
        // mustbeAdmin();
        // // {{validationRules}}
        // $this->validate($request, [
        //     'title' => 'required|max:120',
        //     'price' => 'required|numeric',
        //     'description' => 'required',
        //     'poster' => 'required|image',
        //     'quantity' => 'required|numeric',
        //     ]);

        // $print = Prints::findOrFail($id);
        // $print->update($request->all());

        // // Create Instance of Image Intervention
        // $manager = new ImageManager();

        // $productImage = $manager->make($request->poster);

        // $productImage->resize(300, 300);
        // $productImage->save('images/products/'.$newFilename.'.jpg', 60);

        // $print->save()

        // Session::flash('flash_message', 'Prints updated!');

       // return redirect('print/{title}');
    }

    public function remove($id){
        // mustbeAdmin();
        // $print = Prints::findOrFail($id);
        // return view('print.confirm_delete', compact('print'));
    }

    public function destroy($id)
    {
        // mustbeAdmin();
        // Prints::destroy($id);

        // $print = Prints::findOrFail($id);
        // $print->delete();

       // Session::flash('flash_message', 'Prints deleted!');

        // return redirect('shop.index');
    }

    public function getFormData($id = null){    
        if(isset($_SESSION['create-print'])){
            $item = $_SESSION['create-print'];
            unset($_SESSION['create-print']);
        } else {
            $item = new Prints((int)$id);
        }
        return $item;
    }
}