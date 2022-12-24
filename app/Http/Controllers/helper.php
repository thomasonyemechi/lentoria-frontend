<?php

use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Support\Facades\Cookie;


function access_token()
{
    return session()->get('info')['access_token'] ?? '';
}

function user()
{
    return json_decode(json_encode(session()->get('info')['data']));
}

function userDetail($detail)
{
    $user = user();
    if ($detail == 1) {
        return $user->firstname . ' ' . $user->lastname;
    }

    if ($detail == 2) {
        return $user->email;
    }
}


function names($type)
{
    $user = user();
    if ($type == 1) {
        return $user->firstname;
    }

    if ($type == 2) {
        return $user->lastname;
    }
}

function userAvatar()
{
    return Avatar::create(userDetail(1))->toBase64();
}

function createAvatar($firstname, $lastname)
{
    return Avatar::create($firstname . " " . $lastname)->toBase64();
}


function instructorInfo(): string
{
    $user = user();
    $info = [
        'name' => $user->firstname . ' ' . $user->lastname,
        'photo' => userAvatar(),
        'email' => $user->email,
        'id' => $user->id,
    ];

    return '<div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="pt-16 rounded-top-md"
            style="background: url(../../assets/images/background/profile-bg.jpg) no-repeat; background-size: cover;">
        </div>
        <div
            class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
            <input type="hidden" id="user_id" value="' . $info['id'] . '"/>
            <div class="d-flex align-items-center">
                <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                    <img src="' . $info['photo'] . '"
                        class="avatar-xxl rounded-circle border border-4 border-white position-relative"
                        alt="" />
                </div>
                <div class="lh-1">
                    <h4 class="mb-0">' . $info['name'] . '</h4>
                    <p class="mb-0 d-block">' . $info['email'] . '</p>
                </div>
            </div>
            <div>
                <a href="/instructor/add_course" class="btn btn-primary btn-sm d-none d-md-block">Create New Course</a>
            </div>
        </div>
    </div>
</div>';
}


function getDeviceId()
{
    $device_id = Cookie::get('device_id');
    if (!$device_id) {
        $device_id = uniqid('len_', false).'_'.time();
        Cookie::queue('device_id', $device_id, (525960 * 5));
    }
    $device_id = Cookie::get('device_id');
    return $device_id;
}


function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version = "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } elseif (preg_match('/Firefox/i', $u_agent)) {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    } elseif (preg_match('/OPR/i', $u_agent)) {
        $bname = 'Opera';
        $ub = "Opera";
    } elseif (preg_match('/Chrome/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    } elseif (preg_match('/Safari/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
        $bname = 'Apple Safari';
        $ub = "Safari";
    } elseif (preg_match('/Netscape/i', $u_agent)) {
        $bname = 'Netscape';
        $ub = "Netscape";
    } elseif (preg_match('/Edge/i', $u_agent)) {
        $bname = 'Edge';
        $ub = "Edge";
    } elseif (preg_match('/Trident/i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } else {
        $ub = 'Unknown browser';
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
            $version = $matches['version'][0];
        } else {
            @$version = $matches['version'][1];
        }
    } else {
        $version = $matches['version'][0];
    }

    // check if we have a number
    if ($version == null || $version == "") {
        $version = "?";
    }

    return array(
        'user_agent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern,
        'system_id' => getDeviceId()
    );
}