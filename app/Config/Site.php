<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Site extends BaseConfig
{
    /**
     * Single Unified Company Configuration (CI3 $comp format)
     * Ab aapko 2 jagah define karne ki bilkul zaroorat nahi hai.
     * Sirf is EK jagah details change kijiye, pure project (Controller, Views, Header, Footer, Schema) me apply ho jayega!
     */
    public $comp = [
        'company3'      => 'Rina packers',
        'companydomain' => 'rinapackers.com',
        'phone'         => '+91 9282014800',
        'phonehtml'     => 'href="tel:+919282014800"',
        'phone1'         => '+91 8011076134',
        'phonehtml1'     => 'href="tel:+918011076134"',
        'mail'          => 'info@rinapackersmovers.com',
        'mailhtml'      => 'mailto:info@rinapackersmovers.com',
        'replyToMail'   => 'info@rinapackersmovers.com',
        'whatsapp'      => '919282014800',
        'whatsapphtml'  => 'https://wa.me/919282014800',
        'whatsapp1'      => '918011076134',
        'whatsapphtml1'  => 'https://wa.me/918011076134',
        'address'       => 'Fatasil Chariali, Guwahati, PIN Code: 781025, Assam, India',
        'address1'      => 'Fatasil Chariali, Guwahati',
        'address2'      => 'Guwahati, PIN Code: 781025, Assam, India',
        'addressRegion' => 'Guwahati',
        'postalCode'    => '781025',
        'companystate'  => 'Assam',
        'themeColor'    => '#14489cff',

        'experience'    => '20+',
        'startYear'     => '2006',

        // Schema / Rich Snippets (Google SEO)
        'sku'           => 'PM28957',
        'mpn'           => 'SPM28957',
        'ratingValue'   => '4.9',
        'ratingCount'   => '39850',
        'datePublished' => '2026-08-02',
        'reviewBody'    => 'Best Packing And Moving Company in India.',
        'reviewperson'  => 'Arshad Ali',

        'tagline'       => 'Safe, Fast & Insured Relocation Services Across India',
        'workingHours'  => 'Mon - Sat: 9:00 AM - 8:00 PM',
        'facebookhtml'  => '#',
        'twitterhtml'   => '#',
        'instagramhtml' => '#',
        'linkedinhtml'  => '#',
        'youtubehtml'   => '#',
    ];

    /**
     * Return exact $comp array
     */
    public function getComp(): array
    {
        return $this->comp;
    }

    /**
     * Dynamic getter: agar koi code $site->name ya $site->phone access kare
     * toh wo bhi isi $this->comp array se dynamically return ho jayega.
     */
    public function __get($key)
    {
        if ($key === 'name') {
            return $this->comp['company3'] ?? '';
        }
        if ($key === 'email') {
            return $this->comp['mail'] ?? '';
        }
        return $this->comp[$key] ?? null;
    }

    public function __isset($key)
    {
        if ($key === 'name') {
            return isset($this->comp['company3']);
        }
        if ($key === 'email') {
            return isset($this->comp['mail']);
        }
        return isset($this->comp[$key]);
    }
}
