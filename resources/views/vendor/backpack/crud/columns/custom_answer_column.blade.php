@php
$answers = $entry->answers;
@endphp

<span class="d-flex flex-row">

    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Válaszok
        </button>
        <ul class="dropdown-menu">
            @foreach($answers as $id => $answer)
            <li class="dropdown-item">
                <a href="{{route('answer.show', $id)}}">
                    {{ $answer->answer }}
                </a>
            </li>
            @endforeach
            <li>
                <a class="btn btn-dark w-100"
                    href="{{route('question-set.edit', $answer->question->question_set_id)}}">Módosítás</a>
            </li>
        </ul>
    </div>
</span>