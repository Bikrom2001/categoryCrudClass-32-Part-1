<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    {{-- // Learning Blade Templates for admin templates
    //AdminCAST – Free Bootstrap 4 admin dashboard template --}}
    welcome back Bikram Roy
    <div class="container py-5">
        <h2>Category Page shows</h2>
        <div class="py-2 text-end">
            {{-- <a href="{{ url('category/create') }}" class='btn btn-primary'>Add Category</a> --}}
            <a href="{{ route('category.create') }}" class='btn btn-primary'>Add Category</a>
        </div>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $key => $category)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->slug }}</td>
                      <td>
                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                        <a href="{{ route('category.delete', $category->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                      </td>
                    </tr>
                @empty
                    <p>Not Found category</p>
                @endforelse
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
