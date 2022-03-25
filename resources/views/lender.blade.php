@extends('layouts.auth')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Upload your item</div>

            <div class="card-body">
                <form  method="POST" action='{{ route('lender.upload') }}'>
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="price" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-3 col-form-label">Available date</label>
                        <div class="col-sm-9">
                            <input type="date" name="date_available" class="form-control"required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select name="category" class="form-control">
                                <option selected>Choose...</option>
                                <option value="Electronic">Electronic</option>
                                <option value="Clothes">Clothes</option>
                                <option value="Book">Book</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                        <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">Uplaod</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection