var tooltip = document.querySelectorAll('.infosTooltip');

document.addEventListener('mousemove', fn, false);

function fn(e) {
    for (var i=tooltip.length; i--;) {
        tooltip[i].style.left = e.pageX - 2400 + 'px';
        tooltip[i].style.top = e.pageY  + 'px';
    }
}