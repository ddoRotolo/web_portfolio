<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Daniel Ocando</title>
        <?php include_once 'util/head.php' ?>
    </head>
        <div class="container-fluid"> 
            <?php include 'util/header.php' ?>
            <div class="row justify-content-center main-content collapse show" id="contact" >
                <h1 class="display-4 display-sm-2 col-10">Lets Work!</h1>
                <h2 class="display-5 display-sm-3 col-10">
                    Take a look at my <a href="https://www.linkedin.com/in/daniel-ocando/">Linkedin</a>
                    for more details about my work, or send me a <a href="#">message!</a>
                </h2>
            </div>
            <div class="row justify-content-center main-content collapse show">                    
                <form method="POST" class="col-10 pb-5" action="process_form.php">
                    <div class="row form-group">
                        <input class="col-12 col-sm-4 form-control" placeholder="name" type="text" name="name" id="name"></input>
                        <div class="col-1"></div>
                        <input class="mt-3 mt-sm-0 col-12 col-sm-7 form-control" placeholder="email" type="email" name="email" id="email"></input>
                    </div>
                    <div class="row form-group">
                        <input class="col form-control" placeholder="subject" type="subject" name="subject" id="subject"></input>
                    </div>
                    <div class="row form-group">
                        <textarea class="col form-control" id="message" name="message" placeholder="message"></textarea>
                    </div>
                    <div class="row justify-content-center">
                        <button class="col-sm-4 form-control btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <?php include 'util/footer.php' ?>
        </div>
       <body>
    </body>
</html>

