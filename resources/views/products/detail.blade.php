@extends('layouts.master')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Detail of a Product</h1>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Name</td>
                <td>Producer</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Description</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->producer}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td><textarea name="" id="" cols="30" rows="5">{{$product->description}}</textarea></td>
            </tr>
            </tbody>
        </table>
        <div>
            <a style="float: right" href="javascript:history.back()"><button class="btn btn-link">Cancle</button></a>
        </div>
    </div>
@endsection
