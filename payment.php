<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php
if (strlen($_SESSION['login'] == 0)) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap- Payment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        @media only print {
            body {
                visibility: hidden;
            }

            .payment {
                visibility: visible;
            }
        }
    </style>
</head>

<body>

    <!-- Payment Start -->
    <div class="container-fluid card shadow-sm rounded-1 py-2 mb-3" style="height: 100%; width:800px;">
        <div class="payment">
            <?php
            $adid = intval($_GET['id']);
            $cn = mysqli_connect("localhost", "root", "", "adsnap");
            $sql = "SELECT Name,Email,Phone,AdTitle,CompanyName,CategoryName,Fee,UploadDate,UploadTime from advertising,category,customer WHERE advertising.CustomerId=customer.CustomerId AND advertising.CategoryId=category.CategoryId AND advertising.AdId='" . $adid . "'";
            $result = mysqli_query($cn, $sql);
            while ($data = mysqli_fetch_array($result)) {
                $name = $data[0];
                $email = $data[1];
                $phone = $data[2];
                $adtitle = $data[3];
                $companyname = $data[4];
                $categoryname = $data[5];
                $fee = $data[6];
                $uploadDate = $data[7];
                $uploadTime = $data[8];
            }
            mysqli_close($cn);
            ?>
            <div class="d-flex rounded justify-content-between p-2 mt-2">
                <span>
                    <a href="index.php">
                        <h2 class=" text-primary"><img src="img/ads.png" alt="Logo" class="me-1" style="height:75px; width: 75px;">AdSnap</h2>
                    </a>
                </span>
                <span>
                    <span class="d-flex"><i class="fa-solid fa-envelope"></i>
                        <h6 class="ms-1">Email: adsnapinfo@gmail.com</h6>
                    </span>
                    <span class="d-flex"><i class="fa-solid fa-phone"></i>
                        <h6 class="ms-1">Phone: +95-979-130-1124</h6>
                    </span>
                    <span class="d-flex"><i class="fa-solid fa-calendar-days"></i>
                        <h6 class="ms-1">Date:<?php echo $uploadDate; ?></h6>
                    </span>
                </span>
            </div>
            <hr class="border border-success border-1 opacity-50">
            <div class="row">
                <div class="col-8">
                    <h4 class="ms-5 text-primary"><i>Advertising Voucher</i></h4>
                    <table class="mt-3">
                        <tr style="height: 45px;">
                            <td class="fs-6"><i>Name:</i></td>
                            <td><input type="text" style="height: 35px;" class="rounded form-control" name="" id="" value="<?php echo $name; ?>"></td>
                        </tr>
                        <tr style="height: 45px;">
                            <td class="fs-6 w-25"><i>Email:</i></td>
                            <td class="w-75"><input type="text" style="height: 35px;" class="rounded form-control" name="" id="" value="<?php echo $email; ?>"></td>
                        </tr>
                        <tr style="height: 45px;">
                            <td class="fs-6"><i>Phone No:</i></td>
                            <td><input type="text" style="height: 35px;" class="rounded form-control" name="" id="" value="0<?php echo $phone; ?>"></td>
                        </tr>
                        <tr style="height: 45px;">
                            <td class="fs-6"><i>Ads Title:</i></td>
                            <td><input type="text" style="height: 35px;" class="rounded form-control" name="" id="" value="<?php echo $adtitle; ?>"></td>
                        </tr>
                        <tr style="height: 45px;">
                            <td class="fs-6"><i>Company Name:</i></td>
                            <td><input type="text" style="height: 35px;" class="rounded form-control" name="" id="" value="<?php echo $companyname; ?>"></td>
                        </tr>
                        <tr style="height: 45px;">
                            <td class="fs-6"><i>Category:</i></td>
                            <td><input type="text" style="height: 35px;" class="rounded form-control" name="" id="" value="<?php echo $categoryname; ?>"></td>
                        </tr>
                        <tr style="height: 45px;">
                            <td class="fs-6"><i>Fee:</i></td>
                            <td><input type="text" style="height: 35px;" class="rounded form-control" name="" id="" value="<?php echo $fee; ?> MMK"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <h4 class="text-primary"><i>KBZ QR Scanner</i></h4>
                    <img src="img/qrcode.jpg" class="rounded mt-1 mb-1" width="200px" height="220px">
                    <ul>
                        <li>To payment, you need to scan the QR Code with KBZ Pay.</li>
                        <li>Else, you can choose other Payment Methods.</li>
                    </ul>
                </div>
            </div>
            <hr class="border border-success border-1 opacity-50">
            <div class="row">
                <h4 class="text-primary"><i class="fa-solid fa-caret-right text-primary me-1"></i><i>Other Payment Methods</i></h4>
                <ol type="1">
                    <li><img src="./img/wavemoney.png" class="rounded mt-1 me-1" width="50px" height="50px">Wave Pay Account: 09790663667 (U Naing Paing Oo)</li>
                    <li><img src="./img/kbz2.png" class="rounded mt-1 me-1" width="50px" height="50px">KBZ Mobile Banking: 07330107300878201</li>
                </ol>
                <hr class="border border-success border-1 opacity-50">
                <h4 class="text-danger"><i class="fa-solid fa-caret-right text-danger me-1"></i><i>Remark</i></h4>
                <ul class="text-danger">
                    <li>After transfering payment, please send your transaction (Screenshot) to
                        Viber No: 09791301124 (Aung Phyo Kyaw).</li>
                    <li>Then,our admin team will confirm your advertising. If you have any problem, please contact us with email or phone.</li>
                    <li>Please notice that your upload ads is valid for one week.</li>
                    <?php
                    $fdate = date("Y-m-d h:i:sa", strtotime($uploadTime . "+1 hours"));
                    ?>
                    <li>Please finish your payment before <?php echo $fdate; ?>. Else, this upload ads in the history will be deleted automatically.</li>
                </ul>
                <hr class="border border-success border-1 opacity-50">
                <div class="d-flex justify-content-center mb-3">
                    <i class="fa-solid fa-face-grin-hearts text-primary me-1"></i><i class="text-primary">Thanks for choosing our website for your ads. Have a nice day.</i><i class="fa-solid fa-face-grin-hearts text-primary ms-1"></i>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-evenly mb-3">
            <button id="print-button" class="btn btn-primary" style="width: 140px;" name="submit" onclick="cssPrint()">Print Voucher</button>
            <a href="index.php" onclick="alert('Your advertising is completed.');"><input type="button" class="btn btn-primary" value="Done"></a>
        </div>

    </div>

    <!-- Payment End -->


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- <script>
    function printContent() {
      // Get the printable content
      var printableContent = document.getElementById('payment').innerHTML;

      // Create a new window for printing
      var printWindow = window.open('', '_blank');

      // Write the printable content to the new window
      printWindow.document.write('<html><head><title>Print</title></head><body>' + printableContent + '</body></html>');

      // Close the document after printing
      printWindow.document.close();

      // Print the document
      printWindow.print();
    }
  </script> -->
    <script>
        var cssBtnWrapEl = document.getElementById("print-button");

        function cssPrint() {
            cssBtnWrapEl.style.display = "none";
            print();
        }
    </script>
    <script>
        // Get all textboxes on the page
        var textboxes = document.querySelectorAll('input[type="text"]');

        // Loop through each textbox and set readOnly attribute to true
        textboxes.forEach(function(textbox) {
            textbox.readOnly = true;
        });
    </script>

</body>

</html>