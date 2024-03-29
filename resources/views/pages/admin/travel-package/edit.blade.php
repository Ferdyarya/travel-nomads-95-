@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Paket Travel {{$item->title}}</h1>
    </div>
    
    @if($errors->any)
        <div class="alert" alert-danger>
            <ul>
                @foreach ($errors->all() as $eror)
                <li>{{$eror}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about"  rows="10" cols="130" clas="d-block w-100 form-control">{{ $item->title}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="featured_event" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" placeholder="language" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control" name="foods" placeholder="foods" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control" name="departure_date" placeholder="departure_date" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="duration" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="type" value="{{ $item->title}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="price" value="{{ $item->title}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection