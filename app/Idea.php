<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Idea extends Model
{
    /**
     * ������� ������������� ��������.
     *
     * @var array
     */
    protected $fillable = ['name','mail','phone','idea', 'statuses'];



    protected $casts = [
        'user_id' => 'int',
    ];
    /**
     * �������� ������������ - ��������� ������ ������
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quest()
    {
        return$this->belongsTo(User::class);
    }

}
$user = App\User::find(1);

foreach ($user->ideas as $idea) {

}
