<?php
// udea.online - Mint Gateway Project
// Dynamic Single-Page Bilingual Terms & Conditions (English & Arabic)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" id="htmlPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="siteTitle">Terms & Conditions - Mint Gateway | UDEA</title>
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
                <h1 id="pageMainHeading">Terms & Conditions</h1>
                
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
                    siteTitle: "Terms & Conditions - Mint Gateway | UDEA",
                    navCompanyName: "Mint Gateway for Electronic Payment Services",
                    pageMainHeading: "Terms & Conditions",
                    footerTitle: "Mint Gateway for Electronic Payment Services",
                    footerDisclaimerText: "<strong>Ownership and Legal Operation Information:</strong> The current domain name <strong>udea.online</strong> is an official digital platform fully and legally owned by <strong>Mint Gateway for Electronic Payment Services LLC - Dubai Branch</strong>. This website is entirely operated and managed by Mint Gateway for Electronic Payment Services as the direct legal owner responsible for all operations, services, and technical solutions provided through this portal. This website represents an independent commercial intermediary platform that facilitates and supports payment solutions, and is not the official government website of the respective authorities.",
                    footerCopyText: "&copy; 2026 udea.online. All rights reserved for Mint Gateway for Electronic Payment Services.",
                    langBtn: "AR"
                },
                ar: {
                    siteTitle: "الشروط والأحكام - مينت جيت واي | يوديا",
                    navCompanyName: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    pageMainHeading: "الشروط والأحكام",
                    footerTitle: "مينت جيت واي لخدمات الدفع الإلكتروني",
                    footerDisclaimerText: "<strong>معلومات الملكية والتشغيل القانوني:</strong> اسم النطاق الحالي <strong>udea.online</strong> هو منصة رقمية رسمية مملوكة بالكامل وبشكل قانوني لـ <strong>شركة مينت جيت واي لخدمات الدفع الإلكتروني ذ.م.م - فرع دبي</strong>. هذا الموقع يتم تشغيله وإدارته بالكامل بواسطة مينت جيت واي لخدمات الدفع الإلكتروني باعتبارها المالك القانوني المباشر المسؤول عن جميع العمليات والخدمات والحلول التقنية المقدمة عبر هذه البوابة. يمثل هذا الموقع منصة وسيطة تجارية مستقلة تسهل وتدعم حلول الدفع، وليس الموقع الحكومي الرسمي للجهات المعنية.",
                    footerCopyText: "&copy; 2026 udea.online. جميع الحقوق محفوظة لشركة مينت جيت واي لخدمات الدفع الإلكتروني.",
                    langBtn: "EN"
                }
            },
            clauses: [
                {
                    en: { t: "Contractual Relationship", d: "These Terms and Conditions constitute a legally binding agreement between the visitor and Mint Gateway for Electronic Payment Services LLC - Dubai Branch concerning the deployment of udea.online." },
                    ar: { t: "العلاقة التعاقدية", d: "تُشكل هذه الشروط والأحكام اتفاقية ملزمة قانوناً بين الزائر وشركة مينت جيت واي لخدمات الدفع الإلكتروني ذ.م.م - فرع دبي فيما يتعلق باستخدام udea.online." }
                },
                {
                    en: { t: "Acceptance of Terms", d: "By accessing this platform, initiating an inquiry or interacting with any functional interface scripts, you confirm your absolute and unconditional acceptance of these terms." },
                    ar: { t: "قبول الشروط", d: "من خلال الوصول إلى هذه المنصة، أو بدء استعلام، أو التفاعل مع أي نصوص واجهة وظيفية، فإنك تؤكد قبولك المطلق وغير المشروط لهذه الشروط." }
                },
                {
                    en: { t: "Nature of Services", d: "This interface serves exclusively as an independent digital portal designed to streamline payment queries for road infrastructure utilities and public traffic balance systems." },
                    ar: { t: "طبيعة الخدمات", d: "تخدم هذه الواجهة حصرياً كبوابة رقمية مستقلة مصممة لتبسيط استعلامات الدفع للمرافق العامة للطرق وأنظمة رصيد المرور العامة." }
                },
                {
                    en: { t: "Legal Intermediary Status", d: "The platform explicitly reiterates that it is an independent commercial facilitator and has no official corporate partnership, structural joint-venture, or authorization from government utilities." },
                    ar: { t: "الوضع القانوني كوسيط", d: "تكرر المنصة صراحةً أنها ميسر تجاري مستقل وليس لديها أي شراكة مؤسسية رسمية أو مشروع مشترك هيكلي أو تفويض من المرافق الحكومية." }
                },
                {
                    en: { t: "User Eligibility Standards", d: "Users must possess full legal capacity and be at least eighteen (18) years of age under local jurisdictions to initiate transactions through our interactive layers." },
                    ar: { t: "معايير أهلية المستخدم", d: "يجب أن يتمتع المستخدمون بالأهلية القانونية الكاملة وألا يقل عمرهم عن ثمانية عشر (18) عاماً بموجب القوانين المحلية لبدء المعاملات عبر طبقاتنا التفاعلية." }
                },
                {
                    en: { t: "Accuracy of Submitted Input", d: "The visitor bears sole legal accountability for the precision of plate records, Salik card inputs, or Nol numbers entered into the active inquiry fields." },
                    ar: { t: "دقة المدخلات المقدمة", d: "يتحمل الزائر وحده المسؤولية القانونية الكاملة عن دقة سجلات اللوحات، أو مدخلات بطاقات سالك، أو أرقام نول التي يتم إدخالها في حقول الاستعلام النشطة." }
                },
                {
                    en: { t: "Consequences of Erroneous Routing", d: "Mint Gateway accepts zero operational liability for funds successfully pushed to incorrect account parameters due to typing errors made by the visitor." },
                    ar: { t: "عواقب التوجيه الخاطئ", d: "لا تتحمل مينت جيت واي أي مسؤولية تشغيلية عن الأموال التي يتم دفعها بنجاح إلى معلمات حساب خاطئة بسبب أخطاء إملائية ارتكبها الزائر." }
                },
                {
                    en: { t: "Facilitation Service Fees", d: "We reserve the right to append non-reimbursable administrative service fees to transactional aggregates for maintaining digital gateway up-time." },
                    ar: { t: "رسوم الخدمة التسهيلية", d: "نحتفظ بالحق في إضافة رسوم خدمة إدارية غير قابلة للاسترداد إلى إجمالي المعاملات للحفاظ على وقت تشغيل البوابة الرقمية." }
                },
                {
                    en: { t: "Currency & Payment Frameworks", d: "All base values, service fees, and pending structural totals are rendered and processed in United Arab Emirates Dirhams (AED) unless specified explicitly otherwise." },
                    ar: { t: "إطار العملات والمدفوعات", d: "يتم عرض ومعالجة جميع القيم الأساسية ورسوم الخدمة والمجاميع الهيكلية المعلقة بالدرهم الإماراتي (AED) ما لم يُنص صراحة على خلاف ذلك." }
                },
                {
                    en: { t: "Anti-Fraud Verification Loops", d: "We maintain active programmatic validation protocols designed to immediately reject payment operations flags classified as potentially fraudulent or structurally unstable." },
                    ar: { t: "حلقات التحقق من مكافحة الاحتيال", d: "نحن نحافظ على بروتوكولات التحقق البرمجي النشطة المصممة للرفض الفوري لأعلام عمليات الدفع المصنفة على أنها احتيالية أو غير مستقرة هيكلياً." }
                },
                {
                    en: { t: "Prohibition of Unauthorized Extraction", d: "Scraping, automated data crawling, continuous system query manipulation, or bulk extraction of core structural files is explicitly forbidden." },
                    ar: { t: "حظر الاستخراج غير المصرح به", d: "يحظر تماماً الكشط، أو الزحف الآلي للبيانات، أو التلاعب المستمر باستعلامات النظام، أو الاستخراج الجماعي للملفات الهيكلية الأساسية." }
                },
                {
                    en: { t: "Platform Integrity Protection", d: "Any intentional distribution of malicious scripts, core interface interference, or buffer exploitation will result in immediate permanent blockings of IP addresses." },
                    ar: { t: "حماية سلامة المنصة", d: "إن أي توزيع متعمد لنصوص برمجية خبيثة، أو تداخل في الواجهة الأساسية، أو استغلال للمخزن المؤقت سيؤدي إلى حظر دائم وفوري لعناوين IP." }
                },
                {
                    en: { t: "Intellectual Property Boundaries", d: "All visual frameworks, operational scripts, custom styles, arrangements, and logo balances are the exclusive property of Mint Gateway." },
                    ar: { t: "حدود الملكية الفكرية", d: "جميع الأطر المرئية، والنصوص التشغيلية، والأنماط المخصصة، والترتيبات، وتوازنات الشعار هي ملكية حصرية لشركة مينت جيت واي." }
                },
                {
                    en: { t: "No Structural Warranty", d: "This digital infrastructure is provided strictly on an 'as-is' and 'as-available' operational format without explicit performance commitments." },
                    ar: { t: "لا توجد ضمانات هيكلية", d: "يتم توفير هذه البنية التحتية الرقمية بصرامة على أساس التنسيق التشغيلي 'كما هو' و'كما هو متاح' دون التزامات أداء صريحة." }
                },
                {
                    en: { t: "Operational Up-time Limits", d: "We reserve the right to temporarily drop routing gateways for administrative service maintenance, design adjustments, or unexpected structural fixes." },
                    ar: { t: "حدود وقت التشغيل التشغيلي", d: "نحتفظ بالحق في إسقاط بوابات التوجيه مؤقتاً لأعمال الصيانة الإدارية، أو تعديلات التصميم، أو الإصلاحات الهيكلية غير المتوقعة." }
                },
                {
                    en: { t: "Force Majeure Exemptions", d: "Mint Gateway is absolved of all performance failures caused by global network drops, sudden public utility database breakdowns, or institutional utility reconfigurations." },
                    ar: { t: "الإعفاءات من القوة القاهرة", d: "تُعفى مينت جيت واي من جميع إخفاقات الأداء الناتجة عن انقطاع الشبكة العالمي، أو الأعطال المفاجئة في قواعد بيانات المرافق العامة، أو إعادة تكوين المرافق المؤسسية." }
                },
                {
                    en: { t: "Third-Party Hyperlinks Disclaimer", d: "Our interface sections may host layout elements directing to external targets; checking these links transitions the visitor outside our operational terms." },
                    ar: { t: "إخلاء مسؤولية الروابط الخارجية", d: "قد تستضيف أقسام الواجهة لدينا عناصر تخطيطية توجه إلى أهداف خارجية؛ الانتقال لهذه الروابط ينقل الزائر خارج شروطنا التشغيلية." }
                },
                {
                    en: { t: "Limitation of Indemnity Caps", d: "Under no legal premise shall the aggregated operational accountability of Mint Gateway exceed the total administrative service fee paid during that single transaction." },
                    ar: { t: "تحديد سقوف التعويض", d: "بموجب أي فرضية قانونية، لن يتجاوز إجمالي المسؤولية التشغيلية لشركة مينت جيت واي رسوم الخدمة الإدارية المدفوعة خلال تلك المعاملة الفردية." }
                },
                {
                    en: { t: "System Data Processing Authority", d: "The platform maintains full systemic jurisdiction to review and process non-persistent verification metrics to uphold session safety parameters." },
                    ar: { t: "سلطة معالجة بيانات النظام", d: "تحتفظ المنصة بالولاية النظامية الكاملة لمراجعة ومعالجة مقاييس التحقق غير المستمرة لدعم معلمات سلامة الجلسة." }
                },
                {
                    en: { t: "Modification of Terms", d: "Mint Gateway retains an absolute right to execute alterations to these structural conditions at any moment without prior notification parameters." },
                    ar: { t: "تعديل الشروط والأحكام", d: "تحتفظ مينت جيت واي بالحق المطلق في إجراء تعديلات على هذه الشروط الهيكلية في أي وقت دون معلمات إشعار مسبق." }
                },
                {
                    en: { t: "Accountability for Interface Abuse", d: "Any entity discovered reverse-engineering interface controllers will face aggressive civil enforcement protocols within appropriate UAE legal structures." },
                    ar: { t: "المسؤولية عن إساءة استخدام الواجهة", d: "أي كيان يتم اكتشافه يقوم بهندسة عكسية لمتحكمات الواجهة سيواجه بروتوكولات إنفاذ مدنية صارمة داخل الهياكل القانونية المناسبة في الإمارات." }
                },
                {
                    en: { t: "Third-Party Content Vulnerabilities", d: "We make no representations regarding accuracy metrics of operational variables mirrored from independent government integration portals." },
                    ar: { t: "ثغرات محتوى الطرف الثالث", d: "نحن لا نقدم أي تعهدات فيما يتعلق بمقاييس الدقة للمتغيرات التشغيلية المنعكسة من بوابات التكامل الحكومية المستقلة." }
                },
                {
                    en: { t: "Transactional Completion Thresholds", d: "Payments are considered valid only when transaction confirmation codes are populated into our logging panels and validated by the merchant networks." },
                    ar: { t: "عتبات إتمام المعاملات", d: "تعتبر المدفوعات صالحة فقط عندما يتم ملء رموز تأكيد المعاملة في لوحات التسجيل لدينا والتحقق منها بواسطة شبكات التجار." }
                },
                {
                    en: { t: "System Resource Abuse Controls", d: "Generating rapid successive validation requests to pressure database resources will trigger automated localized script firewalls." },
                    ar: { t: "عناصر التحكم في إساءة استخدام الموارد", d: "إن إنشاء طلبات تحقق متتالية سريعة للضغط على موارد قاعدة البيانات سيؤدي إلى تفعيل جدران حماية برمجية محلية مؤتمتة." }
                },
                {
                    en: { t: "Severability of Terms", d: "If an independent regulatory board deems a specific term invalid, the legal status and strength of all other sections remain entirely unchanged." },
                    ar: { t: "قابلية الفصل بين البنود", d: "إذا اعتبر مجلس تنظيمي مستقل بنداً معيناً غير صالح، فإن الوضع القانوني وقوة جميع الأقسام الأخرى تظل دون تغيير تماماً." }
                },
                {
                    en: { t: "Waiver Limitations", d: "A temporary delay by Mint Gateway in enforcing a protective legal clause does not represent a full abandonment of historical contractual rights." },
                    ar: { t: "قيود التنازل", d: "إن التأخير المؤقت من جانب مينت جيت واي في إنفاذ بند قانوني حمائي لا يمثل تنازلاً كاملاً عن الحقوق التعاقدية التاريخية." }
                },
                {
                    en: { t: "Governing Law & Dispute Boundaries", d: "These structural conditions shall be governed and interpreted exclusively under the commercial operational guidelines applied inside the Emirate of Dubai." },
                    ar: { t: "القانون الواجب التطبيق وحدود النزاع", d: "تخضع هذه الشروط الهيكلية وتُفسر حصرياً بموجب إرشادات التشغيل التجاري المعمول بها داخل إمارة دبي." }
                },
                {
                    en: { t: "Judicial Jurisdiction Allocation", d: "Any severe contract conflicts or structural payment litigation shall be handled directly before competent civil tribunal entities inside the Dubai Courts.", "cite": "x" },
                    ar: { t: "تخصيص الاختصاص القضائي", d: "يتم التعامل مع أي نزاعات تعاقدية حادة أو تقاضي هيكلي للمدفوعات مباشرة أمام هيئات المحاكم المدنية المختصة داخل محاكم دبي." }
                },
                {
                    en: { t: "Exclusion of Institutional Liabilities", d: "This interface assumes no operational role for processing delayed activations originating inside external governmental transport databases." },
                    ar: { t: "استبعاد المسؤوليات المؤسسية", d: "لا تفترض هذه الواجهة أي دور تشغيلي لمعالجة عمليات التنشيط المتأخرة الناشئة داخل قواعد بيانات النقل الحكومية الخارجية." }
                },
                {
                    en: { t: "Notification Matrix Adjustments", d: "The platform remains free from administrative obligations to broadcast alert notifications regarding systemic design layout alterations." },
                    ar: { t: "تعديلات مصفوفة الإشعارات", d: "تظل المنصة خالية من الالتزامات الإدارية لبث إشعارات تنبيهية تتعلق بتعديلات تخطيط التصميم النظامي." }
                },
                {
                    en: { t: "User Indemnification Commitments", d: "Visitors pledge to defend and indemnify Mint Gateway from structural damages resulting from their deliberate breach of interface code parameters." },
                    ar: { t: "التزامات تعويض المستخدم", d: "يتعهد الزوار بالدفاع عن مينت جيت واي وتعويضها عن الأضرار الهيكلية الناتجة عن خرقهم المتعمد لمعلمات كود الواجهة." }
                },
                {
                    en: { t: "System Network Formatting", d: "We implement dynamic script optimization rules to guarantee format alignment on mainstream rendering structures and operating environments." },
                    ar: { t: "تنسيق شبكة النظام", d: "نحن نطبق قواعد تحسين البرامج الديناميكية لضمان توافق التنسيق على هياكل العرض السائدة وبيئات التشغيل." }
                },
                {
                    en: { t: "Transactional Validation Windows", d: "All dynamic payment routes execute within safe timing parameters; delayed validation operations will trigger systemic cancellation routines." },
                    ar: { t: "نوافذ التحقق من صحة المعاملات", d: "تعمل جميع مسارات الدفع الديناميكية ضمن معلمات توقيت آمنة؛ عمليات التحقق المتأخرة ستؤدي إلى روتين إلغاء نظامي." }
                },
                {
                    en: { t: "Dynamic Resource Scheduling", d: "We distribute system assets intelligently to respond efficiently to sudden user traffic waves inside regional integration parameters." },
                    ar: { t: "الجدولة الديناميكية للموارد", d: "نحن نوزع أصول النظام بذكاء للاستجابة بكفاءة لموجات حركة مرور المستخدمين المفاجئة داخل معلمات التكامل الإقليمي." }
                },
                {
                    en: { t: "Device and Browser Compatibility", d: "The layout parameters do not guarantee flawless performance across outdated software environments or non-standard visual setups." },
                    ar: { t: "توافق الأجهزة والمتصفحات", d: "لا تضمن معلمات التخطيط أداءً خالياً من العيوب عبر بيئات البرامج القديمة أو الإعدادات المرئية غير القياسية." }
                },
                {
                    en: { t: "Independent Contractor Boundaries", d: "Nothing within this legal document constitutes a commercial agency, partnership, employment framework, or franchise baseline." },
                    ar: { t: "حدود المقاول المستقل", d: "لا يوجد شيء في هذه الوثيقة القانونية يشكل وكالة تجارية، أو شراكة، أو إطار عمل توظيف، أو خط أساس للامتياز." }
                },
                {
                    en: { t: "Survival of Structural Protective Clauses", d: "All sections relating to indemnity limits, copyright rules, and jurisdiction barriers survive any platform deactivation processes." },
                    ar: { t: "بقاء البنود الحمائية الهيكلية", d: "تظل جميع الأقسام المتعلقة بحدود التعويض، وقواعد حقوق النشر، وحواجز الاختصاص القضائي سارية بعد أي عمليات إلغاء تفعيل للمنصة." }
                },
                {
                    en: { t: "Electronic Interaction Legality", d: "The visitor confirms that electronic confirmation sequences on udea.online satisfy all regulatory requirements for direct signature executions." },
                    ar: { t: "قانونية التفاعل الإلكتروني", d: "يؤكد الزائر أن تسلسلات التأكيد الإلكترونية على udea.online تلبي جميع المتطلبات التنظيمية لتنفيذ التوقيع المباشر." }
                },
                {
                    en: { t: "Entirety of Contractual Document", d: "This compilation of structural conditions stands as the complete agreement regarding udea.online, replacing all earlier written or spoken items." },
                    ar: { t: "كامل الوثيقة التعاقدية", d: "يقف هذا التجميع للشروط الهيكلية كإتفاقية كاملة فيما يتعلق بـ udea.online، ليحل محل جميع العناصر المكتوبة أو الشفهية السابقة." }
                },
                {
                    en: { t: "Absolute Final Confirmation", d: "Pressing buttons to initiate processing lines verifies a full acceptance of all structural and financial conditions of this document." },
                    ar: { t: "التأكيد النهائي المطلق", d: "إن الضغط على الأزرار لبدء خطوط المعالجة يؤكد القبول الكامل لجميع الشروط الهيكلية والمالية لهذه الوثيقة." }
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
