window.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');
    console.log('Listening for .SendMessage and App\\Events\\SendMessage events on chat channel...');
    const chatLog = document.getElementById('chat-log');
    function appendMessage(message, sender = 'User') {
        if (chatLog) {
            const bubble = document.createElement('div');
            bubble.className = 'max-w-xs bg-blue-500 text-white rounded-lg px-4 py-2 my-2 shadow-md self-end';
            bubble.innerHTML = `<span class='font-semibold'>${sender}:</span> ${message}`;
            chatLog.appendChild(bubble);
            chatLog.scrollTop = chatLog.scrollHeight;
        }
    }
    window.Echo.channel('chat')
        .listen('.SendMessage', (e) => {
            console.log('Received .SendMessage event:', e);
            if (e.message) appendMessage(e.message, e.user?.name ?? 'User');
        })
        .listen('App\\Events\\SendMessage', (e) => {
            console.log('Received App\\Events\\SendMessage event:', e);
            if (e.message) appendMessage(e.message, e.user?.name ?? 'User');
        })
        .subscribed(() => {
            console.log('Successfully subscribed to chat channel');
        })
        .error((error) => {
            console.error('Subscription error:', error);
        });
});
