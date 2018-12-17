<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditPrintType extends Model
{
    // Protected table name
    protected $table = 'print_types';

    // Protected fillable or inserts
    protected $fillable = [
        'name'
    ];

    // Protected define order
    protected $sorted = [
        'name'
    ];

    // Protected guard
    protected $guarded = [
        'id', 
        'created_at', 
        'update_at'
    ];

    // Protected hidden fields
    protected $hidden = [
        'id', 
        'created_at', 
        'update_at'
    ];

    // Relationships
    public function auditUniversityDegreePrints()
    {
        return $this->hasMany(AuditUniversityDegreePrint::class);
    }
}
