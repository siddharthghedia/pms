@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <tr>
                            <th>Product Name</th>
                            <th>Select</th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}({{ $product->type }})</td>
                                <td><input type="checkbox" class="form-check"/></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
