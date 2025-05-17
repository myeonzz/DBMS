function showNotification(message, type = 'success') {
    const notification = document.createElement('div');

    if (message === "Record Deleted") {
        type = 'error'; 
    }
    if (message === "Record Updated") {
        type = 'warning'; 
    }
    notification.className = `notification ${type}`;
    notification.textContent = message;
    document.body.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, 3000);
}
