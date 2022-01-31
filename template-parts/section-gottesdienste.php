<?php

$parameter = http_build_query(
    array(
        'ref' => KAPLAN_REF_ID,
        'mode' => 'T1',
        'type' => 'json',
        'KG' => get_field("kaplan_id"),
        'Days' => '7',
        //'groups' => 'Anbetung,Beichtgelegenheit,Familienmesse,Prozession,Laudes,Sonntagvorabendmesse,Kreuzwegandacht,Andacht,Hl.%20Messe,Rosenkranz,Wortgottesdienst,Wort-Gottes-Feier',
    )
);

$ctx = stream_context_create(
    [
        'https' =>
        [
            'timeout' => 2, // Seconds
        ],
        'ssl' => [
            'verify_peer' => false,
        ]
    ]
);

$url = KAPLAN_URL . $parameter;

$json = file_get_contents($url, false, $ctx);

?>


<div class="block shadow-xl rounded-2xl overflow-hidden bg-white relative">
    <div class="absolute -top-20 invisible" id="gottesdienste"></div>
    <h3 class="mt-3 mb-2 px-4 font-bold">Gottesdienste</h3>
    <p class="mb-3 px-4 text-sm">Diese Woche feiern wir in <b><?php the_title() ?></b> folgende Gottesdienste:</p>
    <div class="divide-y divide-gray-300 border-t border-gray-300">

        <?php
        if ($json === FALSE) {
        ?>

            <div class='py-2 px-4 text-sm text-gray-600 odd:bg-gray-50'>
                <p><i>Die Messfeiern konnten leider nicht geladen werden...</i></p>
            </div>

            <?php

        } else {

            $messen = json_decode($json);
            setlocale(LC_TIME, "de_DE.UTF-8");



            $anzahlMessen = 0;

            foreach ($messen as $index => $messe) {

                if (strcmp($messe->Gottesdienst, "Exequien") == 0 || $messe->FaelltAus || strpos($messe->Ort, get_the_title()) === false) {
                    continue;
                }
                $anzahlMessen++;
                $datum  = strftime("%a. %e. %B", strtotime($messe->Datum));
            ?>

                <div class="py-2 px-4 hover:bg-gray-100 odd:bg-gray-50">
                    <p class="font-semibold"><?php echo $datum ?>, <?php echo $messe->Uhrzeit ?> Uhr</p>
                    <p class="font-normal"><?php echo $messe->Gottesdienst ?> <?php echo $messe->Zusatz ?> </p>
                </div>

            <?php
            }
            if ($anzahlMessen === 0) {

            ?>

                <div class='py-2 px-4 text-sm text-gray-600 odd:bg-gray-50'>
                    <p><i>Zurzeit finden in <?php the_title() ?> keine Gottesdienste statt.</i></p>
                </div>

        <?php

            }
        }
        ?>
    </div>
</div>