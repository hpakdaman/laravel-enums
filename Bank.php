<?php
/**
 * Created by PhpStorm.
 * User: iraitc
 * Date: 4/25/2016
 * Time: 08:35 PM
 */

namespace App\Enums;

use App\Larabookir\Enum as BaseEnum;
use Larabookir\Gateway\Enum;

class Bank extends BaseEnum
{
    const MELLAT = 'MELLAT';
    const MELLI = 'MELLI';
    const PASARGAD = 'PASARGAD';
    const PARSIAN = 'PARSIAN';
    const SEPAH = 'SEPAH';
    const MASKAN = 'MASKAN';
    const TEJARAT = 'TEJARAT';
    const REFAH = 'REFAH';
    const SADERAT = 'SADERAT';
    const KESHAVARZI = 'KESHAVARZI';
    const SAMAN = 'SAMAN';
    const EGHTESADNOVIN = 'EGHTESADNOVIN';
    const TOSESADERAT = 'TOSESADERAT';
    const SANATMADAN = 'SANATMADAN';
    const TAAVON = 'TAAVON';
    const KARAFARIN = 'KARAFARIN';
    const SARMAYEH = 'SARMAYEH';
    const SHAHR = 'SHAHR';
    const AYANDEH = 'AYANDEH';
    const SINA = 'SINA';
    const HEKMAT = 'HEKMAT';
    const DAY = 'DAY';
    const ANSAR = 'ANSAR';
    const POSTBANK = 'POSTBANK';
    const GARDESHGARI = 'GARDESHGARI';
    const IRANZAMIN = 'IRANZAMIN';
    const GHAVAMIN = 'GHAVAMIN';
    const KHAVARMIANEH = 'KHAVARMIANEH';
    const GHARZOLHASANEH = 'GHARZOLHASANEH'; // no icon
    const RESALAT = 'RESALAT';
    const TOSE = 'TOSE';
    const KOWSAR = 'KOWSAR';
    const ASKARIYEH = 'ASKARIYEH';
    const NOOR = 'NOOR';
    const ARMAN = 'ARMAN'; // no icon
    const SAMEN = 'SAMEN';
    const SAMENONHOJAJ = 'SAMENONHOJAJ'; // no icon
    const MEHREGHTESAD = 'MEHREGHTESAD';
    const MEHRIRAN = 'MEHRIRAN';
    const TAT = 'TAT'; // no icon
    const MARKAZI = 'MARKAZI';


    protected static function translations()
    {
        return [
            static::MELLAT         => 'ملت',
            static::MELLI          => 'ملی',
            static::PASARGAD       => 'پاسارگاد',
            static::PARSIAN        => 'پارسیان',
            static::SEPAH          => 'سپه',
            static::MASKAN         => 'مسکن',
            static::TEJARAT        => 'تجارت',
            static::REFAH          => 'رفاه کارگران',
            static::SADERAT        => 'صادرات',
            static::KESHAVARZI     => 'کشاورزی',
            static::SAMAN          => 'سامان',
            static::EGHTESADNOVIN  => 'اقتصاد نوین',
            static::POSTBANK       => 'شرکت دولتی پست بانک',
            static::TOSESADERAT    => 'توسعه صادرات ایران',
            static::SANATMADAN     => 'صنعت و معدن',
            static::TAAVON         => 'توسعه تعاون',
            static::KARAFARIN      => 'کارآفرین',
            static::SARMAYEH       => 'سرمایه',
            static::SINA           => 'سینا',
            static::SHAHR          => 'شهر',
            static::DAY            => 'دی',
            static::ANSAR          => 'انصار',
            static::HEKMAT         => 'حکمت ایرانیان',
            static::AYANDEH        => 'آینده',
            static::GARDESHGARI    => 'گردشگری',
            static::MEHREGHTESAD   => 'مهر اقتصاد',
            static::MEHRIRAN       => 'مهر ایران',
            static::IRANZAMIN      => 'ایران زمین',
            static::GHAVAMIN       => 'قوامین',
            static::KHAVARMIANEH   => 'خاورمیانه',
            static::GHARZOLHASANEH => 'قرض الحسنه ایران',
            static::RESALAT        => 'قرض الحسنه رسالت',
            static::TOSE           => 'موسسه اعتباری توسعه',
            static::KOWSAR         => 'موسسه اعتباری کوثر',
            static::ASKARIYEH      => 'موسسه اعتباری عسکریه',
            static::NOOR           => 'موسسه اعتباری نور',
            static::ARMAN          => 'موسسه اعتباری آرمان',
            static::SAMEN          => 'موسسه اعتباری ثامن',
            static::SAMENONHOJAJ   => 'موسسه اعتباری ثامن الحجج',
            static::TAT            => 'بانک تات',
            static::TAT            => 'بانک تات',
            static::MARKAZI        => 'بانک مرکزی',
        ];
    }

