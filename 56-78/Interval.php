<?php
class Interval
{
    private $date1;
    private $date2;
    private $arrDate = [];
    public function __construct($date1, $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function toDays()
    {
        // ������ ������� � ����
        return (strtotime($this->date1) - strtotime($this->date2)) / (60*60*24) ;

    }

    public function toMonths()
    {
        // ������ ������� � �������
        return round((strtotime($this->date1) - strtotime($this->date2)) / (60*60*24*30));

    }

    public function toYears()
    {
        // ������ ������� � �����
        return round((strtotime($this->date1) - strtotime($this->date2)) / (60*60*24*365));

    }

    public function __toString()
    {
        // ������� ��������� � ���� �������
        // ['years' => '', 'months' => '', 'days' => '']
        $this->arrDate = ['years' => $this->toYears(), 'months' => $this->toMonths(), 'days' => $this->toDays()];
        return (string) $this->arrDate;
    }
}  