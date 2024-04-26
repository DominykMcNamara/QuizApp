<div
    x-data="{ darkMode: '{{ session('theme', 'light') }}' === 'dark', toggleTheme() { this.darkMode = !this.darkMode; document.documentElement.classList.toggle('dark', this.darkMode); @this.set('theme', this.darkMode ? 'dark' : 'light'); } }">
    <button @click="toggleTheme()">Switch to {{ $theme === 'light' ? 'Dark' : 'Light' }} Mode</button>
</div>
<script>
document.addEventListener('livewire:load', function () {
Livewire.on('themeChanged', theme => {
console.log("Theme changed to:", theme); // Debug output
document.documentElement.classList.toggle('dark', theme === 'dark');
});
});
</script>
