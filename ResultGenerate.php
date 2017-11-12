<?php
require 'config.php';

// code to fetch the current user ID from CurrentUser

$CurUserID = mysqli_fetch_row(mysqli_query($conn,"SELECT sign_sno FROM CurrentUser ORDER BY sno DESC LIMIT 1"));

// code to get count of symptoms corresponding to malaria

$MalariaCount = mysqli_fetch_assoc(mysqli_query($conn,
    "SELECT count(distinct(dm.symID)) AS total
        FROM entry_log el, disease_malaria dm
        WHERE el.sign_sno=$CurUserID[0] AND el.symp_ID=dm.symID"
));

// code to get count of symptoms corresponding to jaundice
$JaundiceCount = mysqli_fetch_assoc(mysqli_query($conn,
    "SELECT count(distinct(dj.symID)) AS total
        FROM entry_log el, disease_jaundice dj
        WHERE el.sign_sno=$CurUserID[0] AND el.symp_ID=dj.symID"
));

//code to get the number of records in disease_malaria

$DiseaseCountMalaria = mysqli_fetch_row(mysqli_query($conn,
    "SELECT count(*) FROM disease_malaria"
));

//code to get the number of records in disease_jaundice
$DiseaseCountJaundice = mysqli_fetch_row(mysqli_query($conn,
    "SELECT count(*) FROM disease_jaundice"
));

$ChanceOfMalaria = number_format($MalariaCount['total']*100/$DiseaseCountMalaria[0],2);
$ChanceOfJaundice = number_format($JaundiceCount['total']*100/$DiseaseCountJaundice[0],2);

echo "Total symptoms in Malaria: ".$DiseaseCountMalaria[0]."<br />";
echo "Total symptoms in Jaundice: ".$DiseaseCountJaundice[0]."<br />";
echo "Percentage of Malaria: ".$ChanceOfMalaria."%<br />";
echo "Percentage of Jaundice: ".$ChanceOfJaundice."%";
?>