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

    <div class="flex space-x-4 mb-4 items-center">
        <b>Filter:</b>
        <select name="gemeinde" id="filterGemeinde" class="filterSelect rounded border-gray-200 flex-1 outline-none focus:ring-0 focus:border-gray-200" data-filter-gemeinde="">
            <option value="" disabled selected hidden>nach Gemeinde</option>
            <optgroup label="Neuss-Mitte">
                <option value="st-quirin">St. Quirin</option>
                <option value="hl-dreikoenige">Hl. Dreikönige</option>
                <option value="st-pius">St. Pius</option>
                <option value="st-marien">St. Marien</option>
            </optgroup>
            <optgroup label="Neusser Süden"></optgroup>
        </select>
        <button id="deleteFilter" class="rounded bg-white border border-gray-200 px-4 py-2 focus:outline-none">Filter löschen</button>
    </div>

    <script>
        document.getElementById("filterGemeinde").onchange = function(e) {
            const selectedValue = e.target.value;
            e.target.dataset.filterGemeinde = selectedValue;
            document.querySelectorAll('[data-gemeinde]').forEach(function(element) {
                if (element.dataset.gemeinde == selectedValue || selectedValue == "") {
                    element.classList.remove("hidden");
                } else {
                    element.classList.add("hidden");
                }
            })
        }
        document.getElementById("deleteFilter").onclick = function() {
            document.querySelectorAll(".filterSelect").forEach(function(filter) {
                filter.selectedIndex = 0
                filter.dispatchEvent(new Event('change'))
            })
        }
    </script>

    <?php

    $messen = json_decode($json);
    setlocale(LC_TIME, "de_DE.UTF-8");
    $datum_backup = "";

    foreach ($messen as $index => $messe) {

        if (strpos($messe->Gottesdienst, "Exequien") !== false || $messe->FaelltAus) {
            continue;
        }
        $datum  = strftime("%A, %e. %B", strtotime($messe->Datum));

        if ($datum !== $datum_backup) {
            if ($datum_backup !== "") {
                echo "</table>";
            }
    ?>
            <h2 class="mb-4 text-2xl font-normal text-center"><?php echo $datum  ?></h2>
            <table class="w-full bg-white rounded-2xl overflow-hidden block overflow-x-auto shadow-xl mb-16 ">
                <tbody class="w-full">
                <?php
            }

            $datum_backup = $datum
                ?>


                <tr class="py-2 px-4 hover:bg-gray-100 even:bg-gray-50 hypens last:border-none border-gray-200 border-b" data-gemeinde="<?php echo getLink($messe->Ort)  ?>">
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