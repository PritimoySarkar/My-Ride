<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
<style>.swal-overlay {background-image: url("assets/img/error/error.jpg");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
<?php
if(!isset($_SESSION['user']))
{
    echo "<div id='custom'>
            <img id='bg' src='assets/img/error/error.jpg'>
           </div>";
	?>
        <style>
            #whole-body {
                /* The image used */
                display: none;
            }
            #bg{
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                size: auto;
            }
        </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
		//alert("You must log in to perform this task");
        swal("Login Error",'You must log in to perform this task','warning',{
                buttons:{
                    cancel: 'Login',
                },
                closeOnClickOutside: false,
            },
        ).then((value) =>{
            switch (value){
                default:
                    // swal("Clicked");
                    window.location.href="user/user_login.php";
            }
        });
        //window.location.href = "user/user_login.php";
	</script>
	<?php
}
?>