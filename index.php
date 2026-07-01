<?php
// udea.online - Mint Gateway Project
// English Main Page: Services and FAQs Interface
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mint Gateway for Electronic Payment Services | UDEA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --main-red: #ff0000;
            --site-grey: #f4f4f4;
            --dark-grey: #333333;
            --pure-white: #ffffff;
            --border-grey: #dddddd;
            --pure-black: #000000;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--pure-white);
            color: var(--dark-grey);
            line-height: 1.6;
        }

        /* Fixed Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--site-grey);
            border-bottom: 1px solid var(--border-grey);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .menu-toggle {
            font-size: 22px;
            color: var(--main-red);
            cursor: pointer;
            background: none;
            border: none;
        }

        .company-name {
            font-size: 20px;
            font-weight: bold;
            color: var(--dark-grey);
        }

        .lang-switch {
            background-color: transparent;
            color: var(--main-red);
            border: 1px solid var(--main-red);
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .lang-switch:hover {
            background-color: var(--main-red);
            color: var(--pure-white);
        }

        /* Page Wrapper */
        .main-wrapper {
            background-color: var(--site-grey);
            padding-top: 120px;
            padding-bottom: 40px;
            min-height: 100vh;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section directly on background */
        .hero-section {
            text-align: center;
            margin-bottom: 40px;
            padding: 10px 0;
        }

        .hero-section h1 {
            font-size: 28px;
            color: var(--dark-grey);
            margin-bottom: 15px;
            font-weight: bold;
        }

        .hero-section p {
            color: #555555;
            font-size: 16px;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Services Grid (4 Buttons) */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .btn-service {
            background-color: var(--pure-white);
            color: var(--dark-grey);
            border: 2px solid var(--border-grey);
            padding: 25px 15px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .btn-service i {
            font-size: 32px;
            color: var(--main-red);
        }

        .btn-service:hover {
            border-color: var(--main-red);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        /* FAQ Section */
        .faq-section {
            background: var(--pure-white);
            padding: 30px 20px;
            border-radius: 8px;
            border: 1px solid var(--border-grey);
            margin-bottom: 40px;
        }

        .faq-section h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 22px;
            color: var(--dark-grey);
        }

        .faq-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* FAQ Card with Red Border */
        .faq-card {
            background-color: var(--pure-white);
            border: 1px solid var(--main-red);
            border-radius: 6px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-question {
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            user-select: none;
            background-color: var(--pure-white);
        }

        .faq-question h3 {
            font-size: 15px;
            color: var(--dark-grey);
            font-weight: 600;
        }

        .faq-icon {
            font-size: 18px;
            color: var(--main-red);
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background-color: var(--site-grey);
            border-top: 0 solid var(--border-grey);
        }

        .faq-answer p {
            padding: 15px 20px;
            font-size: 14px;
            color: #555555;
            line-height: 1.7;
        }

        /* Black Footer */
        footer {
            background-color: var(--pure-black);
            color: #ffffff;
            border-top: 2px solid var(--main-red);
            padding: 40px 20px 20px 20px;
        }

        .footer-company-title {
            font-size: 24px;
            font-weight: bold;
            color: var(--main-red);
            text-align: center;
            margin-bottom: 25px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--main-red);
            text-decoration: underline;
        }

        .footer-disclaimer {
            font-size: 13px;
            color: #cccccc;
            max-width: 850px;
            margin: 0 auto 25px auto;
            text-align: center;
            line-height: 1.8;
            background-color: #111111;
            padding: 20px;
            border-radius: 6px;
            border: 1px solid #222222;
        }

        .footer-copy {
            text-align: center;
            font-size: 12px;
            color: #666666;
            border-top: 1px solid #222222;
            padding-top: 15px;
        }

        /* Accordion Open Toggles */
        .faq-card.active .faq-icon {
            transform: rotate(45deg);
        }
        
        .faq-card.active .faq-answer {
            border-top-width: 1px;
        }

        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            header {
                padding: 12px 15px;
            }
            .company-name {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="header-left">
            <button class="menu-toggle" id="menuBtn"><i class="fa-solid fa-bars"></i></button>
            <div class="company-name">Mint Gateway for Electronic Payment Services</div>
        </div>
        <a href="index.php" class="lang-switch">AR</a>
    </header>

    <div class="main-wrapper">
        <div class="container">
            
            <div class="hero-section">
                <h1>Mint Gateway for Secure Payment Solutions in UAE</h1>
                <p>The unified and secure platform to facilitate online payment transactions and instant balance recharge for traffic and road services.</p>
            </div>

            <div class="services-grid">
                
                <a href="payment.php?service=salek_recharge" class="btn-service">
                    <i class="fa-solid fa-road"></i>
                    <span>Salik Services</span>
                </a>

                <a href="payment.php?service=traffic_fines" class="btn-service">
                    <i class="fa-solid fa-car-burst"></i>
                    <span>Traffic Fines Payment</span>
                </a>

                <a href="payment.php?service=nol_request" class="btn-service">
                    <i class="fa-solid fa-address-card"></i>
                    <span>Request New Nol Card</span>
                </a>

                <a href="payment.php?service=nol_recharge" class="btn-service">
                    <i class="fa-solid fa-money-bill-transfer"></i>
                    <span>Nol Card Top-up</span>
                </a>

            </div>

            <div class="faq-section">
                <h2>Frequently Asked Questions & General Information</h2>
                <div class="faq-container">
                    
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>What is the udea.online platform?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>It is an independent electronic portal that offers digital facilities for bill payments and recharging road transit cards online in a fully simplified and secure manner for users.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>How can I top up my Salik account balance?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Simply click on the "Salik Services" button, enter the account or card number you want to recharge, select the required amount, and complete the payment through our encrypted gateway.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>Can I check and pay traffic fines instantly?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, the platform allows you to enter vehicle details, view outstanding amounts, and pay fines directly to update records as quickly as possible.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>How long does it take for the Nol card balance to update after recharge?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>The recharge request is sent instantly. However, activating the balance on the physical card may sometimes require tapping it on card readers at metro or bus stations.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>How do I submit a request for a new Nol card?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>You can go to the "Request New Nol Card" section, fill in your details and address, and the card will be processed, issued, and delivered to you in coordination with the relevant parties.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>Are there additional fees when paying via Mint Gateway?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>A small administrative service fee may apply for facilitating instant online transactions. All amounts are clearly displayed before confirming the payment.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>What are the supported payment methods on this website?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>We support most major local and international credit and debit cards (Visa and MasterCard) to ensure a flexible payment experience.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>Are payment transactions on this website safe and secure?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, completely. All financial data is encrypted using advanced security protocols that guarantee no sensitive information is shared or leaked.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>What should I do if I enter an incorrect account number by mistake?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Please contact technical support immediately before system processing completes. It is highly difficult to reverse or refund amounts once they are dispatched to utility authorities.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>Is this website directly affiliated with the RTA?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>No, this website is an independent payment and facilitation platform owned by Mint Gateway for Electronic Payment Services, and is not the official website of any government entity.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>How can I get a payment receipt for my transaction?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Upon successful completion of the process, a digital receipt will appear on the screen containing all transaction details. You can save or print it as proof of payment.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>What is the refund policy in case of a failed transaction?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>If an amount is deducted but the service is not recharged due to a technical error, funds are automatically reversed to the original card within the timeframe specified in our policy.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>Is the service available for use 24 hours a day?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, the portal operates automatically 24 hours a day, 7 days a week, to meet your needs and facilitate your transactions at any time and from anywhere.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>What should I do if I experience an issue during payment?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Please send the issue details via the Contact Us page or immediately communicate with our active customer support team to resolve the issue right away.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>How can I check the updated terms of use for the website?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>You can review the "Terms and Conditions" page linked at the bottom of the website at any time to stay updated on all applicable regulations and terms.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="footer-company-title">Mint Gateway for Electronic Payment Services</div>
        
        <div class="footer-links">
            <a href="privacy-policy.php">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions</a>
            <a href="refund-policy.php">Refund Policy</a>
            <a href="disclaimer.php">Disclaimer</a>
        </div>

        <div class="footer-disclaimer">
            <strong>Ownership and Legal Operation Information:</strong> 
            The current domain name <strong>udea.online</strong> is an official digital platform fully and legally owned by <strong>Mint Gateway for Electronic Payment Services LLC - Dubai Branch</strong>. This website is entirely operated and managed by Mint Gateway for Electronic Payment Services as the direct legal owner responsible for all operations, services, and technical solutions provided through this portal. This website represents an independent commercial intermediary platform that facilitates and supports payment solutions, and is not the official government website of the respective authorities.
        </div>

        <div class="footer-copy">
            &copy; 2026 udea.online. All rights reserved for Mint Gateway for Electronic Payment Services.
        </div>
    </footer>

    <script>
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const card = question.parentElement;
                const answer = card.querySelector('.faq-answer');
                
                // Close other open cards for cleaner layout
                document.querySelectorAll('.faq-card').forEach(item => {
                    if (item !== card && item.classList.contains('active')) {
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.maxHeight = null;
                    }
                });
                
                // Toggle current card
                card.classList.toggle('active');
                if (card.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });

        // Header Menu Button Alert
        document.getElementById('menuBtn').addEventListener('click', function() {
            alert('Main menu toggled');
        });
    </script>
</body>
</html>
