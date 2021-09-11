<?php
namespace App\Accessors;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


Trait UserMetaAccessor
{

	## action button
	Public function getActionAttribute(){
		return  "<a href='javascript:void(0)' id='click_edit_action'><i class='fa fa-edit text-dark fa-fw fa-md' aria-hidden='true'></i></a><a href='javascript:void(0)'  id='click_view_action'><i class='fa fa-eye text-dark fa-fw fa-md' aria-hidden='true'></i></a><a  id='click_delete_action'><i class='fa fa-trash text-danger fa-fw fa-md' aria-hidden='true'></i></a>";
	}

	## status for right user
	Public function getStatusAttribute($value){
		switch ($this->attributes['status']) {
			case 0:
				return 'Active';
			case 1:
				return 'Pending';
			case 2:
				return 'Closed';
			case 3:
				return 'Blocked';
		}
	}

	## class for status background color
	public function getStatusClassAttribute($value){
		switch ($this->attributes['status']) {
			case 0:
				return 'bg-success';
			case 1:
				return 'bg-warning';
			case 2:
				return 'bg-default';
			case 3:
				return 'bg-danger';
		}
	}

	public function getCreatedAtAttribute($value) {
        return  Carbon::parse($this->attributes['created_at'])->format('m-d-y');
    }

}