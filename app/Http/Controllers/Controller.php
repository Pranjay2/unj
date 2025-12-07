<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $contentPage = [
        'faq' => 'FAQ',
        'team' => 'Team',
        'company' => 'Company',
    ];

    public $contentType = [
        'title' => 'Title',
        'description' => 'Description',
        'info' => 'Info',
        'about' => 'About',
        'vision' => 'Vision',
        'files' => 'Files'
    ];

    public $categoryBlog = [
        'ilmu_ukur_tanah' => 'Ilmu Ukur Tanah',
        'praktik_plumbing' => 'Praktik Plumbing',
        'praktik_batu_beton' => 'Praktik Batu Beton',
        'praktik_mekanika_tanah' => 'Praktik Mekanika Tanah',
        'praktik_uji_bahan' => 'Praktik Uji bahan'
    ];
}
