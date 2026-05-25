<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tasks project</h1>

@if(session('success'))
    <p style="color: orange;">{{ session('success') }}</p>
@endif

<form method="POST" action="/tasks">
    @csrf

    <div>
        <label>Project 1</label> 
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <p style="color:black;">{{ $message }}</p>
        @enderror
    </div>
    <br> 

   <div>
    <label>Project 2</label>
    <textarea name="description">{{ old('description') }}</textarea>
     
    @error('description')
        <p style="color:black;">{{ $message }}</p>
    @enderror
    </div>
     <br>
     <div>
<label>Scheduled Date</label>
<input type="date" name="scheduled_date">
</div>

<br>

<div>
<label>Start Time</label>
<input type="time" name="start_time">
</div>

<br>

<div>
<label>Reminder Time</label>
<input type="time" name="reminder_time">
</div>

<br>

    <button type="submit">Submit</button>
</form>

</body>
</html>