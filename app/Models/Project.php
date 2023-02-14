<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProjectReservation;
use App\Casts\Json;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'student_reservetion' => Json::class,
        'file_other' => Json::class,
    ];

    protected $appends = ['student_reservetion_list'];

    public function project_reservations(){
        return $this->hasMany(ProjectReservation::class);
    }

    public function project_reservation(){
        return $this->hasOne(ProjectReservation::class);
    }

    public function getStudentReservetionListAttribute(){
        $users = User::query()->find($this->student_reservetion);
        $created_by = $this->member->name;


        $list = [$created_by];
        foreach($users as $item){
            $list[] = $item->name;

        }
        return $list;

    }

    public function member(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function scopePublish($query)
    {
        return $query->where('status', 'publish');
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'approve_by', 'id');
    }

}