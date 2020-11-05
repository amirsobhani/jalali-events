<?php
namespace JalaliEvents;

use Carbon\CarbonPeriod;
use Morilog\Jalali\CalendarUtils;

class DateEvent
{
    protected $event;

    public function __construct()
    {
        $this->event = new Event();
    }

    public static function day($day, $type = 'gregorian', $holiday_status = false)
    {
        $data = [];

        if ($type == 'gregorian') {
            list($year, $month, $new_day) = explode('-', $day);
            $day = $year.'-'.$month.'-'.$new_day;

            $data = (new self())->event->getEvents($day);

        } elseif ($type == 'jalali') {
            list($jyear, $jmonth, $jday) = explode('-', $day);
            list($year, $month, $new_day) = CalendarUtils::toGregorian($jyear, $jmonth, $jday);

            $day = $year.'-'.$month.'-'.$new_day;

            $data = (new self())->event->getEvents($day);

        } else {
            return 'type is not valid!';
        }

        return $data;
    }

    public static function startEndDate($start_date, $end_date, $type = 'gregorian', $holiday_status = false)
    {
        $data = [];

        if ($type == 'gregorian') {
            try {
                $time_period = CarbonPeriod::create($start_date, $end_date)->toArray();
            } catch (\Exception $exception) {
                die($exception);
            }

        } elseif ($type == 'jalali') {
            list($jyear, $jmonth, $jday) = explode('-', $start_date);
            list($start_year, $start_month, $start_day) = CalendarUtils::toGregorian($jyear, $jmonth, $jday);
            $start_date = $start_year.'-'.$start_month.'-'.$start_day;

            list($jyear, $jmonth, $jday) = explode('-', $end_date);
            list($end_year, $end_month, $end_day) = CalendarUtils::toGregorian($jyear, $jmonth, $jday);
            $end_date = $end_year.'-'.$end_month.'-'.$end_day;


            $time_period = CarbonPeriod::create($start_date, $end_date)->toArray();
        } else {
            return 'type is not valid!';
        }

        foreach ($time_period as $day) {
            $data[] = (new self())->event->getEvents($day);
        }

        return $data;

    }
}
