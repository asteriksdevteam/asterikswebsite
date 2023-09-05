<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Menu;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      public function role()
    {
        return $this->belongsTo(Role::class ,'role_id','id')->withDefault();
        
    }
    public function permission()
    {
        return $this->belongsTo(Permission::class ,'role_id','id')->withDefault();
        
    }
    public function sectionCheck($value){
       $menu_slug = array();
        $sections = explode(",", $this->permission->menu_id);
        foreach($sections as $section){
        $menuName = Menu::where('id',$section)->first();
        array_push($menu_slug,@$menuName->slug);
        }
        if (in_array($value, $menu_slug)){
            return true;
        }else{
            return false;
        }
    }
}
