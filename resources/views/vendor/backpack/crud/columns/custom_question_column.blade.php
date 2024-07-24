@php
$questions = $entry->questions;
@endphp

<span class="d-flex flex-row">

    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kérdések
        </button>
        <ul class="dropdown-menu">
            @foreach($questions as $question)
            <li class="dropdown-item">
                <a href="{{route('question.show', $question->id)}}">
                    {{ $question->question }}
                </a>
            </li>
            @endforeach
            <li>
                <a class="btn btn-dark w-100" href="{{route('question-set.edit', $question->question_set_id)}}">Kérdés
                    hozzáadása</a>
            </li>
        </ul>
    </div>
</span>