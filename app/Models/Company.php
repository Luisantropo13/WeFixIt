<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Company extends Model
{
    use HasFactory;

    public static function deleteCompany($id){
        DB::delete("DELETE FROM companies WHERE companyId = '$id'");
    }

    public static function modifyCompany($id){
        DB::select("SELECT FROM companies WHERE companyId = '$id'");
    }
    
}
