$('*').click(
    function (e) {
        let tagName = e.target.nodeName;
        let tags = $(tagName);
        let tagCount = tags.length;
        $('#kasas').text('Paspaudete ant ' + tagName + ' tago. Tokiu elementu yra: ' + tagCount)
        tags.css('background-color', 'yellow');
    }
);