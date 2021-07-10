@extends('layouts.front')

@section('content')
<div class="row mt-5">
    <div class="col-12">
        <div class="card mb-5">
            <div class="card-body">
                <form method="GET">
                    <div class="row">
                       <div class="form-group col-lg-4">
                            <label>
                                country
                            </label>
                            <select class="form-control" id="country" name="country">
                                <option value="">choose</option>
                                @foreach ($countryCodes as $item)
                                    <option value="{{$item['country']}}">{{$item['country']}}</option>
                                @endforeach
                            </select>
                        </div>
                       <div class="form-group col-lg-4">
                            <label>
                                state
                            </label>
                            <select class="form-control" id="state" name="state">
                                <option value="">choose</option>
                                <option value="Valid">Valid</option>
                                <option value="NValid">NValid</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Phone Numbers</h3>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered" id="phone-numbers-grid">
                    <thead>
                        <tr>
                            <th>Counrty</th>
                            <th>State</th>
                            <th>Country Code</th>
                            <th>Phone num</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    


@endsection

@section('js')
    <script>
        var newConfig = {
            
        };
    </script>
    <script src="{{url('public/front/scripts/phone_numbers.js')}}" type="text/javascript"></script>
@endsection