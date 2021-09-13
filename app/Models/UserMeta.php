<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Accessors\UserMetaAccessor;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserMeta extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes,UserMetaAccessor;

    protected $table = 'user_meta';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [ 'user_id', 'company_name','company_uid', 'company_id',  'position', 'found_year', 'pan_no', 'networth', 'company_services', 'gst_no', 'work_grade', 'location', 'working_area', 'user_type', 'desc', 'street_address', 'city', 'state', 'country', 'zip_code', 'mobile_no', 'alt_contact_no', 'profile', 'ref_code', 'role', 'verification', 'agree_terms', 'status'];
    
    protected $appends = ['action','status','status_class'];

    ## get users data
    public function fn_user() {
        return $this->belongsTo('App\Models\User','user_id');
    }

    ## Profile and images
    public function fn_files() {
        return $this->belongsTo('App\Models\User','user_id');
    }

    
}
