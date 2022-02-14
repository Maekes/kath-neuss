<?php

$ctx = stream_context_create(
    [
        'https' =>
        [
            'timeout' => 1, // Seconds
        ],
        'ssl' => [
            'verify_peer' => false,
        ]
    ]
);

$url = KAPLAN_BEICHTE_CACHE_URL;

$json = file_get_contents($url, false, $ctx);

?>


<div class="block shadow-xl rounded-2xl overflow-hidden bg-white relative">
    <div class="absolute -top-20 invisible" id="gottesdienste"></div>
    <p class="py-4 px-4 lg:px-8 ">Hier finden Sie eine detaillierte <b>Auflistung aller Beichtzeiten </b> inkl. Beichtväter in den nächsten 14 Tagen:</p>
    <div class="divide-y divide-gray-300 border-t border-gray-300">

        <?php
        if ($json === FALSE) {
        ?>

            <div class='py-2 px-4 lg:px-8 text-sm text-gray-600 odd:bg-gray-50'>
                <p><i>Die Messfeiern konnten leider nicht geladen werden...</i></p>
            </div>

            <?php

        } else {

            $messen = json_decode($json);
            setlocale(LC_TIME, "de_DE.UTF-8");



            foreach ($messen as $index => $messe) {

                if ($messe->TA_ID !== 18 || $messe->TE_FaelltAus) {
                    continue;
                }
                $datum  = strftime("%a. %e. %B", strtotime($messe->TE_Datum));
            ?>

                <div class="py-2 px-4 lg:px-8  hover:bg-gray-100 odd:bg-gray-50">
                    <p class="font-semibold"><?php echo $datum ?>, <?php echo sprintf("%02d", $messe->TE_von_hh) . ":" . sprintf("%02d", $messe->TE_von_mm) ?> Uhr</p>
                    <p class="font-medium"><?php echo $messe->RA_Bez ?></p>
                    <p class="font-normal"><?php echo $messe->TE_Bez ?> bei <?php echo $messe->PE_Titel . " " . $messe->PE_Nachname ?> </p>
                </div>

        <?php
            }
        }
        ?>
    </div>
</div>