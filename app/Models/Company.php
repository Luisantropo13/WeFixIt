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

    public static function getCompanyById($id){
        return DB::select("SELECT * FROM companies WHERE companyId = '$id'")[0];
    }

    public static function addCompany($name,$adress,$phone,$web,$description,$logo){
        DB::insert("INSERT INTO companies (companyName, companyAdress, companyPhone, companyWeb, companyDescription, companyLogo) 
                    VALUES ('$name', '$adress', '$phone', '$web', '$description', '$logo')");
    }

    public static function modifyCompany($id,$name,$adress,$phone,$web,$description,$logo){
        DB::update("UPDATE companies SET companyId='$id', companyName='$name', 
                                        companyAdress='$adress', companyPhone='$phone', 
                                        companyWeb='$web', companyDescription='$description', 
                                        companyLogo='$logo' 
                                    WHERE companyId='$id'");
    }
    
}
