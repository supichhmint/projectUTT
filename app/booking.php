<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class booking extends Model
{
    protected $table ="booking";
    public $timestamps = true;
    protected $primarykey ='id';
    protected $fillable =[
      'id','number_adults','number_children','number_booking','total_cost','booking_time','	booking_status','tripround_id'
    ];
    public function trips(){
      return $this->belongsTo('App\tripround','tripround_id');
  }
}