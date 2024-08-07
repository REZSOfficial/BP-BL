<div class="answer-item form-group">
    <label for="questions[{{ $qIndex }}][answers][{{ $index }}][answer]">Válasz</label>
    <input type="text" name="questions[{{ $qIndex }}][answers][{{ $index }}][answer]" value="{{ $answer['answer'] }}"
        required class="form-control">
    <div class="form-check">
        <input type="radio" name="questions[{{ $qIndex }}][is_correct]" value="{{ $index }}" required
            class="form-check-input" {{ isset($answer['is_correct']) && $answer['is_correct'] ? 'checked' : '' }}>
        <label class="form-check-label" for="questions[{{ $qIndex }}][is_correct]">Helyes</label>
    </div>
    <button type="button" class="btn btn-danger remove-answer">Válasz eltávolítása</button>
</div>