<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Http\Requests\StoreWordRequest;
use App\Http\Requests\UpdateWordRequest;
use Illuminate\Http\Request;


class WordController extends Controller
{
    public function search($word){
        $word = Word::where("word", $word)->first();
        if($word) return redirect('/'.$word->id);
        return redirect("/");
    }
    public function index(Word $word){
        if($word->word)
            return view("home", ["word"=>$word]);
        return view("home", ["word"=>Word::inRandomOrder()->first()]);
    }
    
    public function create(){
        return view("create");
    }
    
    public function store(StoreWordRequest $request){
        $input = $request->validated();
        $input["stars"]=0;
        $input["viewed"]=0;
        $word = Word::where("word", $input["word"])->first();
        if(!$word) $word = Word::create($input);
        return redirect('/'.$word->id);
    }
    
    public function destroy(Word $word){
        $word->delete();
        return redirect('/');
    }

    public function score(Word $word, $score){
        $word->stars = $score;
        $word->save();
        return redirect("/".$word->id);
    }
}
