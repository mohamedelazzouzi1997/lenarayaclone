<?php

namespace App\Exports;

use App\Models\Resevation;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReservationExport implements FromCollection,WithHeadings,ShouldAutoSize,WithEvents
{
    public $reservation;
 public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
    * @return \Illuminate\Support\Collection
    */


    public function collection()
    {
        return $this->reservation;
    }


    public function headings(): array
    {
        return [
            'ID',
            'Nom Complete',
            'Email',
            'Téléphone',
            'Date',
            'Time',
            'Message',
            'Status',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(15);
            },
        ];
    }
}