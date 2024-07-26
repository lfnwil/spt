document.getElementById('toggleButton').addEventListener('click', function() {
    var collapseElement = document.getElementById('formCollapse');
    if (collapseElement.style.display === 'none' || collapseElement.style.display === '') {
        collapseElement.style.display = 'block';
    } else {
        collapseElement.style.display = 'none';
    }
    this.style.display = 'none';
});
    