<?php

$parameter = http_build_query(
    array(
        'ref' => KAPLAN_REF_ID,
        'mode' => 'T1',
        'type' => 'json',
        'Days' => '8',
        //'groups' => 'Anbetung,Beichtgelegenheit,Familienmesse,Prozession,Laudes,Sonntagvorabendmesse,Kreuzwegandacht,Andacht,Hl.%20Messe,Rosenkranz,Wortgottesdienst,Wort-Gottes-Feier',
    )
);

function getLink($ort)
{
    if (strpos($ort, "Dreikönige") !== false) {
        return "hl-dreikoenige";
    }
    if (strpos($ort, "Quirin") !== false) {
        return "st-quirin";
    }
    if (strpos($ort, "Pius") !== false) {
        return "st-pius";
    }
    if (strpos($ort, "Marien") !== false) {
        return "st-marien";
    }
    if (strpos($ort, "Barbara") !== false) {
        return "st-barbara";
    }
    if (strpos($ort, "Kamillus") !== false) {
        return "st-kamillus";
    }
    return "";
}

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

if ($json === FALSE) {
?>

    <div class='py-2 px-4 text-sm text-gray-600 odd:bg-gray-50'>
        <p><i>Die Messfeiern konnten leider nicht geladen werden...</i></p>
    </div>

<?php

} else {
?>

    <?php

    $messen = json_decode($json);
    setlocale(LC_TIME, "de_DE.UTF-8");
    $datum_backup = "";

    foreach ($messen as $index => $messe) {

        if (strcmp($messe->Gottesdienst, "Exequien") == 0 || $messe->FaelltAus) {
            continue;
        }
        $datum  = strftime("%A, %e. %B", strtotime($messe->Datum));

        if ($datum !== $datum_backup) {
            if ($datum_backup !== "") {
                echo "</table>";
            }
    ?>
            <h2 class="mb-4 text-2xl font-normal text-center"><?php echo $datum  ?></h2>
        <?php
            echo '<table class="w-full bg-white rounded-2xl overflow-hidden block overflow-x-auto shadow-xl mb-16 "><tbody class="w-full">';
        }

        $datum_backup = $datum
        ?>



        <tr class="py-2 px-4 hover:bg-gray-100 even:bg-gray-50 hypens last:border-none border-gray-200 border-b">
            <td class="font-semibold py-2 px-3 sm:pl-6 whitespace-nowrap  " style="min-width: 6rem;"><?php echo $messe->Uhrzeit ?> Uhr</td>
            <td class="font-normal py-2 px-3 sm:px-4 whitespace-nowrap" style="min-width: 8rem;"><a href="/gemeinden/<?php echo getLink($messe->Ort)  ?>"><?php echo $messe->Ort ?></a></td>
            <td class="font-normal py-2 px-2 w-full whitespace-nowrap sm:whitespace-normal"><span class="font-medium"><?php echo $messe->Gottesdienst ?></span> <?php echo property_exists($messe, "Zusatz") ? $messe->Zusatz : "" ?> </td>
        </tr>


    <?php
    }

    ?>
    </tbody>
    </table>


<?php
}
?>