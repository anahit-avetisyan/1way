<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        "fbLink",
        "fbName",
        "fbIcon",
        "instagramLink",
        "instagramName",
        "instagramIcon",
        "ViberLink",
        "ViberName",
        "ViberIcon",
        "WhatsAppLink",
        "WhatsAppName",
        "WhatsAppIcon",
        "copyright",
        "contactNameAM",
        "contactNameRU",
        "contactNameEN",
        "footerTextAM",
        "footerTextRU",
        "footerTextEN",
        "linkName",
        "link"];
}
