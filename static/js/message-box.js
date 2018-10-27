function messageShow() {
    $(".container-message").fadeIn(400);
    setTimeout(function () {
        $(".container-message").fadeOut(400,"linear");
    },800);
}