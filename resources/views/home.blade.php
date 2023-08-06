@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header m-0 d-flex justify-content-between">

                   <p class="p-2 m-0">{{ __('CRUD') }}</p>

                <a href="{{route('create')}}" >
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Create
                    </button>
                </a>
                </div>

                <div class="card-body">
                    <livewire:show />
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
