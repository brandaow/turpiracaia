<?php

namespace App\Http\Controllers;

use App\Message;
use App\Tiding;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index()
    {
        $attractives = Property::whereNull('categorie')->latest()->limit(10)->get();
        return view('admin.attractive', compact('attractives'));
    }
    
    public function ondeficar()
    {
        $attractives = Property::where('categorie', '=', 'ondeficar')->latest()->limit(10)->get();
        return view('admin.ondeficar', compact('attractives'));
    }
    
    public function ondecomer()
    {
        $attractives = Property::where('categorie', '=', 'ondecomer')->latest()->limit(10)->get();
        return view('admin.ondecomer', compact('attractives'));
    }
    
    public function attractives()
    {
        $attractives = Property::latest()->limit(10)->get();
        return view('admin.attractive', compact('attractives'));
    }

    public function news()
    {
        $tidings = Tiding::latest()->limit(10)->get();
        return view('admin.news', compact('tidings'));
    }
    
    public function delAttrative(Request $request)
    {
        $attractive = Property::findOrFail($request->identify);
        $attractive->delete();

        return redirect()->route('public.attractives');
    }
    
    public function delondeficar(Request $request)
    {
        $attractive = Property::findOrFail($request->identify);
        $attractive->delete();

        return redirect()->route('public.ondeficars');
    }
    
    public function delondecomer(Request $request)
    {
        $attractive = Property::findOrFail($request->identify);
        $attractive->delete();

        return redirect()->route('public.ondecomers');
    }
    
    public function getAttrative($id) 
    {
        $attractive = Property::findOrFail($id);
        return view('admin.attractiveedit', compact('attractive'));
    }
    
    public function getondeficar($id) 
    {
        $attractive = Property::findOrFail($id);
        return view('admin.ondeficaredit', compact('attractive'));
    }
    
    public function getondecomer($id) 
    {
        $attractive = Property::findOrFail($id);
        return view('admin.ondecomeredit', compact('attractive'));
    }
    
    public function editAttrative(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'owner'         => 'required|string',
            'location'      => 'required|string',
            'description'   => 'required|string',
        ], [
            'name.required'         => 'Você deve preencher este campo.',
            'owner.required'        => 'Você deve preencher este campo.',
            'location.required'     => 'Você deve preencher este campo.',
            'description.required'  => 'Você deve preencher este campo.',
        ]);
        
        $attractive = Property::findOrFail($request->identify);

        $attractive->name           = $request->name;
        $attractive->owner          = $request->owner;
        $attractive->address        = $request->address;
        $attractive->location       = $request->location;
        $attractive->contacts       = $request->phones;
        $attractive->sites          = $request->sites;
        $attractive->corx           = $request->x;
        $attractive->cory           = $request->y;
        $attractive->description    = $request->description;
        
        if($request->states) $attractive->tags = implode(",", $request->states);
        
        $arrPhotos = array();
        
        if($request->fotos) {
            foreach($request->fotos as $foto)
            {
                $nameFile = date('dmHis').Str::random(5).".".$foto->extension();
                $photoFit = Image::make($foto->getRealPath())->fit(500);
                //$photoFit->save(public_path('uploads/' .$nameFile));
                $photoFit->save('/home/u922847538/domains/turpiracaia.com.br/public_html/uploads/' .$nameFile);
                $arrPhotos[] = $nameFile;
            }
        }
        
        if(count($arrPhotos) > 0) {
            $attractive->files = implode(",", $arrPhotos);
        }
        
        $attractive->save();   

        $attractives = Property::whereNull('categorie')->latest()->limit(10)->get();
        return view('admin.attractive', compact('attractives'));
    }
    
    public function editondeficar(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'owner'         => 'required|string',
            'location'      => 'required|string',
            'description'   => 'required|string',
        ], [
            'name.required'         => 'Você deve preencher este campo.',
            'owner.required'        => 'Você deve preencher este campo.',
            'location.required'     => 'Você deve preencher este campo.',
            'description.required'  => 'Você deve preencher este campo.',
        ]);
        
        $attractive = Property::findOrFail($request->identify);

        $attractive->name           = $request->name;
        $attractive->categorie      = 'ondeficar';
        $attractive->owner          = $request->owner;
        $attractive->address        = $request->address;
        $attractive->location       = $request->location;
        $attractive->contacts       = $request->phones;
        $attractive->sites          = $request->sites;
        $attractive->corx           = $request->x;
        $attractive->cory           = $request->y;
        $attractive->description    = $request->description;
        
        if($request->states) $attractive->tags = implode(",", $request->states);
        
        $arrPhotos = array();
        
        if($request->fotos) {
            foreach($request->fotos as $foto)
            {
                $nameFile = date('dmHis').Str::random(5).".".$foto->extension();
                $photoFit = Image::make($foto->getRealPath())->fit(500);
                //$photoFit->save(public_path('uploads/' .$nameFile));
                $photoFit->save('/home/u922847538/domains/turpiracaia.com.br/public_html/uploads/' .$nameFile);
                $arrPhotos[] = $nameFile;
            }
        }
        
        if(count($arrPhotos) > 0) {
            $attractive->files = implode(",", $arrPhotos);
        }
        
        $attractive->save();   

        $attractives = Property::where('categorie', '=', 'ondeficar')->latest()->limit(10)->get();
        return view('admin.ondeficar', compact('attractives'));
    }
    
    public function editondecomer(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'owner'         => 'required|string',
            'location'      => 'required|string',
            'description'   => 'required|string',
        ], [
            'name.required'         => 'Você deve preencher este campo.',
            'owner.required'        => 'Você deve preencher este campo.',
            'location.required'     => 'Você deve preencher este campo.',
            'description.required'  => 'Você deve preencher este campo.',
        ]);
        
        $attractive = Property::findOrFail($request->identify);

        $attractive->name           = $request->name;
        $attractive->categorie      = 'ondecomer';
        $attractive->owner          = $request->owner;
        $attractive->address        = $request->address;
        $attractive->location       = $request->location;
        $attractive->contacts       = $request->phones;
        $attractive->sites          = $request->sites;
        $attractive->corx           = $request->x;
        $attractive->cory           = $request->y;
        $attractive->description    = $request->description;
        
        if($request->states) $attractive->tags = implode(",", $request->states);
        
        $arrPhotos = array();
        
        if($request->fotos) {
            foreach($request->fotos as $foto)
            {
                $nameFile = date('dmHis').Str::random(5).".".$foto->extension();
                $photoFit = Image::make($foto->getRealPath())->fit(500);
                //$photoFit->save(public_path('uploads/' .$nameFile));
                $photoFit->save('/home/u922847538/domains/turpiracaia.com.br/public_html/uploads/' .$nameFile);
                $arrPhotos[] = $nameFile;
            }
        }
        
        if(count($arrPhotos) > 0) {
            $attractive->files = implode(",", $arrPhotos);
        }
        
        $attractive->save();   

        $attractives = Property::where('categorie', '=', 'ondecomer')->latest()->limit(10)->get();
        return view('admin.ondecomer', compact('attractives'));
    }

    public function newAttrative(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'owner'         => 'required|string',
            'location'      => 'required|string',
            'description'   => 'required|string',
        ], [
            'name.required'         => 'Você deve preencher este campo.',
            'owner.required'        => 'Você deve preencher este campo.',
            'location.required'     => 'Você deve preencher este campo.',
            'description.required'  => 'Você deve preencher este campo.',
        ]);
        
        $attractive = new Property();

        $attractive->name           = $request->name;
        $attractive->owner          = $request->owner;
        $attractive->address        = $request->address;
        $attractive->location       = $request->location;
        $attractive->contacts       = $request->phones;
        $attractive->sites          = $request->sites;
        $attractive->corx           = $request->x;
        $attractive->cory           = $request->y;
        $attractive->description    = $request->description;
        
        if($request->states) $attractive->tags = implode(",", $request->states);
        
        $arrPhotos = array();

        foreach($request->fotos as $foto)
        {
            $nameFile = date('dmHis').Str::random(5).".".$foto->extension();
            $photoFit = Image::make($foto->getRealPath())->fit(500);
            //$photoFit->save(public_path('uploads/' .$nameFile));
            //home/u922847538/domains/turpiracaia.com.br/app/Http/Controllers/public_html/uploads/1705004644BezFh.png
            $photoFit->save('/home/u922847538/domains/turpiracaia.com.br/public_html/uploads/' .$nameFile);
            $arrPhotos[] = $nameFile;
        }

        $attractive->files = implode(",", $arrPhotos);
        $attractive->save();   

        $attractives = Property::whereNull('categorie')->latest()->limit(10)->get();
        return view('admin.attractive', compact('attractives'));
    }
    
    public function newondeficar(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'owner'         => 'required|string',
            'location'      => 'required|string',
            'description'   => 'required|string',
        ], [
            'name.required'         => 'Você deve preencher este campo.',
            'owner.required'        => 'Você deve preencher este campo.',
            'location.required'     => 'Você deve preencher este campo.',
            'description.required'  => 'Você deve preencher este campo.',
        ]);
        
        $attractive = new Property();

        $attractive->name           = $request->name;
        $attractive->categorie      = 'ondeficar';
        $attractive->owner          = $request->owner;
        $attractive->address        = $request->address;
        $attractive->location       = $request->location;
        $attractive->contacts       = $request->phones;
        $attractive->sites          = $request->sites;
        $attractive->corx           = $request->x;
        $attractive->cory           = $request->y;
        $attractive->description    = $request->description;
        
        if($request->states) $attractive->tags = implode(",", $request->states);
        
        $arrPhotos = array();

        foreach($request->fotos as $foto)
        {
            $nameFile = date('dmHis').Str::random(5).".".$foto->extension();
            $photoFit = Image::make($foto->getRealPath())->fit(500);
            //$photoFit->save(public_path('uploads/' .$nameFile));
            //home/u922847538/domains/turpiracaia.com.br/app/Http/Controllers/public_html/uploads/1705004644BezFh.png
            $photoFit->save('/home/u922847538/domains/turpiracaia.com.br/public_html/uploads/' .$nameFile);
            $arrPhotos[] = $nameFile;
        }

        $attractive->files = implode(",", $arrPhotos);
        $attractive->save();   

        $attractives = Property::where('categorie', '=', 'ondeficar')->latest()->limit(10)->get();
        return view('admin.ondeficar', compact('attractives'));
    }
    
    public function newondecomer(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'owner'         => 'required|string',
            'location'      => 'required|string',
            'description'   => 'required|string',
        ], [
            'name.required'         => 'Você deve preencher este campo.',
            'owner.required'        => 'Você deve preencher este campo.',
            'location.required'     => 'Você deve preencher este campo.',
            'description.required'  => 'Você deve preencher este campo.',
        ]);
        
        $attractive = new Property();

        $attractive->name           = $request->name;
        $attractive->categorie      = 'ondecomer';
        $attractive->owner          = $request->owner;
        $attractive->address        = $request->address;
        $attractive->location       = $request->location;
        $attractive->contacts       = $request->phones;
        $attractive->sites          = $request->sites;
        $attractive->corx           = $request->x;
        $attractive->cory           = $request->y;
        $attractive->description    = $request->description;
        
        if($request->states) $attractive->tags = implode(",", $request->states);
        
        $arrPhotos = array();

        foreach($request->fotos as $foto)
        {
            $nameFile = date('dmHis').Str::random(5).".".$foto->extension();
            $photoFit = Image::make($foto->getRealPath())->fit(500);
            //$photoFit->save(public_path('uploads/' .$nameFile));
            //home/u922847538/domains/turpiracaia.com.br/app/Http/Controllers/public_html/uploads/1705004644BezFh.png
            $photoFit->save('/home/u922847538/domains/turpiracaia.com.br/public_html/uploads/' .$nameFile);
            $arrPhotos[] = $nameFile;
        }

        $attractive->files = implode(",", $arrPhotos);
        $attractive->save();   

        $attractives = Property::where('categorie', '=', 'ondecomer')->latest()->limit(10)->get();
        return view('admin.ondecomer', compact('attractives'));
    }

    public function newNews(Request $request)
    {
        $request->validate([
            'title'     => 'required|string',
            'abstract'  => 'required|string',
            'body'      => 'required|string',
        ], [
            'title.required'    => 'Você deve preencher este campo.',
            'abstract.required' => 'Você deve preencher este campo.',
            'body.required'     => 'Você deve preencher este campo.',
        ]);

        $tiding = new Tiding();
        
        $tiding->title      = $request->title;
        $tiding->abstract   = $request->abstract;
        $tiding->body       = $request->body;
        $tiding->visible    = 1;
        $tiding->views      = 0;
        $tiding->user_id    = auth()->user()->id;

        $nameFile = date('dmHis').Str::random(5).".".$request->foto->extension();
        $photoFit = Image::make($request->foto->getRealPath())->fit(500);
        //$photoFit->save(public_path('uploads/' .$nameFile));
        $photoFit->save('/home/u922847538/domains/turpiracaia.com.br/public_html/uploads/' .$nameFile);

        $tiding->files = $nameFile;
        
        $tiding->save();

        $tidings = Tiding::latest()->limit(10)->get();
        return view('admin.news', compact('tidings'));
    }

    public function messages() 
    {
        $messages = Message::latest()->limit(15)->get();
        return view('admin.messages', compact('messages'));
    }

    public function reply(Request $request)
    {
        $message = Message::findOrFail($request->code);
        
        $message->readed = true;
        $message->save();

        return redirect('mailto:'.$message->email);
    }
}
