<div class="bg-gray-800 w-full flex justify-between">
    <div>
        <ul>
            @foreach($category in $categories)
                <li>{{$category->title}}</li>
            @endforeach
        </ul>
    </div>
    <div>
        <p>&copy; Вкусно и Точка</p>
    </div>
</div>