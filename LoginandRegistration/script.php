<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function submitData(){
        $(document).ready(function(){
            var data = {
                name: $('name').val(),
                username: $('#username').val(),
                password: $('#password').val(),
                action: $('action').val(),
            };
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response){
                    alert(response);
                    if(response == "Login Successful"){
                        window.location.reload();
                    }
                } 
            });
        });
    }
</script>