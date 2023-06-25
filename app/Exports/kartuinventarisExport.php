<?php

namespace App\Exports;

use App\Models\kartu_inv;
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

class kartuinventarisExport implements FromCollection, WithHeadings ,WithStyles, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kartu_inv::all();
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->mergeCells('A1:R1')->getStyle('A1:R1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A3:AL3')
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
            ['Katalog Kartu Inventaris Museum']   ,
            [''],
            [
                '#',
                'id_koleksi',
                'id_buku',
                'jenis_koleksi',
                'sub_koleksi',
                'no_inv',
                'no_reg',
                'no_reg_foto',
                'nama_kol',
                'ur_bagian',
                'ur_bentuk',
                'ur_bahan',
                'ur_teknik',
                'ur_warna',
                'ur_dekorasi',
                'ur_ornamen',
                'ur_tenda',
                'ur_asesori',
                'ur_fungsi',
                'ur_simbol',
                'ur_arti',
                'ur_gaya',
                'ur_kelengkapan',
                'ukuran',
                'tempat_asal_pembuatan',
                'tgl_pembuatan',
                'cara_perolehan',
                'tgl_masuk',
                'kondisi_benda',
                'tempat_penyimpanan',
                'dicatat_oleh',
                'tgl_pencatatan',
                'sumber_literatur',
                'sumber_narasumber',
                'ket_lain',
                'foto_inv',
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