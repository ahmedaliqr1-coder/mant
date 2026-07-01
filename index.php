<?php
// udea.online - Mint Gateway Project
// الصفحة الرئيسية المحدثة بالروابط الكاملة والاسم القانوني الموثق
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بوابة مينت لخدمات الدفع الالكتروني | UDEA</title>
    <!-- تضمين مكتبة الأيقونات الشهيرة -->
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

        /* الهيدر الثابت */
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

        .header-right {
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

        /* غلاف الصفحة باللون الرمادي */
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

        /* قسم العناوين والترحيب المباشر على الخلفية بدون مربع */
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

        /* شبكة أزرار الخدمات الأربعة */
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

        /* قسم الأسئلة الشائعة */
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

        /* كرت السؤال ذو الحواف الحمراء */
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

        /* الفوتر باللون الأسود بالكامل */
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

        /* التفاعلات التلقائية للأسئلة المفتوحة */
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

    <!-- الهيدر الثابت للموقع -->
    <header>
        <div class="header-right">
            <button class="menu-toggle" id="menuBtn"><i class="fa-solid fa-bars"></i></button>
            <div class="company-name">بوابة مينت لخدمات الدفع الالكتروني</div>
        </div>
        <!-- زر تبديل اللغة يحول مباشرة لصفحة الاندكس الإنجليزية المحددة -->
        <a href="index_en.php" class="lang-switch">EN</a>
    </header>

    <!-- غلاف الصفحة باللون الرمادي -->
    <div class="main-wrapper">
        <div class="container">
            
            <!-- قسم العناوين والترحيب المباشر على الخلفية وبدون مربعات -->
            <div class="hero-section">
                <h1>بوابة مينت لحلول خدمات الدفع الآمن في الإمارات</h1>
                <p>المنصة الموحدة والآمنة لتسهيل عمليات السداد الإلكتروني وتعبئة الرصيد الفوري للخدمات المرورية والطرقية.</p>
            </div>

            <!-- شبكة الأزرار الأربعة للخدمات المطلوبة -->
            <div class="services-grid">
                
                <!-- زر خدمة سالك الأول -->
                <a href="payment.php?service=salek_recharge" class="btn-service">
                    <i class="fa-solid fa-road"></i>
                    <span>خدمات سالك</span>
                </a>

                <!-- زر خدمة مخالفات المرور الثاني -->
                <a href="payment.php?service=traffic_fines" class="btn-service">
                    <i class="fa-solid fa-car-burst"></i>
                    <span>خدمات دفع مخالفات المرور</span>
                </a>

                <!-- زر خدمة طلب بطاقة نول الثالث -->
                <a href="payment.php?service=nol_request" class="btn-service">
                    <i class="fa-solid fa-address-card"></i>
                    <span>طلب بطاقة نول جديدة</span>
                </a>

                <!-- زر خدمة إعادة تعبئة بطاقة نول الرابع -->
                <a href="payment.php?service=nol_recharge" class="btn-service">
                    <i class="fa-solid fa-money-bill-transfer"></i>
                    <span>إعادة تعبئة بطاقة نول</span>
                </a>

            </div>

            <!-- قسم 15 سؤالاً شائعاً بكروت ذات حواف حمراء وعلامة زائد تفاعلية حمراء -->
            <div class="faq-section">
                <h2>الأسئلة الشائعة والمعلومات العامة</h2>
                <div class="faq-container">
                    
                    <!-- س١ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>ما هي منصة udea.online؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>هي بوابة إلكترونية مستقلة تقدم تسهيلات رقمية لدفع الفواتير وإعادة شحن البطاقات المرورية عبر الإنترنت بشكل مبسط وآمن تماماً للمستخدمين.</p>
                        </div>
                    </div>

                    <!-- س٢ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>كيف يمكنني إعادة تعبئة رصيد حساب سالك الخاص بي؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>ببساطة اضغط على زر "خدمات سالك"، أدخل رقم الحساب أو رقم البطاقة المراد شحنها، ثم حدد المبلغ المطلوب وأتمم الدفع عبر بوابتنا المشفرة.</p>
                        </div>
                    </div>

                    <!-- س٣ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>هل يمكنني الاستعلام عن المخالفات المرورية وسدادها فوراً؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>نعم، تتيح المنصة إمكانية إدخال بيانات المركبة واستعراض المبالغ المستحقة ودفع المخالفات مباشرة لتحديث السجلات في أسرع وقت.</p>
                        </div>
                    </div>

                    <!-- س٤ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>ما هي تحديداً المدة المستغرقة لتحديث رصيد بطاقة نول بعد الشحن؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>يتم إرسال طلب الشحن فوراً وتجهيز الرصيد، وقد يتطلب الأمر في بعض الأحيان تفعيل الرصيد على البطاقة عبر ملامسة أجهزة القراءة في محطات المترو أو الحافلات.</p>
                        </div>
                    </div>

                    <!-- س٥ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>كيف يتم تقديم طلب للحصول على بطاقة نول جديدة؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>يمكنك التوجه لقسم "طلب بطاقة نول جديدة" وملء البيانات والعنوان ليتم معالجة وإصدار وتوصيل البطاقة إليك بالتنسيق مع الجهات المعنية.</p>
                        </div>
                    </div>

                    <!-- س٦ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>هل هناك رسوم إضافية عند الدفع عبر بوابة مينت لخدمات الدفع الالكتروني؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>قد يتم تطبيق رسوم خدمة إدارية بسيطة مقابل تسهيل وإجراء المعاملات الإلكترونية الفورية، ويتم توضيح كافة المبالغ بوضوح قبل تأكيد السداد.</p>
                        </div>
                    </div>

                    <!-- س٧ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>ما هي وسائل الدفع المدعومة في الموقع؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>نحن ندعم معظم بطاقات الائتمان والخصم المباشر العالمية والمحلية الرئيسية (فيزا وماستركارد) لضمان تجربة سداد مرنة.</p>
                        </div>
                    </div>

                    <!-- س٨ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>هل عمليات الدفع على هذا الموقع آمنة ومحمية؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>نعم بالكامل، يتم تشفير كافة البيانات المالية عبر بروتوكولات حماية متطورة تضمن عدم مشاركة أو تسريب أي معلومات حساسة.</p>
                        </div>
                    </div>

                    <!-- س٩ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>ماذا أفعل إذا أدخلت رقم حساب خاطئ بالخطأ؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>يجب التواصل مع الدعم الفني فوراً قبل اكتمال المعالجة النظامية، حيث يصعب استرداد المبالغ بعد تحويلها الفعلي للجهات الخدمية.</p>
                        </div>
                    </div>

                    <!-- س١٠ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>هل الموقع يتبع بشكل مباشر لهيئة الطرق والمواصلات؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>لا، هذا الموقع هو منصة سداد وتسهيل مستقلة مملوكة لشركة بوابة مينت لخدمات الدفع الالكتروني، وليست الموقع الرسمي لأي جهة حكومية.</p>
                        </div>
                    </div>

                    <!-- س١١ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>كيف يمكنني الحصول على إيصال سداد لمعاملتي؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>فور إتمام العملية بنجاح، يظهر لك إيصال رقمي على الشاشة يتضمن كافة تفاصيل المعاملة ويمكنك حفظه أو طباعته كإثبات سداد.</p>
                        </div>
                    </div>

                    <!-- س١٢ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>ما هي سياسة الاسترداد في حال فشل المعاملة؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>في حال تم خصم المبلغ ولم يتم شحن الخدمة بسبب عطل تقني، يتم إعادة الأموال تلقائياً إلى بطاقة الدفع الأصلية خلال المدة المحددة بالسياسة.</p>
                        </div>
                    </div>

                    <!-- س١٣ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>هل الخدمة متاحة للاستخدام على مدار 24 ساعة؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>نعم، البوابة تعمل بشكل مؤتمت على مدار الساعة طوال أيام الأسبوع لتلبية احتياجاتكم وتسهيل معاملاتكم في أي وقت ومن أي مكان.</p>
                        </div>
                    </div>

                    <!-- س١٤ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>ماذا أفعل لو واجهتني مشكلة أثناء السداد؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>يرجى إرسال تفاصيل المشكلة عبر صفحة اتصل بنا أو التواصل الفوري مع فريق خدمة العملاء المتواجد لمساعدتكم وحل المشكلة فوراً.</p>
                        </div>
                    </div>

                    <!-- س١٥ -->
                    <div class="faq-card">
                        <div class="faq-question">
                            <h3>كيف يمكنني التحقق من شروط الاستخدام المحدثة للموقع؟</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>يمكنك في أي وقت مراجعة صفحة "الشروط والأحكام" الموجودة في أسفل الموقع للاطلاع على كافة الضوابط واللوائح المحدثة والمعمول بها.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- الفوتر الرسمي باللون الأسود والروابط المحددة بملفاتها المباشرة والربط القانوني الصارم -->
    <footer>
        <div class="footer-company-title">بوابة مينت لخدمات الدفع الالكتروني</div>
        
        <div class="footer-links">
            <a href="privacy-policy.php">سياسة الخصوصية</a>
            <a href="terms.php">الشروط والأحكام</a>
            <a href="refund-policy.php">سياسة الاسترداد</a>
            <a href="disclaimer.php">إخلاء المسؤولية</a>
        </div>

        <div class="footer-disclaimer">
            <strong>معلومات الملكية والتشغيل القانوني:</strong> 
            إن اسم النطاق والدومين الحالي <strong>udea.online</strong> هو منصة رقمية رسمية مملوكة بالكامل وبشكل قانوني لـ <strong>بوابة مينت لخدمات الدفع الالكتروني ذ.م.م - فرع دبي</strong>. ويتم تشغيل وإدارة هذا الموقع الإلكتروني بالكامل من قِبل شركة بوابة مينت لخدمات الدفع الالكتروني بصفتها المالك والمسؤول القانوني المباشر عن كافة العمليات والخدمات والحلول التقنية القدمة عبر البوابة. هذا الموقع يمثل منصة وسيطة تجارية مستقلة تسهل وتدعم حلول السداد والدفع، وليس الموقع الحكومي الرسمي للهيئات المعنية.
        </div>

        <div class="footer-copy">
            &copy; 2026 udea.online. جميع الحقوق محفوظة لشركة بوابة مينت لخدمات الدفع الالكتروني.
        </div>
    </footer>

    <!-- الجزء البرمجي الخاص بتفاعل فتح وإغلاق كروت الأسئلة الشائعة -->
    <script>
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const card = question.parentElement;
                const answer = card.querySelector('.faq-answer');
                
                // إغلاق أي كرت آخر مفتوح حالياً لتنظيم العرض
                document.querySelectorAll('.faq-card').forEach(item => {
                    if (item !== card && item.classList.contains('active')) {
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.maxHeight = null;
                    }
                });
                
                // التبديل للكرت المختار
                card.classList.toggle('active');
                if (card.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });

        // زر القائمة في الهيدر
        document.getElementById('menuBtn').addEventListener('click', function() {
            alert('تم النقر على القائمة الرئيسية للبوابة');
        });
    </script>
</body>
</html>
