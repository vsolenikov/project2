<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Idea extends Model
{
    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name','mail','phone','idea'];


    protected $casts = [
        'user_id' => 'int',
    ];
    /**
     * Получить пользователя - владельца данной задачи
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
$user = App\User::find(1);

foreach ($user->ideas as $idea) {
   // echo $task->name;
}
