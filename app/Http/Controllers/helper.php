<?php

use Laravolt\Avatar\Facade as Avatar;

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
    return [1=>"$user->firstname $user->lastname",2=> (string)$user->email][$detail];
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

function affiliateInfo(){
    $user = user();

    $info = ['name'=>"$user->firstname $user->lastname",'photo'=>userAvatar(),'email'=>$user->email,'id'=>$user->id];

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
                <a href="javascript:void(0)" id="refferral_btn" class="btn btn-primary btn-sm d-none d-md-block">Share Referral Link</a>
            </div>
        </div>
    </div>
</div>';
}
