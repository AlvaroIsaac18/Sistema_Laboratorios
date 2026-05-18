    </div>
</div>
</div>
<script src="asset/js/bootstrap.bundle.min.js"></script>
<script>
    const sidebarCollapse = document.getElementById('sidebarCollapse');
    const sidebar = document.getElementById('sidebar');
    const contentArea = document.querySelector('.content-area');
    sidebarCollapse.addEventListener('click', (e) => {
        e.stopPropagation();
        if (window.innerWidth <= 768) {
            sidebar.classList.toggle('active');
        } else {
            sidebar.classList.toggle('collapsed');
        }
    });
    document.addEventListener('click', (event) => {
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickOnButton = sidebarCollapse.contains(event.target);
        if (!isClickInsideSidebar && !isClickOnButton && window.innerWidth <= 768) {
            sidebar.classList.remove('active');
        }
    });
</script>
</body>
</html>
