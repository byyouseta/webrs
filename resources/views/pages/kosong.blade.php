@extends('layouts.app-web')

@section('content')


<section >


</section>


<div class="chatbot-wrapper">


    <button class="chatbot-btn" onclick="toggleChat()">
        <i class="bi bi-chat-dots"></i>
    </button>

    <div class="chatbot-box" id="chatBox">
        <div class="chat-header">
            <span>Customer Service</span>
            <button onclick="toggleChat()">✕</button>
        </div>

        <div class="chat-body">
            <p>Halo 👋 Ada yang bisa kami bantu?</p>

            <a href="https://wa.me/628xxxx" target="_blank" class="chat-option">
                WhatsApp
            </a>

            <a href="#" class="chat-option">
                Chat Bot AI
            </a>
        </div>
    </div>

</div>

@endsection
