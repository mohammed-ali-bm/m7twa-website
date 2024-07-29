<?php

namespace App\Exports;

use App\Models\Guest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\WithColumnFormatting;

use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GuestsExport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder  implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;
    // private $condition;
    private $query;



    function __construct($query = null)
    {
        // $this->condition = $condition;
        $this->query = $query;
    }

    public function collection()
    {


        return $this->query;
    }


    public function headings(): array
    {
        return [
            'رقم التسجيل',
            'الاسم',
            'رقم الجوال',
            'الخدمة المطلوبة',
            'تاريخ التسجيل',
            'تاريخ آخر تحديث',
            'الحالة',


        ];
    }

    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_TEXT,
            'C' => NumberFormat::FORMAT_TEXT,
            'G' => NumberFormat::FORMAT_TEXT,
        ];
    }
}
