$(function () {
    $('aside.left').load('/html/aside_left.html');
    $('aside.right').load('/html/aside_right.html');
    $('footer').load('/html/footer.html');
    $('main').load('/html/start.html');

    $('header').load('/html/header.html', function () {
        $('nav > a').click(function (e) {
            e.preventDefault();
            let keliasIkiFailo = $(this).attr('href');
            $('main').load(keliasIkiFailo);
        });
    });
});