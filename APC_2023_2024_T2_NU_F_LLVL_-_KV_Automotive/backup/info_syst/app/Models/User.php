<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel as FilamentPanel;
use Filament\Tables\Columns\Layout\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;
use Jeffgreco13\FilamentBreezy\Traits\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use HasPanelShield;

    const ROLE_ADMIN = "ADMIN";
    const ROLE_STAFF = "STAFF";
    const ROLE_USER = "USER";

    const ROLE_DEFAULT = self::ROLE_USER;

    const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_STAFF => 'Staff',
        self::ROLE_USER => 'User'
    ];

    public function canAccessPanel(FilamentPanel $panel): bool
    {
        // Check if the user has the super_admin role or the panel_user role
        // Also, check if the user is admin, staff, or user
        return $this->hasRole('super_admin') ||
               $this->hasRole('user') ||
               $this->isAdmin() ||
               $this->isStaff() ||
               $this->isUser();
    }

    public function isAdmin() {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isStaff() {
       return $this->role === self::ROLE_STAFF;
    }
    public function isUser() : bool
    {
       return $this->role === self::ROLE_USER;
    }
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }





    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
