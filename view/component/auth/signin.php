<div class="row  align-item-center wrapper justify-content-center" id="signin-box">
    <div class="col-10 my-auto">
        <div class="my-auto d-flex justify-content-center w-100 h-100">
            <img src="./asset/images/signin.png" class="w-50" s />
        </div>
        <div class="card-group">
            <div class="card-rounded-left p-4" style="flex-grow:1.4;">
                <h1 class="text-center text-primary font-weight-bold">
                    Sign in to Account
                </h1>
                <hr class="my-3">
                <form action="#" method="post" class="px-3" id="signin-form">


                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-envelope fa-lg"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" name="email" type="email" required class="form-control form-control-lg rounded-0" id="floatingInputGroup1" placeholder="E-mail">
                            <label for="floatingInputGroup1">E-mail</label>
                        </div>
                    </div>

                    <div class="input-group mb-3 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-key fa-lg"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" name="password" type="password" required class="form-control form-control-lg rounded-0" id="floatingInputGroup1" placeholder="Password">
                            <label for="floatingInputGroup1">Password</label>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <div class="mb-3 form-check" style="flex-grow:1;">
                            <input type="checkbox" class="form-check-input" id="customCheck">
                            <label class="form-check-label" for="customCheck">Remember me</label>
                        </div>
                        <div class="mb-3 float-right forgot">
                            <a href="#" class="text-info" id="to-forgot-password">Forgot Password?</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn bg-primary form-control text-white btn-lg btn-block mb-3 myBtn" id="signin-btn">Sign in</button>
                    </div>

                    <div class="d-flex justify-content-center align-item-center">
                        <span class="text-secondary">Don't you have a account yet?</span>
                        <a href="#" id="to-signup"> &nbsp;Sign up</a>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign in box end -->
</div>