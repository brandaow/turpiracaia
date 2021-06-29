<?php

namespace App\Http\Controllers;

use App\Tiding;
use App\Message;
use App\Property;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.home');
    }

    public function attractives()
    {
        $attractives = Property::whereNull('categorie')->paginate(9);
        $totalAttractives = $attractives->count();
        return view('public.attractives', compact('attractives', 'totalAttractives'));
    }
    
    public function ondeficar()
    {
        $attractives = Property::where('categorie', '=', 'ondeficar')->paginate(9);
        $totalAttractives = $attractives->count();
        return view('public.ondeficar', compact('attractives', 'totalAttractives'));
    }
    
    public function ondecomer()
    {
        $attractives = Property::where('categorie', '=', 'ondecomer')->paginate(9);
        $totalAttractives = $attractives->count();
        return view('public.ondecomer', compact('attractives', 'totalAttractives'));
    }

    public function searchAttractives(Request $request)
    {
        $request->validate([
            'search' => 'required|string',
        ], [
            'search.required' => 'Você deve preencher este campo.',
        ]);

        $attractives = Property::whereNull('categorie')->where('name', 'like', '%'.$request->search.'%')->orWhere('description', 'like', '%'.$request->search.'%')->paginate(9);
        $totalAttractives = $attractives->count();
        
        return view('public.attractives', compact('attractives', 'totalAttractives'));
    }
    
    public function searchOndeficar(Request $request)
    {
        $request->validate([
            'search' => 'required|string',
        ], [
            'search.required' => 'Você deve preencher este campo.',
        ]);

        $attractives = Property::where('categorie', '=', 'ondeficar')->where('name', 'like', '%'.$request->search.'%')->orWhere('description', 'like', '%'.$request->search.'%')->paginate(9);
        $totalAttractives = $attractives->count();
        
        return view('public.ondeficar', compact('attractives', 'totalAttractives'));
    }
    
    public function searchOndecomer(Request $request)
    {
        $request->validate([
            'search' => 'required|string',
        ], [
            'search.required' => 'Você deve preencher este campo.',
        ]);

        $attractives = Property::where('categorie', '=', 'ondecomer')->where('name', 'like', '%'.$request->search.'%')->orWhere('description', 'like', '%'.$request->search.'%')->paginate(9);
        $totalAttractives = $attractives->count();
        
        return view('public.ondecomer', compact('attractives', 'totalAttractives'));
    }
    
    public function attractive($id)
    {
        $attractive = Property::findOrfail($id);
        return view('public.attractive', compact('attractive'));
    }

    public function news()
    {
        $news = Tiding::latest()->get();
        return view('public.news', compact('news'));
    }

    public function new($id)
    {
        $new = Tiding::findOrfail($id);
        
        $new->views++;
        $new->save();

        return view('public.new', compact('new'));
    }

    public function history() 
    {
        return view('public.history');
    }

    public function guides() 
    {
        return view('public.guides');
    }

    public function sendMessage(Request $request) 
    {   
        $request->validate([
            'name'          => 'required|string',
            'email'         => 'required|string|email',
            'message'       => 'required|string',
        ], [
            'name.required'     => 'Você deve preencher este campo.',
            'email.required'    => 'Você deve preencher este campo.',
            'message.required'  => 'Você deve preencher este campo.',
            'email.email'       => 'Preencha um email válido.',
        ]);

        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->readed = 0;

        $message->save();

        return redirect()->route('public.home')->with('alert', 'Mensagem enviada com sucesso!');
    }
}
