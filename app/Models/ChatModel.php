<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model
{
    protected $table      = 'chat';
    protected $primaryKey = 'id';
    
    protected $useAutoIncrement = true;
    
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = ['category_id', 'name', 'content', 'createdAt'];
    
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'createdAt';
    
    // Validation
    protected $validationRules      = [
        'category_id' => 'required|integer',
        'name'        => 'required|min_length[2]|max_length[100]',
        'content'     => 'required|min_length[1]'
    ];
    
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    
    /**
     * Get chat messages with optional category filter
     *
     * @param int|null $categoryId
     * @param int $limit
     * @return array
     */
    public function getMessages($categoryId = null, $limit = 50)
    {
        $this->orderBy('createdAt', 'DESC');
        $this->limit($limit);
        
        if ($categoryId !== null && $categoryId > 0) {
            $this->where('category_id', $categoryId);
        }
        
        $messages = $this->findAll();
        
        // Reverse to show oldest messages first
        return array_reverse($messages);
    }
}