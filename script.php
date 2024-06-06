<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                user: $('#username').val(),
                pass: $('#password').val(),
                action: $('#action').val() 
            }
            $.ajax({
                url: 'proseslogin.php',
                type: 'POST',
                data: data,
                success:function(response){
                    alert(response);
                    // console.log(response);
                    if(response=="Login Successfull"){
                        window.location.reload();
                    }
                }
            });
        });
    }
</script>