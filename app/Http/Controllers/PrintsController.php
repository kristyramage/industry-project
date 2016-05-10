<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Frames;
use App\Prints;
use App\PrintSizes;
use Intervention\Image\ImageManager;
use Session;

class PrintsController extends Controller
{
    public function index(){
        $allPrints = Prints::all();

        $page = Prints::paginate(9);

        return view('print.index', compact('allPrints', 'page'));
    }


// -------------------- CRUD ------------------------
	public function show($title) {
        $prints = Prints::where('title', "=", $title)->firstOrFail();
        $sizes = PrintSizes::all();

        return view('print.show', compact('prints', 'sizes', 'singlePrice'));
    }

    public function create()
    {
        mustbeAdmin();
     
        return view('print.create');
    }

    public function store(Request $request)
    {
        mustbeAdmin();
        
        // validationRules
        $this->validate($request,[
            'title'=>'required|max:50',
            'price'=>'required|numeric',     
            'description'=>'required',        
            'poster'=>'required|image',      
            'quantity'=>'required|numeric',
        ]);

        // Adds page breaks into textarea
        $description = nl2br(htmlspecialchars($_POST['description']));

        $newPrint = new Prints();

        $newPrint->title        = $request->title;
        $newPrint->price        = $request->price;
        $newPrint->description  = $request->description;
        $newPrint->quantity     = $request->quantity;

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

        return redirect('/prints');
    }

    public function edit($id)
    {
        mustbeAdmin();
        
        $prints = Prints::where('id', '=', $id)->firstOrFail();
        return view('print.edit', compact('prints'));
    }

    public function update(Request $request)
    {
        mustbeAdmin();
        // validationRules
        $this->validate($request, [
            'title' => 'required|max:120',
            'price' => 'required|numeric',
            'description' => 'required',
            'poster' => 'image',
            'quantity' => 'required|numeric',
            ]);

        $id = $_POST['id'];
        $editPrint = Prints::findOrFail($id);

        $editPrint->title = $request->title;
        $editPrint->price = $request->price;
        $editPrint->description = $request->description;
        $editPrint->quantity = $request->quantity;
        // $print->update($request->all());

        if(!isset($_FILES['poster']) || $_FILES['poster']['error'] == UPLOAD_ERR_NO_FILE) {

            $posterName = $editPrint['poster'];
            $editPrint->poster = $posterName;
        
        } else {
            $oldFilename = $editPrint['poster'];
            // remove old image
            unlink('images/products/'.$oldFilename.'.jpg');
            unlink('images/thumbnails/'.$oldFilename.'.jpg');
            // add new image
            $newFilename = preg_replace("/[^0-9a-zA-Z]/", "", $request->title);

            $editPrint->poster = $newFilename;
        
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

        }

        $editPrint->save();

        Session::flash('success', 'You have updated a print!');

        return redirect('prints/'.$_POST['title']);
    }

    public function remove($id){
        mustbeAdmin();
        $singleProduct = Prints::findOrFail($id);
        $singleProduct->delete();
        Session::flash('success', 'You have deleted a print!');
        return redirect('prints');
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