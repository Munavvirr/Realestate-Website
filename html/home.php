<?php
// Define your database credentials
$servername = "localhost";
$username = "root";
$password = "toot";
$dbname = "real_estate";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname, 8111);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $client_name = $_POST["client_name"];
    $client_phone_number = $_POST["client_phone_number"];
    $client_requirements = $_POST["client_requirements"];

    // SQL statement to insert data into the database
    $sql = "INSERT INTO user_details (name, phone_number, client_name, client_phone_number, client_requirements)
            VALUES (?,?,?,?,?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters with their respective data types
    $stmt->bind_param("sssss", $name, $phone_number, $client_name, $client_phone_number, $client_requirements);

    if ($stmt->execute()) {
        // Update the submission status
        $submissionStatus = "Submitted successfully!";
    } else {
        $submissionStatus = "Error: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="img6" src="../images/Pawar Real Estate White Logo.png" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            </div>
        </div>
    </nav>
    <div style='background-image: url("../images/cover_pic.png"); background-repeat: no-repeat;
        background-size: cover; z-index: -1; position: absolute; top: 0; left: 0; width: 100%; height: 100%;'></div>
    <div class="bgColor">
        <div class="container section">
            <div class="row">
                <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                    <p class="text1">Unlock Opportunities with Our Referral Program</p>
                    <p class="text2">
                        Welcome to the Real Estate Landing Referral Registration Forum!
                        This forum is open to everyone who is above the age of 18 and
                        interested in making money by referring our properties to
                        potential clients.
                    </p>
                </div>
                <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6"></div>
            </div>
        </div>
    </div>

    <div class="bgColor1">
        <div class="container pt-5">
            <h1 class="heading1 text-center pt-5">How it Works?</h1>
            <div class="row">
                <div class="col-xl-7 p-4">
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                            <div class="row pt-5">
                                <div class="col-8">
                                    <p class="text12">1. Referral Program</p>
                                </div>
                                <div class="col-4">
                                    <img class="icons" src="../images/network.png" />
                                </div>
                            </div>
                            <p class="text11">
                                Imagine earning upto 30% of refered property's value to your
                                income, just by referring clients to Pawar Real Estate Group.
                            </p>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                            <div class="row pt-5">
                                <div class="col-8">
                                    <p class="text12">2. Program Details and Registration</p>
                                </div>
                                <div class="col-4">
                                    <img class="icons" src="../images/register.png" />
                                </div>
                            </div>
                            <p class="text11">
                                To register visit our website. Complete the quick registration
                                on our Website with your basic contact information.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                            <div class="row pt-5">
                                <div class="col-8">
                                    <p class="text12">3. Referral Submission</p>
                                </div>
                                <div class="col-4">
                                    <img class="icons" src="../images/checklist.png" />
                                </div>
                            </div>
                            <p class="text11">
                                To complete the registration, kindly provide property
                                information, relevant contact details, and the client's
                                information and detailed requirements.
                            </p>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                            <div class="row pt-5">
                                <div class="col-8">
                                    <p class="text12">4. Client Evaluation</p>
                                </div>
                                <div class="col-4">
                                    <img class="icons" src="../images/feedback.png" />
                                </div>
                            </div>
                            <p class="text11">
                                The referral will be evaluated by our team and they referred
                                property based on set criteria. If the client and property
                                meet the criteria, it is listed for sale.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                            <div class="row pt-5">
                                <div class="col-8">
                                    <p class="text12">5. Sale Confirmation</p>
                                </div>
                                <div class="col-4">
                                    <img class="icons" src="../images/approved.png" />
                                </div>
                            </div>
                            <p class="text11">
                                Once the sale is successfully completed, our team confirms the
                                sale details, including the sale price. The referral
                                commission is calculated after the sales are confirmed
                            </p>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                            <div class="row pt-5">
                                <div class="col-8">
                                    <p class="text12">6. Referral Commission Calculation</p>
                                </div>
                                <div class="col-4">
                                    <img class="icons" src="../images/budget.png" />
                                </div>
                            </div>
                            <p class="text11">
                                The referral commission, calculated at 30% of the sale price,
                                offers you the potential to earn up to 60,000 Rs per referral.
                                This opportunity is based on a 2 lakh commission from a 1
                                crore transaction. people to answer surveys, so you can
                                increase your income by doing them.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row pt-5">
                                <div class="col-8">
                                    <p class="text12">
                                        7. Commission Approval and Payment Receipt
                                    </p>
                                </div>
                                <div class="col-4">
                                    <img class="icons" src="../images/bill.png" />
                                </div>
                            </div>
                            <p class="text11">
                                Following a comprehensive review by an authorized team member,
                                the calculated commission is approved and the receipt will be
                                forwarded, and deposited in bank.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-5 col-xl-5">
                    <div><img class="city2" src="../images/images (1) (5).jpeg" /></div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 pt-5">
            <img class="city" src="../images/city3.jpeg" />
        </div>
        <div class="container pt-5">
            <h1 class="text-center heading pt-5">
                Unlock Rewards with Pawar Real Estate Group's 3 Simple Referral Steps
            </h1>
            <div class="row">
                <div class="col-xl-4 col-sm-12 col-md-12 col-lg-4 box pt-3">
                    <p class="text3">Step 1: Refer Potential Clients</p>
                    <p class="text4">
                        Do you know someone looking to purchase property in Pune? Friends,
                        family, colleagues, or even connections on social media – everyone
                        counts! Refer them to PREG and kickstart your journey.
                    </p>
                </div>
                <div class="col-xl-4 col-sm-12 col-md-12 col-lg-4 box pt-3">
                    <p class="text3">Step 2: Earn Up to 30% Commission</p>
                    <p class="text4">
                        As your referred client successfully purchases a property, you
                        earn commissions up to 30% based on the property's valuation. Your
                        network becomes your asset, earning you rewards while helping
                        others find their dream properties.
                    </p>
                </div>
                <div class="col-xl-4 col-sm-12 col-md-12 col-lg-4 pt-3">
                    <p class="text3">Step 3: Empower Dreams</p>
                    <p class="text4">
                        Your referrals lead to fulfilled dreams. By connecting potential
                        clients to PREG, you're instrumental in making dreams come true,
                        and that's rewarding in more ways than one.
                    </p>
                </div>
            </div>
        </div>

        <div class="container section2">
            <h1 class="heading1 text-center">Benefits</h1>
            <p class="text6">
                There are many benefits to participating in the Real Estate Referral
                Registration Forum, including:
            </p>

            <div class="d-flex justify-content-center pt-5">
                <div class="row">
                    <div class="col-xl-2 col-sm-12 col-md-12 col-lg-2 d-flex justify-content-center">
                        <img class="img1" src="../images/banknotes-xxl.png" />
                    </div>
                    <div class="col-xl-10 col-sm-12 col-md-12 col-lg-2">
                        <p class="text5">
                            The opportunity to earn money by referring leads
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-3">
                <div class="row">
                    <div class="col-xl-2 col-sm-12 col-md-12 col-lg-2 d-flex justify-content-center">
                        <img class="img1" src="../images/handshake-xxl.png" />
                    </div>
                    <div class="col-xl-10 col-sm-12 col-md-12 col-lg-2">
                        <p class="text5">
                            The chance to connect with other real estate professionals
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-3">
                <div class="row">
                    <div class="col-xl-2 col-sm-12 col-md-12 col-lg-2 d-flex justify-content-center">
                        <img class="img1" src="../images/apartment-xxl.png" />
                    </div>
                    <div class="col-xl-10 col-sm-12 col-md-12 col-lg-2">
                        <p class="text5">
                            The ability to learn about the latest trends in real estate
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bgColor2">
        <div class="container section2">
            <h1 class="heading2 text-center">Sign up today</h1>
            <div class="row">
                <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6">
                    <div class="d-flex justify-content-center pt-5">
                        <div class="form-container">
                            <form id="myForm" method="post">
                                <div class="form-group">
                                    <label for="yourName">Your Name</label>
                                    <input type="text" id="name" name="name" required />
                                </div>
                                <div class="form-group">
                                    <label for="yourPhoneNumber">Your Phone Number</label>
                                    <input type="tel" id="phone_number" name="phone_number" required />
                                </div>
                                <div class="form-group">
                                    <label for="clientName">Client Name</label>
                                    <input type="text" id="client_name" name="client_name" required />
                                </div>
                                <div class="form-group">
                                    <label for="clientPhoneNumber">Client Phone Number</label>
                                    <input type="tel" id="client_phone_number" name="client_phone_number" required />
                                </div>
                                <div class="form-group">
                                    <label for="clientRequirements">Client Requirements</label>
                                    <textarea id="client_requirements" name="client_requirements" rows="4"
                                        required></textarea>
                                </div>
                                <button type="submit">Submit</button>
                                <?php if (!empty($submissionStatus)): ?>
                                <div class="submission-message"><?php echo $submissionStatus; ?></div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-12 col-md-12 col-lg-6 pt-4">
                    <img class="img2" src="../images/cities.png" />
                    <img class="img2" src="../images/city2.jpeg" />
                </div>
            </div>
        </div>
    </div>
    <div class="bgColor1">
        <div class="container section1 pb-5">
            <h1 class="heading3 text-center">Contact Us</h1>
            <div class="row pt-5">
                <div class="col-xl-7 col-sm-12 col-md-12 col-lg-7">
                    <img class="img3" src="../images/engaged-employees.jpg" />
                </div>
                <div class="col-xl-5 col-sm-12 col-md-12 col-lg-5 padTop">
                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-2 col-sm-12 col-md-12 col-lg-2 d-flex justify-content-center">
                                        <img class="img4" src="../images/mail-xxl.png" />
                                    </div>
                                    <div class="col-xl-10 col-sm-12 col-md-12 col-lg-10">
                                        <p class="text7">pawarrealestategroup@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-xl-2 col-sm-12 col-md-12 col-lg-2 d-flex justify-content-center">
                                        <img class="img4" src="../images/phone-xxl.png" />
                                    </div>
                                    <div class="col-xl-10 col-sm-12 col-md-12 col-lg-10">
                                        <p class="text7">+91 9096649556</p>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-xl-2 col-sm-12 col-md-12 col-lg-2 d-flex justify-content-center">
                                        <img class="img4" src="../images/location-xxl.png" />
                                    </div>
                                    <div class="col-xl-10 col-sm-12 col-md-12 col-lg-10">
                                        <p class="text7">Pune, India</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center align-items-center">
                            <div class="row pt-2 justify-content-center">
                                <div class="col-12 col-md-4 text-center">
                                    <a
                                        href="https://www.linkedin.com/posts/pawar-realestate-group_homesales-housesales-homeforsale-activity-7083335064146608128-WyfX?utm_source=share&utm_medium=member_android">
                                        <img class="img5 mx-5 mt-5" src="../images/linkedin-xxl.png" />
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <a href="https://www.instagram.com/p/CubTfByvamc/?igshid=MzRlODBiNWFlZA">
                                        <img class="img5 mx-5 mt-5" src="../images/instagram-xxl.png" />
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <a
                                        href="https://m.facebook.com/story.php?story_fbid=pfbid02Y6TXSTNfzYK34wmmRMRMAwx5K23trEDjRBnZm1w4Av5DwTGuBbbLcLYG5r2QrSULl&id=100083128039133&mibextid=Nif5oz">
                                        <img class="img5 mx-5 mt-5" src="../images/facebook-xl.png" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section3">
            <h1 class="heading3 text-center">Privacy Policy</h1>
            <p class="text8 pb-5">
                We are committed to protecting your privacy. This privacy policy
                explains how we collect, use, and share your personal information when
                you register for our referral forum.
            </p>
            <div class="card">
                <div class="card-header" id="question" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-plus"></i><span class="ms-3">What information do we collect?</span>
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="card-body faq-answer" id="answer">
                        We collect the following information when you register for our
                        referral forum:<br />
                        <ul>
                            <li>Your name</li>
                            <li>Your email address</li>
                            <li>Your phone number</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header faq-question" id="question" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-plus"></i><span class="ms-3">What is an early payment discount?</span>
                </div>
                <div class="collapse" id="collapseExample2">
                    <div class="card-body faq-answer" id="answer">
                        We use your information to:
                        <ul>
                            <li>Provide you with access to our forum</li>
                            <li>
                                Send you notifications about new posts and other forum
                                activities
                            </li>
                            <li>
                                Send you marketing messages about our products and services
                            </li>
                            <li>Improve our forum and make it more useful to you</li>
                            <li>Comply with applicable laws and regulations</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header faq-question" data-bs-toggle="collapse" data-bs-target="#collapseExample3"
                    aria-expanded="false" aria-controls="collapseExample" id="question">
                    <i class="fas fa-plus"></i><span class="ms-3">Who do we share your information with?</span>
                </div>
                <div class="collapse" id="collapseExample3">
                    <div class="card-body faq-answer" id="answer">
                        We may share your information with third-party service providers
                        who help us operate our forum, such as email marketing providers
                        and hosting companies. We may also share your information with
                        third parties if we are required to do so by law or if we believe
                        that sharing is necessary to protect our rights or the rights of
                        others.
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header faq-question" data-bs-toggle="collapse" data-bs-target="#collapseExample4"
                    aria-expanded="false" aria-controls="collapseExample" id="question">
                    <i class="fas fa-plus"></i><span class="ms-3">How do we protect your information?</span>
                </div>
                <div class="collapse" id="collapseExample4">
                    <div class="card-body faq-answer" id="answer">
                        We take steps to protect your information, such as using
                        encryption and firewalls. However, no data transmission over the
                        internet is 100% secure. Therefore, we cannot guarantee the
                        security of your information.
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header faq-question" data-bs-toggle="collapse" data-bs-target="#collapseExample5"
                    aria-expanded="false" aria-controls="collapseExample" id="question">
                    <i class="fas fa-plus"></i><span class="ms-3">About Your rights</span>
                </div>
                <div class="collapse" id="collapseExample5">
                    <div class="card-body faq-answer" id="answer">
                        You have the right to access, correct, delete, and restrict the
                        processing of your personal information. You also have the right
                        to object to the processing of your personal information and to
                        data portability.
                        <br />
                        To exercise these rights, please contact us at
                        pawarrealestategroup@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bgColor1 text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="text9">Copyright © 2023 All Rights Reserved</p>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-lg-2 d-flex justify-content-center">
                                    <img class="img10" src="../images/mail-xxl.png" />
                                </div>
                                <div class="col-xl-10 col-md-12 col-lg-12 text-center">
                                    <p class="text10">pawarrealestategroup@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-lg-2 d-flex justify-content-center">
                                    <img class="img10" src="../images/phone-xxl.png" />
                                </div>
                                <div class="col-xl-10 col-md-12 col-lg-12 text-center">
                                    <p class="text10">+91 9096649556</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-lg-2 d-flex justify-content-center">
                                    <img class="img10" src="../images/location-xxl.png" />
                                </div>
                                <div class="col-xl-10 col-md-12 col-lg-12 text-center">
                                    <p class="text10">Pune, India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row">
                        <h5 class="heading4 pb-3 pt-2">Follow us</h5>
                        <div class="col-4 col-md-4">
                            <a
                                href="https://www.linkedin.com/posts/pawar-realestate-group_homesales-housesales-homeforsale-activity-7083335064146608128-WyfX?utm_source=share&utm_medium=member_android">
                                <img class="social-icon" src="../images/linkedin-xxl.png" alt="LinkedIn" />
                            </a>
                        </div>
                        <div class="col-4 col-md-4">
                            <a href="https://www.instagram.com/p/CubTfByvamc/?igshid=MzRlODBiNWFlZA">
                                <img class="social-icon" src="../images/instagram-xxl.png" alt="Instagram" />
                            </a>
                        </div>
                        <div class="col-4 col-md-4">
                            <a
                                href="https://m.facebook.com/story.php?story_fbid=pfbid02Y6TXSTNfzYK34wmmRMRMAwx5K23trEDjRBnZm1w4Av5DwTGuBbbLcLYG5r2QrSULl&id=100083128039133&mibextid=Nif5oz">
                                <img class="social-icon" src="../images/facebook-xl.png" alt="Facebook" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>