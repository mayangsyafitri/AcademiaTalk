<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'category';
    protected $primaryKey = 'id';
    
    protected $useAutoIncrement = true;
    
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = ['name', 'createdAt'];
    
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'createdAt';
    
    // Validation
    protected $validationRules      = [
        'name' => 'required|min_length[2]|max_length[100]'
    ];
    
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    
    /**
     * Get all categories
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->findAll();
    }
    
    /**
     * Get category ID by name
     * 
     * @param string $name
     * @return int|null
     */
    public function getCategoryIdByName($name)
    {
        $category = $this->where('name', $name)->first();
        
        if ($category) {
            return $category['id'];
        }
        
        return null;
    }
}