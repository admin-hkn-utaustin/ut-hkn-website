function formatAnnouncements(num) {
    "use strict";

    if (num == undefined) {
        num = 5;
    }

    $.get("announcements/index.json", function (data, status, xhr) {
        if (data === undefined) {
            console.log("Could not read data from 'announcements/index.json'");
            return false;
        }

        var ct = xhr.getResponseHeader("content-type") || "";
        if (!ct.indexOf('json') > -1) {
            data = JSON.parse(data);
        }

        data.some(function (entry, index) {
            $.get('announcements/' + entry.html, function (content) {
                entry.content = content;
                var text = Handlebars.templates.announcement(entry);
                $('#announcements').append(text);
            });

            if (index >= num - 1) {
                return true;
            }
        });
    });
}
