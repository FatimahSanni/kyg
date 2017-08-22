@if(notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            type: "{{notify()->type()}}",
            text: "{!! notify()->option('text') !!}",
        });
    </script>
@endif