<form class="data-form" method="POST" id="data-form">
    <h1>KVÍZ</h1>
    <div class="progress-icons">
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8.5C0 4.08172 3.58172 0.5 8 0.5H20V12.5C20 16.9183 16.4183 20.5 12 20.5H0V8.5Z"
                fill="#313131" />
        </svg>


        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8.5C0 4.08172 3.58172 0.5 8 0.5H20V12.5C20 16.9183 16.4183 20.5 12 20.5H0V8.5Z"
                fill="#313131" />
            <path
                d="M12.9883 13.0762V14.5H7.09375V13.293L9.84766 10.375C10.1055 10.0781 10.3105 9.81641 10.4629 9.58984C10.6191 9.36328 10.7324 9.1582 10.8027 8.97461C10.873 8.78711 10.9082 8.61523 10.9082 8.45898C10.9082 8.20508 10.8672 7.99023 10.7852 7.81445C10.707 7.63867 10.5918 7.50391 10.4395 7.41016C10.2871 7.31641 10.1016 7.26953 9.88281 7.26953C9.64844 7.26953 9.44727 7.33008 9.2793 7.45117C9.11133 7.57227 8.98242 7.74023 8.89258 7.95508C8.80273 8.16602 8.75781 8.40625 8.75781 8.67578H6.91797C6.91797 8.15625 7.04297 7.68359 7.29297 7.25781C7.54297 6.82812 7.89258 6.48633 8.3418 6.23242C8.79102 5.97461 9.31641 5.8457 9.91797 5.8457C10.5352 5.8457 11.0527 5.94336 11.4707 6.13867C11.8887 6.33398 12.2051 6.61328 12.4199 6.97656C12.6348 7.33984 12.7422 7.77734 12.7422 8.28906C12.7422 8.57812 12.6953 8.85742 12.6016 9.12695C12.5117 9.39648 12.3809 9.66406 12.209 9.92969C12.0371 10.1953 11.8301 10.4668 11.5879 10.7441C11.3457 11.0176 11.0723 11.3066 10.7676 11.6113L9.47852 13.0762H12.9883Z"
                fill="white" />
        </svg>


        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="6" cy="6.5" r="6" fill="#D9D9D9" />
        </svg>
    </div>

    <h2>Adatok megadása</h2>
    <div class="data-input-container">
        <div class="d-flex flex-column">
            <label class="data-label" for="name">Név<span class="text-danger">*</span></label>
            <input class="data-input" type="text" id="name" name="name">
        </div>
        <div class="d-flex flex-column">
            <label class="data-label" for="email">Email<span class="text-danger">*</span></label>
            <input class="data-input" type="text" id="email" name="email">
        </div>
        <div class="d-flex flex-column">
            <label class="data-label" for="phone">Telefonszám<span class="text-danger">*</span></label>
            <input class="data-input" type="number" id="phone" name="phone">
        </div>
        <div class="d-flex flex-column justify-content-start">
            <div class="">
                <input type="checkbox" id="over18" class="data-checkbox" name="over18">
                <label for="over18">Elmúltam 18 éves<span class="text-danger">*</span></label>
            </div>
            <div class="">
                <input type="checkbox" id="accept" class="data-checkbox" name="accept">
                <label for="accept">Hozzájárulok az adataim kezeléséhez<span class="text-danger">*</span></label>
            </div>
        </div>
    </div>

    <button type="submit" onclick="handleSubmit()" class="btn btn-primary">ELKÜLDÖM</button>
</form>

<script>
    function handleSubmit() {
        event.preventDefault();
        $.ajax({
            url: "/api/vote",
            type: "POST",
            data: $('#data-form').serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $(".quiz").html(data);
            },
            error: function(data) {
                $('#name').removeClass('invalid');
                $('#email').removeClass('invalid');
                $('#phone').removeClass('invalid');
                $('#over18').removeClass('invalid');
                $('#accept').removeClass('invalid');

                if(data.responseJSON.errors){
                    let errors = data.responseJSON.errors;
                
                    if(errors.name){
                        $('#name').addClass('invalid');
                    }

                    if(errors.email){
                        $('#email').addClass('invalid');
                    }

                    if(errors.phone){
                        $('#phone').addClass('invalid');
                    }

                    if(errors.over18){
                        $('#over18').addClass('invalid');
                    }

                    if(errors.accept){
                        $('#accept').addClass('invalid');
                    }
                }
            }
        });
    }
</script>

<style>

</style>