<div class="p-6 border-b bg-gray-100 flex items-center">
    <div class="">{{$title}}</div>
    <div class="">{{$synopsis}}</div>
    <form action="main/{{$id}}" method="post">
        @csrf
        <button>Read</button>
    </form>
</div>