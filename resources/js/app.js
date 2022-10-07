require('./bootstrap');
import Alpine from 'alpinejs';
import waitForImages from './clain';
window.Alpine = Alpine;
window.waitForImages = waitForImages;


Alpine.start();
window.waitForImages();
