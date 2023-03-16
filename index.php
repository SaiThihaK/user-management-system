<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/css/style.css" />

    <title>Document</title>
</head>

<body style="width:100vw;height:100vh">
    <div class="container-md">
        <!-- Sign in Box start -->
        <?php @require "./view/component/auth/signin.php" ?>
        <?php @require "./view/component/auth/signup.php" ?>
        <?php @require "./view/component/auth/forgetpassword.php" ?>
    </div>

</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#to-signup").click(function(e) {
            $("#signin-box").hide(); //to hide signin page when user click sign up
            $("#signup-box").show();
        })
        $("#to-signin").click(function(e) {
            $("#signup-box").hide(); //to hide signup page when user click sign up
            $("#signin-box").show();
        })
        $("#to-forgot-password").click(function(e) {
            $("#signin-box").hide(); //to hide signup page when user click sign up
            $("#forgot-password-box").show();
        })
        $("#back-to-signin").click(function(e) {
            $("#forgot-password-box").hide(); //to hide signup page when user click sign up
            $("#signin-box").show();
        })

    })
</script>

</html>