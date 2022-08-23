<?php

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
    } else if ($detail == 2) {
        return $user->email;
    }
}


function names($type)
{
    $user = user();
    if ($type == 1) {
        return $user->firstname;
    } elseif ($type == 2) {
        return $user->lastname;
    }
}


function instructorInfo()
{
    $user = user();
    $info = ['name' => $user->firstname . ' ' . $user->lastname, 'photo' => 'assets/images/avatar/avatar-1.jpg', 'email' => $user->email, 'id' => $user->id];

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
                    <img src="../../' . $info['photo'] . '"
                        class="avatar-xl rounded-circle border border-4 border-white position-relative"
                        alt="" />
                </div>
                <div class="lh-1">
                    <h2 class="mb-0">' . $info['name'] . '</h2>
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