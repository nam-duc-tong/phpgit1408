<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function submitData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                id: $("#id").val(),
                name: $("#name").val(),
                email: $("#email").val(),
                gender: $("#gender").val(),
            };
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response){
                    alert(response);
                    if(response == "DELETED Successfully"){
                        $("#"+action).css("display","none");
                    }
                }
            })
        });
    }
</script>