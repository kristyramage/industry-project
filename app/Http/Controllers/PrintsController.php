<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Prints;
// use App\User as User;
use Intervention\Image\ImageManager;

class PrintsController extends Controller
{
    public function index(){
        $allPrints = Prints::all();
        return view('print.index', compact('allPrints'));
    }


// -------------------- CRUD ------------------------
	public function show($title) {
        // var_dump("show");
        $prints = Prints::where('title', "=", $title)->firstOrFail();
        return view('print.show', compact('prints'));
    }

    public function create()
    {
        mustbeAdmin();
        return view('print.create');
    }

    public function save(Request $request)
    {
        // mustbeAdmin();
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

        $newPrint = new Prints();

        $newPrint->title = $request->title;
        $newPrint->price = $request->price;
        $newPrint->description = $request->description;
        $newPrint->poster = $newFilename;
        $newPrint->quantity = $request->quantity;

        $newFilename = preg_replace("/[^0-9a-zA-Z]/", "", $request->title);
        $newPrint->poster = $newFilename;

        // Create Instance of Image Intervention
        $manager = new ImageManager();

        $printImage = $manager->make($request->poster);

        // product image size
        $printImage->resize(300, 300);
        $printImage->save('images/products/'.$newFilename.'.jpg', 60);
        // thumbnail size
        $printImage->resize(100, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $printImage->save('images/thumbnails/'.$newFilename.'.jpg', 60);

        $newPrint->save();

        return redirect('prints');
    }

    public function edit()
    {
        // mustbeAdmin();

        return view('print.edit');
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