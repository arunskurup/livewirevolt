<div>
    <form wire:submit="submit">
        <div class="row col-12">

            {{-- <div class="col-6">
                <div class="form-group">
                    <label for="Text">Text</label>
                    <input type="text" wire:model="title">
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  </div>
            </div> --}}
            <input class="col-12" type="hidden" wire:model="post_id">
            <div class="form-group col-6">
                     <label for="Text">Heading</label>
                     <input class="col-12" type="text" wire:model="Heading">
                     @error('Heading') <span class="error">{{ $message }}</span> @enderror
           </div>
           <div class="form-group col-6">
                <label for="Text">Text</label>
                <input  class="col-12"type="text" wire:model="title">
                @error('title') <span class="error">{{ $message }}</span> @enderror
           </div>

        </div>

            <div class="d-flex justify-content-end pt-2 pl-4">
                <button type="submit" class=" btn btn-primary">Submit</button>
            </div>


      </form>
</div>
