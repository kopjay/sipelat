<?php

namespace App\Imports;

use App\Evaluasi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class EvaluasiImport implements ToModel, WithStartRow, WithCustomCsvSettings
{   
    public function  __construct($id)
    {
        $this->id= $id;
    }

    public function startRow(): int
    {
        return 3;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Evaluasi([
            'pelatihan_id'     => $this->id,
            'nama'     => $row[0],
            'nip'    => $row[1],
            'nilai'    => $row[2],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
} 