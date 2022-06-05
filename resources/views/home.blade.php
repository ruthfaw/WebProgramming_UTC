@extends('layout')

@section('title', 'home')

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
    <div class="row booklist-title fs-4">Book List</div>
    <div class="row booklist-table">
        <table class="table table-striped">
            <thead>
              <tr style="background-color: #f8dc81;">
                <th scope="col">Title</th>
                <th scope="col">Author</th>
              </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr style="background-color: #9ddfd3;">
                        <td><a href="/detail/{{$book->id}}" class="btn">{{$book->title}}</a></td>
                        <td>{{$book->detail->author}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div class="d-flex justify-content-center align-items-center flex-column m-3">
            {{$books->links()}}
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