<?php

namespace Faker\Provider\bn_BD;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{fullNames}}',
        '{{companyName}} {{companyType}}',
        '{{fullNames}}',
    ];

    protected static $fullNames = [
        'ওয়াল্টন ইলেকট্রনিক্স', 'ভিশন ইলেকট্রনিক্স','আর এফ এল প্লাস্টিক'
    ];

    protected static $names = [
        'বাংলাদেশ', 'আর কে', 'কে এস এম', 'বসুন্ধরা','আকিজ'
    ];

    protected static $types = [
        'সিমেন্ট', 'স্টিল', 'ঢেউটিন','ইলেকট্রনিক্স','প্লাস্টিক','গ্রুপ'
    ];

    protected static $companySuffix = ['লিমিটেড', 'অব ইন্ডাস্ট্রি'];

    public static function companyType()
    {
        return static::randomElement(['সিমেন্ট', 'স্টিল', 'ঢেউটিন','ইলেকট্রনিক্স','প্লাস্টিক','চা']);
    }

    public static function companyName()
    {
        return static::randomElement(static::$names);
    }
}
