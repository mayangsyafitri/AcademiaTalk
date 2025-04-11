<!DOCTYPE html>
<html lang="en">

<?=$this->include('/Component/head') ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?= $this->include('Component/navbar') ?>

        <!-- Page Header Start -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Discussion Forum</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('about'); ?>">About</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Discussion</li>
                        <li class="breadcrumb-item"><a href="<?= base_url('learning'); ?>">Learning</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('contact'); ?>">Contact</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

       <!-- Classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Diskusi Terbaru</h1>
            <p>Bergabunglah dalam diskusi terbaru dari berbagai topik menarik. Mulai percakapan atau tanggapi pendapat lainnya!</p>
        </div>
        
        <!-- Topic selector -->
        <div class="topic-selector text-center wow fadeInUp" data-wow-delay="0.2s">
            <?php foreach ($categories as $index => $category): ?>
                <button class="btn rounded-pill py-2 px-4 topic-btn <?= $index === 0 ? 'active' : '' ?>" data-category-id="<?= $category['id'] ?>"><?= $category['name'] ?></button>
            <?php endforeach; ?>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="chat-window">
                    <div class="chat-header">
                        <h5><i class="fa fa-comments me-2"></i> Forum Diskusi Akademik</h5>
                    </div>
                    <div class="chat-messages" id="chat-messages">
                        <!-- Messages will be loaded via AJAX -->
                    </div>
                    
                    <!-- Chat input form -->
                    <div class="chat-input">
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" id="name-input" class="form-control" placeholder="Masukkan nama Anda..." />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" id="message-input" class="form-control" placeholder="Ketik pesan Anda di sini..." />
                            </div>
                            <div class="col-auto">
                                <button id="send-button" class="btn btn-primary">Kirim <i class="fa fa-paper-plane ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Classes End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-4">AcademiaTalk</h4>
                        <p>Platform diskusi interaktif yang mendukung pertukaran ide dan pembelajaran berbasis komunitas. Bergabunglah dengan komunitas kami untuk berbagi pengetahuan dan wawasan!</p>
                        <div class="d-flex pt-3">
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a class="btn btn-link text-white-50" href="<?= base_url(); ?>">Home</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('about'); ?>">About Us</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('classes'); ?>">Discussions</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('contact'); ?>">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('faqs'); ?>">FAQs</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Jakarta, Indonesia</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 345 6789</p>
                        <p><i class="fa fa-envelope me-3"></i>info@academiatalk.com</p>
                        <p><i class="fa fa-clock me-3"></i>Mon-Fri: 9AM - 5PM</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">AcademiaTalk</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="<?= base_url('cookies') ?>">Cookies</a>
                                <a href="<?= base_url('help') ?>">Help</a>
                                <a href="<?= base_url('faqs') ?>">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js') ?>"></script>
    
    <!-- Chat Javascript -->
    <script>
    $(document).ready(function() {
        // Current selected category - initialize with first category
        let currentCategoryId = $(".topic-btn.active").data("category-id");
        
        // Load initial messages
        loadMessages(currentCategoryId);
        
        // Send message when button is clicked
        $("#send-button").click(function() {
            sendMessage();
        });
        
        // Send message when Enter key is pressed in message input
        $("#message-input").keypress(function(e) {
            if(e.which == 13) {
                sendMessage();
                return false;
            }
        });
        
        // Topic selection
        $(".topic-btn").click(function() {
            $(".topic-btn").removeClass("active");
            $(this).addClass("active");
            
            currentCategoryId = $(this).data("category-id");
            loadMessages(currentCategoryId);
        });
        
        // Function to load messages from the server
        function loadMessages(categoryId) {
            $.ajax({
                url: '<?= base_url('chat/getMessages') ?>',
                type: 'GET',
                data: { category_id: categoryId },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Clear existing messages
                        $("#chat-messages").empty();
                        
                        // Add new messages
                        $.each(response.messages, function(index, message) {
                            // Format the timestamp
                            const timestamp = new Date(message.createdAt);
                            const formattedTime = timestamp.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
                            
                            // Create message HTML
                            // If the user's name is stored in localStorage and matches this message's name, show as sent
                            // Otherwise show as received
                            const userName = localStorage.getItem('chat_user_name');
                            const messageType = (userName && userName === message.name) ? 'sent' : 'received';
                            
                            const messageHtml = `
                                <div class="message ${messageType}">
                                    <div class="message-content">
                                        <strong>${message.name}:</strong> ${message.content}
                                    </div>
                                    <div class="message-time">
                                        <span>${formattedTime}</span>
                                    </div>
                                </div>
                            `;
                            
                            $("#chat-messages").append(messageHtml);
                        });
                        
                        // Scroll to bottom of chat
                        scrollToBottom();
                    } else {
                        alert('Error loading messages');
                    }
                },
                error: function() {
                    alert('Error connecting to server');
                }
            });
        }
        
        // Function to send a message
        function sendMessage() {
            const nameInput = $("#name-input");
            const messageInput = $("#message-input");
            
            const name = nameInput.val().trim();
            const message = messageInput.val().trim();
            
            if (name === "") {
                alert("Please enter your name");
                nameInput.focus();
                return;
            }
            
            if (message === "") {
                return;
            }
            
            // Store name in localStorage for future use
            localStorage.setItem('chat_user_name', name);
            
            // Send message to server
            $.ajax({
                url: '<?= base_url('chat/addMessage') ?>',
                type: 'POST',
                data: {
                    name: name,
                    content: message,
                    category_id: currentCategoryId // Remove fallback to default category
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Add new message to chat
                        const message = response.message;
                        const timestamp = new Date(message.createdAt);
                        const formattedTime = timestamp.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
                        
                        const messageHtml = `
                            <div class="message sent">
                                <div class="message-content">
                                    <strong>${message.name}:</strong> ${message.content}
                                </div>
                                <div class="message-time">
                                    <span>${formattedTime}</span>
                                </div>
                            </div>
                        `;
                        
                        $("#chat-messages").append(messageHtml);
                        
                        // Clear input field
                        messageInput.val("");
                        
                        // Scroll to bottom of chat
                        scrollToBottom();
                    } else {
                        alert('Error sending message: ' + JSON.stringify(response.errors));
                    }
                },
                error: function() {
                    alert('Error connecting to server');
                }
            });
        }
        
        // Scroll to bottom of chat
        function scrollToBottom() {
            const chatMessages = document.getElementById("chat-messages");
            if(chatMessages) {
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        }
        
        // Auto-fill name from localStorage if available
        const savedName = localStorage.getItem('chat_user_name');
        if (savedName) {
            $("#name-input").val(savedName);
        }
        
        // Refresh messages periodically (every 30 seconds)
        setInterval(function() {
            loadMessages(currentCategoryId);
        }, 30000);
    });
    </script>
    
    <style>
    /* Chat styling */
    .chat-window {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .chat-header {
        background-color: #f8f9fa;
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }
    
    .chat-messages {
        height: 400px;
        overflow-y: auto;
        padding: 15px;
        background-color: #f9f9f9;
    }
    
    .chat-input {
        padding: 15px;
        background-color: #f8f9fa;
        border-top: 1px solid #ddd;
    }
    
    .chat-input input {
        border-radius: 20px;
        padding: 10px 15px;
    }
    
    .chat-input button {
        border-radius: 20px;
    }
    
    .message {
        margin-bottom: 15px;
        max-width: 80%;
    }
    
    .message-content {
        padding: 10px 15px;
        border-radius: 18px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    
    .message-time {
        font-size: 0.75rem;
        color: #777;
        margin-top: 5px;
    }
    
    .received {
        float: left;
        clear: both;
    }
    
    .received .message-content {
        background-color: #f1f0f0;
    }
    
    .sent {
        float: right;
        clear: both;
    }
    
    .sent .message-content {
        background-color: #dcf8c6;
    }
    
    .topic-btn {
        margin: 0 5px 10px;
        background-color: #f8f9fa;
        color: #333;
        border: 1px solid #ddd;
        transition: all 0.3s;
    }
    
    .topic-btn.active {
        background-color: #0d6efd;
        color: white;
        border-color: #0d6efd;
    }
    
    .topic-selector {
        margin-bottom: 25px;
    }
    </style>
</body>

</html>