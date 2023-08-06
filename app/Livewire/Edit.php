<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public $Heading ;
    public $title ;
    public $post_id ;
      public function mount($id)
    {
        $post = Post::find($id);
        $this->post_id = $post->id;
        $this->Heading = $post->Heading;
        $this->title   = $post->text;
    }
    protected $rules = [
        'Heading' => 'required|min:6',
        'title'   => 'required|',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $create          = Post::find($this->post_id);
        $create->Heading = $this->Heading;
        $create->text    = $this->title;
        $create->save();
        return redirect()->to('/home');
        // Post::create([
        //     'Heading' => $this->Heading,
        //     'text'    => $this->title,
        // ]);
    }
//
    public function render()
    {
        return view('livewire.edit');
    }
}
