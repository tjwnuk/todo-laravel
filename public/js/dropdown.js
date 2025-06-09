document.addEventListener('DOMContentLoaded', function () {
    const button = document.querySelector('.menu-button');
    const dropdown = document.getElementById('menuDropdown');

    button.addEventListener('click', function () {
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener('click', function (e) {
        if (!button.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.style.display = 'none';
        }
    });
});