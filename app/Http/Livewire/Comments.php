<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
use App\Models\comment;


class Comments extends Component
{
    public  $newComment;
    public $comments;

    public function mount(){
        $temp = comment::all();
        $this->comments=$temp;
        
    }

    public function render()
    {
        return view('livewire.comments');
    }
    public function addComment(){
        //if($this->newComment=='') return;
        $validate=$this->validate([
            'newComment'=>'required',
        ]);
        
        $user=User::where('name', 'zeyad')->first();
        if($user!=null){
            $createdComment=comment::create([
                'comment'=>$this->newComment,
                'user_id'=>$user->id
            ]);
            $createdComment->save();
            $this->comments->push($createdComment);    
        }else{
          // return redirect()->with("user not exist")
        }

        
        //array_unshift($this->comments,$this->newComment);
    }
}
