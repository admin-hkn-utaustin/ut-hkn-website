function formatAnnouncements(num) {
    "use strict";

    if (num == undefined) {
        num = 6;
    }

    $.get("announcements/index.json", function (data, status, xhr) {
        if (data === undefined) {
            console.log("Could not read data from 'announcements/index.json'");
            return false;
        }

        var ct = xhr.getResponseHeader("content-type") || "";
        if (!(ct.indexOf('json') > -1)) {
            data = JSON.parse(data);
        }

        data.sort(function(a, b) {
          return new Date(b.date) - new Date(a.date);
        })

        data.forEach(function (entry, index) {
          if (num !== undefined && index >= num) {
            return;
          }

          $.get('announcements/' + entry.html, function (content) {
              entry.content = content;
              var text = Handlebars.templates.announcement(entry);
              $('#announcements').append(text);
          });
        });
    });
}
