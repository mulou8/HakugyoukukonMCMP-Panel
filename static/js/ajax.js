function ajax(host,method,data,timeout,success,err) {
    var messageBox = $(window.parent.document).find(".container-message");
    var message = $(window.parent.document).find("#message");

    $.ajax({
        url: host,
        async: true,
        processData: false,
        type: method,
        timeout: timeout,
        data: data,

        success:success,

        error: err
    });
}