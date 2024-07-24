<div class="answer-item form-group">
    <label for="questions[{{ $qIndex }}][answers][{{ $index }}][answer]">Válasz</label>
    <input type="text" name="questions[{{ $qIndex }}][answers][{{ $index }}][answer]" value="{{ $answer['answer'] }}"
        class="form-control">
    <div class="form-check">
        <input type="checkbox" name="questions[{{ $qIndex }}][answers][{{ $index }}][is_correct]"
            class="form-check-input" {{ $answer['is_correct'] ? 'checked' : '' }}>
        <label class="form-check-label" for="questions[{{ $qIndex }}][answers][{{ $index }}][is_correct]">Helyes</label>
    </div>
    <button type="button" class="btn btn-danger remove-answer">Válasz eltávolítása</button>
</div>