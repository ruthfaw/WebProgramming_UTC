@extends('layout')

@section('title', 'contact')

@section('dropdownCategory')
    <div class="dropdown">
        <a class="nav-link dropdown-toggle text-decoration-none text-dark" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Category
        </a>  
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/category/{{1}}">Adventure</a></li>
            <li><a class="dropdown-item" href="/category/{{2}}">Art</a></li>
            <li><a class="dropdown-item" href="/category/{{3}}">Biography</a></li>
            <li><a class="dropdown-item" href="/category/{{4}}">Cooking</a></li>
            <li><a class="dropdown-item" href="/category/{{5}}">Encyclopedia</a></li>
            <li><a class="dropdown-item" href="/category/{{6}}">Fantasy</a></li>
            <li><a class="dropdown-item" href="/category/{{7}}">Horror</a></li>
            <li><a class="dropdown-item" href="/category/{{8}}">Mystery</a></li>
            <li><a class="dropdown-item" href="/category/{{9}}">Romance</a></li>
            <li><a class="dropdown-item" href="/category/{{10}}">Sport</a></li>
            <li><a class="dropdown-item" href="/category/{{11}}">Thriller</a></li>
            <li><a class="dropdown-item" href="/category/{{12}}">Travel</a></li>
        </ul>
    </div>
@endsection

@section('booklist')
    <div class="row booklist-title fs-4">Contact</div>
    <div class="row booklist-table mt-3">
        <div class="store-address fs-4">Store address : </div><br><br>
        <div class="address-street">Jalan Pembangunan Baru Raya</div><br><br>
        <div class="address-complex">Kompleks Pertokoan Emerald Blok III/12</div><br><br>
        <div class="address-district">Bintaro, Tangerang Selatan</div><br><br>
        <div class="address-nation">Indonesia</div><br><br>

        <div class="open-daily fs-4">Open Daily : </div><br><br>
        <div class="time">08.00 - 20.00</div><br><br>

        <div class="contact fs-4">Contact : </div><br><br>
        <div class="phoneNumber">Phone : 021-08899776655</div><br><br>
        <div class="email">happybookstore@happy.com</div><br><br>
    </div>
@endsection

@section('categorySide')
    <div class="category-content">
      <a href="/category/{{1}}">Adventure</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{2}}">Art</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{3}}">Biography</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{4}}">Cooking</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{5}}">Encyclopedia</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{6}}">Fantasy</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{7}}">Horror</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{8}}">Mystery</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{9}}">Romance</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{10}}">Sport</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{11}}">Thriller</a>
    </div><br>
    <div class="category-content">
      <a href="/category/{{12}}">Travel</a>
    </div><br>   
@endsection