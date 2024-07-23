@php
$questions = $entry->questions->pluck('question', 'id')->toArray();
@endphp

<span class="d-flex flex-row">

    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Questions
        </button>
        <ul class="dropdown-menu">
            @foreach($questions as $id => $question)
            <li class="dropdown-item">
                <a href="{{route('question.show', $id)}}">
                    {{ $question }}
                </a>
            </li>
            @endforeach
            <li>
                <a class="btn btn-dark w-100" href="{{route('question.create')}}">Add Question</a>
            </li>
        </ul>
    </div>
</span>