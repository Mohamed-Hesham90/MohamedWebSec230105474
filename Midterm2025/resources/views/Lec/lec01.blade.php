<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 01</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Math Demos</a>
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#multable">Multiplication Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#even">Even Numbers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prime">Prime Numbers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="container py-5">
        <h1>Welcome to Lecture01</h1>
        <p>Select a section from the navigation menu above.</p>
    </section>

    <!-- Multiplication Table Section -->
    <section id="multable" class="container py-5">
        <h3 class="m-4">Task001</h3>
        <p class="m-4">Write a PHP script to get Multiplication Table.</p>

        @php $num001 = 5; @endphp

        <div class="card m-4 col-sm-3">
            <div class="card-body">
                <h5 class="card-title">Multiplication Table</h5>
                <p class="card-text">Multiplication Table of {{ $num001 }}</p>
                <table class="table table-bordered">
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>{{ $num001 }} x {{ $i }}</td>
                            <td>{{ $num001 * $i }}</td>
                        </tr>
                    @endfor
                </table>
            </div>
        </div>
    </section>

    <!-- Even Numbers Section -->
    <section id="even" class="container py-5">
        <h3 class="m-4">Task002</h3>
        <p class="m-4">Write a PHP script to get Even Numbers.</p>
        <div class="card m-4">
            <div class="card-header">Even Numbers between 1 and 100</div>
            <div class="card-body">
                @foreach (range(1, 100) as $i)
                    @if($i % 2 == 0)
                        <span class="badge bg-primary m-1">{{ $i }}</span>
                    @else
                        <span class="badge bg-secondary m-1">{{ $i }}</span>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- Prime Numbers Section -->
    <section id="prime" class="container py-5">
        <h3 class="m-4">Task003</h3>
        <p class="m-4">Write a PHP script to get the Prime Numbers.</p>
        <div class="card m-4">
            <div class="card-header">Prime Numbers between 1 and 100</div>
            <div class="card-body">
                @php
                    function isPrime($num) {
                        if ($num <= 1) return false;
                        if ($num == 2) return true;
                        if ($num % 2 == 0) return false;
                        for ($i = 3; $i <= sqrt($num); $i += 2) {
                            if ($num % $i == 0) return false;
                        }
                        return true;
                    }
                @endphp

                @for($i = 1; $i <= 100; $i++)
                    @if(isPrime($i))
                        <span class="badge bg-success m-1">{{ $i }}</span>
                    @else
                        <span class="badge bg-secondary m-1">{{ $i }}</span>
                    @endif
                    @if($i % 10 == 0)
                        <div class="w-100"></div>
                    @endif
                @endfor
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="container py-5">
        <h3 class="m-4">Task004</h3>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Add New Product</h5>
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="name" class="form-control" placeholder="Product Name" required>
                        </div>
                        <div class="col-md-4">
                            <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Product List</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $products = App\Models\Product::all(); @endphp
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
