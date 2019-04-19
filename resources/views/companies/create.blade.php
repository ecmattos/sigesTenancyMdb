@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create Company
                    </div>
                    <div class="card-body">
                        <form action="{{ route('companies.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="name">Company Name</label>
                                <input class="form-control{{ $errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" id="name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection