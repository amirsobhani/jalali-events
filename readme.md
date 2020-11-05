**اطلاعات روزهای شمسی / جلالی**

##نصب 

**برای نصب از دستور زیر استفاده کنید**

```
$ composer require jalali-events/event
```

## نحوه استفاده 

**اطلاعات یک روز**
<hr>
<p>ارسال تاریخ میلادی</p>

```php
use JalaliEvents\DateEvent;

$date = '2020-11-03';

return DateEvent::day($date);
```
<hr>
<p>ارسال تاریخ شمسی</p>

```php
use JalaliEvents\DateEvent;

$date = '1399-08-13';

return DateEvent::day($date, 'jalali');
```

**خروجی به شکل زیر می باشد**

```json
   "jdate": "1399-8-13",
   "date": "2020-11-03",
   "is_holiday": true,
   "events": [
       {
           "description": "روز دانش آموز",
           "additional_description": "",
           "is_religious": false
       },
       {
           "description": "میلاد رسول اکرم و امام جعفر صادق علیه السلام",
           "additional_description": "١٧ ربيع الاول",
           "is_religious": true
       },
       {
           "description": "اسپوتنیک ۲، نخستین فضاپیمایی که یک موجود زنده را به فضا برد توسط اتحاد جماهیر شوروی پرتاب شد.",
           "additional_description": "3 November",
           "is_religious": false
       },
       {
           "description": "زادروز آمارتیا سن برندهٔ هندی جایزه نوبل اقتصاد",
           "additional_description": "3 November",
           "is_religious": false
       },
       {
           "description": "الیمپ دگوژ نمایشنامه‌ نویس، فعال سیاسی و طرفدار الغای برده‌داری از نخستین فمنیست‌های اعدام شده است",
           "additional_description": "3 November",
           "is_religious": false
       }
   ]
```
<hr>
<br>

**گرفتن اطلاعات چند روز براساس بازه ی زمانی**
<hr>
<p>ارسال تاریخ میلادی</p>

```php
use JalaliEvents\DateEvent;

$start_date = '2020-11-03';
$end_date = '2020-11-04';

return DateEvent::startEndDate($start_date, $end_date);
```
<hr>
<p>ارسال تاریخ شمسی</p>

```php
use JalaliEvents\DateEvent;

$start_date = '1399-08-13';
$end_date = '1399-08-14';

return DateEvent::startEndDate($start_date, $end_date, 'jalali');
```

**خروجی به شکل زیر می باشد**

```json
{
        "jdate": "1399-8-13",
        "date": "2020-11-03",
        "is_holiday": true,
        "events": [
            {
                "description": "روز دانش آموز",
                "additional_description": "",
                "is_religious": false
            },
            {
                "description": "میلاد رسول اکرم و امام جعفر صادق علیه السلام",
                "additional_description": "١٧ ربيع الاول",
                "is_religious": true
            },
            {
                "description": "اسپوتنیک ۲، نخستین فضاپیمایی که یک موجود زنده را به فضا برد توسط اتحاد جماهیر شوروی پرتاب شد.",
                "additional_description": "3 November",
                "is_religious": false
            },
            {
                "description": "زادروز آمارتیا سن برندهٔ هندی جایزه نوبل اقتصاد",
                "additional_description": "3 November",
                "is_religious": false
            },
            {
                "description": "الیمپ دگوژ نمایشنامه‌ نویس، فعال سیاسی و طرفدار الغای برده‌داری از نخستین فمنیست‌های اعدام شده است",
                "additional_description": "3 November",
                "is_religious": false
            }
        ]
    },
    {
        "jdate": "1399-8-14",
        "date": "2020-11-04",
        "is_holiday": false,
        "events": [
            {
                "description": "روز فرهنگ عمومی",
                "additional_description": "",
                "is_religious": false
            },
            {
                "description": "تولد فردریک بانتینگ کاشف انسولین",
                "additional_description": "4 November",
                "is_religious": false
            },
            {
                "description": "درگذشت نورمن فاستر رمزی ، فیزیکدان آمریکایی، برندهٔ جایزه نوبل فیزیک سال ۱۹۸۹ به همراه هانس جرج دهملت و ولفگانگ پل",
                "additional_description": "4 November",
                "is_religious": false
            },
            {
                "description": "درگذشت مایکل کرایتون نویسنده، کارگردان، فیلم نامه نویس، پزشک و تهیه کننده تلویزیونی",
                "additional_description": "4 November",
                "is_religious": false
            },
            {
                "description": "زادروز محمدرضا اسحاقی گرجی، نوازنده و موسیقی‌دان مازندرانی",
                "additional_description": "",
                "is_religious": false
            }
        ]
    }
```

----
Thanks to [persiaoncalapi](https://persiancalapi.ir) that his codes are used in this package
