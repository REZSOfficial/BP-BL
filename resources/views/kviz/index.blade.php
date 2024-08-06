@extends('components.layout')

@section('content')
<div class="text-center alert invisible">
    <p>Töltse ki az összes választ.</p>
</div>
<div>
    <img class="object-fit-cover" id="quiz-img" src="https://picsum.photos/1440/616" alt="Kviz kép" width="100%"
        height="616px">
</div>
<div class="quiz">
    <h1>KVÍZ</h1>
    <div class="progress-icons">
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8.5C0 4.08172 3.58172 0.5 8 0.5H20V12.5C20 16.9183 16.4183 20.5 12 20.5H0V8.5Z"
                fill="#313131" />
            <path d="M11.3359 5.96289V14.5H9.50195V8.04883L7.52148 8.65234V7.23438L11.1543 5.96289H11.3359Z"
                fill="white" />
        </svg>

        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="6" cy="6.5" r="6" fill="#D9D9D9" />
        </svg>

        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="6" cy="6.5" r="6" fill="#D9D9D9" />
        </svg>
    </div>

    <form method="POST" id="quiz-form" class="quiz-form">
        <!-- Kérdések -->
        @foreach ($question_set->questions as $question)
        <h2>
            {{$question->question}}
        </h2>

        <div class="answers">
            @foreach ($question->answers as $answer)
            <div class="answer">
                <input type="radio" id="{{$question->id}}" name="question[{{$question->id}}]" value="{{$answer->id}}">
                <label for="{{$question->id}}">{{$answer->answer}}</label>
            </div>
            @endforeach
        </div>
        @endforeach
        <button onclick="handleVote()" type="submit" class="btn btn-primary" id="vote-btn">SZAVAZOK</button>
    </form>
</div>

<script>
    function handleVote() {
        event.preventDefault();
        $.ajax({
            url: "/api/data",
            type: "POST",
            data: $('#quiz-form').serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $(".quiz").html(data);
            },
            error: function(data) {
                $(".alert").removeClass("invisible");
                $(".alert").fadeIn();

                setTimeout(() => {
                        $(".alert").fadeOut();
                }, 5000);
            }
        });
    }
</script>
@endsection