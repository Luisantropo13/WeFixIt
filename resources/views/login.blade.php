<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact</title>
</head>

<body style="color:white; ">
    @extends('components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <div class="row">
        <div class="col-6">
            <h2>Login</h2>
        </div>

        <div class="col-6">
            <h2>Register</h2>
        </div>
    </div>

    <div class="tab-content">
        <div class="row" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form method="post" action="workerLogin" class="col-6">
                @csrf

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input name="workerEmail" type="email" id="loginName" placeholder="Example@email.com" class="form-control" />
                    <label class="form-label" for="loginName">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input name="workerPass" type="password" id="loginPassword" placeholder="Pass" class="form-control" />
                    <label class="form-label" for="loginPassword">Password</label>
                </div>

                <!-- 2 column grid layout -->
                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            </form>

            <form method="post" action="clientRegister" class="col-6">
                @csrf

                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input required name="clientName" type="text" class="form-control" placeholder="Name">
                    <label class="form-label" for="registerName">Name</label>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input required autocomplete="off" name="clientEmail" type="email" class="form-control" placeholder="Example@email.com">
                    <label class="form-label" for="registerUsername">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input required name="clientPass" type="password" class="form-control" placeholder="Pass">
                    <label class="form-label" for="registerPassword">Password</label>
                </div>

                <!-- Telephone input -->
                <div class="form-outline mb-4">
                    <input required name="clientPhone" type="text" class="form-control" placeholder="xxx xxx xxxx">
                    <label class="form-label" for="registerEmail">Telephone</label>
                </div>

                <!-- Address input -->
                <div class="form-outline mb-4">
                    <input required name="clientAdress" type="text" class="form-control" placeholder="Street Fake xxx">
                    <label class="form-label" for="registerPassword">Address</label>
                </div>

                <!--Birthday input -->
                <div class="form-outline mb-4">
                    <input required name="clientBornDate" class="form-control it-date-datepicker"  type="date" placeholder="dd/mm/aaaa">
                    <label class="form-label" for="registerRepeatPassword">Birthday</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input required class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                    <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
            </form>
        </div>
        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            
            @if( !$login ) 
                <script> alert( "YA existe la cuenta" ); </script>
            @endif


        </div>
    </div>
    <!-- Pills content -->
    @endsection
</body>

</html>