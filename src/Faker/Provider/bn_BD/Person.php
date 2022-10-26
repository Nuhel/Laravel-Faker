<?php

namespace Faker\Provider\bn_BD;

class Person extends \Faker\Provider\Person
{

    protected static $titleFormat = [
        '{{titleMaleMuslim}}',
        '{{titleFemaleMuslim}}',
        '{{titleMaleHindu}}',
        '{{titleFemaleHindu}}',
    ];

    protected static $firstNameFormat = [
        '{{firstNameMaleMuslim}}',
        '{{firstNameFemaleMuslim}}',
        '{{firstNameMaleHindu}}',
        '{{firstNameFemaleHindu}}',
    ];

    protected static $maleNameFormats = [
        '{{firstNameMaleMuslim}} {{lastNameMaleMuslim}}',
        '{{firstNameMaleMuslim}} {{lastNameMaleMuslim}}',
        '{{firstNameMaleHindu}} {{lastNameMaleHindu}}',

        '{{titleMaleMuslim}} {{firstNameMaleMuslim}} {{lastNameMaleMuslim}}',
        '{{titleMaleMuslim}} {{firstNameMaleMuslim}} {{lastNameCommonMuslim}}',
        '{{titleMaleHindu}} {{firstNameMaleHindu}} {{lastNameMaleHindu}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemaleMuslim}} {{lastNameFemaleMuslim}}',
        '{{firstNameFemaleMuslim}} {{lastNameFemaleMuslim}}',
        '{{firstNameFemaleHindu}} {{lastNameFemaleHindu}}',

        '{{titleFemaleMuslim}} {{firstNameFemaleMuslim}} {{lastNameFemaleMuslim}}',
        '{{titleFemaleMuslim}} {{firstNameFemaleMuslim}} {{lastNameCommonMuslim}}',
        '{{titleFemaleHindu}} {{firstNameFemaleHindu}} {{lastNameFemaleHindu}}',
    ];

    protected static $titleMaleMuslim = ['মি.', 'মোহাম্মদ', 'জনাব'];
    protected static $firstNameMaleMuslim = ['আরিব', 'অনন্ত', 'আব্দুল্লাহ', 'আহসান', 'ইমরুল', 'করিম', 'জলিল', 'বরকত', 'মাসনুন', 'রহিম', 'রিফাত', 'আরাফাত', 'হাসনাত', 'হাসান', 'মাহির', 'রিয়ান', 'রাজীব', 'রিয়াদ', 'ফাহমিদ'];
    protected static $lastNameMaleMuslim = ['আলী', 'মোল্লা', 'ইসলাম', 'মিয়া'];


    protected static $titleFemaleMuslim = ['মিসেস.', 'মিস.', 'মোছা:'];
    protected static $firstNameFemaleMuslim = ['অহনা', 'জারিন', 'জেরিন', 'ফারহানা', 'মাহজাবিন', 'মেহনাজ', 'লাবনী', 'সাবরিন', 'সাবরিনা', 'হাসিন', 'মিতু', 'মনিরা', 'ঈশা', 'ঈশিতা', 'ফারজানা', 'কলি', 'শিবলী', 'আনিকা'];
    protected static $lastNameFemaleMuslim = ['তাসনীম', 'তাবাসসুম', 'বেগম', 'আক্তার'];

    protected static $lastNameCommonMuslim = ['চৌধুরী', 'তালুকদার', 'খান', 'শেখ', 'শিকদার'];



    protected static $titleMaleHindu = ['মি.', 'জনাব'];
    protected static $firstNameMaleHindu = ['দ্বীপু', 'বাপ্পা', 'সাগর', 'পার্থ', 'দিলীপ', 'কৃষ্ণ', 'রাজ'];
    protected static $lastNameMaleHindu = ['পাল', 'নাথ', 'কুমার'];

    protected static $titleFemaleHindu = ['মিসেস.', 'মিস.'];
    protected static $firstNameFemaleHindu = ['রানী', 'জুঁই', 'মিহিকা', 'অনামিকা', 'রুমি', 'আলিয়া', 'কারিনা'];
    protected static $lastNameFemaleHindu = ['সেন', 'ভাট', 'দেবী'];

    protected static $lastNameCommonHindu = ['চক্রবর্তী', 'তালুকদার', 'চৌধুরী', 'দেবনাথ', 'শিকদার', 'দাশ', 'বড়ুয়া', 'কাপুর'];



    /**
     * @return string
     */
    public static function firstNameMale()
    {
        return static::randomElement(array_merge(static::$firstNameMaleMuslim,static::$firstNameMaleHindu));
    }

    /**
     * @return string
     */
    public static function firstNameFemale()
    {
        return static::randomElement(array_merge(static::$firstNameFemaleMuslim,static::$firstNameFemaleHindu));
    }

    /**
     * @return string
     */
    public function lastName()
    {
        return static::randomElement(array_merge(static::$firstNameMaleMuslim,static::$firstNameFemaleMuslim,static::$firstNameMaleHindu,static::$firstNameFemaleHindu));
    }


    /**
     * @return string
     */
    public static function titleMale()
    {
        return static::randomElement(array_merge(static::$titleMaleMuslim,static::$titleMaleHindu));
    }

    /**
     * @return string
     */
    public static function titleFemale()
    {
        return static::randomElement(array_merge(static::$titleFemaleMuslim,static::$titleFemaleHindu));
    }
}
