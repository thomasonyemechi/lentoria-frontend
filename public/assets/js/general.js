api_url = 'http://api.lentoria.com/api/';
api_root = 'http://api.lentoria.com/';
image_url = 'http://api.lentoria.com/assets/uploads/';
video_url = "https://lentoria.site/watchvideo/";

function validateEmail(email) {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
}
function salat(msg, t = 0) {
    color = (t == 1) ? 'danger' : 'success';
    icon = (t == 1) ? 'ban' : 'checked';
    ret = `
        <div class="alert bg-${color}" style="position:fixed; top:55px; right:15px; z-index:9999999999999999;">
            <i class="icon fe fe-${color}  text-white"> ${msg}  </i>
        </div>
    `;
    alat = $('.littleAlert');
    alat.fadeIn();
    alat.html(ret);

    setTimeout(function() {
        alat.fadeOut();
    }, 5000);
}

function salat2(msg, t = 0) {
    color = (t == 1) ? 'danger' : 'success';
    icon = (t == 1) ? 'ban' : 'checked';
    ret = `
        <div class="alert bg-${color}" style="position:fixed; top:55px; right:15px; z-index:9999999999999999;">
            <i class="icon fe fe-${color}  text-white"> ${msg}  </i>
        </div>
    `;
    alat = $('.littleAlert');
    alat.fadeIn();
    alat.html(ret);

    setTimeout(function() {
        alat.fadeOut();
    }, 20000);
}


function concatError(error) {
    error_text = '';
    if(!error) {
        error_text = 'Error processing request, Pls try again';
    } else if(error.message) {
        error_text = error.message;
    } else if(error.errors) {
        errs = error.errors;
        errs.forEach(err => {
            error_text += err + '<br>'
        });
    } else {
        error_text = 'Error, Processing Request';
    }

    salat(error_text, 1);
    return error_text;
}

function concatError2(error) {
    error_text = '';
    if(!error) {
        error_text = 'Error processing request, Pls try again';
    } else if(error.message) {
        error_text = error.message;
    } else if(error.errors) {
        errs = error.errors;
        errs.forEach(err => {
            error_text += err + '<br>'
        });
    } else {
        error_text = 'Error, Processing Request';
    }

    salat2(error_text, 1);
    return error_text;
}


function btn(selector, btn_text, moment) {
    if(typeof (selector) == 'object') {
        selector = selector;
    } else {
        selector = $(selector);
    }
    if(moment == 'before') {
        selector.attr('disabled', 'disabled');
        selector.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>processing ... </i>`);
    } else if(moment == 'after') {
        selector.removeAttr('disabled');
        selector.html(btn_text);
    }
}

function dropPaginatedPages(links) {
    link_txt = '';
    links.forEach(link => {
        link_txt += ` <li class = "page-item goToList ${(link.active == true) ? 'active' : ''}"data - data = "${JSON.stringify(link)}" >
        <a href = "?page=${link.label}"class = "page-link" > ${link.label} </a></li > `;
    });

    body = ` <div class = "d-flex justify-content-center mt-3 mb-3" >
        <div class = "card-tools" >
        <ul class = "pagination" >${link_txt}</ul> </div> </div>
    `;
    return (links.length > 3) ? body : '';
}

function formatDate(date) {
    let d     = new Date(date),
        month = '' + (d.getMonth() + 1),
        day   = '' + d.getDate(),
        year  = d.getFullYear();
    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
    ];
    return `${day} ${monthNames[month - 1]}, ${year}`;
}

const money = (num) => {
    let numb = new Intl.NumberFormat();
    return numb.format(num);
};

function checkLevel(level) {
    if(level == 1) {
        return 'Beginner';
    } else if(level == 2) {
        return 'Intermediate';
    } else if(level == 3) {
        return 'Advanced';
    } else {
        return 'Super';
    }
}

function levelBar(level) {
    if(level == 1) {
        return `<rect x="3" y="8" width="2" height="6" rx="1" fill="#FFD700"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
        </rect>`;
    } else if(level == 2) {
        return `<rect x="3" y="8" width="2" height="6" rx="1" fill="#FFD700"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#FFD700"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
        </rect>`;
    } else if(level == 3) {
        return `<rect x="3" y="8" width="2" height="6" rx="1" fill="#FFD700"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#FFD700"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#FFD700">
        </rect>`;
    } else {
        return `<rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
        </rect>`;
    }
}

function courseStatus(status) {
    let badge = "";
    if(status == 0) {
        badge += `<span class="badge bg-danger">Not Submitted</span>`
    } else if(status == 5) {
        badge += `<span class="badge bg-info">Pending</span>`
    } else if(status == 1) {
        badge += `<span class="badge bg-success">Published</span>`
    }
    return badge;
}

function stripLower(str) {
    return str.toLowerCase().replace(/ /g, '');
}

let parse = (data) => JSON.parse(data);

function serialNo() {
    body = $("#faq_table tbody");
    check = body.find('tr:first').hasClass('que-tr');
    trlength = $("#faq_table tbody tr").length;
    if(check) {
        return trlength + 1;
    } else {
        return trlength + 1;
    }
}

function randomString(length) {
    chars = '0123456789';
    let result = '';
    for(let i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}

let imageUrl = (image) => image_url + image;

let videoUrl = (video) => video_url + video;

function convertStoMs(seconds) {
    if(seconds !== 0) {
        let minutes = ~~(seconds / 60);
        let extraSeconds = seconds % 60;
        return `${minutes}m${Math.trunc(extraSeconds)}s`
    } else {
        return "0m0s"
    }
}

const debounce = (func, wait) => {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            timeout = null;
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
};

function percentage(num, percentage) {
    return ((percentage / 100) * num);
}

function allAreEmpty(array) {
    return array.every(val => val === "");
}

$.fn.multiply = function(numCopies) {
    var newElements = this.clone();
    for(var i = 1; i < numCopies; i++) {
        newElements = newElements.add(this.clone());
    }
    return newElements;
};

function setSessionWithExpiry(TTL) {
    const now = new Date();
    return now.getTime() + TTL;
}

function getWithExpiry(key) {
    const itemStr = localStorage.getItem(key)
    // if the item doesn't exist, return null
    if(!itemStr) {
        return null
    }
    const item = JSON.parse(itemStr)
    const now = new Date()
    // compare the expiry time of the item with the current time
    if(now.getTime() > item.expiry) {
        // If the item is expired, delete the item from storage
        // and return null
        localStorage.removeItem(key)
        return null
    }
    return item.value
}
