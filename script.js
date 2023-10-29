let sidebarItems = document.querySelectorAll('.sidebarItem');

Array.from(sidebarItems, (e) => {
    e.addEventListener('click', () => {
        Array.from(sidebarItems, (ele) => ele.classList.remove('active'));
        e.classList.add('active');
    })

})

