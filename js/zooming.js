// can zoom 75 <= current <= 110
window.addEventListener('wheel', function (e) {
    const zoomLevel = Math.round(window.devicePixelRatio * 100);
    console.log(zoomLevel);
    if (e.ctrlKey) {
        if (e.deltaY < 0 && zoomLevel > 100) { // up
            e.preventDefault();
        }
        else if (e.deltaY > 0 && zoomLevel < 80) { // down
            e.preventDefault();
        }
    }
}, { passive: false });
window.addEventListener('keydown', function (e) {
    const zoomLevel = Math.round(window.devicePixelRatio * 100);
    if (e.ctrlKey || e.metaKey) {
        if ((e.key === '+' || e.key === '=') && zoomLevel > 100) {
            e.preventDefault();
        }
        else if ((e.key === '-') && zoomLevel < 80) {
            e.preventDefault();
        }
    }
});