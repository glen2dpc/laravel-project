<?php

namespace App\Imports;

use App\Models\Sale;
use Maatwebsite\Excel\Concerns\ToModel;

class SalesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sale([
            'ORDERNUMBER' => (int)$row[0],
            'QUANTITYORDERED' => (int)$row[1],
            'PRICEEACH' => $row[2],
            'ORDERLINENUMBER' => (int)$row[3],
            'SALES' => $row[4],
            'ORDERDATE' => $row[5],
            'STATUS' => $row[6],
            'QTR_ID' => (int)$row[7],
            'MONTH_ID' => (int)$row[8],
            'YEAR_ID' => (int)$row[9],
            'PRODUCTLINE' => $row[10],
            'MSRP' => (int)$row[11],
            'PRODUCTCODE' => $row[12],
            'CUSTOMERNAME' => $row[13],
            'PHONE' => $row[14],
            'ADDRESSLINE1' => $row[15],
            'ADDRESSLINE2' => $row[16],
            'CITY' => $row[17],
            'STATE' => $row[18],
            'POSTALCODE' => $row[19],
            'COUNTRY' => $row[20],
            'TERRITORY' => $row[21],
            'CONTACTLASTNAME' => $row[22],
            'CONTACTFIRSTNAME' => $row[23],
            'DEALSIZE' => $row[24],
        ]);
    }
}
