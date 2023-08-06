<?php
use App\Models\Post;
use function Livewire\Volt\{state};
public $Heading ;
public $title ;
public function mount($id)
    {
        $post = Post::find($id)
        $this->Heading = $post->Heading;
        $this->title   = $post->text;
    }
//

?>

<div>

</div>
