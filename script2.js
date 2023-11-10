function toggleContent(id) {
    var content = document.getElementById(id);
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        showCurriculo();
    } else {
        content.style.display = 'none';
    }
}

    
    document.addEventListener('click', function(event) {
        var content = document.getElementById('myModal'); // Replace 'your-content-id' with the actual ID of your content
    
        // Check if the click target is not within the content
        if (!content.contains(event.target)) {
            // Clicked outside the content, hide it
            content.style.display = 'none';
        }
    );


