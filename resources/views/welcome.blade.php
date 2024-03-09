<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form method="POST" action="/contact">
            @csrf
            <div class="form-group mb-2">
                <label for="exinputname">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name"></label>
            </div>
            <div class="form-group mb-2">
                <label for="exinputphone">Phone number</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Your phone num"></label>
            </div>
            <div class="form-group mb-2">
                <label for="exinputmail">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email"></label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($contact)>0)
                @foreach($contact as $cont)
                <tr>
                    <th>{{$cont->id}}</th>
                    <th>{{$cont->name}}</th>
                    <th>{{$cont->phone}}</th>
                    <th>{{$cont->email}}</th>
                    <th>
                        <a href="/edit/{{$cont->id}}" class="btn btn-primary">Edit</a>
                        <a href="/delete/{{$cont->id}}" class="btn btn-warning">Delete</a>
                    </th>
                </tr>
                @endforeach
                @else
                <tr>
                    <th>No data</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>