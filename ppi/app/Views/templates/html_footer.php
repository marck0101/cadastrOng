    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            console.log('teste');
            $('.editar').click(function() {
                // Get the id of selected phone and assign it in a variable called phoneData
                var phoneData = $(this).attr('id');
                console.log(phoneData);
            });
        });
    </script>

    </html>