<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
class Create extends Component
{
    public $Heading;
    public $title;

    protected $rules = [
        'Heading' => 'required|min:6',
        'title'   => 'required|',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $create          = new Post();
        $create->Heading = $this->Heading;
        $create->text    = $this->title;
        $create->save();
        return redirect()->to('/home');
        // Post::create([
        //     'Heading' => $this->Heading,
        //     'text'    => $this->title,
        // ]);
    }
    public function render()
    {
        return view('livewire.create');
    }
}
