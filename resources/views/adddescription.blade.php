<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ADC upload img form design</title>
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../../../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../../../assets/css/styles.css">
</head>

<body>
    <style>
        .contact-clean {
            background: #f1f7fc;
            padding: 80px 0;
        }

        @media (max-width:767px) {
            .contact-clean {
                padding: 20px 0;
            }
        }

        .contact-clean form {
            max-width: 480px;
            width: 90%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 4px;
            color: #505e6c;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        @media (max-width:767px) {
            .contact-clean form {
                padding: 30px;
            }
        }

        .contact-clean h2 {
            margin-top: 5px;
            font-weight: bold;
            font-size: 28px;
            margin-bottom: 36px;
            color: inherit;
        }

        .contact-clean form .form-control {
            background: #fff;
            border-radius: 2px;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05);
            outline: none;
            color: inherit;
            padding-left: 12px;
            height: 42px;
        }

        .contact-clean form .form-control:focus {
            border: 1px solid #b2b2b2;
        }

        .contact-clean form textarea.form-control {
            min-height: 100px;
            max-height: 260px;
            padding-top: 10px;
            resize: vertical;
        }

        .contact-clean form .btn {
            padding: 16px 32px;
            border: none;
            background: none;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 13px;
            letter-spacing: 0.4px;
            line-height: 1;
            outline: none !important;
        }

        .contact-clean form .btn:hover {
            opacity: 1;
        }

        .contact-clean form .btn:active {
            transform: translateY(1px);
        }

        .contact-clean form .btn-primary {
            background-color: #055ada !important;
            margin-top: 15px;
            color: #fff;
        }

        .footer-dark {
            padding: 50px 0;
            color: #f0f9ff;
            background-color: #282d32;
        }

        .footer-dark h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }

        .footer-dark ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .footer-dark ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.6;
        }

        .footer-dark ul a:hover {
            opacity: 0.8;
        }

        @media (max-width:767px) {
            .footer-dark .item:not(.social) {
                text-align: center;
                padding-bottom: 20px;
            }
        }

        .footer-dark .item.text {
            margin-bottom: 36px;
        }

        @media (max-width:767px) {
            .footer-dark .item.text {
                margin-bottom: 0;
            }
        }

        .footer-dark .item.text p {
            opacity: 0.6;
            margin-bottom: 0;
        }

        .footer-dark .item.social {
            text-align: center;
        }

        @media (max-width:991px) {
            .footer-dark .item.social {
                text-align: center;
                margin-top: 20px;
            }
        }

        .footer-dark .item.social>a {
            font-size: 20px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
            margin: 0 8px;
            color: #fff;
            opacity: 0.75;
        }

        .footer-dark .item.social>a:hover {
            opacity: 0.9;
        }

        .footer-dark .copyright {
            text-align: center;
            padding-top: 24px;
            opacity: 0.3;
            font-size: 13px;
            margin-bottom: 0;
        }

    </style>
    <section class="contact-clean">
        <form action="add" method="post">
            @csrf
            <h2 class="text-center">Upload product</h2>
            <p>Upload image</p>
            <p style="padding-top: 20px;padding-left: 10px;width: 100px">Title</p><input
                class="border rounded-pill form-control" type="text" name="title" placeholder="Image title">
            <p style="padding-top: 20px;padding-left: 10px;">Price per KG</p><input
                class="border rounded-pill form-control" name="price" type="text"
                placeholder="Price in Kenyan Shillings (KES)" required="">
            <p style="padding-left: 10px;padding-top: 20px;padding-bottom: 0px;">Available stock</p><input
                class="border rounded-pill form-control" type="text" name="stock">
            <p style="padding-top: 20px;padding-left: 10px;">Item description</p><textarea
                class="form-control form-control-sm" placeholder="Clearly describe your product" maxlength="5000"
                required="" name="description"></textarea>
            <div class="mb-3" style="text-align: center;"><button class="btn btn-primary border rounded-pill"
                    data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" type="submit"
                    style="text-align: center;" title="Submit your product">Upload</button></div>
        </form>
    </section>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
</body>

</html>
