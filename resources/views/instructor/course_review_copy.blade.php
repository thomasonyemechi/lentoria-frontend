@extends('layouts.instructor')
@section('page_title', "Course Review | $slug")

@section('page_content')
    <style>
        .vid-container,
        .video-controls,
        .video-timer,
        .options {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vid-container {
            width: 98%;
            user-select: none;
            overflow: hidden;
            max-width: 900px;
            border-radius: 5px;
            background: #000;
            aspect-ratio: 16 / 9;
            position: relative;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .vid-container.fullscreen {
            max-width: 100%;
            width: 100%;
            height: 100vh;
            border-radius: 0px;
        }

        .vid-wrapper {
            position: absolute;
            left: 0;
            right: 0;
            z-index: 1;
            opacity: 0;
            bottom: -15px;
            transition: all 0.08s ease;
        }

        .vid-container.show-controls .vid-wrapper {
            opacity: 1;
            bottom: 0;
            transition: all 0.13s ease;
        }

        .vid-wrapper::before {
            content: "";
            bottom: 0;
            width: 100%;
            z-index: -1;
            position: absolute;
            height: calc(100% + 35px);
            pointer-events: none;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        }

        .video-timeline {
            height: 7px;
            width: 100%;
            cursor: pointer;
        }

        .video-timeline .progress-area {
            height: 3px;
            position: relative;
            background: rgba(255, 255, 255, 0.6);
        }

        .progress-area span {
            position: absolute;
            left: 50%;
            top: -25px;
            font-size: 13px;
            color: #fff;
            pointer-events: none;
            transform: translateX(-50%);
        }

        .progress-area .progress-bar {
            width: 0%;
            height: 100%;
            position: relative;
            background: #2289ff;
        }

        .progress-bar::before {
            content: "";
            right: 0;
            top: 50%;
            height: 13px;
            width: 13px;
            position: absolute;
            border-radius: 50%;
            background: #2289ff;
            transform: translateY(-50%);
        }

        .progress-bar::before,
        .progress-area span {
            display: none;
        }

        .video-timeline:hover .progress-bar::before,
        .video-timeline:hover .progress-area span {
            display: block;
        }

        .vid-wrapper .video-controls {
            padding: 5px 20px 10px;
        }

        .video-controls .options {
            width: 100%;
        }

        .video-controls .options:first-child {
            justify-content: flex-start;
        }

        .video-controls .options:last-child {
            justify-content: flex-end;
        }

        .options button {
            height: 40px;
            width: 40px;
            font-size: 19px;
            border: none;
            cursor: pointer;
            background: none;
            color: #efefef;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .options button :where(i, span) {
            height: 100%;
            width: 100%;
            line-height: 40px;
        }

        .options button:hover :where(i, span) {
            color: #fff;
        }

        .options button:active :where(i, span) {
            transform: scale(0.9);
        }

        .options button span {
            font-size: 23px;
        }

        .options input {
            height: 4px;
            margin-left: 3px;
            max-width: 75px;
            accent-color: #0078FF;
        }

        .options .video-timer {
            color: #efefef;
            margin-left: 15px;
            font-size: 14px;
        }

        .video-timer .vid-separator {
            margin: 0 5px;
            font-size: 16px;
            font-family: "Open sans";
        }

        .playback-content {
            display: flex;
            position: relative;
        }

        .playback-content .speed-options {
            position: absolute;
            list-style: none;
            left: -40px;
            bottom: 40px;
            width: 95px;
            overflow: hidden;
            opacity: 0;
            border-radius: 4px;
            pointer-events: none;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: opacity 0.13s ease;
        }

        .playback-content .speed-options.show {
            opacity: 1;
            pointer-events: auto;
        }

        .speed-options li {
            cursor: pointer;
            color: #000;
            font-size: 14px;
            margin: 2px 0;
            padding: 5px 0 5px 15px;
            transition: all 0.1s ease;
        }

        .speed-options li:where(:first-child, :last-child) {
            margin: 0px;
        }

        .speed-options li:hover {
            background: #dfdfdf;
        }

        .speed-options li.active {
            color: #fff;
            background: #3e97fd;
        }

        .vid-container video {
            width: 100%;
        }

        @media screen and (max-width: 540px) {
            .vid-wrapper .video-controls {
                padding: 3px 10px 7px;
            }

            .options input,
            .progress-area span {
                display: none !important;
            }

            .options button {
                height: 30px;
                width: 30px;
                font-size: 17px;
            }

            .options .video-timer {
                margin-left: 5px;
            }

            .video-timer .separator {
                font-size: 14px;
                margin: 0 2px;
            }

            .options button :where(i, span) {
                line-height: 30px;
            }

            .options button span {
                font-size: 21px;
            }

            .options .video-timer,
            .progress-area span,
            .speed-options li {
                font-size: 12px;
            }

            .playback-content .speed-options {
                width: 75px;
                left: -30px;
                bottom: 30px;
            }

            .speed-options li {
                margin: 1px 0;
                padding: 3px 0 3px 10px;
            }

            .right .pic-in-pic {
                display: none;
            }
        }
    </style>
    <div class="mt-5 course-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Tab content -->
                    <div class="tab-content content" id="course-tabContent">
                        <div class="tab-pane fade show active">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div>
                                    <h3 class=" mb-0  text-truncate-line-2" id="lt">Lecture Title</h3>
                                </div>
                                <div>
                                    <!-- Dropdown -->
                                    <span class="dropdown">
                                        <a href="#" class="ms-2 text-muted" id="dropdownInfo"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-help-circle"></i>
                                        </a>
                                        <span class="dropdown-menu dropdown-menu-lg p-3 dropdown-menu-end"
                                            aria-labelledby="dropdownInfo">
                                            Video for the selected course
                                        </span>
                                    </span>
                                    <!-- Dropdown -->
                                    <span class="dropdown">
                                        <a class="text-muted text-decoration-none" href="#" role="button"
                                            id="shareDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <span class="dropdown-menu dropdown-menu-end" aria-labelledby="shareDropdown1">
                                            <span class="dropdown-header">Share</span>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fab fa-linkedin dropdown-item-icon"></i>Linked In</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <!-- Video -->
                            <div class="embed-responsive position-relative w-100 d-block overflow-hidden p-0"
                                style="height: 600px;">

                                <div class="vid-container show-controls">
                                    <div class="vid-wrapper">
                                        <div class="video-timeline">
                                            <div class="progress-area">
                                                <span>00:00</span>
                                                <div class="progress-bar"></div>
                                            </div>
                                        </div>
                                        <ul class="video-controls">
                                            <li class="options left">
                                                <button class="volume"><i class="fa-solid fa-volume-high"></i></button>
                                                <input type="range" min="0" max="1" step="any">
                                                <div class="video-timer">
                                                    <p class="current-time">00:00</p>
                                                    <p class="vid-separator">/</p>
                                                    <p class="video-duration">00:00</p>
                                                </div>
                                            </li>
                                            <li class="options center">
                                                <button class="skip-backward"><i class="fas fa-backward"></i></button>
                                                <button class="play-pause"><i class="fas fa-play"></i></button>
                                                <button class="skip-forward"><i class="fas fa-forward"></i></button>
                                            </li>
                                            <li class="options right">
                                                <div class="playback-content">
                                                    <button class="playback-speed"><span
                                                            class="material-symbols-rounded">slow_motion_video</span></button>
                                                    <ul class="speed-options">
                                                        <li data-speed="2">2x</li>
                                                        <li data-speed="1.5">1.5x</li>
                                                        <li data-speed="1" class="active">Normal</li>
                                                        <li data-speed="0.75">0.75x</li>
                                                        <li data-speed="0.5">0.5x</li>
                                                    </ul>
                                                </div>
                                                <button class="pic-in-pic"><span
                                                        class="material-icons">picture_in_picture_alt</span></button>
                                                <button class="fullscreen"><i class="mdi mdi-fullscreen"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <video
                                        src="http://127.0.0.1:8000/assets/uploads/DGPBYeblHU6febhBcxb35MqbsHZV7EAmWyJAkKtD.mp4"></video>
                                </div>
                                {{-- <video class="position-absolute top-0 end-0 start-0 end-0 bottom-0 h-100 w-100"
                                    src="http://127.0.0.1:8000/assets/uploads/DGPBYeblHU6febhBcxb35MqbsHZV7EAmWyJAkKtD.mp4"
                                    controls></video> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <div class="card course-sidebar" id="courseAccordion">
        <!-- List group -->
        <ul class="list-group list-group-flush" id="course_list">
            <li class="list-group-item">
                <h4 class="mb-0">Table of Content</h4>
            </li>
            <!-- List group item -->
            <div class="d-flex justify-content-center opacity-50 align-self-lg-center mt-lg-22" id="loader">
                <div class="spinner-grow text-black-100" style="width: 5rem; height: 5rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </ul>
    </div>

    {{-- <script>
        const playPauseBtn = document.querySelector(".play-pause-btn")
        const theaterBtn = document.querySelector(".theater-btn")
        const fullScreenBtn = document.querySelector(".full-screen-btn")
        const miniPlayerBtn = document.querySelector(".mini-player-btn")
        const muteBtn = document.querySelector(".mute-btn")
        const captionsBtn = document.querySelector(".captions-btn")
        const speedBtn = document.querySelector(".speed-btn")
        const currentTimeElem = document.querySelector(".current-time")
        const totalTimeElem = document.querySelector(".total-time")
        const previewImg = document.querySelector(".preview-img")
        const thumbnailImg = document.querySelector(".thumbnail-img")
        const volumeSlider = document.querySelector(".volume-slider")
        const videoContainer = document.querySelector(".video-container")
        const timelineContainer = document.querySelector(".timeline-container")
        const video = document.querySelector("video")

        document.addEventListener("keydown", e => {
            const tagName = document.activeElement.tagName.toLowerCase()

            if (tagName === "input") return

            switch (e.key.toLowerCase()) {
                case " ":
                    if (tagName === "button") return
                case "k":
                    togglePlay()
                    break
                case "f":
                    toggleFullScreenMode()
                    break
                case "t":
                    toggleTheaterMode()
                    break
                case "i":
                    toggleMiniPlayerMode()
                    break
                case "m":
                    toggleMute()
                    break
                case "arrowleft":
                case "j":
                    skip(-5)
                    break
                case "arrowright":
                case "l":
                    skip(5)
                    break
                case "c":
                    toggleCaptions()
                    break
            }
        })

        // Timeline
        timelineContainer.addEventListener("mousemove", handleTimelineUpdate)
        timelineContainer.addEventListener("mousedown", toggleScrubbing)
        document.addEventListener("mouseup", e => {
            if (isScrubbing) toggleScrubbing(e)
        })
        document.addEventListener("mousemove", e => {
            if (isScrubbing) handleTimelineUpdate(e)
        })

        let isScrubbing = false
        let wasPaused

        function toggleScrubbing(e) {
            const rect = timelineContainer.getBoundingClientRect()
            const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width
            isScrubbing = (e.buttons & 1) === 1
            videoContainer.classList.toggle("scrubbing", isScrubbing)
            if (isScrubbing) {
                wasPaused = video.paused
                video.pause()
            } else {
                video.currentTime = percent * video.duration
                if (!wasPaused) video.play()
            }

            handleTimelineUpdate(e)
        }

        function handleTimelineUpdate(e) {
            const rect = timelineContainer.getBoundingClientRect()
            const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width
            const previewImgNumber = Math.max(
                1,
                Math.floor((percent * video.duration) / 10)
            )
            const previewImgSrc = `assets/previewImgs/preview${previewImgNumber}.jpg`
            previewImg.src = previewImgSrc
            timelineContainer.style.setProperty("--preview-position", percent)

            if (isScrubbing) {
                e.preventDefault()
                thumbnailImg.src = previewImgSrc
                timelineContainer.style.setProperty("--progress-position", percent)
            }
        }

        // Playback Speed
        speedBtn.addEventListener("click", changePlaybackSpeed)

        function changePlaybackSpeed() {
            let newPlaybackRate = video.playbackRate + 0.25
            if (newPlaybackRate > 2) newPlaybackRate = 0.25
            video.playbackRate = newPlaybackRate
            speedBtn.textContent = `${newPlaybackRate}x`
        }

        // Captions
        const captions = video.textTracks[0]
        captions.mode = "hidden"

        captionsBtn.addEventListener("click", toggleCaptions)

        function toggleCaptions() {
            const isHidden = captions.mode === "hidden"
            captions.mode = isHidden ? "showing" : "hidden"
            videoContainer.classList.toggle("captions", isHidden)
        }

        // Duration
        video.addEventListener("loadeddata", () => {
            totalTimeElem.textContent = formatDuration(video.duration)
        })

        video.addEventListener("timeupdate", () => {
            currentTimeElem.textContent = formatDuration(video.currentTime)
            const percent = video.currentTime / video.duration
            timelineContainer.style.setProperty("--progress-position", percent)
        })

        const leadingZeroFormatter = new Intl.NumberFormat(undefined, {
            minimumIntegerDigits: 2,
        })

        function formatDuration(time) {
            const seconds = Math.floor(time % 60)
            const minutes = Math.floor(time / 60) % 60
            const hours = Math.floor(time / 3600)
            if (hours === 0) {
                return `${minutes}:${leadingZeroFormatter.format(seconds)}`
            } else {
                return `${hours}:${leadingZeroFormatter.format(minutes)}:${leadingZeroFormatter.format(seconds)}`
            }
        }

        function skip(duration) {
            video.currentTime += duration
        }

        // Volume
        muteBtn.addEventListener("click", toggleMute)
        volumeSlider.addEventListener("input", e => {
            video.volume = e.target.value
            video.muted = e.target.value === 0
        })

        function toggleMute() {
            video.muted = !video.muted
        }

        video.addEventListener("volumechange", () => {
            volumeSlider.value = video.volume
            let volumeLevel
            if (video.muted || video.volume === 0) {
                volumeSlider.value = 0
                volumeLevel = "muted"
            } else if (video.volume >= 0.5) {
                volumeLevel = "high"
            } else {
                volumeLevel = "low"
            }

            videoContainer.dataset.volumeLevel = volumeLevel
        })

        // View Modes
        theaterBtn.addEventListener("click", toggleTheaterMode)
        fullScreenBtn.addEventListener("click", toggleFullScreenMode)
        miniPlayerBtn.addEventListener("click", toggleMiniPlayerMode)

        function toggleTheaterMode() {
            videoContainer.classList.toggle("theater")
        }

        function toggleFullScreenMode() {
            if (document.fullscreenElement == null) {
                videoContainer.requestFullscreen()
            } else {
                document.exitFullscreen()
            }
        }

        function toggleMiniPlayerMode() {
            if (videoContainer.classList.contains("mini-player")) {
                document.exitPictureInPicture()
            } else {
                video.requestPictureInPicture()
            }
        }

        document.addEventListener("fullscreenchange", () => {
            videoContainer.classList.toggle("full-screen", document.fullscreenElement)
        })

        video.addEventListener("enterpictureinpicture", () => {
            videoContainer.classList.add("mini-player")
        })

        video.addEventListener("leavepictureinpicture", () => {
            videoContainer.classList.remove("mini-player")
        })

        // Play/Pause
        playPauseBtn.addEventListener("click", togglePlay)
        video.addEventListener("click", togglePlay)

        function togglePlay() {
            video.paused ? video.play() : video.pause()
        }

        video.addEventListener("play", () => {
            videoContainer.classList.remove("paused")
        })

        video.addEventListener("pause", () => {
            videoContainer.classList.add("paused")
        })
    </script> --}}

    <script>
        const container = document.querySelector(".vid-container"),
            mainVideo = container.querySelector("video"),
            videoTimeline = container.querySelector(".video-timeline"),
            progressBar = container.querySelector(".progress-bar"),
            volumeBtn = container.querySelector(".volume i"),
            volumeSlider = container.querySelector(".left input");
        currentVidTime = container.querySelector(".current-time"),
            videoDuration = container.querySelector(".video-duration"),
            skipBackward = container.querySelector(".skip-backward i"),
            skipForward = container.querySelector(".skip-forward i"),
            playPauseBtn = container.querySelector(".play-pause i"),
            speedBtn = container.querySelector(".playback-speed span"),
            speedOptions = container.querySelector(".speed-options"),
            pipBtn = container.querySelector(".pic-in-pic span"),
            fullScreenBtn = container.querySelector(".fullscreen i");
        let timer;

        const hideControls = () => {
            if (mainVideo.paused) return;
            timer = setTimeout(() => {
                container.classList.remove("show-controls");
            }, 3000);
        }
        hideControls();

        container.addEventListener("mousemove", () => {
            container.classList.add("show-controls");
            clearTimeout(timer);
            hideControls();
        });

        const formatTime = time => {
            let seconds = Math.floor(time % 60),
                minutes = Math.floor(time / 60) % 60,
                hours = Math.floor(time / 3600);

            seconds = seconds < 10 ? `0${seconds}` : seconds;
            minutes = minutes < 10 ? `0${minutes}` : minutes;
            hours = hours < 10 ? `0${hours}` : hours;

            if (hours == 0) {
                return `${minutes}:${seconds}`
            }
            return `${hours}:${minutes}:${seconds}`;
        }

        videoTimeline.addEventListener("mousemove", e => {
            let timelineWidth = videoTimeline.clientWidth;
            let offsetX = e.offsetX;
            let percent = Math.floor((offsetX / timelineWidth) * mainVideo.duration);
            const progressTime = videoTimeline.querySelector("span");
            offsetX = offsetX < 20 ? 20 : (offsetX > timelineWidth - 20) ? timelineWidth - 20 : offsetX;
            progressTime.style.left = `${offsetX}px`;
            progressTime.innerText = formatTime(percent);
        });

        videoTimeline.addEventListener("click", e => {
            let timelineWidth = videoTimeline.clientWidth;
            mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
        });

        mainVideo.addEventListener("timeupdate", e => {
            let {
                currentTime,
                duration
            } = e.target;
            let percent = (currentTime / duration) * 100;
            progressBar.style.width = `${percent}%`;
            currentVidTime.innerText = formatTime(currentTime);
        });

        mainVideo.addEventListener("loadeddata", () => {
            videoDuration.innerText = formatTime(mainVideo.duration);
        });

        const draggableProgressBar = e => {
            let timelineWidth = videoTimeline.clientWidth;
            progressBar.style.width = `${e.offsetX}px`;
            mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
            currentVidTime.innerText = formatTime(mainVideo.currentTime);
        }

        volumeBtn.addEventListener("click", () => {
            if (!volumeBtn.classList.contains("fa-volume-high")) {
                mainVideo.volume = 0.5;
                volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high");
            } else {
                mainVideo.volume = 0.0;
                volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark");
            }
            volumeSlider.value = mainVideo.volume;
        });

        volumeSlider.addEventListener("input", e => {
            mainVideo.volume = e.target.value;
            if (e.target.value == 0) {
                return volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark");
            }
            volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high");
        });

        speedOptions.querySelectorAll("li").forEach(option => {
            option.addEventListener("click", () => {
                mainVideo.playbackRate = option.dataset.speed;
                speedOptions.querySelector(".active").classList.remove("active");
                option.classList.add("active");
            });
        });

        document.addEventListener("click", e => {
            if (e.target.tagName !== "SPAN" || e.target.className !== "material-symbols-rounded") {
                speedOptions.classList.remove("show");
            }
        });

        fullScreenBtn.addEventListener("click", () => {
            container.classList.toggle("fullscreen");
            if (document.fullscreenElement) {
                fullScreenBtn.classList.replace("mdi-fullscreen-exit", "mdi-fullscreen");
                return document.exitFullscreen();
            }
            fullScreenBtn.classList.replace("mdi-fullscreen", "mdi-fullscreen-exit");
            container.requestFullscreen();
        });

        speedBtn.addEventListener("click", () => speedOptions.classList.toggle("show"));
        pipBtn.addEventListener("click", () => mainVideo.requestPictureInPicture());
        skipBackward.addEventListener("click", () => mainVideo.currentTime -= 5);
        skipForward.addEventListener("click", () => mainVideo.currentTime += 5);
        mainVideo.addEventListener("play", () => playPauseBtn.classList.replace("fa-play", "fa-pause"));
        mainVideo.addEventListener("pause", () => playPauseBtn.classList.replace("fa-pause", "fa-play"));
        playPauseBtn.addEventListener("click", () => mainVideo.paused ? mainVideo.play() : mainVideo.pause());
        videoTimeline.addEventListener("mousedown", () => videoTimeline.addEventListener("mousemove",
            draggableProgressBar));
        document.addEventListener("mouseup", () => videoTimeline.removeEventListener("mousemove", draggableProgressBar));
    </script>
    <script>
        $(function() {
            const slug = @js($slug);
            getSections(slug);

            function getSections(slug) {
                $.ajax({
                    method: 'GET',
                    url: api_url + 'admin/sections_lectures/' + slug,
                }).done(res => {
                    console.log(res);
                    $("#loader").remove();
                    res.data.map(sections => {
                        lectures = "";
                        if (sections.lectures.length > 0) {
                            sections.lectures.map(lecs => {
                                lectures += `
                            <a class="mb-2 d-flex justify-content-between align-items-center text-decoration-none" data-vid="${lecs.main_content}" style="cursor: pointer;">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-play  fs-6"></i></span>
                                <span>${lecs.title}</span>
                            </div>
                            <div class="text-truncate">
                                <span>1m 7s</span>
                            </div>
                        </a>
                            `
                            })
                        } else {
                            lectures += `
                        <a class="mb-2 d-flex justify-content-between align-items-center text-decoration-none" style="cursor: pointer;">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-x-circle  fs-6"></i></span>
                                <span>No Lectures Available For This Section</span>
                            </div>
                        </a>
                            `
                        }

                        $("#course_list").append(`
                        <li class="list-group-item">
                <!-- Toggle -->
                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0 cr_con" data-bs-toggle="collapse"
                    href="#course${sections.id}" role="button" aria-expanded="false" aria-controls="#course${sections.id}">
                    <div class="me-auto">
                            ${sections.title}
                    </div>
                    <!-- Chevron -->
                    <span class="chevron-arrow  ms-4">
                        <i class="fe fe-chevron-down fs-4"></i>
                    </span>
                </a>
                <!-- Row -->
                <!-- Collapse -->
                <div class="collapse" id="course${sections.id}" data-bs-parent="#courseAccordion">
                    <div class="py-4 nav" id="course-tab${sections.id}" role="tablist" aria-orientation="vertical"
                        style="display: inherit;">
                        ${lectures}
                    </div>
                </div>
            </li>
                        `)
                    })
                    if (res.data.length > 0) {
                        first = document.querySelector('.cr_con');
                        $(first).attr('aria-expanded', true);
                        next = first.nextElementSibling;
                        next.classList.add('show');
                    }

                    $("#course_list").slimScroll({
                        // width: '500px',
                        height: 'auto',
                        size: '10px',
                        color: 'grey',
                        // alwaysVisible: true,
                        // distance: '20px',
                        railVisible: true,
                        railColor: '#222',
                        railOpacity: 0.3,
                        wheelStep: 10,
                        allowPageScroll: false,
                        disableFadeOut: true
                    });

                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }
        })
    </script>
@endsection
