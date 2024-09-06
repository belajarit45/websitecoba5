function toggleUserMenu() {
    var userMenu = document.getElementById('user-menu');
    userMenu.style.display = userMenu.style.display === 'none' ? 'block' : 'none';
}

function searchArticle() {
    var query = document.getElementById('search').value;
    if (query) {
        window.location.href = 'search_results.html?query=' + encodeURIComponent(query);
    } else {
        alert('Masukkan kata kunci pencarian.');
    }
}

// Additional scripts for dynamic content and headline slider
