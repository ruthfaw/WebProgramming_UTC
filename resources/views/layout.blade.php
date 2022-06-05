<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <style>

        body{
            background-color: #31326F;
            color: white;
        }

        .content-all{
            margin-left: 200px;
            margin-top: 50px;
            margin-bottom: 50px;
        } 

        .booklist-table{
            padding-right: 60px;
        }

        .category{
            padding-left: 30px;
            /* background-color: #31326F; */
            /* color: white; */
        }

        .category-content{
            margin-top: 20px;

        }

        .store-name{
            background-color: #F8DC81;
        }

        ul{
            /* background-color: #faf2b5; */
            background: linear-gradient(#F8DC81,#faf2b5);
        }

        .table{
            margin-top: 20px;
        }

        footer{
            background-color: #faf2b5;
        }

        a{
            color: white;
            text-decoration: none;
        }

        </style>

</head>
<body>
    <div class="store-name fs-1 text-center text-dark">HAPPY BOOK STORE</div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link text-dark" href="/">Home</a>
        </li>
        <li class="nav-item text-dark">@yield('dropdownCategory')</li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/contact">Contact</a>
        </li>
    </ul>
    
    
    <div class="row content-all">
        <div class="booklist col-10">@yield('booklist')</div>
        <div class="col-2 category">
            <div class="category-title row fs-4">Category</div>
            <div class="category-list row mt-3">@yield('categorySide')</div>
        </div>
    </div>   
</body>
<footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3 text-dark" style="background-color: #F8DC81;">
      © Happy Book Store 2021
    </div>
  </footer>
</html>