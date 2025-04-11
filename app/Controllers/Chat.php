<?php

namespace App\Controllers;

use App\Models\ChatModel;
use App\Models\CategoryModel;
use CodeIgniter\API\ResponseTrait;

class Chat extends BaseController
{
    use ResponseTrait;
    
    protected $chatModel;
    protected $categoryModel;
    
    public function __construct()
    {
        $this->chatModel = new ChatModel();
        $this->categoryModel = new CategoryModel();
    }
    
    /**
     * Get chat messages with optional category filter
     */
    public function getMessages()
    {
        $categoryId = $this->request->getGet('category_id') ?? null;
        
        $messages = $this->chatModel->getMessages($categoryId);
        
        return $this->respond([
            'success' => true,
            'messages' => $messages
        ]);
    }
    
    /**
     * Add a new chat message
     */
    public function addMessage()
    {
        $data = [
            'category_id' => $this->request->getPost('category_id') ?? 1, // Default to first category if not provided
            'name' => $this->request->getPost('name'),
            'content' => $this->request->getPost('content'),
            'createdAt' => date('Y-m-d H:i:s')
        ];
        
        if ($this->chatModel->insert($data)) {
            // Get the new message with its ID
            $messageId = $this->chatModel->getInsertID();
            $message = $this->chatModel->find($messageId);
            
            return $this->respond([
                'success' => true,
                'message' => $message
            ]);
        } else {
            return $this->respond([
                'success' => false,
                'errors' => $this->chatModel->errors()
            ], 400);
        }
    }
    
    /**
     * Get all categories
     */
    public function getCategories()
    {
        $categories = $this->categoryModel->getCategories();
        
        return $this->respond([
            'success' => true,
            'categories' => $categories
        ]);
    }
}