<div class="question-item card border-2 border-secondary mb-2">
    <div class="card-body">
        <div class="form-group">
            <label for="questions[{{ $index }}][question]">Kérdés</label>
            <input type="text" name="questions[{{ $index }}][question]" value="{{ $question['question'] }}"
                class="form-control">
        </div>
        <div class="card">
            <div class="card-header">Válaszok</div>
            <div class="card-body" id="answers-wrapper-{{ $index }}">
                @if (isset($question['answers']))
                @foreach ($question['answers'] as $answerIndex => $answer)
                @include('vendor.backpack.crud.fields.answer', ['qIndex' => $index, 'index' => $answerIndex, 'answer' =>
                $answer])
                @endforeach
                @endif
            </div>
            <button type="button" class="btn btn-secondary add-answer mb-2" data-qindex="{{ $index }}">Válasz
                hozzáadása</button>
        </div>
        <button type="button" class="btn btn-danger remove-question">Kérdés eltávolítása</button>
    </div>
</div>