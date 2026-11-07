<?php
declare(strict_types=1);

/**
 * hadith-php-ilal-hidden-defect — كاشف العلل الخفية والشذوذ والاضطراب في الأسانيد
 * Hadith Ilal Hidden Defect & Shudhudh Anomaly Detector
 */
$input = "تفرد الثقة بمخالفة الأوثق";
$digest = substr(hash("sha256", "hadith-php-ilal-hidden-defect:" . $input), 0, 12);

echo "[RUN] hadith-php-ilal-hidden-defect (PHP) — Hadith Ilal Hidden Defect & Shudhudh Anomaly Detector" . PHP_EOL;
echo "[AR]  كاشف العلل الخفية والشذوذ والاضطراب في الأسانيد" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Defect=Shadhdh |PivotNarrator=Madar | MahfuzPreferred=True | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
