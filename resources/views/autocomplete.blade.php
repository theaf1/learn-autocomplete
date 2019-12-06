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

@section('extra-script')
<script>
    // let cities = [
    //     { value: "Australia", data: "AU" },
    //     { value: "Japan", data: "JP" },
    //     { value: "Thailand", data: "TH"},
    // ];
    // $("#autocomplete").autocomplete({
    //     lookup: cities,
    //     onSelect: (suggestion) => {
    //         alert('You selected: ' + suggestion.value + ' ' + suggestion.data);
    //     }
    // })
    $("#autocomplete").autocomplete({
        serviceUrl: "{{ url('/get-cities') }}"
        transformResult: (response) => {
            return {
                suggestions : JSON.parse(response).map((cityItem) => {
                    return {
                        value:
                    }
                }) 
        }
    })
</script>
@endsection