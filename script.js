document.addEventListener('DOMContentLoaded', () => { 
    // --- Các biến chung --- 
    const filterTags = document.querySelectorAll('.filter-tag'); 
    const sections = document.querySelectorAll('.glass-card');

// --- Xử lý Card ---
function filterAndDisplayCards(selectedId) {
    sections.forEach(section => {
        if (selectedId === 'all' || section.getAttribute('id') === selectedId) {
            section.classList.remove('hidden');
        } else {
            section.classList.add('hidden');
        }
    });
}

// --- Sự kiện cho Tag lọc ---
filterTags.forEach(tag => {
    tag.addEventListener('click', () => {
        filterTags.forEach(t => t.classList.remove('active'));
        tag.classList.add('active');
        const filterId = tag.getAttribute('data-filter');
        filterAndDisplayCards(filterId);
    });
});

// --- Xử lý thông báo ---
function showNotification(message, imageUrl) {
    const notification = document.createElement('div');
    notification.className = 'notification';

    const renderNotification = () => {
        notification.innerHTML = `
            <div class="notification-content">
                <span class="close-x">×</span> 
                <p>${message}</p>
                ${imageUrl ? `<img src="${imageUrl}" class="notification-img" alt="Notification Image">` : ''}
                <div class="notification-buttons">
                    <button class="dismiss-btn">Đóng</button>
                    <button class="dismiss-24h-btn">Đóng 24h</button>
                </div>
            </div>
        `;
        document.body.insertAdjacentElement("afterbegin", notification);
        setTimeout(() => notification.classList.add('show'), 10);

        const closeNotification = () => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 300);
        };

        notification.querySelector('.close-x').addEventListener('click', closeNotification);
        notification.querySelector('.dismiss-btn').addEventListener('click', closeNotification);
        notification.querySelector('.dismiss-24h-btn').addEventListener('click', () => {
            closeNotification();
            localStorage.setItem('notificationDismissed', Date.now());
        });
    };

    if (imageUrl) {
        const img = new Image();
        img.src = imageUrl;
        img.onload = renderNotification;
    } else {
        renderNotification();
    }
}

// --- Thông báo khi tải trang ---
setTimeout(() => {
    showNotification("Welcome to Lion Oren Executor Hub! 🚀", "https://share.creavite.co/678c95de0ae0e4f686a66bb2.gif");
}, 1000);

// --- Hiệu ứng cuộn trang ---
window.addEventListener('scroll', () => {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const cardTop = card.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (cardTop < windowHeight * 0.85) {
            card.classList.add('card-visible');
        }
    });
});

// Hamburger Menu Toggle
const hamburger = document.getElementById("hamburger");
const sidebar = document.getElementById("sidebar");

if (hamburger) {
    hamburger.addEventListener("click", (e) => {
        e.stopPropagation();
        sidebar.classList.toggle("open");
    });
}

document.addEventListener("click", (e) => {
    if (sidebar && hamburger && !sidebar.contains(e.target) && !hamburger.contains(e.target)) {
        sidebar.classList.remove("open");
    }
});

// Initial load
loadScripts();

});