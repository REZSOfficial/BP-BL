<div class="answer-item form-group">
    <label for="questions[{{ $qIndex }}][answers][{{ $index }}][answer]">Answer</label>
    <input type="text" name="questions[{{ $qIndex }}][answers][{{ $index }}][answer]" value="{{ $answer['answer'] }}"
        class="form-control">
    <div class="form-check">
        <input type="checkbox" name="questions[{{ $qIndex }}][answers][{{ $index }}][is_correct]"
            class="form-check-input" {{ $answer['is_correct'] ? 'checked' : '' }}>
        <label class="form-check-label" for="questions[{{ $qIndex }}][answers][{{ $index }}][is_correct]">Is
            Correct</label>
    </div>
    <button type="button" class="btn btn-danger remove-answer">Remove Answer</button>
</div>