function toggleMenu(element) {
  const menuItem = element.parentElement;

  // Close other open menus (optional)
  document.querySelectorAll('.menu-item').forEach(item => {
    if (item !== menuItem) item.classList.remove('open');
  });

  menuItem.classList.toggle('open');
}
