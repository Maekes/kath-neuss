<?php

$parameter = http_build_query(
    array(
        'ref' => KAPLAN_REF_ID,
        'mode' => 'T1',
        'type' => 'json',
        'Days' => '1',
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

<div class="shadow-lg rounded-lg overflow-hidden bg-white divide-y divide-gray-200">
    <div style="background-image: url('<?php echo wp_get_attachment_image_src(get_field('hintergrundbild_gottesdienste_heute'), 'small')[0]; ?>'); background-size: cover; background-position: left center;">
        <div class="bg-gradient-to-r from-white via-white opacity-90 z-10">
            <span class="py-4 px-5 text-2xl font-semibold block">Gottesdienste heute</span>
        </div>
    </div>

    <?php
    if ($json === FALSE) {
    ?>

        <div class='py-2 px-4 text-sm text-gray-600 odd:bg-gray-50'>
            <p><i>Die Messfeiern konnten leider nicht geladen werden...</i></p>
        </div>

        <?php

    } else {

        $messen = json_decode($json);

        foreach ($messen as $index => $messe) {

            if (strpos($messe->Gottesdienst, "Exequien") !== false || $messe->FaelltAus) {
                continue;
            }

        ?>

            <ul class="py-2 px-5 leading-tight text-gray-900 hover:bg-gray-100 font-light even:bg-gray-50 ">
                <li class="font-medium mb-1"><?php echo $messe->Uhrzeit ?>&nbsp;Uhr - <?php echo $messe->Ort ?></li>
                <li class="p-0"><?php echo $messe->Gottesdienst ?> <?php echo $messe->Zusatz ?></li>
            </ul>

    <?php
        }
    }
    ?>

</div>