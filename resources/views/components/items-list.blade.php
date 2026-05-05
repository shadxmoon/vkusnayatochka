<div>
    <ul>
        @foreach($category in $categories)
            <li>{{$category->title}}</li>
        @endforeach
    </ul>
</div>