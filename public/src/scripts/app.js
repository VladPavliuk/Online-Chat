function sendMessage() {

    var nickName = $("#nickname").val();

    var messageText = $("#message").val();
    var messageLength = $("#message").val().length;

    if(messageLength > 0) {
        var url = "/send/" + messageText + "/" + nickName;

        $.post(url, function(data) {

        });
    }
}

$(document).keypress(function(e) {
    if(e.which == 13) {
        sendMessage();
    }
});

function updateMessageList() {

    var max = 0;
    $(".message-item").each(function() {
        max = Math.max(this.id, max);
    });

    var uri = "/update/" + max;
    $.get(uri, function(data) {

        var data = JSON.parse(data);

        data.forEach(function(item) {

            var textBody = formMessageHtml(item);
            $("#messages-list").prepend(textBody);
        });

    });
} setInterval(updateMessageList, 1000);

function loadMoreMessages() {

    var messagesNumber = 3;

    var min = $(".message-item")[0].id;

    $(".message-item").each(function() {
        min = Math.min(this.id, min);
    });

    var uri = 'more-messages/' + messagesNumber + '/' + min;
    $.get(uri, function(response) {

        var messagesArray = JSON.parse(response);

        messagesArray.forEach(function(item) {

            var textBody = formMessageHtml(item);
            $("#messages-list").append(textBody);
        })
    });
}

function formMessageHtml(item) {
    var nickName = item["nick"];
    var messageText = item["message"];
    var id = item["id"];
    var postTime = item["postTime"];

    var textBody =
        '<div class="row">' +
            '<div class="message-item" id="' + id + '">' +
                '<span class="label primary">' + nickName + '</span> ' +
                '<span class="label secondary">' + postTime + '</span>' +
                '<br>' +
                '<p>' + messageText + '</p>' +
                '<hr>' +
            '</div>' +
        '</div>';

    return textBody;
}

function updateMessagesPostTime() {
    var idList = getAllMessagesId();
    var uri = "update-messages-time/";

    $.ajax({
        url: uri,
        data: {
            idList: idList
        },
        cache: false,
        type: "POST",
        success: function(response) {
            var messagesArray = JSON.parse(response);

            messagesArray.forEach(function(item) {
                var id = "#" + item["id"];
                var postTime = item["postTime"];

                $(id + " span:nth-child(2)").text(postTime);

            })
        }
    });
} setInterval(updateMessagesPostTime, 10000);

function getAllMessagesId() {
    var idList = [];

    $(".message-item").each(function() {
       idList.push(this.id);
    });

    return idList;
}