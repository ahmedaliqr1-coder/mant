<?php
// udea.online - Mint Gateway Project
// Dynamic Single-Page Bilingual Privacy Policy (English & Arabic)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" id="htmlPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="siteTitle">Privacy Policy - Mint Gateway | UDEA</title>
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
                <h1 id="pageMainHeading">Privacy Policy</h1>
                
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
                    siteTitle: "Privacy Policy - Mint Gateway | UDEA",
                    navCompanyName: "Mint Gateway for Electronic Payment Services",
                    pageMainHeading: "Privacy Policy",
                    footerTitle: "Mint Gateway for Electronic Payment Services",
                    footerDisclaimerText: "<strong>Ownership and Legal Operation Information:</strong> The current domain name <strong>udea.online</strong> is an official digital platform fully and legally owned by <strong>Mint Gateway for Electronic Payment Services LLC - Dubai Branch</strong>. This website is entirely operated and managed by Mint Gateway for Electronic Payment Services as the direct legal owner responsible for all operations, services, and technical solutions provided through this portal. This website represents an independent commercial intermediary platform that facilitates and supports payment solutions, and is not the official government website of the respective authorities.",
                    footerCopyText: "&copy; 2026 udea.online. All rights reserved for Mint Gateway for Electronic Payment Services.",
                    langBtn: "AR"
                },
                ar: {
                    siteTitle: "سياسة الخصوصية - مينت جيت واي | يوديا",
                    navCompanyName: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    pageMainHeading: "سياسة الخصوصية",
                    footerTitle: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    footerDisclaimerText: "<strong>معلومات الملكية والتشغيل القانوني:</strong> اسم النطاق الحالي <strong>udea.online</strong> هو منصة رقمية رسمية مملوكة بالكامل وبشكل قانوني لـ <strong>شركة مينت جيت واي لخدمات الدفع الإلكتروني ذ.م.م - فرع دبي</strong>. هذا الموقع يتم تشغيله وإدارته بالكامل بواسطة مينت جيت واي لخدمات الدفع الإلكتروني باعتبارها المالك القانوني المباشر المسؤول عن جميع العمليات والخدمات والحلول التقنية المقدمة عبر هذه البوابة. يمثل هذا الموقع منصة وسيطة تجارية مستقلة تسهل وتدعم حلول الدفع، وليس الموقع الحكومي الرسمي للجهات المعنية.",
                    footerCopyText: "&copy; 2026 udea.online. جميع الحقوق محفوظة لشركة مينت جيت واي لخدمات الدفع الإلكتروني.",
                    langBtn: "EN"
                }
            },
            clauses: [
                {
                    en: { t: "Corporate Framework & Identity", d: "This digital privacy charter describes the frameworks deployed by Mint Gateway for Electronic Payment Services LLC - Dubai Branch regarding operations on udea.online." },
                    ar: { t: "الإطار المؤسسي والهوية", d: "تصف ميثاق الخصوصية الرقمي هذا الأطر التي تطبقها شركة مينت جيت واي لخدمات الدفع الإلكتروني ذ.م.م - فرع دبي فيما يتعلق بالعمليات على udea.online." }
                },
                {
                    en: { t: "Scope of Application", d: "This structural policy covers all digital interactions, payment interface simulations, and service queries executed on this website." },
                    ar: { t: "نطاق التطبيق", d: "تغطي هذه السياسة الهيكلية جميع التفاعلات الرقمية، ومحاكاة واجهات الدفع، واستعلامات الخدمة التي يتم تنفيذها على هذا الموقع الإلكتروني." }
                },
                {
                    en: { t: "Legal Processing Consent", d: "By initiating an interaction or inputting any fine references, users grant an absolute expression of operational processing consent." },
                    ar: { t: "الموافقة القانونية على المعالجة", d: "من خلال بدء التفاعل أو إدخال أي مراجع للمخالفات، يمنح المستخدمون تعبيراً مطلقاً عن الموافقة على المعالجة التشغيلية." }
                },
                {
                    en: { t: "Voluntary Information Inputs", d: "We catalog temporary structural parameters explicitly provided when selecting utility fields, including Nol references or plate identifiers." },
                    ar: { t: "إدخالات البيانات الطوعية", d: "نقوم بفهرسة المعلمات الهيكلية المؤقتة المقدمة صراحة عند تحديد حقول المرافق، بما في ذلك مراجع نول أو معرفات اللوحات." }
                },
                {
                    en: { t: "Automated Log Ingestion", d: "Systems automatically record localized system metrics, server connection attempts, standard request headers, and device orientation profiles." },
                    ar: { t: "استيعاب السجلات التلقائي", d: "تسجل الأنظمة تلقائيًا مقاييس النظام المحلية، ومحاولات الاتصال بالخادم، ورؤوس الطلبات القياسية، وملفات تعريف اتجاه الجهاز." }
                },
                {
                    en: { t: "Salik Inquiry Specifications", d: "Data submitted for Salik queries is processed dynamic-to-session and is never held permanently within standard peripheral logs." },
                    ar: { t: "مواصفات استعلام سالك", d: "البيانات المقدمة لاستعلامات سالك تتم معالجتها ديناميكيًا حسب الجلسة ولا يتم الاحتفاظ بها نهائيًا في سجلات الأجهزة الطرفية القياسية." }
                },
                {
                    en: { t: "Traffic Fine Metric Protection", d: "Fine query identifiers are processed strictly to calculate layout routing displays without secondary internal descriptive storage." },
                    ar: { t: "حماية مقاييس المخالفات المرورية", d: "تتم معالجة معرفات استعلام المخالفات بدقة لحساب عروض توجيه الواجهة دون أي تخزين وصفي داخلي ثانوي." }
                },
                {
                    en: { t: "Nol Card Verification Parameters", d: "Card sequences typed to inspect top-up channels are treated as ephemeral records immediately wiped upon completion of the operational loop." },
                    ar: { t: "معلمات التحقق من بطاقة نول", d: "تُعامل تسلسلات البطاقات المكتوبة لفحص قنوات التعبئة كسجلات سريعة الزوال تُمسح فورًا عند اكتمال الحلقة التشغيلية." }
                },
                {
                    en: { t: "Non-Retention of Hard Financial Files", d: "No raw financial data, complete card integers, security verification values, or payment pinsets are processed or retained by our structural databases." },
                    ar: { t: "عدم الاحتفاظ بالملفات المالية الصارمة", d: "لا توجد بيانات مالية أولية، أو أرقام بطاقات كاملة، أو قيم التحقق الأمني، أو رموز الدفع السرية يتم معالجتها أو الاحتفاظ بها بواسطة قواعد بياناتنا الهيكلية." }
                },
                {
                    en: { t: "Session Storage Lifespans", d: "Operational interface inputs rely exclusively on volatile transient storage designed to self-terminate immediately upon active tab cancellation." },
                    ar: { t: "فترات تخزين الجلسة", d: "تعتمد مدخلات الواجهة التشغيلية حصريًا على تخزين مؤقت متطاير مصمم لينهي نفسه تلقائيًا فور إغلاق علامة التبويب النشطة." }
                },
                {
                    en: { t: "Geo-Location Context Ingestion", d: "IP strings are translated inside temporary runtime buffers to ensure region-appropriate regional gateway routing (such as United Arab Emirates targeting)." },
                    ar: { t: "استيعاب سياق الموقع الجغرافي", d: "يتم ترجمة سلاسل IP داخل مخازن تشغيل مؤقتة لضمان توجيه بوابة إقليمي مناسب للمنطقة (مثل استهداف دولة الإمارات العربية المتحدة)." }
                },
                {
                    en: { t: "Technical Interface Security", d: "We deploy active script defenses to secure interactive structural components from unauthorized external extraction attempts." },
                    ar: { t: "أمن الواجهة التقنية", d: "نحن ننشر دفاعات برمجية نشطة لتأمين المكونات الهيكلية التفاعلية من محاولات الاستخراج الخارجية غير المصرح بها." }
                },
                {
                    en: { t: "Strict Non-Disclosure Protocols", d: "Mint Gateway enforces clear limitations preventing the distribution, leasing, or commercial exploitation of transient user parameters to external marketers." },
                    ar: { t: "بروتوكولات عدم الإفصاح الصارمة", d: "تفرض مينت جيت واي قيودًا واضحة تمنع توزيع أو تأجير أو الاستغلال التجاري لمعلمات المستخدم المؤقتة للمسوقين الخارجيين." }
                },
                {
                    en: { t: "Essential Cookie Deployments", d: "We issue core functional cookies required to track chosen language flags and page stability factors without logging external user identities." },
                    ar: { t: "تطبيقات ملفات تعريف الارتباط الأساسية", d: "نحن ننص ملقات تعريف ارتباط وظيفية أساسية مطلوبة لتتبع أعلام اللغة المختارة وعوامل استقرار الصفحة دون تسجيل هويات المستخدمين الخارجية." }
                },
                {
                    en: { t: "Analytics Tracking Frameworks", d: "Anonymized aggregation arrays track general visit trajectories, click speeds, and standard conversion counts to preserve server balance." },
                    ar: { t: "أطر تتبع التحليلات", d: "تتتبع مصفوفات التجميع مجهولة الهوية مسارات الزيارات العامة، وسرعات النقرات، وأعداد التحويل القياسية للحفاظ على توازن الخادم." }
                },
                {
                    en: { t: "Independent Gateway Clarification", d: "This document governs only the assets of udea.online and holds zero application authority inside external networks or institutional gateways." },
                    ar: { t: "توضيح البوابة المستقلة", d: "تحكم هذه الوثيقة فقط أصول udea.online وليس لها أي سلطة تطبيق داخل الشبكات الخارجية أو البوابات المؤسسية." }
                },
                {
                    en: { t: "Operational Infrastructure Backbones", d: "The data execution environments are managed inside optimized cloud architecture utilizing highly reliable data pathways." },
                    ar: { t: "العمود الفقري للبنية التحتية التشغيلية", d: "يتم إدارة بيئات تنفيذ البيانات داخل بنية سحابية محسنة باستخدام مسارات بيانات عالية الموثوقية." }
                },
                {
                    en: { t: "Mandatory Corporate Disclosures", d: "Records will only be structured for institutional legal assessment when demanded by official UAE court documentation or judicial warrants." },
                    ar: { t: "الإفصاحات المؤسسية الإلزامية", d: "لن يتم تنظيم السجلات للتقييم القانوني المؤسسي إلا عندما تطلبها وثائق المحاكم الرسمية في دولة الإمارات العربية المتحدة أو الأوامر القضائية." }
                },
                {
                    en: { t: "Prevention of Structural Profiling", d: "This interface completely avoids building deep psychological behavioral profiles or persistent market tracking archives of unique visitors." },
                    ar: { t: "منع التنميط الهيكلي", d: "تتجنب هذه الواجهة تمامًا بناء ملفات تعريف سلوكية نفسية عميقة أو أرشيفات تتبع سوق مستمرة للزوار الفريدين." }
                },
                {
                    en: { t: "Dynamic Payment Route Inspection", d: "Session variables interact with payment routing interfaces strictly via encrypted validation handshakes to avoid interception." },
                    ar: { t: "فحص مسار الدفع الديناميكي", d: "تتفاعل متغيرات الجلسة مع واجهات توجيه الدفع بصرامة عبر مصافحات تحقق مشفرة لتجنب الاعتراض." }
                },
                {
                    en: { t: "Administrative Data Sanitization", d: "Temporary tables established within structural data routines are subjected to strict programmatic zero-out cycles multiple times daily." },
                    ar: { t: "تطهير البيانات الإدارية", d: "تخضع الجداول المؤقتة المنشأة ضمن روتين البيانات الهيكلية لدورات تصفير برمجية صارمة عدة مرات يوميًا." }
                },
                {
                    en: { t: "User Validation Mechanisms", d: "Input integrity filters evaluate format configurations of text blocks to shield database parameters from malicious buffer commands." },
                    ar: { t: "آليات التحقق من صحة المستخدم", d: "تقوم مرشحات سلامة الإدخال بتقييم تكوينات تنسيق كتل النصوص لحماية معلمات قاعدة البيانات من أوامر المخزن المؤقت الخبيثة." }
                },
                {
                    en: { t: "Data Breach Protocols", d: "In the event of network structural interference, operational modules instantly sever external database pathways to prevent horizontal leaks." },
                    ar: { t: "بروتوكولات خرق البيانات", d: "في حالة حدوث تداخل هيكلي في الشبكة، تقطع الوحدات التشغيلية فورًا مسارات قواعد البيانات الخارجية لمنع التسريبات الأفقية." }
                },
                {
                    en: { t: "Minors' Digital Boundary Constraints", d: "This environment does not intentionally capture, register, or service data patterns belonging to individuals under eighteen years of age." },
                    ar: { t: "قيود الحدود الرقمية للقاصرين", d: "لا تلتقط هذه البيئة أو تسجل أو تخدم عن قصد أنماط البيانات التي تنتمي إلى أفراد يقل عمرهم عن ثمانية عشر عامًا." }
                },
                {
                    en: { t: "Cross-Border Architectural Ingestion", d: "Technical infrastructure parameters may traverse international cloud segments to optimize loading speeds inside the Gulf Cooperation Council boundaries." },
                    ar: { t: "استيعاب البنية التحتية عبر الحدود", d: "قد تمر معلمات البنية التحتية التقنية عبر قطاعات سحابية دولية لتحسين سرعات التحميل داخل حدود مجلس التعاون الخليجي." }
                },
                {
                    en: { t: "User Modification Limitations", d: "Because data records compiled on this interface are non-persistent, manual editing or historical retrieval commands are unavailable." },
                    ar: { t: "قيود تعديل المستخدم", d: "نظرًا لأن سجلات البيانات المجمعة على هذه الواجهة غير مستمرة، فإن أوامر التعديل اليدوي أو الاسترداد التاريخي غير متوفرة." }
                },
                {
                    en: { t: "Metadata Collection Profiles", d: "Anonymized technical attributes including CSS rendering compatibility, screen pixel matrix, and layout execution logs are indexed for design upgrades." },
                    ar: { t: "ملفات تعريف جمع البيانات الوصفية", d: "يتم فحص السمات الفنية مجهولة الهوية بما في ذلك توافق عرض CSS، ومصفوفة بكسل الشاشة، وسجلات تنفيذ المخطط لترقية التصميم." }
                },
                {
                    en: { t: "External API Safeguards", d: "Gateway connections interacting with institutional verification endpoints process only pre-sanitized variables stripped of structural risk." },
                    ar: { t: "ضمانات واجهة برمجة التطبيقات الخارجية", d: "اتصالات البوابة التي تتفاعل مع نقاط نهاية التحقق المؤسسي تعالج فقط المتغيرات المطهرة مسبقًا والمجردة من المخاطر الهيكلية." }
                },
                {
                    en: { t: "Structural Framework Governance", d: "This privacy standard operates in accordance with electronic network interaction guidelines applicable inside the Emirate of Dubai." },
                    ar: { t: "حوكمة الإطار الهيكلي", d: "تعمل معايير الخصوصية هذه وفقًا لإرشادات التفاعل مع الشبكة الإلكترونية المعمول بها داخل إمارة دبي." }
                },
                {
                    en: { t: "Persistent Policy Accessibility", d: "This framework documentation remains permanently accessible at the bottom link of all primary, utility, and transaction displays." },
                    ar: { t: "إمكانية الوصول الدائم للسياسة", d: "تظل وثائق هذا الإطار متاحة بشكل دائم في الرابط السفلي لجميع شاشات العرض الرئيسية والمرافق والمعاملات." }
                },
                {
                    en: { t: "No Multi-Tenant Data Blending", d: "User transaction data is executed within distinct individual isolation sandboxes to prevent cross-account file pollution." },
                    ar: { t: "عدم خلط البيانات متعددة المستأجرين", d: "يتم تنفيذ بيانات معاملات المستخدم داخل صناديق رمل عزل فردية متميزة لمنع تلوث الملفات بين الحسابات." }
                },
                {
                    en: { t: "Server Defense Logs", d: "Firewall appliances archive brute connection metrics exclusively to trace automated scraping attempts or deny dangerous network threats." },
                    ar: { t: "سجلات دفاع الخادم", d: "تؤرشف أجهزة جدار الحماية مقاييس الاتصال الإجمالي حصريًا لتتبع محاولات الكشط الآلي أو رفض تهديدات الشبكة الخطيرة." }
                },
                {
                    en: { t: "Browser Variable Insulation", d: "Local session states and temporary memory blocks are locked via custom secure script scopes to obstruct external browser plug-in reading." },
                    ar: { t: "عزل متغيرات المتصفح", d: "يتم قفل حالات الجلسة المحلية وكتل الذاكرة المؤقتة عبر نطاقات برمجية مخصصة آمنة لمنع قراءة المكونات الإضافية للمتصفح الخارجي." }
                },
                {
                    en: { t: "Transactional Audit Trails", d: "We store only systemic transaction reference tokens needed to confirm success statuses back to the operational panel dashboards." },
                    ar: { t: "مسارات تدقيق المعاملات", d: "نحن نخزن فقط رموز مرجعية النظام للمعاملات اللازمة لتأكيد حالات النجاح للوحة التحكم التشغيلية." }
                },
                {
                    en: { t: "Platform Integrity Verification", d: "Automated background scripts review the cryptographic file weight of core routing controllers daily to ensure zero unauthorized structural alterations." },
                    ar: { t: "التحقق من سلامة المنصة", d: "تراجع نصوص الخلفية المؤتمتة وزن الملف التشفيري لمتحكمات التوجيه الأساسية يوميًا لضمان عدم وجود تعديلات هيكلية غير مصرح بها." }
                },
                {
                    en: { t: "Independent Cloud Segment Isolation", d: "Operational server segments are entirely decoupled from our promotional storage networks to maintain rigid security boundaries." },
                    ar: { t: "عزل قطاع السحابة المستقل", d: "تم فصل قطاعات خادم التشغيل تمامًا عن شبكات التخزين الترويجية لدينا للحفاظ على حدود أمنية صارمة." }
                },
                {
                    en: { t: "Network Traffic Shaping", d: "Connection rate control configurations temporarily index rapid hit patterns to slow down denial-of-service script targets." },
                    ar: { t: "تشكيل حركة مرور الشبكة", d: "تقوم تكوينات التحكم في معدل الاتصال بفهرسة أنماط الضربات السريعة مؤقتًا لإبطاء البرمجيات الخبيثة الخاصة بهجمات حجب الخدمة." }
                },
                {
                    en: { t: "Operational Continuity Updates", d: "In corporate restructurings, transaction history structures remain securely isolated and governed by these identical security limits." },
                    ar: { t: "تحديثات الاستمرارية التشغيلية", d: "في عمليات إعادة الهيكلة المؤسسية، تظل هياكل سجل المعاملات معزولة بشكل آمن ومحكومة بنفس هذه الحدود الأمنية." }
                },
                {
                    en: { t: "Absolute Digital Severability", d: "If any operational clause is declared non-enforceable by judicial authority, the status of all remaining clauses remains fully preserved." },
                    ar: { t: "الفصل الرقمي المطلق", d: "إذا تم إعلان عدم قابلية تطبيق أي بند تشغيلي من قبل سلطة قضائية، فإن حالة جميع البنود المتبقية تظل محفوظة بالكامل." }
                },
                {
                    en: { t: "Binding Acceptance Framework", d: "By interacting with any inquiry buttons on udea.online, you explicitly accept all parameters of this absolute privacy charter." },
                    ar: { t: "إطار القبول الملزم", d: "من خلال التفاعل مع أي أزرار استعلام على udea.online، فإنك تقبل صراحة جميع معلمات ميثاق الخصوصية المطلق هذا." }
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
            // تدوير لغة العناصر الثابتة
            const texts = dynamicContent.staticTexts[currentLang];
            document.getElementById('siteTitle').innerText = texts.siteTitle;
            document.getElementById('navCompanyName').innerText = texts.navCompanyName;
            document.getElementById('pageMainHeading').innerText = texts.pageMainHeading;
            document.getElementById('footerTitle').innerText = texts.footerTitle;
            document.getElementById('footerDisclaimerText').innerHTML = texts.footerDisclaimerText;
            document.getElementById('footerCopyText').innerHTML = texts.footerCopyText;
            document.getElementById('langBtn').innerText = texts.langBtn;

            // ضبط اتجاه الصفحة واللغة في تاق HTML
            const htmlTag = document.getElementById('htmlPage');
            if (currentLang === 'ar') {
                htmlTag.setAttribute('dir', 'rtl');
                htmlTag.setAttribute('lang', 'ar');
            } else {
                htmlTag.setAttribute('dir', 'ltr');
                htmlTag.setAttribute('lang', 'en');
            }

            // رندر الـ 40 بند باللغة الجديدة
            renderClauses();
        }

        function toggleLanguage() {
            currentLang = (currentLang === 'en') ? 'ar' : 'en';
            translatePage();
        }

        // الرندر الأولي عند تحميل الصفحة (اللغة الإنجليزية الافتراضية)
        window.onload = function() {
            translatePage();
        };

        // زرار المنيو
        document.getElementById('menuBtn').addEventListener('click', function() {
            alert(currentLang === 'en' ? 'Main menu toggled' : 'تم تفعيل القائمة الرئيسية');
        });
    </script>
</body>
</html>