    static function findByCard($cardNumber)
    {
        $bin = substr(preg_replace('/[^\d]/', null, $cardNumber), 0, 6);
        return self::findByBin($bin);
    }

    /**
     * All bank Bins
     * @return array
     */
    static function getBins()
    {
        return [
            '207177' => static::TOSESADERAT, // بانک توسعه صادرات ایران
            '627648' => static::TOSESADERAT, // بانک توسعه صادرات ایران
            '502229' => static::PASARGAD, // بانک پاسارگاد
            '502806' => static::SHAHR, // بانک شهر
            '504706' => static::SHAHR, // بانک شهر
            '502908' => static::TAAVON, // بانک توسعه تعاون
            '502910' => static::KARAFARIN, // بانک کارآفرین
            '502938' => static::DAY, // بانک دی
            '505416' => static::GARDESHGARI, // بانک گردشگری
            '505785' => static::IRANZAMIN, // بانک ایران زمین
            '505801' => static::KOWSAR, // موسسه اعتباری کوثر
            '589210' => static::SEPAH, // بانک سپه
            '589463' => static::REFAH, // بانک رفاه کارگران
            '603769' => static::SADERAT, // بانک صادرات ایران
            '603770' => static::KESHAVARZI, // بانک کشاورزی
            '603799' => static::MELLI, // بانک ملی ایران
            '606373' => static::MEHRIRAN, // بانک قرض الحسنه مهر ایران
            '610433' => static::MELLAT, // بانک ملت
            '621986' => static::SAMAN, // بانک سامان
            '622106' => static::PARSIAN, // بانک پارسیان
            '627353' => static::TEJARAT, // بانک تجارت
            '627381' => static::ANSAR, // بانک انصار
            '627412' => static::EGHTESADNOVIN, // بانک اقتصاد نوین
            '627488' => static::KARAFARIN, // بانک کارآفرین
            '627760' => static::POSTBANK, // پست بانک ایران
            '627884' => static::PARSIAN, // بانک پارسیان
            '622108' => static::PARSIAN, // بانک پارسیان
            '639194' => static::PARSIAN, // بانک پارسیان
            '627961' => static::SANATMADAN, // بانک صنعت و معدن
            '628023' => static::MASKAN, // بانک مسکن
            '628157' => static::TOSE, // موسسه اعتباری توسعه
            '636795' => static::MARKAZI, // بانک مرکزی
            '636949' => static::HEKMAT, // بانک حکمت ایرانیان
            '639217' => static::KESHAVARZI, // بانک کشاورزی
            '639346' => static::SINA, // بانک سینا
            '639347' => static::PASARGAD, // بانک پاسارگاد
            '639370' => static::MEHREGHTESAD, // بانک مهر اقتصاد
            '639599' => static::GHAVAMIN, // بانک قوامین
            '639607' => static::SARMAYEH, // بانک سرمایه
            '991975' => static::MELLAT, // بانک ملت
            '636214' => static::AYANDEH, // بانک آینده
        ];
    }

