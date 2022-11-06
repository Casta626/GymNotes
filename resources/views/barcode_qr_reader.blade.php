<!DOCTYPE html>
<html>

<head>
    <title>PHP Laravel Barcode QR Reader</title>
    <meta name="_token" content="" />
</head>

<body>
    <H1>PHP Laravel Barcode QR Reader</H1>
    <form action="" method="post" enctype="multipart/form-data">
    @csrf
        Select barcode image:
        <input type="file" name="BarcodeQrImage" id="BarcodeQrImage" accept="image/*"><br>
        <input type="submit" value="Read Barcode" name="submit">
    </form>
    <img id="image" />
    <script>
        var input = document.querySelector('input[type=file]');
        input.onchange = function() {
            var file = input.files[0];
            var fileReader = new FileReader();
            fileReader.onload = function(e) {
                {
                    let image = document.getElementById('image');
                    image.src = e.target.result;
                }
            }
            fileReader.readAsDataURL(file);
        }
    </script>
</body>

</html>

{{-- <input type="text" id="scanner" />
    <script>
        $(document).ready(function () {

            $('#scanner').val('');  // Input field should be empty on page load
            $('#scanner').focus();  // Input field should be focused on page load 

            $('html').on('click', function () {
                $('#scanner').focus();  // Input field should be focused again if you click anywhere
            });

            $('html').on('blur', function () {
                $('#scanner').focus();  // Input field should be focused again if you blur
            });

            $('#scanner').change(function () {

                if ($('#scanner').val() == '') {
                    return;  // Do nothing if input field is empty
                }

            $.ajax({
                url: '/scan/save',
                cache: false,
                type: 'GET',
                data: {
                    user_id: $('#scanner').val()
                },
                success: function (response) {
                    $('#scanner').val('');
        }
    });
});
});
    </script> --}}