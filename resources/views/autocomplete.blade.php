@extends('layouts.app')

@section('title', 'Learn Autocomplete')

@section('contents')
        <div class="form-row">
            <div class="col-sm-12 col-md-6 mx-auto">
                <div class="form-group">
                    <input 
                        class="form-control form-control-lg autocomplete" 
                        id="autocomplete" 
                        placeholder="search city..."
                        type="text"
                        />
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 col-md-6 mx-auto"></div>
        </div>
    </div>
@endsection

@section('extra-script') @endsection