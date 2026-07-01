<?php
// udea.online - Mint Gateway Project
// Dynamic Single-Page Bilingual Refund Policy (English & Arabic)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" id="htmlPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="siteTitle">Refund Policy - Mint Gateway | UDEA</title>
    <!-- Include FontAwesome for Icons -->
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
            transition: direction 0.3s ease, text-align 0.3s ease;
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

        /* Content Card */
        .legal-card {
            background: var(--pure-white);
            padding: 40px 30px;
            border-radius: 8px;
            border: 1px solid var(--border-grey);
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .legal-card h1 {
            font-size: 28px;
            color: var(--dark-grey);
            margin-bottom: 25px;
            border-bottom: 2px solid var(--main-red);
            padding-bottom: 10px;
        }

        .clause-item {
            margin-bottom: 25px;
            border-bottom: 1px dashed #eeeeee;
            padding-bottom: 15px;
        }

        .clause-item:last-child {
            border-bottom: none;
        }

        .legal-card h2 {
            font-size: 17px;
            color: var(--dark-grey);
            margin-bottom: 10px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .legal-card h2 span.clause-num {
            background: var(--main-red);
            color: var(--pure-white);
            padding: 2px 8px;
            font-size: 13px;
            border-radius: 4px;
        }

        .legal-card p {
            font-size: 14.5px;
            color: #555555;
            text-align: justify;
            line-height: 1.8;
        }

        /* RTL Adjustments via Body Classes */
        html[dir="rtl"] body {
            text-align: right;
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

        @media (max-width: 768px) {
            header {
                padding: 12px 15px;
            }
            .company-name {
                font-size: 16px;
            }
            .legal-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Fixed Header -->
    <header>
        <div class="header-left">
            <button class="menu-toggle" id="menuBtn"><i class="fa-solid fa-bars"></i></button>
            <div class="company-name" id="navCompanyName">Mint Gateway for Electronic Payment Services</div>
        </div>
        <!-- زرار التبديل الفوري التفاعلي -->
        <button onclick="toggleLanguage()" class="lang-switch" id="langBtn">AR</button>
    </header>

    <!-- Main Content Wrapper -->
    <div class="main-wrapper">
        <div class="container">
            
            <div class="legal-card">
                <h1 id="pageMainHeading">Refund Policy</h1>
                
                <div id="clausesContainer">
                    <!-- سيتم توليد الـ 40 بند ديناميكياً هنا عبر السكريبت باللغتين بدقة تامة -->
                </div>
            </div>

        </div>
    </div>

    <!-- Black Footer -->
    <footer>
        <div class="footer-company-title" id="footerTitle">Mint Gateway for Electronic Payment Services</div>
        
        <div class="footer-links">
            <a href="privacy-policy.php">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions</a>
            <a href="refund-policy.php">Refund Policy</a>
            <a href="disclaimer.php">Disclaimer</a>
        </div>

        <div class="footer-disclaimer" id="footerDisclaimerText">
            <strong>Ownership and Legal Operation Information:</strong> The current domain name <strong>udea.online</strong> is an official digital platform fully and legally owned by <strong>Mint Gateway for Electronic Payment Services LLC - Dubai Branch</strong>. This website is entirely operated and managed by Mint Gateway for Electronic Payment Services as the direct legal owner responsible for all operations, services, and technical solutions provided through this portal. This website represents an independent commercial intermediary platform that facilitates and supports payment solutions, and is not the official government website of the respective authorities.
        </div>

        <div class="footer-copy" id="footerCopyText">
            &copy; 2026 udea.online. All rights reserved for Mint Gateway for Electronic Payment Services.
        </div>
    </footer>

    <!-- سكريبت الترجمة الفورية وقاعدة البيانات لـ 40 بنداً قانونياً كاملاً بدون نقص -->
    <script>
        let currentLang = 'en';

        const dynamicContent = {
            staticTexts: {
                en: {
                    siteTitle: "Refund Policy - Mint Gateway | UDEA",
                    navCompanyName: "Mint Gateway for Electronic Payment Services",
                    pageMainHeading: "Refund Policy",
                    footerTitle: "Mint Gateway for Electronic Payment Services",
                    footerDisclaimerText: "<strong>Ownership and Legal Operation Information:</strong> The current domain name <strong>udea.online</strong> is an official digital platform fully and legally owned by <strong>Mint Gateway for Electronic Payment Services LLC - Dubai Branch</strong>. This website is entirely operated and managed by Mint Gateway for Electronic Payment Services as the direct legal owner responsible for all operations, services, and technical solutions provided through this portal. This website represents an independent commercial intermediary platform that facilitates and supports payment solutions, and is not the official government website of the respective authorities.",
                    footerCopyText: "&copy; 2026 udea.online. All rights reserved for Mint Gateway for Electronic Payment Services.",
                    langBtn: "AR"
                },
                ar: {
                    siteTitle: "سياسة الاسترداد - مينت جيت واي | يوديا",
                    navCompanyName: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    pageMainHeading: "سياسة الاسترداد",
                    footerTitle: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    footerDisclaimerText: "<strong>معلومات الملكية والتشغيل القانوني:</strong> اسم النطاق الحالي <strong>udea.online</strong> هو منصة رقمية رسمية مملوكة بالكامل وبشكل قانوني لـ <strong>شركة مينت جيت واي لخدمات الدفع الإلكتروني ذ.م.م - فرع دبي</strong>. هذا الموقع يتم تشغيله وإدارته بالكامل بواسطة مينت جيت واي لخدمات الدفع الإلكتروني باعتبارها المالك القانوني المباشر المسؤول عن جميع العمليات والخدمات والحلول التقنية المقدمة عبر هذه البوابة. يمثل هذا الموقع منصة وسيطة تجارية مستقلة تسهل وتدعم حلول الدفع، وليس الموقع الحكومي الرسمي للجهات المعنية.",
                    footerCopyText: "&copy; 2026 udea.online. جميع الحقوق محفوظة لشركة مينت جيت واي لخدمات الدفع الإلكتروني.",
                    langBtn: "EN"
                }
            },
            clauses: [
                {
                    en: { t: "Scope of Refund Framework", d: "This protocol outlines the constraints governing financial adjustment and refund requests executed via Mint Gateway on udea.online." },
                    ar: { t: "نطاق إطار الاسترداد", d: "يحدد هذا البروتوكول القيود التي تحكم طلبات التسوية المالية والاسترداد التي يتم تنفيذها عبر مينت جيت واي على udea.online." }
                },
                {
                    en: { t: "Finality of Successful Utility Pushes", d: "Once financial values are successfully routed and accepted by public utility servers (Salik, Nol, or traffic fines), transactions are absolute and entirely non-refundable." },
                    ar: { t: "نهائية الدفعات الناجحة للمرافق", d: "بمجرد توجيه القيم المالية بنجاح وقبولها من قبل خوادم المرافق العامة (سالك، أو نول، أو المخالفات المرورية)، تصبح المعاملات قطعية وغير قابلة للاسترداد بالكامل." }
                },
                {
                    en: { t: "Immediate System Processing Action", d: "Because our query interfaces trigger prompt validation chains with regional settlement nodes, payment orders cannot be recalled or halted." },
                    ar: { t: "إجراء معالجة النظام الفوري", d: "نظرًا لأن واجهات الاستعلام لدينا تفعل سلاسل تحقق فورية مع عقد التسوية الإقليمية، فلا يمكن استدعاء أوامر الدفع أو إيقافها." }
                },
                {
                    en: { t: "Exclusion of User Error Cases", d: "No financial returns are granted if a visitor inputs wrong account references, vehicle plate values, or unmatched system identifiers." },
                    ar: { t: "استبعاد حالات أخطاء المستخدم", d: "لا يتم منح أي مستردات مالية إذا قام الزائر بإدخال مراجع حساب خاطئة، أو قيم لوحات مركبات غير صحيحة، أو معرفات نظام غير متطابقة." }
                },
                {
                    en: { t: "Failed Gateway Interdictions", d: "If an amount is extracted from a funding instrument but core system errors disrupt terminal deployment to utility servers, the value enters an evaluation loop." },
                    ar: { t: "اعتراضات البوابة الفاشلة", d: "إذا تم سحب مبلغ من أداة التمويل ولكن أدت أخطاء النظام الأساسية إلى تعطيل النشر النهائي لخوادم المرافق، فإن القيمة تدخل في حلقة تقييم." }
                },
                {
                    en: { t: "Automated Reversal Channels", d: "Verified double charges or failed processing instances are configured to auto-reverse straight back to the originating credit or debit card framework." },
                    ar: { t: "قنوات العكس المؤتمتة", d: "يتم تهيئة عمليات الخصم المزدوج التي تم التحقق منها أو حالات المعالجة الفاشلة للعكس التلقائي مباشرة إلى إطار بطاقة الائتمان أو الخصم الأصلية." }
                },
                {
                    en: { t: "Non-Refundability of Administrative Fees", d: "All service facilitation additions processed by Mint Gateway are retained as structural processing fees and are never subject to refund claims." },
                    ar: { t: "عدم قابلية رسوم الإدارة للاسترداد", d: "يتم الاحتفاظ بجميع إضافات تسهيل الخدمة التي معالجتها بواسطة مينت جيت واي كرسوم معالجة هيكلية ولا تخضع أبداً لمطالبات الاسترداد." }
                },
                {
                    en: { t: "Review Processing Timeline", d: "Internal evaluation processes for disrupted transactions demand up to fourteen (14) business days to finalize corporate balancing approvals." },
                    ar: { t: "الجدول الزمني لمعالجة المراجعة", d: "تتطلب عمليات التقييم الداخلي للمعاملات المعطلة ما يصل إلى أربعة عشر (14) يوم عمل لإنهاء موافقات الموازنة المؤسسية." }
                },
                {
                    en: { t: "Banking Clearing Windows", d: "Actual clearance of reversed parameters into user balances depends exclusively on card issuing bank rules, occasionally needing up to thirty (30) extra days." },
                    ar: { t: "نوافذ المقاصة المصرفية", d: "يعتمد التخليص الفعلي للمحددات المعكوسة في أرصدة المستخدمين حصرياً على قواعد البنك المصدر للبطاقة، ويحتاج أحياناً إلى ما يصل إلى ثلاثين (30) يوماً إضافياً." }
                },
                {
                    en: { t: "Submission Deadline Constraints", d: "Claims regarding payment errors must be submitted within forty-eight (48) hours of the initial transaction execution log." },
                    ar: { t: "قيود الموعد النهائي لتقديم الطلبات", d: "يجب تقديم المطالبات المتعلقة بأخطاء الدفع في غضون ثمانٍ وأربعين (48) ساعة من سجل تنفيذ المعاملة الأولي." }
                },
                {
                    en: { t: "Mandatory Documentation Matrix", d: "Every claim requires an official digital receipt copy, masked card reference strings, and the explicit platform tracking code." },
                    ar: { t: "مصفوفة الوثائق الإلزامية", d: "تتطلب كل مطالبة نسخة رقمية رسمية من الإيصال، وسلاسل مرجعية مقنعة للبطاقة، ورمز تتبع المنصة الصريح." }
                },
                {
                    en: { t: "Chargeback Interdiction Protocol", d: "Initiating unverified structural bank chargebacks without contacting support triggers automatic logging of transaction metrics for legal pushbacks." },
                    ar: { t: "بروتوكول منع اعتراضات الدفع", d: "إن بدء اعتراضات دفع مصرفية هيكلية غير متحقق منها دون الاتصال بالدعم يفعل التسجيل التلقائي لمقاييس المعاملات للمقاومة القانونية." }
                },
                {
                    en: { t: "Handling Currency Drift Values", d: "Mint Gateway bears zero legal obligation for balance variations resulting from bank-enforced dynamic currency conversions or conversion spreads." },
                    ar: { t: "التعامل مع قيم انجراف العملات", d: "لا تتحمل مينت جيت واي أي التزام قانوني عن تغيرات الأرصدة الناتجة عن تحويلات العملات الديناميكية المفروضة من البنوك أو فروق الأسعار." }
                },
                {
                    en: { t: "Incomplete Card Recharges", d: "If public infrastructure delays prevent immediate balance activation on physical transport profiles, users must engage institutional desk points directly." },
                    ar: { t: "تعبئة البطاقات غير المكتملة", d: "إذا منعت تأخيرات البنية التحتية العامة التنشيط الفوري للرصيد على ملفات النقل المادية، يجب على المستخدمين مراجعة مكاتب المؤسسات مباشرة." }
                },
                {
                    en: { t: "Nol Card Request Refusals", d: "Fees allocated for personal card creation routes enter non-refundable boundaries once technical issuing modules process the sequence fields." },
                    ar: { t: "رفض طلبات بطاقات نول", d: "تدخل الرسوم المخصصة لمسارات إنشاء البطاقات الشخصية حدوداً غير قابلة للاسترداد بموجب معالجة وحدات الإصدار التقنية لحقول التسلسل." }
                },
                {
                    en: { t: "Suspicious Behavior Retentions", d: "We reserve the clear institutional authority to indefinitely block adjustments if automated patterns reveal system exploitation flags." },
                    ar: { t: "احتجاز السلوكيات المشبوهة", d: "نحتفظ بالسلطة المؤسسية الواضحة لحظر التسويات إلى أجل غير مسمى إذا كشفت الأنماط المؤتمتة عن أعلام استغلال النظام." }
                },
                {
                    en: { t: "Third-Party Settlement Intermediaries", d: "Certain financial pathways process under independent acquiring nodes; their strict internal operational bounds override regional timing parameters." },
                    ar: { t: "وسطاء التسوية من جهات خارجية", d: "تتم معالجة بعض مسارات التمويل بموجب عقد تحصيل مستقلة؛ وتتجاوز حدودها التشغيلية الداخلية الصارمة معلمات التوقيت الإقليمية." }
                },
                {
                    en: { t: "Exclusion of Speculative Claims", d: "Refund arguments anchored around fluid delivery speed metrics or transient display delays are explicitly rejected by administrative boards." },
                    ar: { t: "استبعاد المطالبات التخمينية", d: "تُرفض حجج الاسترداد المرتكزة على مقاييس سرعة التسليم المتغيرة أو تأخيرات العرض العابرة صراحة من قبل مجالس الإدارة." }
                },
                {
                    en: { t: "Partial Adjustment Prohibitions", d: "Transactions cannot be broken down into individual sub-segments for selective partial returns; files process entirely or remain closed." },
                    ar: { t: "حظر التسويات الجزئية", d: "لا يمكن تقسيم المعاملات إلى قطاعات فرعية فردية لمرتجعات جزئية انتقائية؛ تتم معالجة الملفات بالكامل أو تظل مغلقة." }
                },
                {
                    en: { t: "Modifications to Refund Rules", d: "Mint Gateway sustains full legal autonomy to alter adjustment parameters instantly, and active rules apply dynamically to ongoing loops." },
                    ar: { t: "تعديلات قواعد الاسترداد", d: "تحافظ مينت جيت واي على استقلاليتها القانونية الكاملة لتغيير معلمات التسوية فوراً، وتطبق القواعد النشطة ديناميكياً على الحلقات الجارية." }
                },
                {
                    en: { t: "Interbank Processing Discrepancies", d: "Delays caused by regulatory sweeps within corresponding international banking routes are entirely outside our operational domain." },
                    ar: { t: "فوارق المعالجة بين البنوك", d: "التأخيرات الناتجة عن عمليات التدقيق التنظيمية داخل مسارات الخدمات المصرفية الدولية المقابلة تقع تماماً خارج نطاقنا التشغيلي." }
                },
                {
                    en: { t: "Direct Verification Communications", d: "To confirm validity, our auditing agents may call or text user endpoints prior to processing complex file corrections." },
                    ar: { t: "اتصالات التحقق المباشرة", d: "لتأكيد الصلاحية، يجوز لوكلاء التدقيق لدينا الاتصال أو إرسال رسائل نصية لنقاط نهاية المستخدم قبل معالجة تصحيحات الملفات المعقدة." }
                },
                {
                    en: { t: "Exclusion of Closed System Accounts", d: "No adjustments are structured for payment cards that have been deactivated or canceled prior to the initialization of the return sequence." },
                    ar: { t: "استبعاد حسابات النظام المغلقة", d: "لا يتم تنظيم أي تسويات لبطاقات الدفع التي تم إلغاء تنشيطها أو إلغاؤها قبل بدء تسلسل الإرجاع." }
                },
                {
                    en: { t: "Forced Transaction Interruption", d: "If system layers intercept a transaction during terminal breakdowns, the processing value is isolated until complete balancing runs finish." },
                    ar: { t: "انقطاع المعاملات القسري", d: "إذا اعترضت طبقات النظام معاملة أثناء الأعطال الطرفية، يتم عزل قيمة المعالجة حتى تنتهي عمليات الموازنة الكاملة." }
                },
                {
                    en: { t: "Platform Maintenance Safeguards", d: "Adjustments are temporarily paused during scheduled technical infrastructure adjustments or major maintenance windows." },
                    ar: { t: "ضمانات صيانة المنصة", d: "يتم إيقاف التسويات مؤقتاً أثناء التعديلات المجدولة للبنية التحتية التقنية أو نوافذ الصيانة الكبرى." }
                },
                {
                    en: { t: "Erroneous Double Extraction Resolving", d: "When technical logging logs register duplicate hits for a single request, the second execution total is immediately isolated for reversal tracking." },
                    ar: { t: "حل السحب المزدوج الخاطئ", d: "عندما تسجل سجلات التسجيل الفني ضربات مكررة لطلب واحد، يتم عزل إجمالي التنفيذ الثاني فوراً لتتبع العكس." }
                },
                {
                    en: { t: "System Log Infallibility", d: "In all structural evaluations, database timestamps and response records preserved on udea.online servers act as final evidence." },
                    ar: { t: "عصمة سجلات النظام", d: "في جميع التقييمات الهيكلية، تعمل الطوابع الزمنية لقاعدة البيانات وسجلات الاستجابة المحفوظة على خوادم udea.online كدليل نهائي." }
                },
                {
                    en: { t: "Anti-Laundering Compliance Checks", d: "All manual adjustments undergo thorough anti-laundering audits to prove funding destinations match perfectly with the entry instrument." },
                    ar: { t: "فحوصات الامتثال لمكافحة غسيل الأموال", d: "تخضع جميع التسويات اليدوية لتدقيق شامل لمكافحة غسيل الأموال لإثبات تطابق وجهات التمويل تماماً مع أداة الدخول." }
                },
                {
                    en: { t: "Administrative Processing Expenses", d: "Mint Gateway reserves the authority to deduct specific structural assessment expenses from adjusted values prior to clearance execution." },
                    ar: { t: "مصاريف المعالجة الإدارية", d: "تحتفظ مينت جيت واي بالسلطة لخصم مصاريف تقييم هيكلية محددة من القيم المسواة قبل تنفيذ التخليص." }
                },
                {
                    en: { t: "Government Authority Confiscations", d: "Amounts directed toward satisfying active penal code judgements or traffic violations cannot be recovered under any operational condition." },
                    ar: { t: "مصادرات السلطة الحكومية", d: "لا يمكن استرداد المبالغ الموجهة لتسوية أحكام قانون العقوبات النشطة أو المخالفات المرورية بموجب أي شرط تشغيلي." }
                },
                {
                    en: { t: "Non-Transferability of Adjustments", d: "Approved return allocations cannot be moved to alternative target credit profiles, digital wallets, or external recipient parameters." },
                    ar: { t: "عدم قابلية التسويات للنقل", d: "لا يمكن نقل مخصصات الإرجاع المعتمدة إلى ملفات ائتمان مستهدفة بديلة، أو محافظ رقمية، أو معلمات مستلمين خارجيين." }
                },
                {
                    en: { t: "Merchant Rule Primacy", d: "Acquiring gateway terms provided by regional banking operators establish the foundation for all financial evaluation runs." },
                    ar: { t: "أولوية قواعد التاجر", d: "تؤسس شروط بوابة التحصيل المقدمة من مشغلي البنوك الإقليمية الأساس لجميع عمليات التقييم المالي." }
                },
                {
                    en: { t: "Communication Protocol Channels", d: "Refund inquiries must transit exclusively through standard platform email targets; live chat variables carry zero structural legal validity." },
                    ar: { t: "قنوات بروتوكول الاتصال", d: "يجب أن تمر استفسارات الاسترداد حصرياً عبر أهداف البريد الإلكتروني القياسية للمنصة؛ وتحمل متغيرات الدردشة الحية صفراً من الصلاحية القانونية الهيكلية." }
                },
                {
                    en: { t: "System Crash Protections", d: "If unexpected hardware server failures drop processing loops mid-way, balance fixes evaluate immediately upon infrastructure stabilization." },
                    ar: { t: "حمايات انهيار النظام", d: "إذا أدت إخفاقات خادم الأجهزة غير المتوقعة إلى إسقاط حلقات المعالجة في منتصف الطريق، يتم تقييم إصلاحات الرصيد فور استقرار البنية التحتية." }
                },
                {
                    en: { t: "Regulatory Audit Isolation", d: "Transactions placed under institutional validation sweeps by regional regulators remain frozen until official clearance codes are handed down." },
                    ar: { t: "عزل التدقيق التنظيمي", d: "تظل المعاملات الخاضعة لعمليات التدقيق التنظيمي المؤسسي من قبل المنظمين الإقليميين مجمدة حتى يتم تسليم رموز التخليص الرسمية." }
                },
                {
                    en: { t: "Indemnity Acceptance Requirements", d: "To finalize complex manual return files, users may be requested to confirm digital release statements protecting current assets." },
                    ar: { t: "متطلبات قبول التعويض", d: "لإنهاء ملفات الإرجاع اليدوية المعقدة، قد يُطلب من المستخدمين تأكيد بيانات إبراء الذمة الرقمية لحماية الأصول الحالية." }
                },
                {
                    en: { t: "Waiver of External Damaged Claims", d: "By accepting a return adjustments file, the visitor completely waives all rights to file for subsequent systemic damage claims." },
                    ar: { t: "التنازل عن مطالبات الأضرار الخارجية", d: "بقَبول ملف تسويات الإرجاع، يتنازل الزائر تماماً عن جميع الحقوق لرفع مطالبات أضرار نظامية لاحقة." }
                },
                {
                    en: { t: "Unclaimed Operational Totals", d: "Disrupted funds left without tracking submissions for longer than sixty calendar days transfer permanently to unclaimable ledger structures." },
                    ar: { t: "المجاميع التشغيلية غير المطالب بها", d: "الأموال المعطلة التي تُترك دون تقديم طلبات تتبع لأكثر من ستين يوماً تقويمياً تنتقل نهائياً إلى هياكل دفاتر الحسابات غير القابلة للمطالبة بها." }
                },
                {
                    en: { t: "Severability of Protective Terms", d: "If an administrative adjudicator strikes out an individual phrase here, the remainder of this policy continues in absolute binding force." },
                    ar: { t: "قابلية فصل الشروط الحمائية", d: "إذا ألغى حكم إداري عبارة فردية هنا، فإن بقية هذه السياسة تستمر بقوة ملزمة مطلقة." }
                },
                {
                    en: { t: "Absolute Binding Resolution", d: "Executing transaction parameters on udea.online validates that you possess a full, clear understanding and accept every constraint of this policy." },
                    ar: { t: "القرار الملزم المطلق", d: "إن تنفيذ معلمات المعاملات على udea.online يثبت أنك تمتلك فهماً كاملاً وواضحاً وتقبل كل قيود هذه السياسة." }
                }
            ]
        };

        function renderClauses() {
            const container = document.getElementById('clausesContainer');
            container.innerHTML = '';
            
            dynamicContent.clauses.forEach((clause, index) => {
                const clauseNum = index + 1;
                const content = clause[currentLang];
                
                const clauseHTML = `
                    <div class="clause-item">
                        <h2>
                            <span class="clause-num">${clauseNum}</span>
                            <span class="clause-title">${content.t}</span>
                        </h2>
                        <p>${content.d}</p>
                    </div>
                `;
                container.innerHTML += clauseHTML;
            });
        }

        function translatePage() {
            const texts = dynamicContent.staticTexts[currentLang];
            document.getElementById('siteTitle').innerText = texts.siteTitle;
            document.getElementById('navCompanyName').innerText = texts.navCompanyName;
            document.getElementById('pageMainHeading').innerText = texts.pageMainHeading;
            document.getElementById('footerTitle').innerText = texts.footerTitle;
            document.getElementById('footerDisclaimerText').innerHTML = texts.footerDisclaimerText;
            document.getElementById('footerCopyText').innerHTML = texts.footerCopyText;
            document.getElementById('langBtn').innerText = texts.langBtn;

            const htmlTag = document.getElementById('htmlPage');
            if (currentLang === 'ar') {
                htmlTag.setAttribute('dir', 'rtl');
                htmlTag.setAttribute('lang', 'ar');
            } else {
                htmlTag.setAttribute('dir', 'ltr');
                htmlTag.setAttribute('lang', 'en');
            }

            renderClauses();
        }

        function toggleLanguage() {
            currentLang = (currentLang === 'en') ? 'ar' : 'en';
            translatePage();
        }

        window.onload = function() {
            translatePage();
        };

        document.getElementById('menuBtn').addEventListener('click', function() {
            alert(currentLang === 'en' ? 'Main menu toggled' : 'تم تفعيل القائمة الرئيسية');
        });
    </script>
</body>
</html>
