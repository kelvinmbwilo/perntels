			
// Copyright 2006-2014 ClickTale Ltd., US Patent Pending
// PID: 7869
// Generated on: 10/12/2014 4:44:39 AM (UTC 10/12/2014 9:44:39 AM)

var ClickTaleEventBuffer = [];
function BufferedClickTaleEvent(tag) {
    if (typeof ClickTaleEvent == "function") {
        ClickTaleEvent(tag);
    } else {
        ClickTaleEventBuffer.push(tag);
    }
}
setTimeout(function tagBuffer() {
    if (typeof ClickTaleEvent == "function") {
        for (var i = 0; i < ClickTaleEventBuffer.length; i++) {
            ClickTaleEvent(ClickTaleEventBuffer[i]);
        }
    } else {
        setTimeout(tagBuffer, 100);
    }
}, 100);

if (window.om && window.om.page_type) {
    BufferedClickTaleEvent('Page_type = ' + window.om.page_type);
}

