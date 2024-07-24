@php
$entry = isset($entry) ? $entry : new \App\Models\QuestionSet();
$questions = old('questions', $entry->questions ?? []);
@endphp

<div class="card">
    <div class="card-header">Kérdések</div>
    <div class="card-body">
        <div id="questions-wrapper">
            @foreach ($questions as $index => $question)
            @include('vendor.backpack.crud.fields.question', [
            'index' => $index,
            'question' => $question,
            ])
            @endforeach
        </div>
        <button type="button" class="btn btn-secondary" id="add-question">Kérdés hozzáadása</button>
    </div>
</div>

@push('crud_fields_scripts')
<script>
    $(document).ready(function() {
            let questionIndex = {
                {
                    count($questions)
                }
            };
            const questionsWrapper = $('#questions-wrapper');

            $('#add-question').click(function() {
                const questionTemplate = `
                @include('vendor.backpack.crud.fields.question', [
                'index' => '__INDEX__',
                'question' => ['question' => '', 'answers' => []],
                ])
        `;
                const newQuestion = questionTemplate.replace(/__INDEX__/g, questionIndex++);
                questionsWrapper.append(newQuestion);
            });

            questionsWrapper.on('click', '.remove-question', function() {
                $(this).closest('.question-item').remove();
            });

            questionsWrapper.on('click', '.add-answer', function() {
                const qIndex = $(this).data('qindex');
                const answersWrapper = $(`#answers-wrapper-${qIndex}`);
                let answerIndex = answersWrapper.find('.answer-item').length;

                const answerTemplate = `
      @include('vendor.backpack.crud.fields.answer', [
          'qIndex' => '__QINDEX__',
          'index' => '__INDEX__',
          'answer' => ['answer' => '', 'is_correct' => false],
      ])
    `;
                const newAnswer = answerTemplate.replace(/__QINDEX__/g, qIndex).replace(/__INDEX__/g,
                    answerIndex++);
                answersWrapper.append(newAnswer);
            });

            questionsWrapper.on('click', '.remove-answer', function() {
                $(this).closest('.answer-item').remove();
            });
        });
</script>
@endpush