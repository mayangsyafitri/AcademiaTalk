<div class="chat-input py-3 px-4">
    <div class="name-input-container mb-3">
        <div class="input-group">
            <span class="input-group-text bg-primary text-white border-0">
                <i class="fa fa-user-circle"></i>
            </span>
            <input type="text" id="name-input" class="form-control border-0 shadow-sm ps-3" 
                   placeholder="Masukkan nama Anda..." />
        </div>
    </div>
    
    <div class="message-input-container">
        <div class="input-group">
            <input type="text" id="message-input" class="form-control border-0 shadow-sm rounded-pill pe-5 ps-3" 
                   placeholder="Ketik pesan Anda di sini..." />
            <button id="send-button" class="btn btn-primary rounded-circle position-absolute end-0 me-2" 
                    style="top: 50%; transform: translateY(-50%); width: 38px; height: 38px; z-index: 10;">
                <i class="fa fa-paper-plane"></i>
            </button>
        </div>
    </div>
</div>