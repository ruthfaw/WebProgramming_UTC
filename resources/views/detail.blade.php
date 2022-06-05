@extends('layout')

@section('title', 'detail')

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
    <div class="row booklist-title fs-4">Book Detail</div>
    <div class="row booklist-table mt-3">
        <div class="title-book">
            <div class="fw-semibold">Title : </div><br>
            {{$details->book->title}}
        </div><br><br>
        <div class="author-book">
            <br><div class="fw-semibold">Author : </div><br>
            {{$details->author}}
        </div><br><br>
        <div class="publisher-book">
            <br><div class="fw-semibold">Publisher : </div><br>
            {{$details->publisher}}
        </div><br><br>
        <div class="year-book">
            <br><div class="fw-semibold">Year : </div><br>
            {{$details->year}}
        </div><br><br>
        <div class="desc-book">
            <br><div class="fw-semibold">Description : </div><br>
            {{$details->description}}
        </div>
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