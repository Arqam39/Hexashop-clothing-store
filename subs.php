<script>
            
            function post()
        {
            var email = document.getElementById("email").value;
            var name = document.getElementById("name").value;
            if(comment && name)
            {
                $.ajax
                ({
                type: 'post',
                url: 'post_comment.php',
                data: 
                {
                    user_email:email,
                    user_name:name
                },
                success: function (response) 
                {
                    document.getElementById("subscribers").innerHTML=response+document.getElementById("subscribers").innerHTML;
                    document.getElementById("name").value="";
                }
                });
            }
        }
        </script>
    