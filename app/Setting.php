<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  protected $fillable = ['id',
                        'site_name',
                        'catchphrase_line1',
                        'catchphrase_line2', 
                        'address_line1',
                        'address_line2',
                        'town',
                        'county',
                        'code',
                        'icon1',
                        'url_icon1',
                        'icon2',
                        'url_icon2',
                        'icon3',
                        'url_icon3',
                        'icon4',
                        'url_icon4',
                        'icon5',
                        'url_icon5',
                        'logo_image'];
}
