<h1>
    The List of Tasks
</h1>

{{-- <div>
    @if (count($tasks))
        @foreach ($tasks as $task)
        <div>{{$task->title}}</div>
        @endforeach
    @else
        <div>No tasks!</div>
    @endif
</div> --}}

{{-- <div>
    @forelse ($tasks as $task)
        <div>{{ $task->title }}</div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
</div> --}}

<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
</div>
