<?php

namespace App\service;

use Box\Spout\Common\Entity\Style\CellAlignment;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;

class ExportService
{
    const EXCEL_TITLE = [
        '姓名',
        '年龄',
        '性别'
    ];

    public function export($list = [])
    {
       $data = $this->formatData($list);
       $this->excelExport(self::EXCEL_TITLE,$data);
    }

    public function formatData($list = [])
    {
        $data = [];
        foreach ($list as $item) {
            $data[] = [
                'name' => iconv('utf-8', 'utf-8',$item['name']),
                'age' => iconv('utf-8', 'utf-8', $item['age']),
                'sex' => iconv('utf-8', 'utf-8', $item['sex']),
            ];
        }
        return $data;
    }

    public function excelExport($title, $list = [])
    {
        $style = (new StyleBuilder())->setFontSize('12')->setFontName('微软雅黑')->setCellAlignment(CellAlignment::CENTER)->build();

        $writer = WriterEntityFactory::createXLSXWriter();
        //保存到本地
        //$writer->openToFile(storage_path('标签列表.xlsx'));

        $writer->openToBrowser('export-客户标签' . date('YmdHis') . '.xlsx');
        $row = WriterEntityFactory::createRowFromArray($title,$style);
        $writer->addRow($row);
        $rows = [];
        foreach($list as $key => $value){
            $rows[] = WriterEntityFactory::createRowFromArray($value,$style);
        }
        $writer->addRows($rows);
        $writer->close();

    }

}
