function formatAnnouncements(num) {
    "use strict";

    if (num == undefined) {
        num = 5;
    }

    $.get("announcements/index.json", function (data) {
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
