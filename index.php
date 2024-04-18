<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


     <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <form class="form_validate ajax_submit form_alert bg-light rounded p-5"  action="#" method="post">
                        <div>
                            <h4 class="text-center pb-3">Enquiry Form</h4>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for=" " class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for=" " class="form-label">Mobile No</label>
                            <input type="tel" name="mobile" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for=" " class="form-label">City</label>
                            <input type="text" name="city" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for=" " class="form-label">Service</label>
                            <input type="text" name="services" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for=" " class="form-label">Message</label>
                            <textarea class="form-control" name="message" placeholder="Message"  style="height: 100px" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['submit'])) {
        $mal = "mohammadkaleem5556@gmail.com";
        $ar_mial = explode(",", $mal);
        foreach ($ar_mial as $mel) :
            $to = $mel;
            $sub = "SUGGESTION MNBSOFT.COM";
            $msg = 'Name :' . $_POST['firstname'] . "\n" .
                'Email :' . $_POST['email'] . "\n" .
                'Phone No :' . $_POST['mobile'] . "\n" .
                'City :' . $_POST['city'] . "\n" .
                'Services :' . $_POST['services'] . "\n" .

                'Massage :' . $_POST['message'] . "\n";

            mail($to, $sub, $msg);
        endforeach;

        echo "<script>alert('Thank you for contacting us. Somebody will reply to you shortly.')</script>";
    }
    ?> 


</body>

</html>