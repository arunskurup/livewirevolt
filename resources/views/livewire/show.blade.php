<?php
use App\Models\Post;
use function Livewire\Volt\{state};

state(['data' => Post::get()]);


?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<div>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Head</th>
            <th scope="col">Text</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($data as $key => $item)
            <tr>
                    <th scope="col">{{$key+1}}</th>
                    <th scope="col">{{$item->Heading}}</th>
                    <th scope="col">{{$item->text}}</th>
                    <th class="d-flex" scope="col">
                        <a href="{{route('edit',$item->id)}}" class="pr-2">
                            <button type="button" class="btn btn-primary" >
                                Edite
                            </button>
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{route('delete',$item->id)}}" class="pr-2" >
                                <button  type="button" class="btn btn-danger" >
                                    Delete
                                </button>
                        </a>
                    </th>
            </tr>
            @endforeach


        </tbody>
      </table>
</div>
