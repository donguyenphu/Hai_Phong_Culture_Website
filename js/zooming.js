// can zoom 80 <= current <= 100
window.addEventListener('wheel', function (e) {
    const zoomLevel = Math.round(window.devicePixelRatio * 100);
    console.log(zoomLevel);
    if (e.ctrlKey) {
        e.preventDefault();
    }
}, { passive: false });
window.addEventListener('keydown', function (e) {
    const zoomLevel = Math.round(window.devicePixelRatio * 100);
    if ((e.ctrlKey || e.metaKey) && (e.key === '+' || e.key === '=' || e.key === '0' || e.key === '-')) {
        e.preventDefault();
    }
});