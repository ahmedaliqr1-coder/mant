<?php
// udea.online - Mint Gateway Project
// Dynamic Single-Page Bilingual Disclaimer Page (English & Arabic)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" id="htmlPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="siteTitle">Disclaimer - Mint Gateway | UDEA</title>
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
                <h1 id="pageMainHeading">Disclaimer</h1>
                
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
                    siteTitle: "Disclaimer - Mint Gateway | UDEA",
                    navCompanyName: "Mint Gateway for Electronic Payment Services",
                    pageMainHeading: "Disclaimer",
                    footerTitle: "Mint Gateway for Electronic Payment Services",
                    footerDisclaimerText: "<strong>Ownership and Legal Operation Information:</strong> The current domain name <strong>udea.online</strong> is an official digital platform fully and legally owned by <strong>Mint Gateway for Electronic Payment Services LLC - Dubai Branch</strong>. This website is entirely operated and managed by Mint Gateway for Electronic Payment Services as the direct legal owner responsible for all operations, services, and technical solutions provided through this portal. This website represents an independent commercial intermediary platform that facilitates and supports payment solutions, and is not the official government website of the respective authorities.",
                    footerCopyText: "&copy; 2026 udea.online. All rights reserved for Mint Gateway for Electronic Payment Services.",
                    langBtn: "AR"
                },
                ar: {
                    siteTitle: "إخلاء المسؤولية - مينت جيت واي | يوديا",
                    navCompanyName: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    pageMainHeading: "إخلاء المسؤولية",
                    footerTitle: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    footerDisclaimerText: "<strong>معلومات الملكية والتشغيل القانوني:</strong> اسم النطاق الحالي <strong>udea.online</strong> هو منصة رقمية رسمية مملوكة بالكامل وبشكل قانوني لـ <strong>شركة مينت جيت واي لخدمات الدفع الإلكتروني ذ.م.م - فرع دبي</strong>. هذا الموقع يتم تشغيله وإدارته بالكامل بواسطة مينت جيت واي لخدمات الدفع الإلكتروني باعتبارها المالك القانوني المباشر المسؤول عن جميع العمليات والخدمات والحلول التقنية المقدمة عبر هذه البوابة. يمثل هذا الموقع منصة وسيطة تجارية مستقلة تسهل وتدعم حلول الدفع، وليس الموقع الحكومي الرسمي للجهات المعنية.",
                    footerCopyText: "&copy; 2026 udea.online. جميع الحقوق محفوظة لشركة مينت جيت واي لخدمات الدفع الإلكتروني.",
                    langBtn: "EN"
                }
            },
            clauses: [
                {
                    en: { t: "Informational Purpose Only", d: "The operational content, layout features, and query frameworks provided on udea.online are intended strictly for general informative and transactional facilitation contexts." },
                    ar: { t: "غرض معلوماتي فقط", d: "إن المحتوى التشغيلي وميزات التخطيط وأطر الاستعلام المقدمة على udea.online مخصصة فقط للسياقات المعلوماتية العامة وتسهيل المعاملات." }
                },
                {
                    en: { t: "Absolute Non-Governmental Affiliation", d: "Mint Gateway for Electronic Payment Services LLC - Dubai Branch formally declares that this interface is entirely independent and carries zero structural connection with official UAE public authorities." },
                    ar: { t: "عدم التبعية الحكومية المطلقة", d: "تعلن شركة مينت جيت واي لخدمات الدفع الإلكتروني ذ.م.م - فرع دبي رسمياً أن هذه الواجهة مستقلة تماماً ولا تحمل أي ارتباط هيكلي بالسلطات العامة الرسمية في الإمارات." }
                },
                {
                    en: { t: "Independent Intermediary Status", d: "This interface functions strictly as a commercial technological intermediary platform designed to channel infrastructure payment simulations without sovereign authority." },
                    ar: { t: "الوضع القانوني كوسيط مستقل", d: "تعمل هذه الواجهة بصرامة كمنصة وسيطة تكنولوجية تجارية مصممة لتوجيه محاكاة مدفوعات البنية التحتية دون أي سلطة سيادية." }
                },
                {
                    en: { t: "No Representation of Official Portals", d: "We make no claims to represent, hold licenses from, or act as authorized digital extensions for the Roads and Transport Authority (RTA) or any regional police traffic networks." },
                    ar: { t: "عدم تمثيل البوابات الرسمية", d: "نحن لا ندعي تمثيل، أو الحصول على تراخيص من، أو العمل كامتدادات رقمية معتمدة لهيئة الطرق والمواصلات (RTA) أو أي من شبكات المرور الشرطية الإقليمية." }
                },
                {
                    en: { t: "Data Mirror Accuracy Framework", d: "The platform aggregates real-time infrastructure values via external technical paths; we assume zero accountability for discrepancies originating from source system components." },
                    ar: { t: "إطار دقة مرآة البيانات", d: "تجمع المنصة قيم البنية التحتية في الوقت الفعلي عبر مسارات تقنية خارجية؛ ونحن لا نتحمل أي مسؤولية عن الفوارق الناشئة عن مكونات نظام المصدر." }
                },
                {
                    en: { t: "Disclaimer of Core Warranties", d: "All technical pathways, active script outputs, and conversion modules are delivered on an 'as-is' baseline without any operational performance warranties." },
                    ar: { t: "إخلاء المسؤولية عن الضمانات الأساسية", d: "يتم تقديم جميع المسارات التقنية ومخرجات البرامج النشطة ووحدات التحويل على أساس خط الأساس 'كما هو' دون أي ضمانات أداء تشغيلية." }
                },
                {
                    en: { t: "Responsibility for Input Errors", d: "The user holds absolute liability for operational losses resulting from typing faulty card serial fields, plate references, or vehicle credentials." },
                    ar: { t: "المسؤولية عن أخطاء الإدخال", d: "يتحمل المستخدم المسؤولية المطلقة عن الخسائر التشغيلية الناتجة عن كتابة حقول تسلسل بطاقات خاطئة، أو مراجع لوحات، أو بيانات مركبات غير صحيحة." }
                },
                {
                    en: { t: "Exclusion of Interruption Liabilities", d: "Mint Gateway rejects liability for structural damage stemming from platform down-time, server sync drops, or dynamic payment routing timeouts." },
                    ar: { t: "استبعاد مسؤوليات الانقطاع", d: "ترفض مينت جيت واي المسؤولية عن الأضرار الهيكلية الناشئة عن وقت توقف المنصة، أو انقطاع مزامنة الخادم، أو مهلة توجيه الدفع الديناميكي." }
                },
                {
                    en: { t: "Third-Party Transaction Gateways", d: "Financial clearance routes interact with independent acquiring entities whose individual validation errors fall completely outside our corporate boundary loops." },
                    ar: { t: "بوابات معاملات الطرف الثالث", d: "تتفاعل مسارات التخليص المالي مع كيانات تحصيل مستقلة تقع أخطاء التحقق الفردية الخاصة بها تماماً خارج حلقات حدود مؤسستنا." }
                },
                {
                    en: { t: "Indirect and Consequential Damages", d: "Under no legal theory shall our organization be accountable for secondary asset impacts, workflow pauses, or digital resource loss linked to interface uso." },
                    ar: { t: "الأضرار غير المباشرة والتبعية", d: "بموجب أي نظرية قانونية، لن تكون مؤسستنا مسؤولة عن تأثيرات الأصول الثانوية، أو فترات التوقف المؤقت لسير العمل، أو فقدان الموارد الرقمية المرتبطة باستخدام الواجهة." }
                },
                {
                    en: { t: "Accuracy of Fine Valuations", d: "Fine aggregates displayed on screens reflect data fetched during active query cycles; sudden updates inside institutional logs may cause temporary variations." },
                    ar: { t: "دقة تقييمات المخالفات", d: "تعكس مجاميع المخالفات المعروضة على الشاشات البيانات التي تم جلبها خلال دورات الاستعلام النشطة؛ وقد تتسبب التحديثات المفاجئة داخل السجلات المؤسسية في اختلافات مؤقتة." }
                },
                {
                    en: { t: "Salik Sync Delay Verification", d: "Salik balance top-ups processed here rely on independent communication pathways; immediate real-time ledger balance updates are not systematically guaranteed." },
                    ar: { t: "التحقق من تأخير مزامنة سالك", d: "تعتمد عمليات تعبئة رصيد سالك المعالجة هنا على مسارات اتصال مستقلة؛ ولا يتم ضمان تحديثات رصيد دفتر الحسابات الفورية في الوقت الفعلي بشكل منهجي." }
                },
                {
                    en: { t: "Nol Validation Processing Bounds", d: "Nol numerical verifications map layout configurations strictly via external protocols; dynamic database lags at institutional endpoints may defer execution loops." },
                    ar: { t: "حدود معالجة التحقق من نول", d: "تحدد عمليات التحقق الرقمية لبطاقات نول تكوينات التخطيط بصرامة عبر بروتوكولات خارجية؛ وقد تؤدي تأخيرات قواعد البيانات الديناميكية في نقاط النهاية المؤسسية إلى تأجيل حلقات التنفيذ." }
                },
                {
                    en: { t: "External Link Liability Boundaries", d: "Hyperlinks routing traffic away from udea.online point to independent spaces; we practice zero editing control over external platform architectures." },
                    ar: { t: "حدود المسؤولية عن الروابط الخارجية", d: "تشير الارتباطات التشعبية التي توجه حركة المرور بعيداً عن udea.online إلى مساحات مستقلة؛ ونحن لا نمارس أي تحكم تحريري على بنيات المنصات الخارجية." }
                },
                {
                    en: { t: "Malicious Code Defense Boundaries", d: "While executing high-level security screenings, we do not declare that files downloaded or compiled from our platform are completely immune to advanced malware threads." },
                    ar: { t: "حدود الدفاع عن البرمجيات الخبيثة", d: "أثناء تنفيذ فحوصات أمنية رفيعة المستوى، نحن لا نعلن أن الملفات التي يتم تنزيلها أو تجميعها من منصتنا محصنة تماماً ضد خيوط البرامج الضارة المتقدمة." }
                },
                {
                    en: { t: "Anti-Scraping Structural Enforcement", d: "We deploy active firewall patterns that block connections demonstrating malicious automated testing behaviors or scraping parameters." },
                    ar: { t: "الإنفاذ الهيكلي لمكافحة الكشط", d: "نحن ننشر أنماط جدار حماية نشطة تحظر الاتصالات التي تظهر سلوكيات اختبار مؤتمتة خبيثة أو معلمات كشط." }
                },
                {
                    en: { t: "Dynamic Asset Alteration Authority", d: "Mint Gateway reserves full autonomy to withdraw interface layouts, structural text segments, or entire service avenues without issuing alert parameters." },
                    ar: { t: "سلطة تعديل الأصول الديناميكية", d: "تحتفظ مينت جيت واي بالاستقلالية الكاملة لسحب تخطيطات الواجهة، أو قطاعات النصوص الهيكلية، أو مسارات الخدمة بأكملها دون إصدار معلمات تنبيه." }
                },
                {
                    en: { t: "Geographic Use Constraints", d: "This interface configuration targets interactions specifically inside the United Arab Emirates; international functionality profiles remain unverified." },
                    ar: { t: "قيود الاستخدام الجغرافي", d: "يستهدف تكوين الواجهة هذا التفاعلات وتحديداً داخل دولة الإمارات العربية المتحدة؛ وتظل ملفات تعريف الوظائف الدولية غير متحقق منها." }
                },
                {
                    en: { t: "Advice Exclusion Framework", d: "No descriptive logs, visual data matrices, or text items on this web system represent binding legal counsel or formal financial direction." },
                    ar: { t: "إطار استبعاد تقديم الاستشارات", d: "لا تمثل أي سجلات وصفية، أو مصفوفات بيانات مرئية، أو عناصر نصية على نظام الويب هذا مشورة قانونية ملزمة أو توجيهاً مالياً رسمياً." }
                },
                {
                    en: { t: "Force Majeure Infrastructure Drops", d: "We bear zero legal responsibility for core interface performance collapses caused by regional electrical drops, grid blockades, or telecom infrastructure damages." },
                    ar: { t: "انقطاع البنية التحتية بسبب القوة القاهرة", d: "نحن لا نتحمل أي مسؤولية قانونية عن انهيار أداء الواجهة الأساسية الناتج عن انقطاعات الكهرباء الإقليمية، أو حصار الشبكات، أو أضرار البنية التحتية للاتصالات." }
                },
                {
                    en: { t: "System Up-time Non-Guarantees", d: "Continuous, non-delayed, error-free operations across all global processing regions are explicitly not promised under our technical framework." },
                    ar: { t: "عدم ضمان وقت تشغيل النظام", d: "إن العمليات المستمرة وغير المتأخرة والخالية من الأخطاء عبر جميع مناطق المعالجة العالمية غير مضمونة صراحةً بموجب إطارنا الفني." }
                },
                {
                    en: { t: "Institutional Parameter Shifts", d: "Changes implemented by sovereign transport networks regarding inquiry schema parameters can temporarily break background verification codes." },
                    ar: { t: "تحولات المعلمات المؤسسية", d: "إن التغييرات التي تطبقها شبكات النقل السيادية فيما يتعلق بمعلمات مخطط الاستعلام يمكن أن تكسر مؤقتاً رموز التحقق في الخلفية." }
                },
                {
                    en: { t: "Currency Volatility Risk Isolation", d: "Users assume full transactional exposure linked to multi-currency payment translations or card issuer exchange conversion spreads." },
                    ar: { t: "عزل مخاطر تقلبات العملات", d: "يتحمل المستخدمون المخاطر الكاملة للمعاملات المرتبطة بترجمات الدفع متعددة العملات أو فروق تحويل الصرف من مصدري البطاقات." }
                },
                {
                    en: { t: "Regulatory Suspension Operations", d: "We retain absolute authority to halt dynamic payment routing processes instantly if ordered by regional institutional regulatory commands." },
                    ar: { t: "عمليات التعليق التنظيمي", d: "نحتفظ بالسلطة المطلقة لوقف عمليات توجيه الدفع الديناميكي فوراً إذا صدرت أوامر بذلك من قبل جهات تنظيمية مؤسسية إقليمية." }
                },
                {
                    en: { t: "Exclusion of Fraudulent External Replications", d: "Mint Gateway is entirely detached from damages arising from visitor interactions with deceptive phishing targets copying the visual style of udea.online." },
                    ar: { t: "استبعاد الاستنساخ الخارجي الاحتيالي", d: "مينت جيت واي منفصلة تماماً عن الأضرار الناشئة عن تفاعلات الزوار مع أهداف التصيد الاحتيالي المخادعة التي تنسخ النمط المرئي لـ udea.online." }
                },
                {
                    en: { t: "User Data Ingestion Constraints", d: "Ephemeral variables logged during processing sequences are treated under absolute technical restrictions, excluding liability for unauthorized client-side leaks." },
                    ar: { t: "قيود استيعاب بيانات المستخدم", d: "تُعامل المتغيرات عابرة الزوال المسجلة أثناء تسلسلات المعالجة بموجب قيود فنية مطلقة، مما يستبعد المسؤولية عن التسريبات غير المصرح بها من جانب العميل." }
                },
                {
                    en: { t: "Browser Interoperability Exclusions", d: "Flawless layout presentation matrix yields are not guaranteed for obsolete software engines or non-standard display viewports." },
                    ar: { t: "استبعادات التوافق التشغيلي للمتصفحات", d: "لا يتم ضمان عوائد مصفوفة عرض التخطيط الخالية من العيوب لمحركات البرامج القديمة أو نوافذ العرض غير القياسية." }
                },
                {
                    en: { t: "Administrative Expense Collection Rights", d: "We reserve clear legal privileges to levy standard configuration processing charges onto specific multi-segment transactional pathways." },
                    ar: { t: "حقوق تحصيل النفقات الإدارية", d: "نحتفظ بامتيازات قانونية واضحة لفرض رسوم معالجة التكوين القياسية على مسارات معاملات محددة متعددة القطاعات." }
                },
                {
                    en: { t: "Platform Code Independence", d: "The compilation metrics and routing scripts utilized on this layout operate completely isolated from government software environments." },
                    ar: { t: "استقلال كود المنصة", d: "تعمل مقاييس التجميع ونصوص التوجيه المستخدمة في هذا المخطط معزولة تماماً عن بيئات البرمجيات الحكومية." }
                },
                {
                    en: { t: "Waiver of Subsequent Liabilities", d: "Completing processing requests signifies an explicit waiver of subsequent claims targeting our corporate administrative entities." },
                    ar: { t: "التنازل عن المسؤوليات اللاحقة", d: "إن إكمال طلبات المعالجة يدل على تنازل صريح عن المطالبات اللاحقة التي تستهدف كياناتنا الإدارية المؤسسية." }
                },
                {
                    en: { t: "Precedence of Source Data", d: "If descriptive mismatches manifest between our interface screens and sovereign database ledgers, the source institutional files take total legal precedence." },
                    ar: { t: "أسبقية بيانات المصدر", d: "إذا ظهرت أخطاء وصفية بين شاشات الواجهة لدينا ودفاتر حسابات قواعد البيانات السيادية، فإن ملفات المصدر المؤسسية تأخذ الأسبقية القانونية الكاملة." }
                },
                {
                    en: { t: "Limitation of Indemnity Ceiling", d: "The aggregate financial accountability of our portal for any single error sequence stays locked at the exact service processing addition collected." },
                    ar: { t: "تحديد سقف التعويض", d: "تظل المسؤولية المالية الإجمالية لبوابتنا عن أي تسلسل خطأ فردي مقفلة عند قيمة إضافة معالجة الخدمة الفعلية التي تم تحصيلها." }
                },
                {
                    en: { t: "Legal Severability Protections", d: "If an official judicial court invalidates a singular component phrase within this charter, all alternative sections maintain full structural power." },
                    ar: { t: "حمايات الفصل القانوني", d: "إذا أبطلت محكمة قضائية رسمية عبارة مكونة واحدة داخل هذا الميثاق، فإن جميع الأقسام البديلة تحافظ على قوتها الهيكلية الكاملة." }
                },
                {
                    en: { t: "Prohibition of Decompilation Actions", d: "Any attempt to extract underlying structural assets, API handshakes, or server verification hashes will activate international civil protection mechanisms." },
                    ar: { t: "حظر إجراءات فك التجميع", d: "إن أي محاولة لاستخراج الأصول الهيكلية الأساسية، أو مصافحات واجهة برمجة التطبيقات، أو تجزئة التحقق من الخادم ستفعل آليات الحماية المدنية الدولية." }
                },
                {
                    en: { t: "Network Traffic Conditioning Rules", d: "We implement systemic request conditioning parameters to safeguard our cloud resources from localized malicious automated flood operations." },
                    ar: { t: "قواعد تكييف حركة مرور الشبكة", d: "نحن نطبق معلمات تكييف الطلبات النظامية لحماية مواردنا السحابية من عمليات الغمر المؤتمتة الخبيثة المحلية." }
                },
                {
                    en: { t: "Corporate Restructuring Governance Status", d: "Operational protection frameworks defined inside this text continue unaltered across all subsequent corporate identity transitions or ownership transfers." },
                    ar: { t: "وضع حوكمة إعادة الهيكلة المؤسسية", d: "تستمر أطر الحماية التشغيلية المحددة داخل هذا النص دون تغيير عبر جميع تحولات الهوية المؤسسية اللاحقة أو عمليات نقل الملكية." }
                },
                {
                    en: { t: "Language Balance Priority", d: "This bilingual mapping operates via dynamic rendering components; in scenarios involving layout meaning confusion, the English text baseline serves as final reference." },
                    ar: { t: "أولوية توازن اللغة", d: "يعمل هذا التخطيط ثنائي اللغة عبر مكونات العرض الديناميكية؛ وفي السيناريوهات التي تنطوي على ارتباك في معنى التخطيط، يعمل خط الأساس للنص الإنجليزي كمرجع نهائي." }
                },
                {
                    en: { t: "Non-Waiver Legal Clauses", d: "A temporary decision by our company to overlook an instance of user non-compliance does not surrender our privilege to enforce the terms later." },
                    ar: { t: "البنود القانونية لعدم التنازل", d: "إن القرار المؤقت من جانب شركتنا بالتغاضي عن حالة عدم امتثال المستخدم لا يعني التنازل عن امتيازنا في إنفاذ الشروط لاحقاً." }
                },
                {
                    en: { t: "Jurisdiction and Governing Domain", d: "This legal disclaimer is governed and framed exclusively under the commercial administrative regulations applied within the Dubai Courts frameworks." },
                    ar: { t: "الاختصاص القضائي والنطاق الحاكم", d: "يخضع إخلاء المسؤولية القانوني هذا ويتم صياغته حصرياً بموجب لوائح الإدارة التجارية المعمول بها ضمن أطر محاكم دبي." }
                },
                {
                    en: { t: "Final Binding Agreement Affirmation", d: "Interacting with any processing pathways or inquiry triggers on udea.online demonstrates a total acceptance of all components of this legal document." },
                    ar: { t: "تأكيد الاتفاقية الملزمة النهائية", d: "إن التفاعل مع أي مسارات معالجة أو محفزات استعلام على udea.online يدل على القبول الكامل لجميع مكونات هذه الوثيقة القانونية." }
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
