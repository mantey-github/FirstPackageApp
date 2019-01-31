<?php
/**
 * Created by PhpStorm.
 * User: mantey
 * Date: 31/01/2019
 * Time: 3:40 PM
 */

namespace MyVendor\contactform\Models;

use Illuminate\Database\Eloquent\Model;
class ContactForm extends Model
{
    protected $guarded = [];
    protected $table = 'contact';
}