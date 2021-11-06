@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter the name of the comic">
                    
                        @error('title')
                            <div class="alert alert-danger"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Enter the description of the comic"> --}}
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thumb">Thumbnail link</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter the Thumbnail link of the comic">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter the price of the comic">
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter the series of the comic">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Sale date</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter the sale date of the comic">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        {{-- <input type="text" name="type" class="form-control" id="type" placeholder="Enter the type of the comic"> --}}
                        <select class="form-control" name="type" id="type">
                            <option value="">-- seleziona --</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                        </select>
                        @error('type')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection