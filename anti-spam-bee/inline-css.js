document.addEventListener('DOMContentLoaded', function() {
    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = 'header.wp-block-template-part { display: none; }';
    document.head.appendChild(style);
});
