api_url = 'http://lentoria-backend.test/api/';
api_root = 'http://lentoria-backend.test/';
image_url = 'http://lentoria-backend.test/assets/uploads/';
video_url = "https://lentoria.site/watchvideo/";
const app_url = `${location.protocol}//${location.host}`;

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

    setTimeout(function () {
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

    setTimeout(function () {
        alat.fadeOut();
    }, 20000);
}


function concatError(error) {
    error_text = '';
    if (!error) {
        error_text = 'Error processing request, Pls try again';
    } else if (error.message) {
        error_text = error.message;
    } else if (error.errors) {
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
    if (!error) {
        error_text = 'Error processing request, Pls try again';
    } else if (error.message) {
        error_text = error.message;
    } else if (error.errors) {
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
    if (typeof (selector) == 'object') {
        selector = selector;
    } else {
        selector = $(selector);
    }
    if (moment == 'before') {
        selector.attr('disabled', 'disabled');
        selector.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>processing ... </i>`);
    } else if (moment == 'after') {
        selector.removeAttr('disabled');
        selector.html(btn_text);
    }
}

function generatePagination(pagination) {
    let nav = `
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item ${pagination.prev_page_url === null ? 'disabled' : ''}">
          <a class="page-link pagination-link" href="${pagination.prev_page_url || '#'}" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>`;

    for (let i = 1; i <= pagination.last_page; i++) {
        nav += `
      <li class="page-item ${pagination.current_page === i ? 'active' : ''}">
        <a class="page-link pagination-link" href="${pagination.path}?page=${i}">${i}</a>
      </li>`;
    }

    nav += `
        <li class="page-item ${pagination.next_page_url === null ? 'disabled' : ''}">
          <a class="page-link pagination-link" href="${pagination.next_page_url || '#'}" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>`;

    return nav;
}

function extractPaginationData(data) {
    const {
        current_page,
        first_page_url,
        from,
        last_page,
        last_page_url,
        links,
        next_page_url,
        path,
        per_page,
        prev_page_url,
        to
    } = data.data;
    return {
        current_page,
        first_page_url,
        from,
        last_page,
        last_page_url,
        links,
        next_page_url,
        path,
        per_page,
        prev_page_url,
        to
    };
}

function formatDate(date) {
    let d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
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

const naira = num => {
    let numb = new Intl.NumberFormat('en-NG', {
        style: 'currency',
        currency: 'NGN'
    });

    return numb.format(num || 0);
}

const levels = {
    1: "Beginner",
    2: "Intermediate",
    3: "Advanced"
}

const checkLevel = (level) => levels[level] || 'level'


const bars = {
    1: `<rect x="3" y="8" width="2" height="6" rx="1" fill="#FFD700"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
        </rect>`,
    2: `<rect x="3" y="8" width="2" height="6" rx="1" fill="#FFD700"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#FFD700"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
        </rect>`,
    3: `<rect x="3" y="8" width="2" height="6" rx="1" fill="#FFD700"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#FFD700"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#FFD700">
        </rect>`,
}

const levelBar = (level) => bars[level] || `<rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9"></rect>
        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
        </rect>`


const statuses = {
    0: `<span class="badge bg-danger">Not Submitted</span>`,
    5: `<span class="badge bg-info">Pending</span>`,
    1: `<span class="badge bg-success">Published</span>`
}

const courseStatus = (status) => statuses[status] || "";

function stripLower(str) {
    return str.toLowerCase().replace(/ /g, '');
}

let parse = (data) => JSON.parse(data);

function serialNo() {
    body = $("#faq_table tbody");
    check = body.find('tr:first').hasClass('que-tr');
    trlength = $("#faq_table tbody tr").length;
    if (check) {
        return trlength + 1;
    } else {
        return trlength + 1;
    }
}

function randomString(length) {
    chars = '0123456789';
    let result = '';
    for (let i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}

let imageUrl = (image) => image_url + image;

let videoUrl = (video) => video_url + video;

function convertStoMs(seconds) {
    if (seconds !== 0) {
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

const allAreEmpty = array => array.every(val => val === "");

$.fn.multiply = function (numCopies) {
    var newElements = this.clone();
    for (var i = 1; i < numCopies; i++) {
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
    if (!itemStr) {
        return null
    }
    const item = JSON.parse(itemStr)
    const now = new Date()
    // compare the expiry time of the item with the current time
    if (now.getTime() > item.expiry) {
        // If the item is expired, delete the item from storage
        // and return null
        localStorage.removeItem(key)
        return null
    }
    return item.value
}

async function shareApi(data) {
    try {
        return await navigator.share(data);
    } catch (err) {
        throw new Error(err);
    }
}

function getTypes() {
    const params = new URL(document.location).searchParams;
    return params.get('type');
}

function searchItems(jsonData, keyword) {
    const results = [];

    jsonData.data.forEach(item => {
        const {title, description} = item;
        if (title.toLowerCase().includes(keyword.toLowerCase()) || description.toLowerCase().includes(keyword.toLowerCase())) {
            results.push(item);
        }
    });

    return results;
}
