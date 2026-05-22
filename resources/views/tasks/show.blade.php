<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Task Details</h1>

    <h2>{{ $task->title }}</h2>
    <p>{{ $task->description }}</p>

    <p>
        Status:
        {{ $task->is_completed ? 'Complete' : 'Incomplete' }}
    </p>

    @if(!$task->is_completed)

        <form action="/tasks/{{$task->id}}/complete" method="POST">
            @csrf
            @method('PUT')

            <button>Mark Complete</button>
        </form>

    @endif

</body>
</html>