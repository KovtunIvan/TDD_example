<?php

namespace App\Context\Csv;

class CsvService
{
    /**
     * @var string
     */
    protected $filename;

    /**
     * CsvService constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Получаем имя файла csv
     * @return string
     */
    public function getFileName() : string
    {
        return $this->filename;
    }

    /**
     * Чтение csv файла
     * @return array
     */
    public function getCsv() : array
    {
        $handle = fopen($this->filename, "r");
        $csvData = [];
        while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
            $csvData[] = $line;
        }
        fclose($handle);
        return $csvData;
    }

    /**
     * Записываем данные в csv
     * @param array $data
     * @return array
     */
    public function setCsv(array $data) : void
    {
        $handle = fopen($this->filename, "a");
        foreach ($data as $value) {
            fputcsv($handle, explode(";", $value), ";");
        }
        fclose($handle); //Закрываем
    }

}