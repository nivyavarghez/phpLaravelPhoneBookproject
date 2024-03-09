<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="/edit/{{$contact->id}}">
            @csrf
            <div class="form-group mb-2">
                <label for="exinputname">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{$contact->name}}"></label>
            </div>
            <div class="form-group mb-2">
                <label for="exinputphone">Phone number</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Your phone num" value="{{$contact->phone}}"></label>
            </div>
            <div class="form-group mb-2">
                <label for="exinputmail">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="{{$contact->email}}"></label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>