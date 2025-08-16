window.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');
    console.log('Listening for .SendMessage and App\\Events\\SendMessage events on chat channel...');
    window.Echo.channel('chat')
        .listen('.SendMessage', (e) => {
            console.log('Received .SendMessage event:', e);
            const chatLog = document.getElementById('chat-log');
            if (chatLog) {
                chatLog.innerHTML += `<div>.SendMessage: ${JSON.stringify(e)}</div>`;
            }
        })
        .listen('App\\Events\\SendMessage', (e) => {
            console.log('Received App\\Events\\SendMessage event:', e);
            const chatLog = document.getElementById('chat-log');
            if (chatLog) {
                chatLog.innerHTML += `<div>App\\Events\\SendMessage: ${JSON.stringify(e)}</div>`;
            }
        })
        .subscribed(() => {
            console.log('Successfully subscribed to chat channel');
        })
        .error((error) => {
            console.error('Subscription error:', error);
        });
});
