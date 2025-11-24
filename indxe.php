<?php
// إنشاء مصفوفة
$a = array(1,2,3);                // array()
// بديل مختصر:
$b = [ 'x'=>10, 'y'=>20 ];

// تعديل حالة مفاتيح
$c = array_change_key_case($b, CASE_UPPER); // ['X'=>10,'Y'=>20]

// تجزئة المصفوفة إلى قطع
$chunks = array_chunk([1,2,3,4,5], 2); // [[1,2],[3,4],[5]]

// عمود من مصفوفة من مصفوفات/كائنات
$data = [['id'=>1,'name'=>'A'],['id'=>2,'name'=>'B']];
$ids = array_column($data, 'id'); // [1,2]

// دمج مفاتيح وقيم في مصفوفة جديدة
$keys = ['a','b']; $vals=[1,2];
$combined = array_combine($keys,$vals); // ['a'=>1,'b'=>2]

// عدّ القيم
$counts = array_count_values([1,2,2,3]); // [1=>1,2=>2,3=>1]

// طرح عناصر المصفوفة
$a1=[1,2,3]; $a2=[2];
$diff = array_diff($a1,$a2); // [0=>1,2=>3]

// فرق مع المطابقة بالمفتاح
$d = array_diff_assoc(['a'=>1,'b'=>2], ['a'=>1,'b'=>3]); // ['b'=>2]

// تعبئة مصفوفة بقيمة
$f = array_fill(0, 3, 'x'); // ['x','x','x']

// تعبئة بالمفاتيح
$f2 = array_fill_keys(['k1','k2'],'v'); // ['k1'=>'v','k2'=>'v']

// فلترة (مع callback)
$even = array_filter([1,2,3,4], fn($v)=> $v%2==0); // [1=>2,3=>4]

// قلب المفاتيح مع القيم
$flipped = array_flip(['a','b']); // ['a'=>0,'b'=>1]

// تقاطع مصفوفتين
$inter = array_intersect([1,2,3],[2,3,4]); // [1=>2,2=>3]

// التحقق من وجود مفتاح
$has = array_key_exists('x',$b); // true

// الحصول على مفاتيح أو قيم
$keys = array_keys($b);   // ['x','y']
$values = array_values($b); // [10,20]

// تطبيق دالة على كل عنصر
$double = array_map(fn($v) => $v*2, [1,2,3]); // [2,4,6]

// دمج مصفوفتين (قيمة-قيمة أو مفاتيح مكررة)
$m = array_merge([1,2],[3,4]); // [1,2,3,4]

// دمج تكراري للمصفوفات متعددة الأبعاد
$mr = array_merge_recursive(['a'=>['x']], ['a'=>['y']]); // ['a'=>['x','y']]

// فرز متعدد الأبعاد
array_multisort($arr1 = [3,2,1], $arr2=[ 'c','b','a' ]); // يفرز arr1 و ترتيب arr2 وفقه

// إضافة/حذف عناصر من الطرف
$arr = [1,2,3];
array_push($arr,4); // [1,2,3,4]
$last = array_pop($arr); // 4

array_unshift($arr, 0); // [0,1,2,3]
$first = array_shift($arr); // 0

// أخذ جزء من المصفوفة
$slice = array_slice([1,2,3,4], 1, 2); // [2,3]

// إدراج/استبدال في منتصف (يغيّر المصفوفة الأصلية)
$splice = [1,2,3,4];
array_splice($splice, 2, 1, [8,9]); // [1,2,8,9,4]

// مجموع/حاصل ضرب القيم الرقمية
$sum = array_sum([1,2,3]); // 6
$prod = array_product([2,3,4]); // 24

// اختيارات/عشوائية
$randKey = array_rand([ 'a'=>1,'b'=>2 ]); // 'a' أو 'b'
shuffle($arr); // يغيّر الترتيب عشوائياً

// تقليل بقيمة واحدة عبر callback
$reduced = array_reduce([1,2,3], fn($carry,$item)=> $carry+$item, 0); // 6

// استبدال مصفوفات
$replaced = array_replace(['a'=>1,'b'=>2], ['b'=>3]); // ['a'=>1,'b'=>3]

// عكس المصفوفة
$rev = array_reverse([1,2,3]); // [3,2,1]

// البحث عن قيمة وإرجاع المفتاح
$key = array_search(2, [1,2,3]); // 1 أو false

// إزالة تكرارات
$unique = array_unique([1,2,2,3]); // [0=>1,1=>2,3=>3]

// تحويل مصفوفات إلى متغيرات والعكس
extract(['a'=>10,'b'=>20]); // ينشئ $a, $b
$compact = compact('a','b'); // ['a'=>10,'b'=>20]

// عدّ عناصر المصفوفة
$n = count([1,2,3]); // 3

// روابط المؤشرات (current/next/reset/end)
$arr2 = [10,20,30];
reset($arr2); $cur = current($arr2); next($arr2); $nxt = current($arr2); end($arr2); $last = current($arr2);

// تطبيق دالة على العناصر مع المفتاح
array_walk(['a'=>1,'b'=>2], function(&$v,$k){ $v += 1; });

// فرز حسب قيمة/مفتاح مع callback
asort($b); ksort($b); usort([3,1,2], fn($x,$y)=> $x<$y?-1:1); uasort(['a'=>3,'b'=>1], fn($x,$y)=> $x<=>$y);
?>
