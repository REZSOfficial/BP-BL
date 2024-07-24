<div class="question-item card mb-2">
    <div class="card-body">
        <div class="form-group">
            <label for="questions[{{ $index }}][question]">Question</label>
            <input type="text" name="questions[{{ $index }}][question]" value="{{ $question['question'] }}"
                class="form-control">
        </div>
        <div class="card">
            <div class="card-header">Answers</div>
            <div class="card-body" id="answers-wrapper-{{ $index }}">
                @foreach ($question['answers'] as $answerIndex => $answer)
                @include('vendor.backpack.crud.fields.answer', ['qIndex' => $index, 'index' => $answerIndex, 'answer' =>
                $answer])
                @endforeach
            </div>
            <button type="button" class="btn btn-secondary add-answer" data-qindex="{{ $index }}">Add Answer</button>
        </div>
        <button type="button" class="btn btn-danger remove-question">Remove Question</button>
    </div>
</div>