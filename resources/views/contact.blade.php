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