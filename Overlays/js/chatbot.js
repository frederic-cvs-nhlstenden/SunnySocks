document.addEventListener('DOMContentLoaded', function() 
{
    const chatbot = document.getElementById('chatbot');
    const chatIcon = document.getElementById('chat-icon');
    const closeBtn = document.getElementById('close-btn');

    
    chatIcon.addEventListener('click', function() 
    {
        chatbot.style.display = 'block';
    });

    
    closeBtn.addEventListener('click', function()
    {
        chatbot.style.display = 'none';
    });
});