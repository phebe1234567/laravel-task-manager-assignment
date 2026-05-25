<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tasks</title>
</head>
<body>

    <h1>All Tasks</h1>

    @foreach($tasks as $task)
        <div>
           
            @if($task->is_completed)
                <h3><s>{{ $task->title }}</s></h3>
            @else
                <h3>{{ $task->title }}</h3>
            @endif

            <p>{{ $task->description }}</p>

            <p>
                Status:
                {{ $task->is_completed ? 'Complete' : 'Incomplete' }}
            </p>
             <a href="/tasks/{{ $task->id }}"><button type="button">View Task</button></a>
            @if(!$task->is_completed)
                <form action="/tasks/{{$task->id}}/complete" method="POST">
                    @csrf
                    @method('PUT')

                    <button>Mark Complete</button>
                </form>
            @endif

            <hr>

        </div>
    @endforeach

</body>
</html>