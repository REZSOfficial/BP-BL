@php
$questions = $entry->questions;
@endphp

<table class="table table-dark">
    @foreach($questions as $question)
    <thead>
        <tr>
            <th>
                <a href="{{route('question.show', $question->id)}}">
                    {{ $question->question }}
                </a>
            </th>
            <th>
                Correct
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($question->answers as $answer)
        <tr>
            <td>
                {{ $answer->answer }}
            </td>
            <td>
                <i class="la @if ($answer->is_correct)
                    la-check text-success
                @else
                    la-times text-danger
                @endif "></i>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endforeach
</table>