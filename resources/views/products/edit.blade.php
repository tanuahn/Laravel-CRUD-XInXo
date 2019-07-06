@extends('layouts.master')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Product</h1>
            <div>
                <form method="post" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Product Name:</label>
                        <input value="{{$product->name}}" type="text" class="form-control" name="name"/>
                        @if($errors->has('name'))
                            <p style="color: red">{{$errors->first('name')}}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Producer:</label>
                        <input value="{{$product->producer}}" type="text" class="form-control" name="producer"/>
                        @if($errors->has('producer'))
                            <p style="color: red">{{$errors->first('producer')}}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Price:</label>
                        <input value="{{$product->price}}" type="number" class="form-control" name="price"/>
                        @if($errors->has('price'))
                            <p style="color: red">{{$errors->first('price')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="city">Quantity:</label>
                        <input value="{{$product->quantity}}" type="number" class="form-control" name="quantity"/>
                        @if($errors->has('quantity'))
                            <p style="color: red">{{$errors->first('quantity')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="country">Description:</label>
                        <textarea name="description" id="" cols="90" rows="5">{{$product->description}}</textarea>
                        @if($errors->has('description'))
                            <p style="color: red">{{$errors->first('description')}}</p>
                        @endif
                    </div>
                    <div>
                        <a style="float: left" href="{{route('products.update', $product->id)}}"><button type="submit" class="btn btn-link">Update product</button></a>
                        <a style="float: right" href="javascript:history.go(-1)"><button type="button" class="btn btn-link">Cancle</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

