<?php
/** Login Form */
add_shortcode('geeksEvent_Volunteer_Login', function () { ?>
    <div class="rounded-lg shadow bg-success p-5">
        <div class="p-5">
            <div class="container bg-white p-5 m-1 m-md-5 rounded-lg shadow-lg">
                <h1 class="font-weight-bold text-dark text-center display-3">Login Panel</h1>
                <hr class="w-75 border-secondary mx-auto">
                <form method="get" class="px-1 px-md-5" action="">
                    <div class="form-group my-5">
                        <label for="volunteer_name" class="text-dark font-weight-bold">Volunteer's Username</label>
                        <input type="text" name="volunteer_name" class="font-weight-bold border-dark rounded-pill form-control" id="volunteer_username">
                    </div>
                    <div class="form-group my-5">
                        <label for="volunteer_pass" class="text-dark font-weight-bold">Volunteer's Password</label>
                        <input type="Password" name="volunteer_pass" class="font-weight-bold border-dark rounded-pill form-control" id="volunteer_pass">
                    </div>
                    <div class="my-5"><button name="volunteer_signin" class="btn btn-lg py-3 shadow-lg btn-outline-success w-100 rounded-pill mt-3 font-weight-bold" id="volunteer_signin">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
});

/** User Form */
add_shortcode('geeksEvent_User_Create', function () { });
