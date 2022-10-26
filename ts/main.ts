const loader = document?.querySelector(".loader");

function loadingPage(): void {
    window.addEventListener("load", (e) => {
        if (loader !== null) {
            loader.classList.add("hidden");
        }
    });
}

function collapsibleSidebar(): void {
    const collapseBtn = document?.querySelector(".collapsible-nav-btn");
    let sidebarNav = document?.querySelector(".page-sections");

    collapseBtn?.addEventListener("click", (e) => {
        sidebarNav?.classList.toggle("unhidden");
        let icons = collapseBtn.querySelectorAll('[class*="collapse-icon"]');

        icons.forEach((icon) => icon.classList.toggle("hidden"));
    });
}

// Loading page
loadingPage();

// Show the collapsible sidebar
if (document.querySelector(".collapsible-nav-btn") !== null) {
    collapsibleSidebar();
}
