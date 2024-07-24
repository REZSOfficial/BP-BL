@php
$entry = isset($entry) ? $entry : new \App\Models\QuestionSet();
$questions = old('questions', $entry->questions ?? []);
@endphp

<div class="card">
    <div class="card-header">Questions</div>
    <div class="card-body">
        <div id="questions-wrapper">
            @foreach ($questions as $index => $question)
            @include('vendor.backpack.crud.fields.question', ['index' => $index, 'question' => $question])
            @endforeach
        </div>
        <button type="button" class="btn btn-secondary" id="add-question">Add Question</button>
    </div>
</div>

@push('crud_fields_scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let questionIndex = {{ count($questions) }};
        const questionsWrapper = document.getElementById('questions-wrapper');

        document.getElementById('add-question').addEventListener('click', function () {
            const questionTemplate = `
                @include('vendor.backpack.crud.fields.question', ['index' => '__INDEX__', 'question' => ['question' => '', 'answers' => []]])
            `;
            const newQuestion = questionTemplate.replace(/__INDEX__/g, questionIndex++);
            questionsWrapper.insertAdjacentHTML('beforeend', newQuestion);
        });

        questionsWrapper.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-question')) {
                event.target.closest('.question-item').remove();
            }

            if (event.target.classList.contains('add-answer')) {
                const qIndex = event.target.dataset.qindex;
                const answersWrapper = document.getElementById(`answers-wrapper-${qIndex}`);
                let answerIndex = answersWrapper.querySelectorAll('.answer-item').length;

                const answerTemplate = `
                    @include('vendor.backpack.crud.fields.answer', ['qIndex' => '__QINDEX__', 'index' => '__INDEX__', 'answer' => ['answer' => '', 'is_correct' => false]])
                `;
                const newAnswer = answerTemplate.replace(/__QINDEX__/g, qIndex).replace(/__INDEX__/g, answerIndex++);
                answersWrapper.insertAdjacentHTML('beforeend', newAnswer);
            }

            if (event.target.classList.contains('remove-answer')) {
                event.target.closest('.answer-item').remove();
            }
        });
    });
</script>
@endpush