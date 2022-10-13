require('./bootstrap');
import Alpine from 'alpinejs';
window.Alpine = Alpine;
window.waitForImages=waitForImages;

Alpine.start();
window.waitForImages();
