<?php

// pembuatan function
function sayHello()
{
    echo "Hallo dari saya yang biasa nge-PHP";
}

// pembuatan function dengan menerima inputan / argument
function bikinKapital($teks)
{
    echo strtoupper($teks);
}

function titleHalaman($name)
{
    echo "Halo, " . ucfirst($name);
}

function tableData($data)
{
    $table  = "<table border='1'>";
    $table .= "<tr>";
    $table .= "<th>No</th>";
    $table .= "<th>Nama</th>";
    $table .= "</tr>";

    foreach($data as $key => $d)
    {
        $table .= "<tr>";
        $table .= "<td>" . ++$key . "</td>";
        $table .= "<td>". $d['name'] . "</td>";
        $table .= "</tr>";
    }

    $table  .= "</table>";

    echo $table;
}

// pemanggilan / menjalankan function bikinKapital
// bikinKapital("saya mau makan nasi");