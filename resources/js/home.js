
const TopMenu = document.getElementById('top-menu')
const TopMenuIcon = document.getElementById('top-menu-icon')

document.addEventListener('click', (e) => {
    if (TopMenuIcon.contains(e.target)) {
        TopMenu.classList.toggle('top-menu-expanded')
        TopMenu.classList.toggle('hidden')

    } else {
        if (TopMenu.classList.contains('top-menu-expanded')) {
            TopMenu.classlist.remove('top-menu-expanded');
            TopMenu.classlist.add('hidden');

        }
    }
})