@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header m-0 d-flex justify-content-between">

                   <p class="p-2 m-0">{{ __('Create') }}</p>



                </div>

                <div class="card-body">
                    <livewire:create />
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
