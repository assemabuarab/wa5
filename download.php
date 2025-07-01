<?php
// حماية إضافية ممكنة لاحقاً (مثل التحقق من الجلسة أو IP)

// الرابط الحقيقي للتحميل
$downloadUrl = 'https://dlll.apkm.app/wagold/12.10/WA2_Abo3rab_v12.10.apk';

// إعادة توجيه المستخدم إلى الرابط
header("Location: $downloadUrl");
exit;
?>
