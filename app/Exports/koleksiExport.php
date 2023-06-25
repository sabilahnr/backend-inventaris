<?php

namespace App\Exports;

use App\Models\koleksi;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class koleksiExport implements FromCollection, WithHeadings ,WithStyles, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return koleksi::all();
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->mergeCells('A1:R1')->getStyle('A1:R1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A3:AJ3')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('EBC4C4');
             },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('B2')->getFont()->setBold(true);
        return [
            1    => ['font' =>['size' => 24], ['bold' => true],['alignment' => 'center']],
            3    =>['font' => ['size' => 13]]
        ];
    }

    public function headings(): array
    {
        return [
            ['Katalog Koleksi Museum']   ,
            [''],
            [
                '#',
                'id_ruang',
                'id_kualifikasi',
                'nama_koleksi',
                'dhapur',
                'klasifikasi',
                'kode_jenis',
                'tanggal_regis',
                'desk_benda',
                'sejarah',
                'tempat_pembuatan',
                'tempat_diperoleh',
                'cara_diperoleh',
                'status_cagar_budaya',
                'sk_cagar_budaya',
                'keaslian',
                'kondisi_koleksi',
                'sub_kondisi_koleksi',
                'panjang',
                'lebar_ganja',
                'tinggi',
                'berat',
                'karat',
                'tebal',
                'bahan',
                'warna',
                'foto',
                'sumber_literasi',
                'pamor',
                'warangka',
                'pendhok',
                'mendhak',
                'hibah_dari',
                'hulu',
                'Created At',
                'Update At',
            ],
        ];
    }
    // public function map($user): array
    // {
    //     return [
    //         $user->nama,
    //         $user->museum,
    //         // Date::dateTimeToExcel($user->created_at),
    //     ];
    // }
}