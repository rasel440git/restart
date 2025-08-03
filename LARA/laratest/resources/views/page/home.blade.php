<h1>This is Home Page</h1>

<ul>
    @foreach ($studentData as $Items)
        <li>Student Name: {{ $Items}}</li>
    
    @endforeach
</ul>


@include('component.hero')