    /**
     * All bank Icons
     * @return array
     */
    static function getIcons()
    {
        return [
            static::TOSESADERAT   => '/assets/images/bank-25x25/TOSESADERAT.png', // بانک توسعه صادرات ایران
            static::PASARGAD      => '/assets/images/bank-25x25/PASARGAD.png', // بانک پاسارگاد
            static::SHAHR         => '/assets/images/bank-25x25/SHAHR.png', // بانک شهر
            static::TAAVON        => '/assets/images/bank-25x25/TAAVON.png', // بانک توسعه تعاون
            static::KARAFARIN     => '/assets/images/bank-25x25/KARAFARIN.png', // بانک کارآفرین
            static::DAY           => '/assets/images/bank-25x25/DAY.png', // بانک دی
            static::GARDESHGARI   => '/assets/images/bank-25x25/GARDESHGARI.png', // بانک گردشگری
            static::IRANZAMIN     => '/assets/images/bank-25x25/IRANZAMIN.png', // بانک ایران زمین
            static::KOWSAR        => '/assets/images/bank-25x25/KOWSAR.png', // موسسه اعتباری کوثر
            static::SEPAH         => '/assets/images/bank-25x25/SEPAH.png', // بانک سپه
            static::REFAH         => '/assets/images/bank-25x25/REFAH.png', // بانک رفاه کارگران
            static::SADERAT       => '/assets/images/bank-25x25/SADERAT.png', // بانک صادرات ایران
            static::KESHAVARZI    => '/assets/images/bank-25x25/KESHAVARZI.png', // بانک کشاورزی
            static::MELLI         => '/assets/images/bank-25x25/MELLI.png', // بانک ملی ایران
            static::MEHRIRAN      => '/assets/images/bank-25x25/MEHRIRAN.png', // بانک قرض الحسنه مهر ایران
            static::MELLAT        => '/assets/images/bank-25x25/MELLAT.png', // بانک ملت
            static::SAMAN         => '/assets/images/bank-25x25/SAMAN.png', // بانک سامان
            static::PARSIAN       => '/assets/images/bank-25x25/PARSIAN.png', // بانک پارسیان
            static::TEJARAT       => '/assets/images/bank-25x25/TEJARAT.png', // بانک تجارت
            static::ANSAR         => '/assets/images/bank-25x25/ANSAR.png', // بانک انصار
            static::EGHTESADNOVIN => '/assets/images/bank-25x25/EGHTESADNOVIN.png', // بانک اقتصاد نوین
            static::KARAFARIN     => '/assets/images/bank-25x25/KARAFARIN.png', // بانک کارآفرین
            static::TOSESADERAT   => '/assets/images/bank-25x25/TOSESADERAT.png', // بانک توسعه صادرات ایران
            static::POSTBANK      => '/assets/images/bank-25x25/POSTBANK.png', // پست بانک ایران
            static::PARSIAN       => '/assets/images/bank-25x25/PARSIAN.png', // بانک پارسیان
            static::SANATMADAN    => '/assets/images/bank-25x25/SANATMADAN.png', // بانک صنعت و معدن
            static::MASKAN        => '/assets/images/bank-25x25/MASKAN.png', // بانک مسکن
            static::TOSE          => '/assets/images/bank-25x25/TOSE.png', // موسسه اعتباری توسعه
            static::MARKAZI       => '/assets/images/bank-25x25/MARKAZI.png', // بانک مرکزی
            static::HEKMAT        => '/assets/images/bank-25x25/HEKMAT.png', // بانک حکمت ایرانیان
            static::PARSIAN       => '/assets/images/bank-25x25/PARSIAN.png', // بانک پارسیان
            static::KESHAVARZI    => '/assets/images/bank-25x25/KESHAVARZI.png', // بانک کشاورزی
            static::SINA          => '/assets/images/bank-25x25/SINA.png', // بانک سینا
            static::PASARGAD      => '/assets/images/bank-25x25/PASARGAD.png', // بانک پاسارگاد
            static::MEHREGHTESAD  => '/assets/images/bank-25x25/MEHREGHTESAD.png', // بانک مهر اقتصاد
            static::GHAVAMIN      => '/assets/images/bank-25x25/GHAVAMIN.png', // بانک قوامین
            static::SARMAYEH      => '/assets/images/bank-25x25/SARMAYEH.png', // بانک سرمایه
            static::MELLAT        => '/assets/images/bank-25x25/MELLAT.png', // بانک ملت
            static::AYANDEH       => '/assets/images/bank-25x25/AYANDEH.png', // بانک آینده
        ];
    }

    static function getFullInfo()
    {
        $bins = array_flip(static::getBins());
        $icons = static::getIcons();
        return collect(static::getLabels())->map(function ($name, $key) use ($bins, $icons) {
            return [
                'name' => $name,
                'bin'  => isset($bins[ $key ]) ? $bins[ $key ] : null,
                'icon' => isset($icons[ $key ]) ? $icons[ $key ] : null,
            ];
        });
    }


    static function findByBin($bin)
    {
        $data = static::getBins();
        if (isset($data[ $bin ]))
            return $data[ $bin ];
    }

}