@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ request()->tenant()->name }} Material Units
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <div class="list-group">
                                @foreach ($materialUnits as $materialUnit)
                                    <a href="#" class="list-group=-item">{{ $materialUnit->code }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection