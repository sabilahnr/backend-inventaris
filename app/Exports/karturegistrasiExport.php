<?php

namespace App\Exports;

use App\Models\kartu_registrasi;
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

class karturegistrasiExport implements FromCollection, WithHeadings ,WithStyles, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kartu_registrasi::all();
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->mergeCells('A1:R1')->getStyle('A1:R1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A3:P3')
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
            ['Katalog Kartu Registrasi Museum']   ,
            [''],
            [
                '#',
                'no_reg',
                'no_inv',
                'nama_kol',
                'tempat_pembuatan',
                'cara_perolehan',
                'ukuran',
                'tgl_tahun_masuk',
                'ket',
                'harga',
                'uraian_singkat',
                'foto_regis',
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