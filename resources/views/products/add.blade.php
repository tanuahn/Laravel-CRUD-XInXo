@extends('layouts.master')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a Product</h1>
            <div>
                <form method="post" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Product Name:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>

                    <div class="form-group">
                        <label for="">Producer:</label>
                        <input type="text" class="form-control" name="producer"/>
                    </div>

                    <div class="form-group">
                        <label for="">Price:</label>
                        <input type="number" class="form-control" name="price"/>
                    </div>
                    <div class="form-group">
                        <label for="city">Quantity:</label>
                        <input type="number" class="form-control" name="quantity"/>
                    </div>
                    <div class="form-group">
                        <label for="country">Description:</label>
                        <textarea name="description" id="" cols="90" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
