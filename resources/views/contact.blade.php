<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    @extends('components/plantilla')

    @section ('seccion')
    <h1>Página de Contactos</h1>
    <main class="row" style="padding:15px;">
        <section id="formu" class="col-12" style=" background-image: url(/media/fakefondo.png); color:white; padding:10px;">
            <form method="post" action="contactMail">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1"><h3>Name</h3></label>
                    <input name="subject" type="text" id="form4Example1" class="form-control" />
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2"><h3>Email address</h3></label>
                    <input  name="email" type="email" id="form4Example2" class="form-control" />
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3"><h3>Message</h3></label>
                    <textarea name="content" class="form-control" id="form4Example3" rows="4" style="min-height:400px;"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </section>
    </main>
    @endsection
</body>

</html>