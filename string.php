<?php
$str = " Ahmed shaker ";

// طول سلسلة (باستخدام بايتات)
$len = strlen($str); // عدد البايتات
// طول سلسلة (mbstring) — الأحسن للنصوص متعددة البايت
$mlen = mb_strlen($utf8, 'UTF-8');

// مقارنة
$res = strcmp('a','b'); // <0
$res_ci = strcasecmp('A','a'); // 0

// موقع نص
$pos = strpos("abc abc", "bc"); // 1 (الموضع الأول)
$ipos = stripos("ABC abc", "ab"); // 0 (غير حساس لحالة الأحرف)

// نهاية الظهور
$rpos = strrpos("ababa","ba"); // آخر موضع

// تجزئة/انضمام
$arr = explode(" ", "one two three"); // ['one','two','three']
$joined = implode(",", ['a','b']); // "a,b"

// اقتطاع
$sub = substr("abcdef", 1, 3); // "bcd"
$replace_substr = substr_replace("abcdef", "XX", 2, 3); // "abXXf"

// إيجاد واستبدال (حالة حساسة أو لا)
$replaced = str_replace("world", "planet", "hello world"); // hello planet
$irepl = str_ireplace("WORLD","planet","Hello World"); // Hello planet

// تقسيم إلى مصفوفة من الحروف
$chars = str_split("hello", 1); // ['h','e','l','l','o']

// تكرار
$rep = str_repeat("ha", 3); // "hahaha"

// تعبئة/pad
$p = str_pad("12", 5, "0", STR_PAD_LEFT); // "00012"

// تغيير حالة
$low = strtolower("ABC"); $up = strtoupper("abc");
$uc = ucfirst("hello"); $ucw = ucwords("hello world");
$lcfirst = lcfirst("Hello"); // "hello"

// مسح الفراغات
$trimed = trim($str); $l = ltrim($str); $r = rtrim($str);

// البحث عن سلسلة (ترجع الجزء من النص ابتداء من التطابق)
$subFrom = strstr("foo@bar.com", "@"); // "@bar.com"
$subFromI = stristr("Foo@Bar.com","@"); // نفس لكن غير حساس لحالة الأحرف

// عدّ تكرارات جزء داخل نص
$count = substr_count("abababa","aba"); // 2 (غير متداخل)

// تحويل HTML / كود الهروب
$escaped = htmlspecialchars("<a> & ' \""); // يحول ل Entities
$decoded = html_entity_decode('&lt;tag&gt;');

// إضافة/إزالة شرطة مقلوبة
$add = addslashes("O'Reilly"); // O\'Reilly
$rm = stripslashes($add);

// حذف وسوم HTML
$plain = strip_tags("<b>bold</b><script>alert(1)</script>"); // "boldalert(1)"

// تحويل كود ASCII إلى حرف والعكس
$ch = chr(65); // "A"
$o = ord("A"); // 65

// تنسيق نص
$s = sprintf("Hello %s, %d", "Ahmed", 5); // مثل printf لكن يرجع سترينج
printf("Value: %.2f", 3.14159); // يطبع

// تقسيم بواسطة تعبير منتظم واستبدال /مطابقة
$pieces = preg_split('/\s+/', "one two  three"); // ['one','two','three']
if (preg_match('/[0-9]+/',$str, $m)) { /* $m[0] */ }
$pref = preg_replace('/\s+/', ' ', "a   b"); // "a b"
$all = preg_match_all('/\w+/', "a b c", $matches); // يحصي ويضع النتائج

// تحويل الترميزات
$converted = mb_convert_encoding($utf8, 'UTF-8', 'auto');

// تعداد التشابهات
$leven = levenshtein("kitten","sitting"); // عدد التعديلات
$sim = similar_text("hello","hallo", $percent); // يقيس التشابه والنسبة

// تعويض سلسلة عبر جدول
$strtrRes = strtr("abcd", "ab", "AB"); // "ABcd"  أو باستخدام associative map

// إيجاد أطول جزء تطابق
$posCount = strspn("123abc", "1234567890"); // عدد الحروف المتتالية من البداية المطابقة للقائمة

// تحويل الأسطر إلى <br>
$html = nl2br("line1\nline2");

// تحويل Sprintf مع عناصر مصفوفية
$arr = ['name'=>'A','age'=>20];
echo vsprintf("%s is %d", ['A',20]);

// wordwrap
$wrapped = wordwrap("long sentence here", 6, "\n", true);

// وظائف متعددة البايت (مهمة للنص العربي)
$mb_len = mb_strlen($utf8, 'UTF-8');
$mb_sub = mb_substr($utf8, 0, 5, 'UTF-8');
$mb_pos = mb_strpos($utf8, 'ب', 0, 'UTF-8');
$mb_low = mb_strtolower($utf8, 'UTF-8');
$mb_up = mb_strtoupper($utf8, 'UTF-8');

?>
