@extends('layouts.app')
@section('title') Product
    @stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">New Products</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="product_name"> Product Name</label>
                                <input type="text" id="product_name" name="product_name" class="form-control">

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" id="price" name="price" class="form-control">
                                </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @stop