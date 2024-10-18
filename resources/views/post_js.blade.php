<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Setup AJAX to include the CSRF token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $(document).ready(function(){
        $('#student_submit').click(function(e){
            e.preventDefault()
            const name = $('#name').val();
            const email = $('#email').val();
            const age = $('#age').val();
            const course = $('#course').val();

            $.ajax({
                method: 'post',
                url: "{{route('create.student')}}",
                data: {
                    name : name,
                    email: email,
                    age: age,
                    course: course
                },
                success: function (response) {
                    console.log(response)
                },
                error: function(response){
                    console.log(response)
                }
            });
        })
    })
</script>
