<?php
use App\Models\Post;
use function Livewire\Volt\{form};

    $form['title'] = '';

    $form['Heading'] = '';

    function save()
    {
        Post::create(
            $this->only(['title', 'content'])
        );

        return $this->redirect('/posts')
            ->with('status', 'Post successfully created.');
    }



?>

<div>
    <form wire:submit="save">
        <div class="row col-12">
            <div class="col-6">
                <div class="form-group">
                    <label for="Heading">Heading</label>
                    <input type="text" wire:model="Heading">

                  </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="Text">Text</label>
                    <input type="text" wire:model="text">

                  </div>
                  </div>
            </div>


        </div>

            <div class="d-flex justify-content-end pt-2 pl-4">
                <button type="submit" class=" btn btn-primary">Submit</button>
            </div>


      </form>

</div>
